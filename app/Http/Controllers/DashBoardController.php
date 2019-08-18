<?php

namespace App\Http\Controllers;

use App\Certify;
use App\User;
use Illuminate\Http\Request;
use DB;
use Intervention\Image\Facades\Image;
use App\Participant;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use App\Notifications\CertificateNotification;
use Notification;

class DashBoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function verify_location(Request $request)
    {
        $id=$request->id;
        $user=Participant::find($id);
        if(is_null($user)|| !is_null($user->certificate))
            return back()->withInput();

    }

    public function get_users()
    {
        $egypt=array(' ','القاهرة','الجيزة','الشرقية','الدقهلية','البحيرة','المنيا','القليوبية','الاسكندرية','الغربية','سوهاج','أسيوط','المنوفية','الفيوم','قنا','بني سويف','كفرالشيخ','أسوان',
            'دمياط','الإسماعيلية','الأقصر','بورسعيد','السويس','مطروح','شمال سيناء','البحرالأحمر','الوادى الجديد','جنوب سيناء');
        $gender=array('ذكر','انثي');
        $status=array('اعزب','متزوج');
        $degree=array('ثانوي','دبلوم','جامعي','ماجيستر','دكتوراه');
        $type=array('متدرب','متطوع');
        $users = DB::table('users')
            ->join('participants', 'users.id', '=', 'participants.user_id')
//            ->where('users.data', '>', 100)
            ->orderBy('users.created_at', 'desc')
            ->get();

        foreach ($users as $user)
        {
            $user->state=$egypt[$user->state];
            $user->gender=$gender[$user->gender];
            $user->status=$status[$user->status];
            $user->degree=$degree[$user->degree];
            $user->type=$type[$user->type];
            if(is_null($user->certificate))
                $user->certificate='لاتوجد';
            if(is_null($user->email_verified_at))
                $user->email_verified_at='غير مفعل';
            else
                $user->email_verified_at='مفعل';
        }
        return view('users')->with('users',$users);
    }
    private function getToken($length, $seed){
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "0123456789";

        mt_srand($seed);      // Call once. Good since $application_id is unique.

        for($i=0;$i<$length;$i++){
            $token .= $codeAlphabet[mt_rand(0,strlen($codeAlphabet)-1)];
        }
        return $token;
    }
    public function certify(Request $request)
    {

        $id=$request->id;
        $user=Participant::find($id);
        if(is_null($user)|| !is_null($user->certificate))
            return back()->withInput();


        do
        {
            $token = $this->getToken(8, $id);
            $hashed = 'EN'. $token . substr(strftime("%Y", time()),2);
            $c = Certify::find($hashed);
        }
        while(!is_null($c));
        $name=$user->english_first_name.' '.$user->english_last_name;
        $this->makeimage($name,$request->root()."/certificate/",$hashed);
//        $user->certificate=$hashed;
//        $user->save();
//
//
//        $certificate=new Certify;
//        $certificate->link=$hashed;
//        $certificate->user_id=$id;
//        $certificate->save();


        $users=User::find($id);

        $img='img/'.$hashed.'.jpg';

        Notification::send($users, new CertificateNotification($img));
        return redirect()->route('users');
    }
    public function makeimage($text,$url,$link)
    {

        $img = Image::make(public_path('img/vision.jpg'));
        $img->text($text, 100, 157, function($font) {
            $font->file(public_path('fonts/FuturaLT-Bold.woff'));
            $font->size(28);
            $font->color('#FFFFFF');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->text($url.$link, 100, 257, function($font) {
            $font->file(public_path('fonts/FuturaLT-Bold.woff'));
            $font->size(10);
            $font->color('#FFFFFF');
            $font->valign('bottom');
            $font->angle(0);
        });
        $img->save(public_path('img/'.$link.'.jpg'));
    }
}

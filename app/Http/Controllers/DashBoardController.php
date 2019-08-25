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
use App\Note;

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
        $type2=array('','متبرع لدعم المبادرة','متطوع لدعم المبادرة','راعى لدعم المبادرة');
        $class=array('','موقع الكتروني','شركة','جمعية','مؤسسة','مدرسة','معهد','جامعة','نادى','نقابة');
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
            //$user->type=$type[$user->type];
            if(is_null($user->certificate))
                $user->certificate='لاتوجد';
            if(is_null($user->email_verified_at))
                $user->email_verified_at='غير مفعل';
            else
                $user->email_verified_at='مفعل';
        }
        $users2 = DB::table('users')
            ->join('supporters', 'users.id', '=', 'supporters.user_id')
//            ->where('users.data', '>', 100)
            ->orderBy('users.created_at', 'desc')
            ->get();

        foreach ($users2 as $user)
        {
            $user->state = $egypt[$user->state];
            $user->type = $type2[$user->type];
            $user->class = $class[$user->classification];
            if(is_null($user->certificate))
                $user->certificate='لاتوجد';
            if(is_null($user->email_verified_at))
                $user->email_verified_at='غير مفعل';
            else
                $user->email_verified_at='مفعل';
        }
        return view('dashboard')->with('participants',$users)->with('supporters',$users2);
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

    public function create($token)
    {

        $val="";
        $comb=1;
        $token2="";
        for($i=0;$i<10-strlen($token);++$i)
            $token2.='0';
        $token2.=$token;
        for($i=strlen($token2)-1;$i>-1 ;--$i)
        {

            $c=ord($token2[$i])+$comb;
            $comb=0;
            if ($c==58)
                $c=65;

            if ($c==91)
            {
                $c = 48;
                $comb = 1;
            }
            $val.=chr($c);
        }

        $char=strrev($val);
        $first=0;
        for($i=0;$i<strlen($char) ;++$i)
        {

            if($char[$i] !='0')
                break;
            $first++;
        }

        $out="";
        for ($i=$first;$i<strlen($char);$i++)
            $out.=$char[$i];

        return $out;
    }
    public function notify(Request $request)
    {
        if (is_null($request->message))
            return ;
        $ids=$request->notify;
        if(!is_null($ids))
            foreach ($ids as $id)
            {
                $user = User::find($id);
                if (is_null($user))
                    continue;
                $note= new Note();
                $note->user_id=$id;
                $note->message=$request->message;
                $note->save();
            }
    }
    public function certify(Request $request)
    {
        $this->notify($request);
        $ids=$request->certify;
        $hashed=User::max('certificate');
        if(!is_null($ids))
            foreach ($ids as $id)
            {
                print ($id);
                $user = User::find($id);
                if (is_null($user) || !is_null($user->certificate))
                    continue;
                $hashed=$this->create($hashed);
                $name = $user->english_first_name . ' ' . $user->english_last_name;
                $this->makeimage($name, $request->root() . "/certificate/", $hashed);
                $user->certificate = $hashed;
                $user->save();
            }

        return redirect()->route('dashboard');
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

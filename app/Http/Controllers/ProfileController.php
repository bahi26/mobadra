<?php

namespace App\Http\Controllers;

use App\User_Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Participant;
use App\Supporter;
use App\Note;
class ProfileController extends Controller
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
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        $egypt=array(' ','القاهرة','الجيزة','الشرقية','الدقهلية','البحيرة','المنيا','القليوبية','الاسكندرية','الغربية','سوهاج','أسيوط','المنوفية','الفيوم','قنا','بني سويف','كفرالشيخ','أسوان',
            'دمياط','الإسماعيلية','الأقصر','بورسعيد','السويس','مطروح','شمال سيناء','البحرالأحمر','الوادى الجديد','جنوب سيناء');
        $type=array('متدرب','متطوع');
        $type2=array('','متبرع لدعم المبادرة','متطوع لدعم المبادرة','راعى لدعم المبادرة');
        $user = Auth::user();
        $participant=Participant::find($user->id);
        $notes=Note::where('user_id',$user->id)->orderBy('created_At', 'desc')->get();;
        $loc=User_Location::where('user_id',$user->id);
        $sup=Supporter::find($user->id);
        $user->name='';
        $user->eng_name='';
        $user->state='';
        $user->type='';
        $user->city='';
        $user->date='';
        if(!is_null($participant))
        {
            $user->name = $participant->arabic_first_name.' '.$participant->arabic_second_name.' '.$participant->arabic_last_name;
            $user->eng_name=$participant->english_first_name.' '.$participant->english_second_name.' '.$participant->english_last_name;
            $user->state=$egypt[$participant->state];
           // $user->type=$type[$participant->type];
            $user->city=$participant->city;
            $user->date=$participant->birth_day.'/'.$participant->birth_month.'/'.$participant->birth_year;
        }
        if(!is_null($sup))
        {
            $user->name = $sup->name;
            $user->eng_name=$sup->name;
            $user->state=$egypt[$sup->state];
            $user->type=$type2[$sup->type];
            $user->city=$sup->city;
        }
        return view('profile')->with('user',$user)->with('notes',$notes);
    }
}

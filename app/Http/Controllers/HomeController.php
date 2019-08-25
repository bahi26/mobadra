<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $egypt=array(' ','القاهرة','الجيزة','الشرقية','الدقهلية','البحيرة','المنيا','القليوبية','الاسكندرية','الغربية','سوهاج','أسيوط','المنوفية','الفيوم','قنا','بني سويف','كفرالشيخ','أسوان',
            'دمياط','الإسماعيلية','الأقصر','بورسعيد','السويس','مطروح','شمال سيناء','البحرالأحمر','الوادى الجديد','جنوب سيناء');
        $type=array('متدرب','متطوع');
        $type2=array('','موقع الكتروني','شركة','جمعية','مؤسسة','مدرسة','معهد','جامعة','متبرع لدعم','المبادرة','راعى لدعم المبادرة');

        $participants=DB::table('users')-> join('participants', 'users.id', '=', 'participants.user_id')
            ->join('gmaps_geocache','users.id','=','gmaps_geocache.user_id')->where('gmaps_geocache.location_status','=',1)->get();
        $supporters=DB::table('users')-> join('supporters', 'users.id', '=', 'supporters.user_id')
            ->join('gmaps_geocache','users.id','=','gmaps_geocache.user_id')->where('gmaps_geocache.location_status','=',1)->get();
        foreach ($participants as $participant)
        {
            $participant->latitude=floatval($participant->latitude);
            $participant->longitude=floatval($participant->longitude);
            $participant->name=$participant->arabic_first_name.' '.$participant->arabic_second_name.' '.$participant->arabic_last_name;
            $participant->second=$participant->english_first_name.' '.$participant->english_second_name.' '.$participant->english_last_name;
            $participant->state=$egypt[$participant->state];
           // $participant->type=$type[$participant->type];
        }
        foreach ($supporters as $supporter)
        {
            $supporter->latitude=floatval($supporter->latitude);
            $supporter->longitude=floatval($supporter->longitude);
            $supporter->state=$egypt[$supporter->state];
            $supporter->type=$type2[$supporter->type];
        }


        return view('index')->with('participants',$participants)->with('supporters',$supporters);
    }
}

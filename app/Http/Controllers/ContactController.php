<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Mail;
use App\Mail\NewUserNotification;
use App\Mail\Inquery;
class ContactController extends Controller
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
    public function contact(Request $request)
    {
        print_r($request->all());
        $this->create_email($request->all());
    }
    public function create_email($data)
    {

        $mytime = Carbon::now();
        echo $mytime->toDateTimeString();
        $message = "
                    <html>
                    <head>
                    <title>Osrmntja</title>
                    </head>
                    <body>
                    <h2> ".$data['msgHeader']." </h2>
                    <br>
                    <h4>Sent at: ".$mytime."</h3><br>
                    <h3>name: ".$data['name']."</h3><br>
                    <h3>Email: ".$data['email']."</h3><br>
                    <h3>mobile: ".$data['phone']."</h3><br>
                    <div>".$data['msgbody']."</div>
                    
                    <br>
                    </body>
                    </html>";
        $data['message']=$message;

        Mail::send('mail', ['data'=>$data], function ($m ) {

            $m->to('bahi.ali26196@gmail.com','mobadra')->subject('custom');


        });
    }

}

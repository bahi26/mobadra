<?php

namespace App\Http\Controllers;

use App\Certify;
use Illuminate\Http\Request;
use App\Mail\NewUserNotification;
use Intervention\Image\Facades\Image;


class CertificateController extends Controller
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
    public function get_certificate($link)
    {

        $img=public_path('img/'.$link.'.jpg');
        return response()->file($img);
    }

}

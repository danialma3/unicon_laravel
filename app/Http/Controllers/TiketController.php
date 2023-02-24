<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TiketController extends Controller
{
    public function tiket()
    {
        // Email
        $data["email"] = "bb457640@gmail.com";
        $data["title"] = "dari dani";
        $data["body"] = "This is Demo";

        // //Generates a QrCode with an image centered in the middle.
        // QrCode::format('png')->merge('path-to-image.png')->generate();



        Mail::send('email_template', $data, function ($message) use ($data) {
            $message->to($data["email"], $data["email"])
                ->subject($data["title"]);
        });
        // return view('assets.tiket.form_tiket');
    }
}

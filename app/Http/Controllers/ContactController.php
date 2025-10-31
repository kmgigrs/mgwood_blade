<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ContactController extends Controller
{
    public function save(Request $request)
    {
        $validated = $request->validate([
            "firstName" => "required",
            "lastName" => "required",
            "phoneNum" => "required",
            "email" => "required",
            "message" => "required",
        ]);

        // Function to get the client IP address
        function get_client_ip()
        {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if (isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if (isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }


        $contact = new Contact();
        $contact->firstname = $request->firstName;
        $contact->lastname = $request->lastName;
        $contact->email = $request->email;
        $contact->phonenum = $request->phoneNum;
        $contact->umessage = $request->message;
        $contact->ipaddress = get_client_ip();

        $contact->save();

        /**
         * TELEGRAM */
        $balasan = urlencode(
            "---CONTACT CUST MGWOOD WEB---\nNama : " .
                $request->firstName . $request->lastName .
                "\nNo.Telp : " .
                $request->phoneNum . "\nEmail : " .
                $request->email . "\nMessage : " .
                $request->message . "\nIP : " .
                get_client_ip() .
                ""
        );

        $botToken = "1321727106:AAF7wvPLytylRIqMoZxLxLloQ17Y23GvBVA"; #bot kmgi
        $website = "https://api.telegram.org/bot" . $botToken;

        // SEND MESSAGES TELEGRAM
        $chatId = [
            "708767579",
            "857188888",
            "1147980322",
            "1076243093"
        ];
        foreach ($chatId as $id) {
            file_get_contents(
                $website . "/sendmessage?chat_id=" . $id . "&text=" . $balasan
            );
        }

        /**
         * CONGRATULATIONS */
        $notifikasi = [
            "pesan" => "We will contact you!",
            "alert" => "success",
        ];
        return Redirect::to("/")->with($notifikasi);
    }
}

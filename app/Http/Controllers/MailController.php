<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Areti',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('ingenieria@simbiotica.com.co')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }

    public function return_view(Request $request){

        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions



        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.zoho.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'no-reply@flowbii.com';   //  sender username
            $mail->Password = '*@noreply2022';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465

            $mail->setFrom('no-reply@flowbii.com', 'Areti');
            $mail->addAddress('ingenieria@simbiotica.com.co');



            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->CharSet = 'UTF-8';

            $code="XXXXXX";
            $random_code="YYYYYYYYYYY";
            $first_name="John";
            $last_name="Doe";

            $mailData = [
                'title' => $code.' Verification Code from Areti Onboarding ',
                'body' => 'Your Verification code is: '.$code,
                'code'=>$code,
                'random_code'=>$random_code,
                'full_name'=>$first_name." ".$last_name
            ];

            $mail->Subject = $mailData['title'];
            $mail->msgHTML(view('emails.html.demoMail', $mailData));

            $mail->send();
            dd("enviado");

        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }


        
    }
}

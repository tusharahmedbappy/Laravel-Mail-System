 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\SendMail;
class mailController extends Controller{
    

    public function mail(){
        return view('mail.user_form');
    }

    public function mailSend(Request $request){

        $subject    =  $request->subject;
        $email      =  $request->email;
        $message    =  $request->message;

        Mail::to($email)->send(new SendMail($subject,$message));
        Session::flash('message');
        return back();
        
    }

}

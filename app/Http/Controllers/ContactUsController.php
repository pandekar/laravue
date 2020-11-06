<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Mail;

class ContactUsController extends Controller
{
    //
    public function index(){

        $pages = Page::get();

        return view('website.contact', ['pages' => $pages]);

    }

    public function sendMessage(Request $request){

        $pages = Page::get();
        
        $datas = $request->all();
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Mail::send('mail.contactus', ['nameMail' => $datas['name'], 'messageMail' => $datas['message']], function($mail){
            $mail->from('laravue-noreply@mail.com', 'laravue');

            $mail->to('myself@mail.com');
        });

        return view('website.contact', ['pages' => $pages])->with('successMessage', 'your message has been sent!');
        
        // dd($request->all());    

    }

    public function sendMessageAjax(Request $request){

        $datas = $request->all();

        // dd($datas);

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Mail::send('mail.contactus', ['nameMail' => $datas['name'], 'messageMail' => $datas['message']], function($mail){
            $mail->from('laravue-noreply@mail.com', 'laravue');

            $mail->to('myself@mail.com');
        });

        return [
            'success' => true,
            'message' => 'thank you1',
        ];
    }
}

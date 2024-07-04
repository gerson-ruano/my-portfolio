<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function storeContact(Request $request)
    {

        $request->validate(
        [
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' =>  'required|max:1200',
        ]);

        $input = $request->all();

        Contact::create($input);

        Mail::send('contact', array(
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from('toge619@gmail.com', 'Gerson Ruano');
            $message->to($request->email)
            ->subject($request->get('subject'));
        });

        return redirect()->route('index')->with(
            [
                'type' => 'green',
                'msg' =>'El formulario se ha enviado correctamente, en breve recibirás una respuesta'
            ]);


    }
}

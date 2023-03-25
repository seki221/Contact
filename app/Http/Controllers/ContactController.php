<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactSendMail;


class ContactController extends Controller
{
    public function index()
    {
        return view('top', ['txt' => 'フォームを入力']);
    }


    public function post(ContactRequest $request)
    {
        return view('top', ['txt' => '正しい入力です']);
    }
    public function confirm(Request $request)
    {
        $contacts = $request->all();
        
        if (!$contacts) {
            return redirect()->route('top');
        }
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'email' => ['required', 'email'],
            'address' => ['required', 'string'],
            'postal_code' => ['required', 'between:7,8'],
            'messgae' => 'max:255'
        ]);
        return view('confirm', [
            'contacts' => $contacts,
        ]);
    }

    public function send(Request $request)
    {
        $contacts = $request->all();
        if(!$contacts){
            return redirect()->route('index');
        }
        \Mail::to($contacts['email'])->send(new ContactSendMail($contacts);
        $request->session()->regenerateToken(); //2回メール送信を防ぐため
        return view('thanks');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactSendMail;
use App\Models\Contact;


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
        $inputs = $request->all();
        
        if (!$inputs) {
            return redirect()->route('top');
        }
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'email' => ['required', ],
            'postcode' => ['required|max:8', ],
            'address' => ['required', 'string'],
            'opinion' =>['required', 'string', 'max:255'],
        ]);
        return view('confirm', [
            'inputs' => $inputs,
        ]);
    }
    public function send(Request $request)
    {return view('thanks');
    }


    // public function send(Request $request)
    // {
    //     $contacts = $request->all();
    //     if(!$contacts){
    //         return redirect()->route('index');
    //     }
    //     \Mail::to($input['mail'])->send(new ContactSendMail($input);
    //     $request->session()->regenerateToken(); //2回メール送信を防ぐため
    //     return view('thanks');
    // }


    public function main()
    {
        $contacts = Contact::simplepaginate(4);
        return view('Management.main', ['contacts' => $contacts]);
    }
}

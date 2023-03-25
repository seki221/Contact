<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('top', ['txt' => 'フォームを入力']);
    }


    public function post(ContactRequest $request)
    {
        return view('index', ['txt' => '正しい入力です']);
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
            'address' => ['required', 'address'],
            'postal_code' => ['required', 'numeric', 'digits_between:8,'],
            'messgae' => 'max:255'
        ]);
        return view('confirm', [
            'contacs' => $contacts,
        ]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();
        
        return view('thanks');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('top');
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();
        if (!$inputs) {
            return redirect()->route('top');
        }
        $request->validate([
            'name' => 'required',
            'cname' => 'required',
            'tel' => ['required', 'numeric', 'digits_between:8,11'],
            'email' => ['required', 'email', 'confirmed'],
            'messgae' => 'max:255'
        ]);
        return view('confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();
        
        return view('thanks');
    }
}

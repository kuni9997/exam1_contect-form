<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\customerRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirmation(customerRequest $request)
    {
        $contact = $request->only(['last-name', 'first-name', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);

        $request->session()->put("_old_input", $contact);

        //全角を半角に変換
        $contact['postcode'] = mb_convert_kana($contact['postcode'], 'a');

        return view('confirmation', compact('contact'));
    }

    public function create(Request $request)
    {
     $form = $request->only(['fullname', 'gender', 'email', 'postcode', 'address', 'building_name', 'opinion']);
        contact::create($form);
        
        $request->session()->flush();
        // dd($request);
        return redirect('/thanks');

    }

    public function modify(Request $request)
    {
        return redirect('/');
    }

    public function thanks(){

        return view('thanksForm');
    }
}
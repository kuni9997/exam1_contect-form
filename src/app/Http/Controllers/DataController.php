<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class DataController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        // $contacts = Contact::all();
        return view('data', compact('contacts'));

        }
    
    public function search(Request $request)
    {
        $contacts = Contact::fullnameSearch($request->fullname)->genderSearch($request->gender)->timesStampsSearch($request->start_date, $request->end_date)->emailSearch($request->email)->paginate(10);


        return view('data', compact('contacts'));
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/data');
    }

    }
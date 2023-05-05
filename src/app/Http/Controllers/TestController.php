<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class TestController extends Controller
{
     public function testValue(Request $request)
     {
        $request->session()->put([
            '_old_input' => [
                'last-name' => '手巣都',
                'first-name' => '手巣尾',
                'email' => 'test@test.com',
                'postcode' => '１２３－１２３４',
                'address' => 'テスト県テスト町１２－１２',
                'building-name' => 'テスト壮２０２',
                'opinion' => 'テストですテストですテストですテストですテストですテストですテストですテストですテストですテストですテストですテストですテストですテストですテストです',
            ]
        ]);

        return redirect('/');
     }

     public function echo()
     {
        $date = Contact::timesStampsSearch('2023-05-03', '');
     }
}
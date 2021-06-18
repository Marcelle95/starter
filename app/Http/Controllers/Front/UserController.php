<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    //

    public function getIndex(){
        // $obj = new \stdClass();
        // $obj->name = 'marcelle tanosddd';
        // // $ojb->age = 25;
        // // $obj->id = 5;

        // return view('welcome',compact('obj'));

        $data = ['marcelle' , 'tanos'];
        return view('welcome', compact('data'));
    }
     
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        return view('index');


        $event = Event::orderBy('created_at','desc')->paginate(3);
        $list = User::where('role',"lembaga")->paginate(3);

            return view('index', [
                'events' => $event,
                'list' => $list
            ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inputform;

class inputformController extends Controller
{
    public function add()
    {
    	return view('inputform.add');
    }

    public function save(Request $request)
    {
    	//validasi data
    	$this->validate($request, [
    		'title'	=> 'required|max:255|unique:posts|string'
    	]);

    	//menyimpan ke table posts kemudian redirect page 
    	$inputform = inputform::create(['title' => $request->title]);
    	return redirect(route('inputform.add'));
    }
}
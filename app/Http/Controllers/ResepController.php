<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komen;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class ResepController extends Controller
{

    public function komen(){
		Cache::remember('komen', 5, function(){
			return Komen::all();

		});
		$komen = Cache::get('komen');
		return view('Resep')->with(compact('komen'));
	}
}

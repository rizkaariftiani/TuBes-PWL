<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\User;
use PDF;

class UserController extends Controller
{
	public function index(){
        Cache::remember('user', 10, function(){
            return User::all();

    });
        $user = Cache::get('user');
        return view('User')->with(compact('user'));
    }
	public function manageuser(){
		$user = User::all();
		return view('manageuser',['user' => $user]);
	}
	public function cetak_pdf(){
		$user = User::all();
		$pdf = PDF::loadview('users_pdf',['user'=>$user]);
		return $pdf->stream();
	}
}

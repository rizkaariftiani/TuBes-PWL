<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komen;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class KomenController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
        
    }
    
    public function komen($id){
        $komen = Komen::find($id);
        return view('Komen', ['id'=>$id])->with(compact('komen'));
        
    }
    public function manage(){
        $komen = Komen::all();
        return view('ManageKomen',['komen' => $komen]);
    }

    public function add(){
        
        return view('AddKomen');
    }


    public function create(Request $request){
        Komen::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect('/article');
    }

    public function edit($id){
        $komen = Komen::find($id);
        return view('editkomen',['komen'=>$komen]);
    }

    public function update($id, Request $request){
        $komen = Komen::find($id);
        $komen->title = $request->title;
        $komen->content = $request->content;
        $komen->save();
        return redirect('/mKomen');
    }


    public function delete($id){
        $komen = Komen::find($id);
        $komen->delete();
        return redirect('/mKomen');
    }
}

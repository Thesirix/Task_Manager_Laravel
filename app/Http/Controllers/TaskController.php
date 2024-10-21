<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){

        return view('tasks_view.index');
    }


    public function create(){
        return view('tasks_view.create');
    }



    public function store(request $request){
        $request->validate([
            'title'=> 'string|max:255|required',
            'description'=>'string|max:1000|required'
        ]);
        // dd($request);

        Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=> $request->status == "on" ? 1 : 0
        ]);
        return redirect()->route('index')->with('sucess','Tache enregistre avec succes');
    }
}

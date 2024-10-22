<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();

        return view('tasks_view.index',compact('tasks'));
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

    public function edit(int $id){
        $task =Task::where('id',$id)->first();
        // dd($task);
        return view('tasks_view.create',compact('task')); 
    }


public function update(request $req,int $id ){
    $req->validate([
        'title'=> 'string|max:255|required',
        'description'=>'string|max:1000|required'
    ]);

    $task =Task::where('id',$id)->first();
    $task->update([
        'title'=>$req->title,
        'description'=>$req->description,
        'status'=> $req->status == "on" ? 1 : 0
    ]);


    return redirect()->route('index')->with('sucess','Tache modifiée avec succes');
}



public function destroy(int $id){
    Task::where('id',$id)->delete();

    return redirect()->route('index')->with('sucess','Tache suprimé avec succes');
    }

}

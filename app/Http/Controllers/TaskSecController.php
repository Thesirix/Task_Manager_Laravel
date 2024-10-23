<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskSecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('task_view.index',['tasks'=>Task::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks_view.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $request->validated($request->all());

        Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=> $request->status == "on" ? 1 : 0
        ]);

        return redirect()->route('index')->with('success',' Tache enregistre avec succes');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks_view.create',compact('task')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, Task $task)
    {
        $request->validated($request->all());

        $task->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=> $request->status == "on" ? 1 : 0
        ]);

        return redirect()->route('index')->with('success',' Tache modifiée avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('index')->with('success',' Tache suprimé avec succes');
    }
}

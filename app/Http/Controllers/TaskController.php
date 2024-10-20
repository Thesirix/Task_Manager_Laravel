<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

        return view('tasks_view.index');
    }


    public function create(){
        return view('tasks_view.create');
    }


}

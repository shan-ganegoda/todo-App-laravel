<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    protected $task;

    public function __construct(){
        $this->task = new Todo();   
    }
    public function index(){
        $response['tasks'] = $this->task->all(); //genatating Select * from todos qry
        //dd($response); similar to the var dump in php
        return view('pages.todo.index')->with($response); //we can get any number of line codes        
    }

    public function store(Request $request){
        $this->task->create($request->all()); 
        
        return redirect()->back(); //return to previous path we cannot go back from multiple stages there..
        //return redirect()->route('home');// returns the route path
    }

    public function delete($task_id){
        // dd($task_id);
        $task = $this->task->find($task_id);
        $task->delete(); //calling the delete method

        return redirect()->back();
    }

    public function Done($task_id){
        // dd($task_id);
        $task = $this->task->find($task_id);
        $task->Done = 1; //update the Done
        $task->update(); //update the Done 

        return redirect()->back();
    }
}

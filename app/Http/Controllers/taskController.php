<?php

namespace App\Http\Controllers;

use App\Task;
use App\Status;
use App\ToDoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $todolist = ToDoList::find($id);
        $statuses = Status::all();
        return view('task/create', compact('id', 'statuses', 'todolist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $newtask = new Task();
        $newtask->task_name = $request['title'];
        $newtask->status_id = $request['status'];
        $newtask->description = $request['beschrijving'];
        $newtask->to_do_list_id = $id;

        $newtask->save();

        return redirect()->route('todolist.show', $id);

    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @param  \App\Task $task
     * @return void
     */
    public function show($id ,Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id, task $task)
    {
        $statuses = Status::all();
        return view('task/edit', compact('task', 'id', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Task $task)
    {
        $task['task_name'] = $request['title'];
        $task['status_id'] = $request['status'];
        $task['description'] = $request['beschrijving'];
        $task->save();

        return redirect()->route('todolist.show', $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Task $task)
    {
        $task->delete();
        return redirect()->route('todolist.show', $id);
    }
}

<?php

namespace App\Http\Controllers;

use App\ToDoList;
use App\Task;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;


class toDoListController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->role->role_name == "admin"){
            $lists = ToDoList::all();
        } else {
            $lists = ToDoList::where('user_id', '=', Auth::user()->id)->get();
        }
        return view('toDoList/index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toDoList/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newList = new ToDoList();
        $newList->name = $request['title'];
        $newList->user_id = auth::user()->id;
        $newList->save();

        return redirect()->route('todolist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param ToDoList $list
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list = ToDoList::find($id);
        $tasks = $list->Tasks;

        return view('toDoList/show', compact('list', 'tasks'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function overview()
    {
        if(auth::user()->role->role_name == "admin"){
            $lists = ToDoList::all();
        } else {
            $lists = ToDoList::where('user_id', '=', Auth::user()->id)->get();
        }
        return view('toDoList/overview', compact('lists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return void
     */
    public function edit($id)
    {
        $toDoList = ToDoList::find($id);

        return view('toDoList/edit', compact('toDoList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param ToDoList $toDoList
     * @return void
     */
    public function update(Request $request, $id)
    {
        $todolist = ToDoList::find($id);
        $todolist->name = $request['title'];
        $todolist->save();

        return redirect()->route('todolist.index');

    }

    /**
     * Remove the specified resource from storage.
     * @param ToDoList $todolist
     * @return void
     * @throws \Exception
     */
    public function destroy(ToDoList $todolist)
    {
        $time = Carbon::now(new DateTimeZone('Europe/Amsterdam'));
        dd($time->format('d-m-Y'));
        $tasks = Task::where('to_do_list_id', '=', $todolist['id'])->get();

        foreach ($tasks as $task) {
            $task->delete();
        }

        $todolist->delete();

        return redirect()->route('todolist.index');
    }
}

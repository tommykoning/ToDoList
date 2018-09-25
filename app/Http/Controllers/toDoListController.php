<?php

namespace App\Http\Controllers;

use App\ToDoList;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class toDoListController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->role == "admin"){
            $lists = ToDoList::all();
        } else {
            $lists = ToDoList::where('user_id', '=', Auth::user()->id)->get();
        }
        //dd($lists);
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
        $tasks = $list->Tasks();

        return view('toDoList/show', compact('list', 'tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @return void
     */
    public function edit(request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\list  $list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *php artisan make:migration create_users_table --create=users
     * @param  \App\list  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ToDoList::find($id)->delete();
    }
}

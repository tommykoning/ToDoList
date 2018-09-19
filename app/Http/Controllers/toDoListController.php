<?php

namespace App\Http\Controllers;

use App\ToDoList;
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
            $data = 'admin';
        } else {
            $data = 'normaal';
        }
        return view('toDoList/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\list  $list
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\list  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(request $request)
    {
        //
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
    public function destroy(request $request)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\ToDoList;
use Illuminate\Http\Request;

class toDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('');
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
    public function show(list $list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\list  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(list $list)
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
    public function update(Request $request, list $list)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\list  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(list $list)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $todoLists = $request->user()->todoLists()->with('tasks')->orderBy('updated_at','desc')->get();
        return view('todolists.index',compact('todoLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $todoList = new TodoList();
        return view('todolists.form',compact('todoList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'description' => 'min:5'
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $todoList =  $request->user()->todoLists()->create($data);
        return view('todolists.item',compact('todoList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todoList = TodoList::findOrFail($id);
        $tasks = $todoList->tasks()->orderBy("created_at",'desc')->get();
        return view("tasks.index", compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todoList = TodoList::findOrFail($id);
        return view('todolists.form',compact('todoList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'description' => 'min:5'
        ]);
        $todoList = TodoList::findOrFail($id);
        $todoList->update($request->all());

        return view("todolists.item", compact('todoList'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todoList = TodoList::findOrFail($id);
        $todoList->delete();
        return $todoList;
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Support\Facades\DB;
use Session;



class todosController extends Controller
{
    public function index(){
        $todos = DB::table('todos')->orderBy('id','desc')->get();
        return view('todo', compact('todos'));
    }

    public function store(Request $request){
        $todos = new Todo;
        $todos->todo = $request->todo;
        $todos->save();

        session::flash('success' , 'Todos Has been Created');

        return redirect()->back();
    }

    public function update($id){
        $todos = Todo::find($id);

        return view('update' , compact('todos'));
    }

    public function saveupdate(Request $request,$id){
        $todos = Todo::find($id);
        $todos->todo = $request->todo;
        $todos->save();

        session::flash('success' , 'Todos Has been Updated');
        return redirect()->route('todos');
    }

    public function delete($id) {
        Todo::find($id)->delete();

        session::flash('success' , 'Todos Deleted Successfuly');
        return redirect()->back();
    }

    public function completed ($id) {
        $todos = Todo::find($id);
        $todos->completed = 1;

        $todos->save();

        session::flash('success' , 'Todos Has been Completed');
        return redirect()->back();
    }
}

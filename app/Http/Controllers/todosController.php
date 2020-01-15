<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Todo;
class todosController extends Controller
{
   
    public function index(){
     // $titles = DB::table('todos')->pluck('title');
       $todos=Todo::all();
       
        //return view('todos.index',['todos'=>$todos]);
        //return view('todos.index')->with('todos',$todos);
        //return view('todos.index',compact('titles'));
        return view('todos.index',compact('todos'));
       // return view('todos.todos');
  }

public function show($id){
  //$todos=todo::find($id);
  return view('todos.show')->with('todo',Todo::find($id));
}
public function create(){
  return view('todos.create');
}
public function store(Request $request){//dependency injection
//dd(request()->all());
//recuperation données
//return $request->all();
//return $request->input('title');
//return $request->title;
 $request->validate([
   'title'=>'required',
   'description'=>'required'
 ]);
$todo=new Todo();
$todo->title=$request->title;
$todo->desc=$request->description;
$todo->save();
return redirect('\todos');
}
 public function edit($id){
$todo=Todo::find($id);
return view('todos.edit')->with('todo',$todo);
}
public function update (Request $request,$id){
  $request->validate([
    'title'=>'required',
    'description'=>'required'
  ]);
  $todo=Todo::find($id);
  $todo->title=$request->get('title');
  $todo->desc=$request->get('description');
  $todo->save();
  return redirect('/todos');
}

}

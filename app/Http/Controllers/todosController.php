<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

public function show(Todo $id){
  //$todos=todo::find($id);
  //return view('todos.show')->with('todo',Todo::find($id));
  return view('todos.show')->with('todo',$id);
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
   'title'=>'required|min:3|max:255|unique:todos',
   'description'=>'required|min:3|max:255',
   'password' => 'required|string|min:3|confirmed',

 ]);
$todo=new Todo();
$todo->title=$request->title;
$todo->desc=$request->description;
$todo->password= Hash::make($request->password);
$todo->save();
return redirect('\todos')->with('status', 'Add with success');
}
 public function edit(Todo $todo){
//$todo=Todo::find($id);
return view('todos.edit')->with('todo',$todo);
}
public function update (Request $request,Todo $todo){
  $request->validate([
            'title' => ['required', 'string', 'min:8'],
    'description'=>'required'
  ]);
  //$todo=Todo::find($id);
  $todo->title=$request->get('title');
  $todo->desc=$request->get('description');
  $todo->save();
  return redirect('/todos')->with ('status','updated successfuly');
}
public function destroy(Todo $id){
 // $todo=Todo::find($id);
  //dd($todo);
  $id->delete();
  session()->flash('delete','delete successfully');
 //return redirect('/todos')->with('status','delete successfully');
 return redirect('/todos');
}
public function completed(Todo $complete){
  $complete->completed=true;
  $complete->save();
  return redirect('/todos');
}
}

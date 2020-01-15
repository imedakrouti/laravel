@extends('todos.layout')
@section('title','All Todos')
@section('navbar')
        <div class="row justify-content-center mt-5">
            <div class="card w-50">
             <div class="card-header">
                <h1 class="leed text-bold text-center text-danger my-3">List des titres</h1>
            </div>
            <div class="card-body">
            <ul class="list-group list-group">
                @foreach ($todos as $todo)
                <li class="list-group-item text-muted">{{$todo['title']}}

                <span class="float-right"><a href="#"style="color:red"> <i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></span>
                <span class="float-right mx-2"><a href="todos/{{$todo->id}}"style="color:green"> <i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a></span>
                <span class="float-right"><a href="todos/{{$todo->id}}"style="color:"> <i class="fa fa-eye fa-2x" aria-hidden="true"></i></a></span>
            </li>
                @endforeach
            </ul>
          </div>
        </div>
        </div>
      
  
@endsection
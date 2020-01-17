@extends('todos.layout')
@section('title','All Todos')
@section('navbar')

        <div class="row justify-content-center mt-5">
            <div class="card w-50">
             <div class="card-header">
                <h1 class="leed text-bold text-center text-danger my-3">ToDo Title</h1>
            </div>
            @if (session()->has('delete'))
            <div class="alert-danger py-3 text-center mx-auto w-75">
                {{session()->get('delete') }}
            </div>
            @elseif (session()->has('status'))
            <div class="alert-success py-3 text-center mx-auto w-75">
                {{session()->get('status') }}
            </div>
        @endif
            <div class="card-body">
            <ul class="list-group list-group">
                @forelse($todos as $todo)
                <li class="list-group-item text-muted">{{$todo['title']}}

                <span class="float-right"><a href="todos/{{$todo->id}}/delete"style="color:red"> <i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></span>
                <span class="float-right mx-2"><a href="todos/{{$todo->id}}/edit"style="color:green"> <i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a></span>
                <span class="float-right"><a href="todos/{{$todo->id}}"style="color:"> <i class="fa fa-eye fa-2x" aria-hidden="true"></i></a></span>
                @if(!$todo->completed)
                <span class="float-left mr-2"><a href="todos/{{$todo->id}}/completed"style="color:yellow"> <i class="fa fa-check fa-2x" aria-hidden="true"></i></a></span>
            </li>
            @endif    
            </li>
           
            @empty
            <p class="list-group-item text-muted text-center">No Todos.</p>
                @endforelse
            </ul>
          </div>
        </div>
        </div>
      
  
@endsection
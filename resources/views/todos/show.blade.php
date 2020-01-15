@extends('todos.layout')
@section('title','Todo -'. $todo->id .' Details')
@section('navbar')
<div class="container">
<h1 class="text-center text-danger my-5">{{$todo->title}}</h1>
<div class="row justify-content-center">
  <div class="col-md-8 ">
    <div class="card">
        <div class="card-header">
            <span class="">Details</span>
        <span class="float-right badge badge-warning p-2">{{boolval($todo->completed)?'completed':'incompleted'}}</span>
        </div>
        <div class="card-body">
         <p class="leed">  {{$todo->desc}}</p>
        </div>
    </div>
</div>
</div>
@endsection
@extends('todos.layout')
@section('title','Edit Todo')
@section('navbar')

<div class="container pt-5">
    <div class="row justify-content-center mt5" >
        <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                   <h1 class="text-center text-muted text-capitalize">Edit todo</h1>
               </div>
                <div class="card-body">
                                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="/todos/{{$todo->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" id="" class="form-control "value="{{$todo->title}}" class="@error('title') is-invalid @enderror"placeholder="Todo Title" aria-describedby="helpId">
                        </div>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                            <div class="form-group">
                              <textarea class="form-control" name="description" id="" rows="3" placeholder="Todo Description"style="resize:none"class="@error('description') is-invalid @enderror">{{$todo->description}}</textarea>
                            </div>
                            @error('description')
                            <div class="alert alert-danger">{{ 'aaaaa' }}</div>
                        @enderror
                            <div class="form-group text-center">
                             <button type="submit" class="btn btn-success w-50">Create </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
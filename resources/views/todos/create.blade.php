@extends('todos.layout')
@section('title','Add Todo')
@section('navbar')

<div class="container pt-5">
    <div class="row justify-content-center mt5" >
        <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                   <h1 class="text-center text-muted text-capitalize">Create new todo</h1>
               </div>
                <div class="card-body">
                    <form action="/create" method="POST">
                        @csrf
                        <div class="form-group">
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"placeholder="Todo Title" autocomplete="name" autofocus value="{{ old('title')}}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                            <div class="form-group">
                              <textarea name="description" id="description" rows="3" placeholder="Todo Description"style="resize:none"class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            </div>   
                            <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        <div class="form-group">
                            <label class="form-label">Preference</label>
                            <select name="d_addr" class="form-control custom-select" required id="d_addr" value="{{ old('d_addr') }}">
                              <option selected></option>
                              <option value="Ariana">Ariana</option>
                              <option value="Beja">Beja</option>
                              <option value="Gabes">Gabes</option>
                              <option value="Gafsa">Gafsa</option>
                              <option value="Jendouba">Jendouba</option>
                              <option value="Kairouan">Kairouan</option>
                              <option value="Kairouan">Kasserine</option>
                              <option value="Kebili">Kebili</option>
                              <option value="Nabeul">Nabeul</option>
                              <option value="Kef">Kef</option>
                              <option value="Mahdia">Mahdia</option>
                              <option value="Bizerte">Bizerte</option>
                              <option value="Tunis">Manouba</option>
                              <option value="Medenine">Medenine</option>
                              <option value="Monastir">Monastir</option>
                              <option value="nabeul">Sfax</option>
                              <option value="Sidi Bou Zid">Sidi Bou Zid</option>
                              <option value="Ben arous">Ben arous</option>
                              <option value="Sousse">Sousse</option>
                              <option value="Siliana">Siliana</option>
                              <option value="Tataouine">Tataouine</option>
                              <option value="Tozeur">Tozeur</option>
                              <option value="Zaghouan">Zaghouan</option>
                              <option value="Tunis">Tunis</option>

                            </select>
                        </div>
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

@extends('layouts.admin')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <br><br><br><br><br><br><br><br>
    <div class="card" >
        <h5 class="card-header" style="text-align: center">Modifier  l'utilisateur de l'ID : {{ $utilisateur ->id}}</h5>
        <div class="card-body">
            <form action="{{ route('utilisateurs.update' ,  ['utilisateur' =>$utilisateur ->id]) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Nom') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ $utilisateur ->name ?? old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse E-Mail') }}</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $utilisateur ->email ?? old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
            <div class="col-md-6">
            <select name="role" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option  value="admin">Admin</option>
                <option  value="user">Utilisateur</option>
              </select>
            </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
<br><br><br>
@endsection
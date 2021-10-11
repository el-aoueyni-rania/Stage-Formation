@extends('layouts.admin')

@section('main')
<main>
  <br><br><br><br>
    <div class="row">   
        <div class="col-lg-3">
          @include('layouts.nav')       
        </div>
        <div class="col-lg-9">
          <br><br><br><br>
            <div class="row">

              <h1 style="text-align: center">Users List</h1>
              @if (session('deleteUtilisateur'))
              <div class="alert alert-dismissible alert-success fade show" role="alert">
                {{ session('deleteUtilisateur') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif 
          @if (session('storeUtilisateur'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('storeUtilisateur') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
@if (session('updateUtilisateur'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('updateUtilisateur') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
<br><br><br>
<div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
  aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
<br><br>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Email</th>
                        <th scope="col"> PassWord</th>
                        <th scope="col"> Role</th>
                        <th scope="col"> Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($utilisateurs as $key => $utilisateur)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $utilisateur -> name }} </td>
                            <td>{{ $utilisateur -> email}} </td>
                            <td>{{ $utilisateur -> password}} </td>
                            <td>{{ $utilisateur -> role}} </td>
                            <td>
                                  <a href="{{ route('utilisateurs.edit' , ['utilisateur' =>$utilisateur ->id]) }}" class="btn btn-warning" title=" edit utilisateur : {{ $utilisateur ->id }} "><i class="fas fa-edit"></i></a>
                                  <a href="#" class="btn btn-danger" title=" delete utilisateur : {{ $utilisateur ->id }} " 
                                    onclick="event.preventDefault(); document.querySelector('#delete-utilisateur-form').submit()">
                                    <i class="fas fa-trash-alt"></i></a>
                                   <form action="{{ route('utilisateurs.destroy' , ['utilisateur' =>$utilisateur ->id]) }}" method="post" id="delete-utilisateur-form"> @csrf @method('DELETE')</form>
                                </td>
                          </tr>
                        @endforeach
                    </tbody>                
                  </table>
                  <div class="mx-auto" style="width: 200px ;">
                    {{ $utilisateurs ->links()}} 
                  </div>            
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
</main>
@endsection
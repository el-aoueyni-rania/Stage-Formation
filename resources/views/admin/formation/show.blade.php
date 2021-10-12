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
    @if (session('storeFormation'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('storeFormation') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
@if (session('updateFormation'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
      {{ session('updateFormation') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
    <h3>Détails De Formation : {{ $formation ->id}} </h3>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><i class="fas fa-user"></i>  {{ $formation ->user_id}}</li>
          <li class="list-group-item"> {{ $formation ->titre}}</li>
          <li class="list-group-item">
            {{ $formation ->contenu}} </li>
          </ul>
        <hr>
        <a href="{{ route('formations.edit' , ['formation' =>$formation ->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
        <a href="#" class="btn btn-danger" title=" delete formation : {{ $formation ->id }} " 
          onclick="event.preventDefault(); document.querySelector('#delete-formation-form').submit()">
          <i class="fas fa-trash-alt"></i></a>
         <form action="{{ route('formations.destroy' , ['formation' =>$formation ->id]) }}" method="post" id="delete-formation-form"> @csrf @method('DELETE')</form>
      </div>
    </div>
  </div>
</div>
</div>
<br><br><br><br><br><br><br><br>
</main>
</main>
@endsection
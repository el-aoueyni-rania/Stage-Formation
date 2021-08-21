@extends('layouts.home2')
@section('main')
<main>
  <br><br><br><br>
  <div class="row">   
      <div class="col-lg-3">
        @include('layouts.nav2')       
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
    <h3> <i class="fas fa-clipboard-list"></i> Details About Formation : {{ $formation ->id}} </h3>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><i class="fas fa-list-alt"></i> {{ $formation ->titre}}</li>
          <li class="list-group-item"><i class="fas fa-apple-alt"></i> {{ $formation ->contenu}} </li>
          </ul>
      </div>
    </div>
  </div>
</div>
</div>
<br><br><br><br><br><br><br><br>
</main>
</main>
@endsection
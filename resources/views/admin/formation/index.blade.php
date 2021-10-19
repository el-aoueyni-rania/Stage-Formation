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
              @if (session('deleteFormation'))
              <div class="alert alert-dismissible alert-success fade show" role="alert">
                {{ session('deleteFormation') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif  
              <h1 style="text-align: center">Liste Des Formations</h1>
              <br><br>
              <div class="form-group mr-1 mb-1">
                <button class="btn btn-info">
                  <a href="{{ route('formations.create' ) }}" class="nav-link collapsed" style="color: black"> Ajouter Une Formation</a>
                </button>
                </div>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> User Id</th>
                        <th scope="col"> Titre</th>
                        <th scope="col"> Operations</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($formations as $key => $formation)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $formation -> user_id }} </td>
                            <td>{{ $formation -> titre}} </td>
                            <td>
                              <a href="{{ route('formations.show' , ['formation' =>$formation ->id]) }}  "  class="btn btn-info" title=" show formation : {{ $formation ->id }} "><i class="fas fa-info-circle"></i></a>
                                <a href="{{ route('formations.edit' , ['formation' =>$formation ->id]) }}" class="btn btn-warning" title=" edit formation : {{ $formation ->id }} "><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger" title=" delete formation : {{ $formation ->id }} " 
                                  onclick="event.preventDefault(); document.querySelector('#delete-formation-form').submit()">
                                  <i class="fas fa-trash-alt"></i></a>
                                 <form action="{{ route('formations.destroy' , ['formation' =>$formation ->id]) }}" method="post" id="delete-formation-form"> @csrf @method('DELETE')</form>
                              </td>
                          </tr>
                        @endforeach
                    </tbody>                
                  </table>
                  <div class="mx-auto" style="width: 200px ;">
                    {{ $formations ->links()}} 
                  </div>            
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
</main>
@endsection
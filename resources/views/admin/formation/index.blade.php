@extends('layouts.admin')

@section('main')
<main>
  <br><br><br><br>
    <div class="row">   
        <div class="col-lg-3">
          @include('layouts.nav')       
        </div>
        <div class="col-lg-9">
          <br><br>
            <div class="row">
              @if (session('deleteFormation'))
              <div class="alert alert-dismissible alert-success fade show" role="alert">
                {{ session('deleteFormation') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
          @endif  
              <h1 style="text-align: center; text-shadow: 2px 2px 5px ; font-style: oblique;">Liste Des Formations</h1>
              <br><br>
              <div class="form-group mr-1 mb-1">
                <button class="btn" style="background-color: blue ;">
                  <a href="{{ route('formations.create' ) }}" class="nav-link collapsed" style="color: white ; "> Ajouter Une Formation</a>
                </button>
                </div>
                <table class="table bg-light">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> <i class="fas fa-user" style="color: blue"></i> Id de l'utilisateur</th>
                        <th scope="col"> <i class="fas fa-heading"  style="color: blue"></i> Titre</th>
                        <th scope="col"> <i class="fas fa-edit" style="color: blue"></i> Operations</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($formations as $key => $formation)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $formation -> user_id }} </td>
                            <td>{{ $formation -> titre}} </td>
                            <td>
                              <a href="{{ route('formations.show' , ['formation' =>$formation ->id]) }}  "  class="btn " title=" details sur formation : {{ $formation ->id }} "><i class="fas fa-info-circle"></i></a>
                                <a href="{{ route('formations.edit' , ['formation' =>$formation ->id]) }}" class="btn " title=" modifier formation : {{ $formation ->id }} "><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn " title=" supprimer formation : {{ $formation ->id }} " 
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
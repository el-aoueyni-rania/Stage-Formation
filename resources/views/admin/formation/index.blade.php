@extends('layouts.admin')

@section('main')
<main>
  <br><br> <br><br><br><br> <br><br>
    <div class="row">     
 
        <div class="col-lg-3">
            @include('layouts.nav')       
        </div>
        <div class="col-lg-9">
            <div class="row">
              <h2>Formation List</h2>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> User Id</th>
                        <th scope="col"> Titre</th>
                        <th scope="col"> Contenu</th>
                        <th scope="col"> Operations</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($formations as $key => $formation)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $formation -> user_id }} </td>
                            <td>{{ $formation -> titre}} </td>
                            <td>{{ $formation -> contenu}} </td>
                            <td>
                                <a href="#" class="btn btn-warning" title=" edit formation : {{ $formation ->id }} "><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger" title=" delete formation : {{ $formation ->id }} " 
                                  onclick="event.preventDefault(); document.querySelector('#delete-formation-form').submit()">
                                  <i class="fas fa-trash-alt"></i></a>
                                 <form action="#" method="post" id="delete-formation-form"> @csrf @method('DELETE')</form>
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
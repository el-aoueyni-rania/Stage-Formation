@extends('layouts.home2')

@section('main')
<main>
  <br><br><br><br>
  <div class="row">     
    <div class="col-lg-3">
        @include('layouts.nav2')       
    </div>
    <div class="col-lg-9">
      <br><br>
      <div class="row">  
        <h1 style="text-align: center; text-shadow: 2px 2px 5px ; font-style: oblique;">Liste Des Formations</h1>
        <br><br>
        @foreach ($formations2 as $key => $formation)
          <label class="titr">Titre {{ $key }} : {{ $formation -> titre}}  </label> 
          <div >
            {{ $formation -> contenu}} 
          </div>  
        @endforeach
        <br><br>
        <div class="mx-auto" style="width: 200px ;">
          {{ $formations2 ->links()}} 
        </div>    
      </div>
    </div>
  </div>        
</main>
@endsection
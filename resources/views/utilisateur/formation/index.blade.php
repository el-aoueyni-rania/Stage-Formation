@extends('layouts.home2')

@section('main')
<main>
  <br><br> <br><br><br><br> <br><br>
  <div class="row">     
 
    <div class="col-lg-3">
        @include('layouts.nav2')       
    </div>
    <div class="col-lg-9">
      <div class="row">  
        @foreach ($formations2 as $key => $formation)
          <label class="titr">Formation {{ $key }} : {{ $formation -> titre}} </label>
          <div class=""> {{ $formation -> contenu}}</div>
        @endforeach
        <br><br>
        <div class="mx-auto" style="width: 200px ;">
          {{ $formations2 ->links()}} 
        </div>    
      </div>
    </div>
  </div>        
  <br><br><br><br><br><br><br>
</main>
@endsection
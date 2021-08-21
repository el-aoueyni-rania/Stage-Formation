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
        <h2>Formation List</h2>
        @foreach ($formations2 as $key => $formation)
          <label class="titr"> 
            <a href="{{ route('formations2.show' , ['formation2' =>$formation ->id]) }}" class="btn btn-primary" title=" show formation : {{ $formation ->id }} ">
            <i class="fas fa-info-circle"></i>
            </a>  Formation {{ $key }} : {{ $formation -> titre}}  
          </label>  
        
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
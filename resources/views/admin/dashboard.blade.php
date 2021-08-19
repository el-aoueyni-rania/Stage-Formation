@extends('layouts.admin');


@section('main')

<main>
    <div class="row">
        <div class="col-lg-3">
            <br><br><br><br>  
            @include('layouts.nav')
        </div>
       
        <div class="col-lg-9">
            <br><br> <br><br><br><br><br><br>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/b5.jfif" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{route('premiereAAd')}}">Première Année</a></h4>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top" height="150" src="assets/img/b2.jpg"  alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Deuxième Année</a></h4>
                        </div>                      
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/b44.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Troisième Année</a></h4>                         
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/bbb.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Quatrième Année</a></h4>                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/bf.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Sinquième Année</a></h4>                        
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/b66.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">Sixième Année</a></h4>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
</main>

    
@endsection
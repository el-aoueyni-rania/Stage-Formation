@extends('layouts.home2');


@section('main')

<main>
    <div class="row">
        <div class="col-lg-3">
            <br><br><br><br>
            @include('layouts.nav2') 
            </nav>       
        </div>
       
        <div class="col-lg-9">
            <br><br> <br><br><br>
            <h1 style="text-align: center; text-shadow: 2px 2px 5px ; font-style: oblique;">Liste Des Matières</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/math.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{route('formations2.index')}}">الرياضيات</a></h4>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top" height="150" src="assets/img/kira.jpg"  alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">القراءة</a></h4>
                        </div>                      
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/sc.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!"> الإيقاظ العلمي </a></h4>                         
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/khat.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!"> الخط و الإملاء</a></h4>                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/islm.jpg" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!"> التربية الإسلامية</a></h4>                        
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-55">
                        <a href="#!"><img class="card-img-top"  height="150" src="assets/img/ktb.png" alt="..." /></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!"> الإنتاج الكتابي</a></h4>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    
@endsection
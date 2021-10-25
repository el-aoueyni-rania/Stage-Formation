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
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>


            <div class="row">
                <!-- Area Chart -->
                <div class="row">
                    <div class="col-xl-10">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Vue
                            </div>
                            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-10">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Inscription 
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Row --> 
    <br><br><br><br><br><br><br><br>
</main>
 <!-- End of Main Content -->
    
@endsection
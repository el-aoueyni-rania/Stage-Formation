@extends('layouts.app')

@section('content')
 
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Centre!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href=" {{ route('registre') }} ">join us </a>
    </div>
</header>

@endsection
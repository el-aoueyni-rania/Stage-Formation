@extends('layouts.home2')
@section('main')
<main class="mm">
    <br><br><br><br><br><br><br><br>
    <fieldset>
        <legend>
            <i class="fas fa-plus"></i> Add new formation 
        </legend>
        <form action="{{ route('formations2.store') }}" method="post">
        @include('utilisateur.formation.form')
        </form>
     
    </fieldset>
</main>
@endsection
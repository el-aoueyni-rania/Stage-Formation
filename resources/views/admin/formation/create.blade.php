@extends('layouts.admin')
@section('main')
<main class="mm">
    <br><br><br><br><br><br><br><br>
    <fieldset>
        <legend>
            Ajouter une formation :
        </legend>
        <form action="{{ route('formations.store') }}" method="post">
        @include('admin.formation.form')
        </form>
     
    </fieldset>
</main>
@endsection
@extends('layouts.admin')
@section('main')
<main class="mm">
    <br><br><br><br><br><br><br><br>
    <fieldset>
        <legend>
            <i class="fas fa-plus"></i> Add new User 
        </legend>
        <form action="{{ route('utilisateurs.store') }}" method="post">
        @include('admin.utilisateur.form')
        </form>
     
    </fieldset>
</main>
@endsection
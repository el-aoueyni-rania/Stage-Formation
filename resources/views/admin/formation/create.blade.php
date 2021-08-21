@extends('layouts.admin')
@section('main')
<main class="mm">
    <br><br><br><br><br><br><br><br>
    <fieldset>
        <legend>
            <i class="fas fa-plus"></i> Add new formation 
        </legend>
        <form action="{{ route('formations.store') }}" method="post">
        @include('admin.formation.form')
        </form>
     
    </fieldset>
</main>
@endsection
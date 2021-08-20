@extends('layouts.admin')
@section('main')
<main class="mm">
    <br><br><br><br><br><br><br><br>
    <fieldset>
        <legend>
            <i class="fas fa-edit"></i> Edit formation : {{ $formation ->id}}
        </legend>
        <form action="{{ route('formations.update' ,  ['formation' =>$formation ->id]) }}" method="post">
            @method('PUT')
            @include('admin.formation.form')
        </form>
     
    </fieldset>
</main>
@endsection
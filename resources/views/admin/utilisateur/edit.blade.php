@extends('layouts.admin')
@section('main')
<main class="mm">
    <br><br><br><br><br><br><br><br>
    <fieldset>
        <legend>
            <i class="fas fa-edit"></i> Modifier un utilisateur : {{ $utilisateur ->id}}
        </legend>
        <form action="{{ route('utilisateurs.update' ,  ['utilisateur' =>$utilisateur ->id]) }}" method="post">
            @method('PUT')
            @include('admin.utilisateur.form')
        </form>
     
    </fieldset>
</main>
@endsection
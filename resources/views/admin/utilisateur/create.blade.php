@extends('layouts.admin')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <br><br><br><br><br><br><br><br>
    <div class="card" >
        <h5 class="card-header" style="text-align: center"> Ajouter un utilisateur : </h5>
        <div class="card-body">
        <form action="{{ route('utilisateurs.store') }}" method="post">
        @include('admin.utilisateur.form')
        </form>
</div>
</div>
</div>
</div>
</div>
@endsection
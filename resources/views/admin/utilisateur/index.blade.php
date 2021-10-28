@extends('layouts.admin')

@section('main')
    <main>
        <br><br><br>
        <div class="row">
            <div class="col-lg-3">
                @include('layouts.nav')
            </div>
            <div class="col-lg-9">
                <br><br><br>
                <div class="row">

                    <h1 style="text-align: center; text-shadow: 2px 2px 5px ; font-style: oblique;">Liste Des Utilisateurs</h1>
                    @if (session('deleteUtilisateur'))
                        <div class="alert alert-dismissible alert-success fade show" role="alert">
                            {{ session('deleteUtilisateur') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('storeUtilisateur'))
                        <div class="alert alert-dismissible alert-success fade show" role="alert">
                            {{ session('storeUtilisateur') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (session('updateUtilisateur'))
                        <div class="alert alert-dismissible alert-success fade show" role="alert">
                            {{ session('updateUtilisateur') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <br><br>
                    <div class="g1">
                        <div class=" mr-1 mb-1">
                            <button class="btn " style="background-color: blue">
                                <a href="{{ route('utilisateurs.create') }}" class="nav-link collapsed"
                                    style="color: white"> Ajouter un utilisateur</a>
                            </button>
                        </div>
                        <div style="margin-left: 300px">
                            @include('partials.search')
                        </div>
                    </div>

                    <br><br>
                    <table class="table bg-light ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"> <i class="fas fa-user"style="color: blue"></i> Nom </th>
                                <th scope="col"> <i class="fas fa-at" style="color: blue"></i>  Email</th>
                                <th scope="col"><i class="fas fa-user-tag "style="color: blue"></i> Role</th>
                                <th scope="col"><i class="fas fa-edit" style="color: blue"></i> Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($utilisateurs as $key => $utilisateur)
                                <tr>
                                    <th scope="row">{{ $key }}</th>
                                    <td>{{ $utilisateur->name }} </td>
                                    <td>{{ $utilisateur->email }} </td>
                                    <td>{{ $utilisateur->role }} </td>
                                    <td>
                                        <a href="{{ route('utilisateurs.edit', ['utilisateur' => $utilisateur->id]) }}"
                                            class="btn " 
                                            title=" modifier utilisateur : {{ $utilisateur->id }} "><i class="fas fa-user-edit"></i></a>
                                        <a href="#" class="btn " 
                                            title=" supprimer utilisateur : {{ $utilisateur->id }} "
                                            onclick="event.preventDefault(); document.querySelector('#delete-utilisateur-form').submit()">
                                            <i class="fas fa-trash-alt"></i></a>
                                        <form
                                            action="{{ route('utilisateurs.destroy', ['utilisateur' => $utilisateur->id]) }}"
                                            method="post" id="delete-utilisateur-form"> @csrf @method('DELETE')</form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mx-auto" style="width: 200px ;">
                        {{ $utilisateurs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

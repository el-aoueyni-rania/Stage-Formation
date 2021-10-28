<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.utilisateur.index' , ['utilisateurs' => User::paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.utilisateur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $utilisateur = new User ; 
        $utilisateur->name = $request->name;
        $utilisateur->email = $request->email;
        $utilisateur->password = Hash::make($request['password']);
        $utilisateur->role = $request->role;
        $utilisateur->save();
        return redirect()->route('utilisateurs.index' , $utilisateur)->with('storeUtilisateur' , 'utilisateur a été ajouté avec succès !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $utilisateur)
    {
        return view('admin.utilisateur.edit' ,  ['utilisateur' => $utilisateur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $utilisateur)
    {
        $validatedData = $request->validate($this->validationRules2());
        $utilisateur->update($validatedData);
        return redirect()->route('utilisateurs.index' , $utilisateur)->with('updateUtilisateur' , 'utilisateur a été mis à jour avec succès !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $utilisateur)
    {
        $utilisateur->delete();
        return redirect()->route('utilisateurs.index')->with('deleteUtilisateur' , 'utilisateur a été supprimé avec succès !!!');
    }
    private function validationRules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' =>'required|min:8', 
            'role' =>  'required',
            
        ];
    }
    private function validationRules2()
    {
        return [
            'name' => 'required',
            'email' => 'required', 
            'role' =>  'required',
            
        ];
    }

    public function search()
    {
        $q = request()->input('q');

        $utilisateurs = User::where('name' , 'like' , "%$q%")
              ->orwhere('email' , 'like' , "%$q%")
              ->paginate(6);
              return view('admin.utilisateur.search')->with('utilisateurs' , $utilisateurs);
    }
}

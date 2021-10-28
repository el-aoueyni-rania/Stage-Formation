<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.formation.index' , ['formations' => Formation::paginate(9)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate($this->validationRules());
        $formation = Formation::create($validatedData);
        return redirect()->route('formations.show' , $formation)->with('storeFormation' , 'Formation a été ajouté avec succès !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        return view('admin.formation.show' ,  ['formation' => $formation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        return view('admin.formation.edit' ,  ['formation' => $formation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        $validatedData = $request->validate($this->validationRules());
        $formation->update($validatedData);
        return redirect()->route('formations.show' , $formation)->with('updateFormation' , 'Formation a été mis à jour avec succès !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        $formation->delete();
        return redirect()->route('formations.index')->with('deleteFormation' , 'Formation a été supprimé avec succès !!!');
    }

    private function validationRules()
    {
        return [
            'user_id' =>'required',
            'titre' =>'required|min:2',
            'contenu' =>'required|min:4',
            
        ];
    }
}

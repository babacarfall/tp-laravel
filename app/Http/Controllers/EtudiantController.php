<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Etudiant;
use Eloquent;

class EtudiantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function add (Request $request)
    {
        Eloquent::unguard();
        Etudiant::create($request->except(['_token']));
        return back()->with('status',trans('Etudiant Enregistré avec Succée'));
    }
    public function show($id){
        $etudiant = Etudiant::findorfail($id);
        return view('etudiant.show', compact('etudiant'));
    }
    public function edit($id){
        $etudiant = Etudiant::findorfail($id);
        return view('etudiant.edit', compact('etudiant')); 
    }
    public function update(Request $request,$id){
        $etudiant = Etudiant::findorfail($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
        return back()->with('status',trans('Etudiant Enregistré avec Succée'));
    }
}

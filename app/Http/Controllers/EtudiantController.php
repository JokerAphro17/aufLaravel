<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{   
    protected $fillable = [''];
    public function index ()
    {   
        
        if( auth()->check() ){
            
            $etudiant = Etudiant::orderBy('created_at', 'desc')->first();
            return view('inscription', compact('etudiant'));



        return view('inscription');}
        else{
            return view('auth.login');
        }
    }
    public function store (Request $request)
    {
        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->date_naissance = $request->input('date_naissance');
        $etudiant->date_abonne = $request->input('date_abonne');
        $etudiant->email = $request->input('email');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->save();
        $last_id = $etudiant->id;
        $etudiant = Etudiant::orderBy('created_at', 'desc')->first();

        return view('inscription',compact('etudiant'))->with('success', 'Votre inscription a bien été prise en compte');
    }
    
}

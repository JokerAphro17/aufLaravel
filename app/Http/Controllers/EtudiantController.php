<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{   
    public function index ()
    {   
        

            
            $etudiant = Etudiant::orderBy('created_at', 'desc')->first();
            return view('inscription', compact('etudiant'));



        
    }
    public function store (Request $request)

    {
        $validate = $request->validate([
            'nom' => 'required|min:3',
            'prenom' => 'required|min:3',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'date_abonne' => 'required|date',
        ]);

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

        return redirect('inscription')->with('success', 'Votre inscription a bien été prise en compte');
    }
    public function list ()
    {
        $etudiants = Etudiant::All();
        return view('list', compact('etudiants'));
    }
    public function edit ($id)
    {
        $etudiant = Etudiant::find($id);
        return view('edit', compact('etudiant'));
    }
    public function update (Request $request, $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->date_naissance = $request->input('date_naissance');
        $etudiant->date_abonne = $request->input('date_abonne');
        $etudiant->email = $request->input('email');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->save();
        $etudiants = Etudiant::All();
        return redirect('list')->with('success', 'Votre inscription a bien été modifiée');
    }
    public function destroy ($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/list');
    }
    
}

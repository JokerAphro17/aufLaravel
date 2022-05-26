@extends('layouts.app')
@section('content')
<div class="container-fluid corps">
    <div class="row justify-content-center mt-5">
      <div class="col-6 bg-danger text-light text-center">
        <h3>MODIFICATION</h3>
      </div>
    </div>
    <div class="row">
      <form action={{route("update", ['id' => $etudiant->id])}} method="post" class="col-md-6 offset-md-3 mt-5">
        @csrf
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm" >NOM</span>
          <input
            name="nom"
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm"
            required
            value="{{$etudiant->nom}}"
          />
        </div>
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm"
            >PRENOMS</span
          >
          <input
            name="prenom"
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm"
            required
            value="{{$etudiant->prenom}}"
          />
        </div>
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm" value="
          "
            >DATE DE NAISSANCE</span
          >
          <input
            name="date_naissance"
            type="date"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm"
            required
            value="{{$etudiant->date_naissance}}"
          />
        </div>
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm"
            >DEBUT D'ABONNEMENT</span
          >
          <input
            name="date_abonne"
            type="date"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm"
            required
            value="{{$etudiant->date_abonne}}"
          />
        </div>
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm"
            >NUMERO DE TEL</span
          >
          <input
            name="telephone"
            type="text"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm"
            required
            value="{{$etudiant->telephone}}"
          />
        </div>
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text" id="inputGroup-sizing-sm"
            >EMAIL</span
          >
          <input
            name="email"
            type="email"
            class="form-control"
            aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-sm"
            required
            value="{{$etudiant->email}}"
          />
        </div>
        <div class="row justify-content-around">
          <div class="col-4">
          <a href={{route('list')}} class="btn envoi btn-danger">ANNULER</a>
          </div>
          <div class="col-4">
            <button type="submit" name="envoi" class="envoi btn btn-success">
              Enregitrer
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
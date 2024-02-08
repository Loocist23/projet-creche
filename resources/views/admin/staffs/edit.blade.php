@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le Membre du Personnel:</h1>
        <form method="POST" action="{{ route('admin.staffs.update', $personnel->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $personnel->nom }}" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $personnel->prenom }}"
                       required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $personnel->email }}"
                       required>
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de Naissance:</label>
                <input type="date" class="form-control" id="date_naissance" name="date_naissance"
                       value="{{ $personnel->date_naissance ? \Carbon\Carbon::parse($personnel->date_naissance)->format('Y-m-d') : '' }}"
                       required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $personnel->adresse }}"
                       required>
            </div>
            <div class="form-group">
                <label for="ville">Ville:</label>
                <input type="text" class="form-control" id="ville" name="ville" value="{{ $personnel->ville }}"
                       required>
            </div>
            <div class="form-group">
                <label for="code_postal">Code Postal:</label>
                <input type="text" class="form-control" id="code_postal" name="code_postal"
                       value="{{ $personnel->code_postal }}" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone:</label>
                <input type="text" class="form-control" id="telephone" name="telephone"
                       value="{{ $personnel->telephone }}" required>
            </div>
            <div class="form-group">
                <label for="poste">Poste:</label>
                <input type="text" class="form-control" id="poste" name="poste" value="{{ $personnel->poste }}"
                       required>
            </div>
            <div class="form-group">
                <label for="photo">Photo (URL):</label>
                <input type="text" class="form-control" id="photo" name="photo" value="{{ $personnel->photo }}">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection

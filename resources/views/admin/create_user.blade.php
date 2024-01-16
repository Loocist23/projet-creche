@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un Utilisateur</h1>
        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <!-- Champs du formulaire (nom, email, etc.) -->
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <!-- Ajoutez d'autres champs si nécessaire -->
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection

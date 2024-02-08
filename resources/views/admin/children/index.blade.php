@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Enfants</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.children.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a href="{{ route('admin.children.create') }}" class="btn btn-success mb-2">Ajouter un Enfant</a>
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($enfants as $enfant)
                <tr>
                    <td>{{ $enfant->lastname }}</td>
                    <td>{{ $enfant->firstname }}</td>
                    <td>{{ $enfant->birthdate }}</td>
                    <td>
                        <a href="{{ route('admin.children.edit', $enfant->id) }}" class="btn btn-primary">Éditer</a>
                        <form action="{{ route('admin.children.destroy', $enfant->id) }}" method="POST"
                              style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enfant ?');">
                                Supprimer
                            </button>
                        </form>
                        <!-- Ajoutez ici le bouton de suppression si nécessaire -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="small-pagination">
            {{ $enfants->links() }}
        </div>

    </div>
@endsection

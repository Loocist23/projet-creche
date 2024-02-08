@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Plannings</h1>
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.plannings.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <a href="{{ route('admin.plannings.create') }}" class="btn btn-primary mb-3">Créer un Nouveau Planning</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($plannings as $planning)
                <tr>
                    <td>{{ $planning->id }}</td>
                    <td>{{ $planning->date }}</td>
                    <!-- Affichez d'autres informations du plannings ici -->
                    <td>
                        <a href="{{ route('admin.plannings.edit', $planning->id) }}" class="btn btn-primary">Éditer</a>
                        <form action="{{ route('admin.plannings.destroy', $planning->id) }}" method="POST"
                              style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce plannings ?');">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $plannings->links() }} <!-- Pagination -->
    </div>
@endsection

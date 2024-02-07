@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Parents</h1>
        <a href="{{ route('admin.owners.create') }}" class="btn btn-success mb-2">Ajouter un Parent</a>
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->lastname }}</td>
                    <td>{{ $owner->firstname }}</td>
                    <td>{{ $owner->email }}</td>
                    <td>
                        <a href="{{ route('admin.owners.edit', $owner->id) }}" class="btn btn-primary">Éditer</a>
                        <form action="{{ route('admin.owners.destroy', $owner->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce parent ?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="small-pagination">
            {{ $owners->links() }}
        </div>

    </div>
@endsection

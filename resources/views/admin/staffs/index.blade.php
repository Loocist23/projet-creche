@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste du Personnel</h1>
        <a href="{{ route('admin.staffs.create') }}" class="btn btn-success mb-2">Ajouter un Membre du Personnel</a>
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
            @foreach ($personnels as $personnel)
                <tr>
                    <td>{{ $personnel->nom }}</td>
                    <td>{{ $personnel->prenom }}</td>
                    <td>{{ $personnel->date_naissance}}</td>
                    <td>
                        <a href="{{ route('admin.staffs.edit', $personnel->id) }}" class="btn btn-primary">Éditer</a>
                        <form action="{{ route('admin.staffs.destroy', $personnel->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre du personnel ?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="small-pagination">
            {{ $personnels->links() }}
        </div>
    </div>
@endsection

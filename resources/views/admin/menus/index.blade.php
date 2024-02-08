@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Menus</h1>
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.menus.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Rechercher..." value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <a href="{{ route('admin.menus.create') }}" class="btn btn-primary">Ajouter un Menu</a>
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->date }}</td>
                    <td>
                        <a href="{{ route('admin.menus.edit', $menu->id) }}" class="btn btn-primary">Éditer</a>
                        <!-- Formulaire de suppression -->
                        <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST"
                              style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce menu ?');">Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $menus->links() }}
    </div>
@endsection

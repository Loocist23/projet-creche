@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gestion des Utilisateurs</h1>
        <table class="table">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <!-- Ajoutez d'autres colonnes si nécessaire -->
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- Liens pour modifier ou supprimer -->
                        <a href="{{ route('admin.users.edit', $user) }}">Modifier</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }} <!-- Pagination -->
    </div>
@endsection

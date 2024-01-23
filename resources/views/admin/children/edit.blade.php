@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier l'Enfant</h1>
        <form method="POST" action="{{ route('admin.children.update', $enfant->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $enfant->name }}" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Date de Naissance:</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ is_string($enfant->birthdate) ? $enfant->birthdate : $enfant->birthdate->format('Y-m-d') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection

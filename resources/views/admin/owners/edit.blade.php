@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Modifier le Parent</h1>
        <form method="POST" action="{{ route('admin.owners.update', ['owner' => $owner->id])  }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="firstname">Prénom:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $owner->firstname }}" required>
            </div>
            <div class="form-group">
                <label for="lastname">Nom de Famille:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $owner->lastname }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $owner->email }}" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Date de Naissance:</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate"
                       value="{{ is_string($owner->birthdate) ? $owner->birthdate : $owner->birthdate->format('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="address">Adresse:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $owner->address }}" required>
            </div>
            <div class="form-group">
                <label for="city">Ville:</label>
                <input type="text" class="form-control" id="city" name="city" value="{{ $owner->city }}" required>
            </div>
            <div class="form-group">
                <label for="zip_code">Code Postal:</label>
                <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ $owner->zip_code }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection

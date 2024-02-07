@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un Nouveau Planning</h1>
        <form method="POST" action="{{ route('admin.plannings.store') }}">
            @csrf

            <div class="form-group">
                <label for="8H-10h">Activités de 8h à 10h:</label>
                <input type="text" class="form-control" id="8H-10h" name="8H-10h" required>
            </div>

            <div class="form-group">
                <label for="10H-12h">Activités de 10h à 12h:</label>
                <input type="text" class="form-control" id="10H-12h" name="10H-12h" required>
            </div>

            <div class="form-group">
                <label for="12H-14h">Activités de 12h à 14h:</label>
                <input type="text" class="form-control" id="12H-14h" name="12H-14h" required>
            </div>

            <div class="form-group">
                <label for="14H-16h">Activités de 14h à 16h:</label>
                <input type="text" class="form-control" id="14H-16h" name="14H-16h" required>
            </div>

            <div class="form-group">
                <label for="16H-18h">Activités de 16h à 18h:</label>
                <input type="text" class="form-control" id="16H-18h" name="16H-18h" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection

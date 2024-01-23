@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un Menu</h1>
        <form method="POST" action="{{ route('admin.menus.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nom du Menu:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="entree">Entrée:</label>
                <input type="text" class="form-control" id="entree" name="entree" required>
            </div>

            <div class="form-group">
                <label for="dish">Plat Principal:</label>
                <input type="text" class="form-control" id="dish" name="dish" required>
            </div>

            <div class="form-group">
                <label for="dessert">Dessert:</label>
                <input type="text" class="form-control" id="dessert" name="dessert" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection

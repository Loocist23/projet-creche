@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le Menu</h1>
        <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom du Menu:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"
                          required>{{ $menu->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="entree">Entrée:</label>
                <input type="text" class="form-control" id="entree" name="entree" value="{{ $menu->entree }}" required>
            </div>

            <div class="form-group">
                <label for="dish">Plat Principal:</label>
                <input type="text" class="form-control" id="dish" name="dish" value="{{ $menu->dish }}" required>
            </div>

            <div class="form-group">
                <label for="dessert">Dessert:</label>
                <input type="text" class="form-control" id="dessert" name="dessert" value="{{ $menu->dessert }}"
                       required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date"
                       value="{{ $menu->date ? \Carbon\Carbon::parse($menu->date)->format('Y-m-d') : '' }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection

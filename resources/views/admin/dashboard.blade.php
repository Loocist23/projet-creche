@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Tableau de Bord Administrateur</h1>
        <div class="row">
            <!-- Ici, vous pouvez ajouter des widgets ou des sections pour différentes fonctionnalités -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Statistiques</div>
                    <div class="card-body">
                        <p>Total d'utilisateurs dans la crèche: {{ $totalUsers }}</p>
                        <p>Total d'enfants dans la crèche actuellement inscrit: {{ $totalEnfants }}</p>
                        <p>Total de parents dans la crèche actuellement inscrit: {{ $totalParents }}</p>
                        <p>Total d'admin dans la creche actuellement inscrit: {{$totalAdmins}}</p>
                        <p>Total de membres du personnel dans la crèche actuellement inscrit: {{ $totalStaffs }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Gestion des Utilisateurs</div>
                    <div class="card-body">
                        <a href="{{ route('admin.users') }}" class="btn btn-primary">Voir les Utilisateurs</a>
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Ajouter un Utilisateur</a>
                    </div>
                    <div class="card-header">Gestion des Enfants</div>
                    <div class="card-body">
                        <a href="{{ route('admin.children.index') }}" class="btn btn-primary">Voir les Enfants</a>
                        <a href="{{ route('admin.children.create') }}" class="btn btn-success">Ajouter un Enfant</a>
                    </div>
                    <div class="card-header">Gestion des Parents</div>
                    <div class="card-body">
                        <a href="{{ route('admin.owners.index') }}" class="btn btn-primary">Voir les Parents</a>
                        <a href="{{ route('admin.owners.create') }}" class="btn btn-success">Ajouter un Parent</a>
                    </div>
                    <div class="card-header">Gestion du Personnel</div>
                    <div class="card-body">
                        <a href="{{ route('admin.staffs.index') }}" class="btn btn-primary">Voir le Personnel</a>
                        <a href="{{ route('admin.staffs.create') }}" class="btn btn-success">Ajouter un Membre du Personnel</a>
                    </div>
                    <div class="card-header">Gestion des Menus</div>
                    <div class="card-body">
                        <a href="{{ route('admin.menus.index') }}" class="btn btn-primary">Voir les Menus</a>
                        <a href="{{ route('admin.menus.create') }}" class="btn btn-success">Ajouter un Menu</a>
                    </div>
                    <div class="card-header">Gestion des Plannings</div>
                    <div class="card-body">
                        <a href="{{ route('admin.plannings.index') }}" class="btn btn-primary">Voir les Plannings</a>
                        <a href="{{ route('admin.plannings.create') }}" class="btn btn-success">Ajouter un Planning</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Autres Outils</div>
                    <div class="card-body">
                        <!-- Autres outils ou fonctionnalités de l'administration -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

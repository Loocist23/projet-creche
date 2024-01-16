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

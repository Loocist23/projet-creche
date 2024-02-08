<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Personnel;
use Illuminate\Http\Request;

class ApiPersonnelsController extends Controller
{
// Liste tous les personnels
    public function index()
    {
        $personnels = Personnel::all();
        return response()->json($personnels);
    }

// Retourne un personnel par son ID, adapté pour une requête POST
    public function getPersonnelById(Request $request)
    {
        // utilise la policy pour vérifier si l'utilisateur peut voir le personnel
        $this->authorize('view', Personnel::class);
        // Récupère l'ID du personnel à partir du corps de la requête POST
        $personnelId = $request->input('id');

        // Trouve le personnel par ID ou retourne une erreur 404 si non trouvé
        $personnel = Personnel::findOrFail($personnelId);

        // Retourne le personnel en JSON
        return response()->json($personnel);
    }

    public function update(Request $request)
    {
        // utilise la policy pour vérifier si l'utilisateur peut mettre à jour le personnel
        $this->authorize('update', Personnel::class);
        // Récupère l'ID du personnel à partir du paramètre de requête 'id'
        $personnelId = $request->query('id');

        // Trouve le personnel par ID ou retourne une erreur 404 si non trouvé
        $personnel = Personnel::findOrFail($personnelId);

        // Met à jour les attributs du personnel avec les données fournies dans la requête
        $personnel->nom = $request->input('nom', $personnel->nom);
        $personnel->prenom = $request->input('prenom', $personnel->prenom);
        $personnel->email = $request->input('email', $personnel->email);
        $personnel->date_naissance = $request->input('date_naissance', $personnel->date_naissance);
        $personnel->adresse = $request->input('adresse', $personnel->adresse);
        $personnel->ville = $request->input('ville', $personnel->ville);
        $personnel->code_postal = $request->input('code_postal', $personnel->code_postal);
        $personnel->telephone = $request->input('telephone', $personnel->telephone);
        $personnel->poste = $request->input('poste', $personnel->poste);

        // Enregistre les modifications dans la base de données
        $personnel->save();

        // Retourne l'objet Personnel mis à jour
        return response()->json($personnel);
    }



    public function destroy(Request $request)
    {
        // utilise la policy pour vérifier si l'utilisateur peut supprimer le personnel
        $this->authorize('delete', Personnel::class);

        // Récupère l'ID du personnel à partir du paramètre de requête 'id'
        $personnelId = $request->query('id');

        // Trouve le personnel par ID et le supprime, sinon retourne une erreur 404
        $personnel = Personnel::findOrFail($personnelId);
        $personnel->delete();

        // Retourne une réponse pour indiquer que la suppression a été effectuée
        return response()->json(['message' => 'Personnel supprimé avec succès']);
    }
}

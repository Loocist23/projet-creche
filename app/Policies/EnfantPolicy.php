<?php

namespace App\Policies;

use App\Models\Enfant;
use App\Models\User;

class EnfantPolicy
{
    /**
     * Determine whether the users can view any models.
     */
    public function viewAny(User $user): bool
    {
        // peut voir tout les enfants que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can view the model.
     */
    public function view(User $user, Enfant $enfant): bool
    {
        // peut voir que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can create models.
     */
    public function create(User $user): bool
    {
        // peut créer que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can update the model.
     */
    public function update(User $user, Enfant $enfant): bool
    {
        // peut modifier que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can delete the model.
     */
    public function delete(User $user, Enfant $enfant): bool
    {
        // peut supprimer que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can restore the model.
     */
    public function restore(User $user, Enfant $enfant): bool
    {
        // peut restaurer que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can permanently delete the model.
     */
    public function forceDelete(User $user, Enfant $enfant): bool
    {
        // peut supprimer définitivement que si c'est un admin
        return $user->role_id === 1;
    }
}

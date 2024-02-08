<?php

namespace App\Policies;

use App\Models\Personnel;
use App\Models\User;

class PersonnelPolicy
{
    /**
     * Determine whether the users can view any models.
     */
    public function viewAny(User $user): bool
    {
        // peut voir tout les personnels que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can view the model.
     */
    public function view(User $user, Personnel $personnel): bool
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
    public function update(User $user, Personnel $personnel): bool
    {
        // peut modifier que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can delete the model.
     */
    public function delete(User $user, Personnel $personnel): bool
    {
        // peut supprimer que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can restore the model.
     */
    public function restore(User $user, Personnel $personnel): bool
    {
        // peut restaurer que si c'est un admin
        return $user->role_id === 1;
    }

    /**
     * Determine whether the users can permanently delete the model.
     */
    public function forceDelete(User $user, Personnel $personnel): bool
    {
        // peut supprimer définitivement que si c'est un admin
        return $user->role_id === 1;
    }
}

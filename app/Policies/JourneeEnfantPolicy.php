<?php

namespace App\Policies;

use App\Models\JourneeEnfant;
use App\Models\User;

class JourneeEnfantPolicy
{
    /**
     * Determine whether the users can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the users can view the model.
     */
    public function view(User $user, JourneeEnfant $journeeEnfant): bool
    {
        //
    }

    /**
     * Determine whether the users can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the users can update the model.
     */
    public function update(User $user, JourneeEnfant $journeeEnfant): bool
    {
        //
    }

    /**
     * Determine whether the users can delete the model.
     */
    public function delete(User $user, JourneeEnfant $journeeEnfant): bool
    {
        //
    }

    /**
     * Determine whether the users can restore the model.
     */
    public function restore(User $user, JourneeEnfant $journeeEnfant): bool
    {
        //
    }

    /**
     * Determine whether the users can permanently delete the model.
     */
    public function forceDelete(User $user, JourneeEnfant $journeeEnfant): bool
    {
        //
    }
}

<?php

namespace App\Policies;

use App\Models\Upload;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class UploadPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->id !== null; // Only logged-in users can view uploads
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Upload $upload): bool
    {
        return $user->id === $upload->user_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->id !== null; // Only logged-in users can create uploads
    }

   


    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Upload $upload): bool
    {
        return $user->id === $upload->user_id
        ? Response::allow()
        : Response::deny('You do not own this upload.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Upload $upload): bool
    {
        return $user->id === $upload->user_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Upload $upload): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Upload $upload): bool
    {
        return $user->isAdmin();
    }
}

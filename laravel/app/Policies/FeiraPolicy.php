<?php

namespace App\Policies;

use App\Models\Feira;
use App\Models\User;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeiraPolicy {

    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(User $user) {

        return UserPermissions::isAuthorized('feiras.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Feira $feira)
    {
        return UserPermissions::isAuthorized('feiras.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('feiras.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Feira $feira)
    {
        return UserPermissions::isAuthorized('feiras.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Feira $feira)
    {
        return UserPermissions::isAuthorized('feiras.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Feira $feira)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Feira $feira)
    {
        //
    }
}

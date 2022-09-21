<?php

namespace App\Policies;

use App\Models\Banca;
use App\Models\User;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class BancaPolicy {

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
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(User $user) {

        return UserPermissions::isAuthorized('bancas.index');
    }
        
    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Banca $banca)
    {
        return UserPermissions::isAuthorized('bancas.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('bancas.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Banca $banca)
    {
        return UserPermissions::isAuthorized('bancas.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Banca $banca)
    {
        return UserPermissions::isAuthorized('bancas.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Banca $banca)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Banca  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Banca $banca)
    {
        //
    }
}

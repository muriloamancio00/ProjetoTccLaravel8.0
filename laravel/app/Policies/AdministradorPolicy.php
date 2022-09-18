<?php

namespace App\Policies;

use App\Models\Administrador;
use App\Models\User;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdministradorPolicy {

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
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(User $user) {

        return UserPermissions::isAuthorized('administradores.index');
    }
        

    public function view(User $user, Administrador $administrador)
    {
        return UserPermissions::isAuthorized('administradores.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('administradores.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Administrador $administrador)
    {
        return UserPermissions::isAuthorized('administradores.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Administrador $administrador)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Administrador $administrador)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Administrador  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Administrador $administrador)
    {
        //
    }
}

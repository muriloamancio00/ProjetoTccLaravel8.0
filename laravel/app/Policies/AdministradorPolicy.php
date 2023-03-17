<?php

namespace App\Policies;

use App\Models\AdministradorModel;
use App\Models\UserModel;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdministradorPolicy {

    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(UserModel $user) {

        return UserPermissions::isAuthorized('administradores.index');
    }


    public function view(UserModel $user, AdministradorModel $administrador)
    {
        return UserPermissions::isAuthorized('administradores.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserModel $user)
    {
        return UserPermissions::isAuthorized('administradores.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserModel $user, AdministradorModel $administrador)
    {
        return UserPermissions::isAuthorized('administradores.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserModel $user, AdministradorModel $administrador)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserModel $user, AdministradorModel $administrador)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\AdministradorModel  $administrador
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserModel $user, AdministradorModel $administrador)
    {
        //
    }
}

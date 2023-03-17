<?php

namespace App\Policies;

use App\Models\BancaModel;
use App\Models\UserModel;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class BancaPolicy {

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
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(UserModel $user) {

        return UserPermissions::isAuthorized('bancas.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserModel $user, BancaModel $banca)
    {
        return UserPermissions::isAuthorized('bancas.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserModel $user)
    {
        return UserPermissions::isAuthorized('bancas.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserModel $user, BancaModel $banca)
    {
        return UserPermissions::isAuthorized('bancas.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserModel $user, BancaModel $banca)
    {
        return UserPermissions::isAuthorized('bancas.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserModel $user, BancaModel $banca)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\BancaModel  $banca
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserModel $user, BancaModel $banca)
    {
        //
    }
}

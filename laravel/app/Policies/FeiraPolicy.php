<?php

namespace App\Policies;

use App\Models\FeiraModel;
use App\Models\UserModel;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeiraPolicy {

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
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(UserModel $user) {

        return UserPermissions::isAuthorized('feiras.index');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserModel $user, FeiraModel $feira)
    {
        return UserPermissions::isAuthorized('feiras.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserModel $user)
    {
        return UserPermissions::isAuthorized('feiras.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserModel $user, FeiraModel $feira)
    {
        return UserPermissions::isAuthorized('feiras.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserModel $user, FeiraModel $feira)
    {
        return UserPermissions::isAuthorized('feiras.destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserModel $user, FeiraModel $feira)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\FeiraModel  $feira
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserModel $user, FeiraModel $feira)
    {
        //
    }
}

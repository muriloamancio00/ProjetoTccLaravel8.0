<?php

namespace App\Policies;

use App\Models\Produto;
use App\Models\User;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy {

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
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(User $user) {

        return UserPermissions::isAuthorized('produtos.index');
    }
        

    public function view(User $user, Produto $produto)
    {
        return UserPermissions::isAuthorized('produtos.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return UserPermissions::isAuthorized('produtos.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Produto $produto)
    {
        return UserPermissions::isAuthorized('produtos.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Produto $produto)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Produto $produto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Produto $produto)
    {
        //
    }
}

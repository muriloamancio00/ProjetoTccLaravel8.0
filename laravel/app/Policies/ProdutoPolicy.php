<?php

namespace App\Policies;

use App\Models\ProdutoModel;
use App\Models\UserModel;
use App\Facades\UserPermissions;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy {

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
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function viewAny(UserModel $user) {

        return UserPermissions::isAuthorized('produtos.index');
    }


    public function view(UserModel $user, ProdutoModel $produto)
    {
        return UserPermissions::isAuthorized('produtos.show');

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserModel  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserModel $user)
    {
        return UserPermissions::isAuthorized('produtos.create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserModel $user, ProdutoModel $produto)
    {
        return UserPermissions::isAuthorized('produtos.edit');

    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserModel $user, ProdutoModel $produto)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserModel $user, ProdutoModel $produto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserModel  $user
     * @param  \App\Models\ProdutoModel  $produto
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserModel $user, ProdutoModel $produto)
    {
        //
    }
}

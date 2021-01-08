<?php

namespace App\Policies;

use App\Producto;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any productos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->admin == 1;
    }

    /**
     * Determine whether the user can view the producto.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function view(User $user, Producto $producto)
    {
        return $user->admin == 1;
    }

    /**
     * Determine whether the user can create productos.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->admin == 1;
        // return in_array( $user->email, [
        //     "wilfredopaizpaz@gmail.com",
        //     "guest@guest.com"
        // ]);
    }

    /**
     * Determine whether the user can update the producto.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function update(User $user, Producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can delete the producto.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function delete(User $user, Producto $producto)
    {
        return $user->admin == 1;
    }

    /**
     * Determine whether the user can restore the producto.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function restore(User $user, Producto $producto)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the producto.
     *
     * @param  \App\User  $user
     * @param  \App\Producto  $producto
     * @return mixed
     */
    public function forceDelete(User $user, Producto $producto)
    {
        //
    }
}

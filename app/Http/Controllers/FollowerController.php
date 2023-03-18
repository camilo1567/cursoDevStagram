<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    public function store(User $user)
    {
        //user es la persona que se esta buscando
        $user->followers()->attach( auth()->user()->id);

        return back();
    }

    public function destroy(User $user)
    {
        //user es la persona que se esta buscando
        $user->followers()->detach( auth()->user()->id);

        return back();
    }
}

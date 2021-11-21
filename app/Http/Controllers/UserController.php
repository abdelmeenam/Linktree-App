<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(User $user)
    {
        // $links = Link::where('user_id', $user->id)->get();
        // $links = $user->links()->get();
        // $links = user::find(1)->links;

        $user = $user->load('links');   //$user contains all user data and links data of specific user
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit()
    {
    }

    public function update(Request $request)
    {
    }
}

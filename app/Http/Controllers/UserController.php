<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        $users =  User::all();
        return $users;
    }

    public function user($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
    }

    public function newUser(Request $request)
    {
        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = $request->password;
        $user ->permission = $request->permission;
        $user->save();
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password = $request->password;
        $user ->permission = $request->permission;
        $user->save();
    }
}

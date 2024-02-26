<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;


class UserController extends Controller
{
    public function getIdtolocal () {
    $user = new User ();
    session_start();
        if (count($user->all()) != 0)
        {
            $user->name = "auto_name".count($user->all());
            $user->email = "auto_".count($user->all());
            $user->password = 1111;
            $user->save();
            $id = $user->get()[count($user->all())-1]->id;
             $_SESSION["user"] = $id;
             return $id;
        }
        else {
            $user->name = "auto_name";
            $user->email = "auto";
            $user->password = 1111;
            $user->save();
            $_SESSION["user"] = 1;
            return 1;
        }
    }
}

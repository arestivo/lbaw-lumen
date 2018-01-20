<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $user = app('db')->select("SELECT * FROM users WHERE id = :id", ['id' => $id])[0];
      return view('user', ['user' => $user]);
    }
}

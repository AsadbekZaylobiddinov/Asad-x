<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\ResponseBody as res;


class UserRepository
{
    public static function Create(Request $request, $writer)
    {
        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
            'password' => $request->input('password'),
            'writer_id' => $writer,
            'role_id' => 1
        ]);

        return $user;
    }

    public static function SelectById($id)
    {
        $user = User::find($id);

        return $user; 
    }

    public static function SelectByPhone($phone)
    {
        $user = User::where('phone_number',$phone)->get();

        return $user;
    }

    public static function Update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update(
            [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
            'password' => $request->input('password'),
            'writer_id' => $request->input('writer_id'),
            'role_id' => $request->input('role_id')
            ]
            );
        return $user;
    }

    public static function Delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return $user;
    }
}
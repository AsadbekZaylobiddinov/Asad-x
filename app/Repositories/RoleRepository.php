<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleRepository
{
    public static function Create(Request $request)
    {
        $role = Role::create([
            'name' => $request->input('name')
        ]);

        return $role;
    }

    public static function SelectById($id)
    {
        $role = Role::find($id);

        return $role;
    }

    public static function SelectAll()
    {
        return Role::all();
    }

    public static function Update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update(
            [
                'name' => $request->input('name')
            ]
            );
        return $role;
    }

    public static function Delete($id)
    {
        $role = Role::find($id);
        $role->delete();

        return $role;
    }
}
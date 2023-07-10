<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Helpers\ResponseBody as res;


class ColorRepository
{
    public static function Create(Request $request)
    {
        $color = Color::create([
            'name' => $request->input('name'),
        ]);

        return $color;
    }

    public static function SelectById($id)
    {
        $color = Color::find($id);

        return $color;
    }

    public static function SelectAll()
    {
        return Color::all();
    }

    public static function Update(Request $request, $id)
    {
        $color = Color::find($id);
        $color->update([
                'name' => $request->input('name')
            ]);
        return $color;
    }

    public static function Delete($id)
    {
        $color = Color::find($id);
        $color->delete();

        return $color;
    }
}
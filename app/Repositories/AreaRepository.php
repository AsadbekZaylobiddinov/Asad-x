<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Helpers\ResponseBody as res;


class AreaRepository
{
    public static function Create(Request $request)
    {
        $area = Area::create([
            'name' => $request->input('name'),
            'city_id' => $request->input('city_id')
        ]);

        return $area;
    }

    public static function SelectById($id)
    {
        $area = Area::find($id);

        return $area;
    }

    public static function SelectAll()
    {
        return Area::all();
    }

    public static function Update(Request $request, $id)
    {
        $area = Area::find($id);
        $area->update([
            'name' => $request->input('name'),
            'city_id' => $request->input('city_id')
            ]);
        return $area;
    }

    public static function Delete($id)
    {
        $area = Area::find($id);
        $area->delete();

        return $area;
    }
}
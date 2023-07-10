<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\City;
use App\Helpers\ResponseBody as res;


class CityRepository
{
    public static function Create(Request $request)
    {
        $city = City::create([
            'name' => $request->input('name')
        ]);

        return $city;
    }

    public static function SelectById($id)
    {
        $city = City::find($id);

        return $city;
    }

    public static function SelectAll()
    {
        return City::all();
    }

    public static function Update(Request $request, $id)
    {
        $city = City::find($id);
        $city->update([
                'name' => $request->input('name')
            ]);
        return $city;
    }

    public static function Delete($id)
    {
        $city = City::find($id);
        $city->delete();

        return $city;
    }
}
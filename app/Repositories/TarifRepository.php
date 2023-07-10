<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Tarif;
use App\Helpers\ResponseBody as res;


class TarifRepository
{
    public static function Create(Request $request)
    {
        $tarif = Tarif::create([
            'price' => $request->input('price'),
            'limit_day' => $request->input('limit_day')
        ]);

        return $tarif;
    }

    public static function SelectById($id)
    {
        $tarif = Tarif::find($id);

        return $tarif;
    }

    public static function SelectAll()
    {
        return Tarif::all();
    }

    public static function Update(Request $request, $id)
    {
        $tarif = Tarif::find($id);
        $tarif->update(
            [
                'price' => $request->input('price'),
                'limit_day' => $request->input('limit_day')
            ]
            );
        return $tarif;
    }

    public static function Delete($id)
    {
        $tarif = Tarif::find($id);
        $tarif->delete();

        return $tarif;
    }
}
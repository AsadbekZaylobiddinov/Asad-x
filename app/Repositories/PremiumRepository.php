<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Premium;
use App\Helpers\ResponseBody as res;


class PremiumRepository
{
    public static function Create(Request $request)
    {
        $premium = Premium::create([
            'product_id' => $request->input('product_id'),
            'tarif_id' => $request->input('tarif_id'),
            'expire_date' => $request->input('expire_date')
        ]);

        return $premium;
    }

    public static function SelectById($id)
    {
        $premium = Premium::find($id);

        return $premium;
    }

    public static function SelectAll()
    {
        return Premium::with('product.image','product.city')->get();
    }

    public static function Update(Request $request, $id)
    {
        $premium = Premium::find($id);
        $premium->update(
            [
            'product_id' => $request->input('product_id'),
            'tarif_id' => $request->input('tarif_id'),
            'expire_date' => $request->input('expire_date')
            ]
            );
        return $premium;
    }

    public static function Delete($id)
    {
        $premium = Premium::find($id);
        $premium->delete();

        return $premium;
    }
}
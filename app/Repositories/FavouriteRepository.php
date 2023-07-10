<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Favourite as Fv;
use App\Helpers\ResponseBody as res;


class FavouriteRepository
{
    public static function Create(Request $request)
    {
        $fv = Fv::create([
            'user_id' => $request->input('user_id'),
            'product_id' => $request->input('product_id')
        ]);

        return $fv;
    }

    public static function SelectById($id)
    {
        $fv = Fv::find($id);

        return $fv;
    }

    public static function SelectAll()
    {
        return Fv::all();
    }

    public static function Update(Request $request, $id)
    {
        $fv = Fv::find($id);
        $fv->update([
                'user_id' => $request->input('user_id'),
                'product_id' => $request->input('product_id')
            ]);
        return $fv;
    }

    public static function Delete($id)
    {
        $fv = Fv::find($id);
        $fv->delete();

        return $fv;
    }
}
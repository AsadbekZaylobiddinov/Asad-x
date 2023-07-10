<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Additional as Add;
use App\Helpers\ResponseBody as res;


class AdditionalRepository
{
    public static function Create(Request $request)
    {
        $add = Add::create([
            'text' => $request->input('text'),
            'product_id' => $request->input('product_id')
        ]);

        return $add;
    }

    public static function SelectById($id)
    {
        $add = Add::find($id);

        return $add;
    }

    public static function SelectAll()
    {
        return Add::all();
    }

    public static function Update(Request $request, $id)
    {
        $add = Add::find($id);
        $add->update([
            'text' => $request->input('text'),
            'product_id' => $request->input('product_id')
            ]);
        return $add;
    }

    public static function Delete($id)
    {
        $add = Add::find($id);
        $add->delete();

        return $add;
    }
}
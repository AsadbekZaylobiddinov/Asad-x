<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Helpers\ResponseBody as res;


class PropertyRepository
{
    public static function Create(Request $request)
    {
        $property = Property::create([
            'key' => $request->input('key'),
            'value' => $request->input('value'),
            'product_id' => $request->input('product_id')
        ]);

        return $property;
    }

    public static function SelectById($id)
    {
        $property = Property::find($id);

        return $property;
    }
    public static function SelectByProductId($id)
    {
        $property = Property::where('product_id',$id)->get();

        return $property;
    }

    public static function SelectAll()
    {
        return Property::all();
    }

    public static function Update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->update(
            [
                'key' => $request->input('key'),
                'value' => $request->input('value'),
                'product_id' => $request->input('product_id')
            ]
            );
        return $property;
    }

    public static function Delete($id)
    {
        $property = Property::find($id);
        $property->delete();

        return $property;
    }
}
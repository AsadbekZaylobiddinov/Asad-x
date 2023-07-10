<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\ProductImage;
use App\Helpers\ResponseBody as res;


class ProductImageRepository
{
    public static function Create(Request $request)
    {
        $img = ProductImage::create([
            'path' => $request->input('path'),
            'product_id' => $request->input('product_id')
        ]);

        return $img;
    }

    public static function SelectById($id)
    {
        $img = ProductImage::find($id);

        return $imt;
    }

    public static function SelectAll()
    {
        return ProductImage::all();
    }

    public static function Update(Request $request, $id)
    {
        $img = ProductImage::find($id);
        $img->update(
            [
                'path' => $request->input('path'),
                'product_id' => $request->input('product_id')
            ]
            );
        return $img;
    }

    public static function Delete($id)
    {
        $img = ProductImage::find($id);
        $img->delete();

        return $img;
    }
}
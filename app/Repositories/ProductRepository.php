<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Helpers\ResponseBody as res;


class ProductRepository
{
    public static function Create(Request $request)
    {
        $product = Product::create([
            'price' => $request->input('price'),
            'title' => $request->input('title'),
            'user_id' => $request->input('user_id'),
            'podcategory_id' => $request->input('podcategory_id'),
            'category_id' => $request->input('category_id'),
            'city_id' => $request->input('city_id'),
            'area_id' => $request->input('area_id')
        ]);

        return $product;
    }

    public static function SelectById($id)
    {
        $product = Product::with('image','city','additional','user','properties','area')->find($id);

        return $product;
    }

    public static function SearchByText($text)
    {
        $products = Product::where('title', 'LIKE', '%'.$text.'%')
                            ->orWhereHas('additional', function($query) use ($text) {
                                $query->where('text', 'LIKE', '%'.$text.'%');
                            })->with('user','image','city')->get();
    
        return $products;
    }
    
    public static function SelectAll()
    {
        return Product::with('image')->get();
    }

    public static function Update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update(
            [
            'price' => $request->input('price'),
            'title' => $request->input('title'),
            'user_id' => $request->input('user_id'),
            'podcategory_id' => $request->input('podcategory_id'),
            'category_id' => $request->input('category_id'),
            'city_id' => $request->input('city_id'),
            'area_id' => $request->input('area_id')
            ]
            );
        return $product;
    }

    public static function Delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return $product;
    }
}
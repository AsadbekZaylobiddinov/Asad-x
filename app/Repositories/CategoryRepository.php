<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Category as C;
use App\Helpers\ResponseBody as res;


class CategoryRepository
{
    public static function Create(Request $request)
    {
        $c = C::create([
            'name' => $request->input('name'),
            'color_id' => $request->input('color_id'),
            'path' => $request->input('path')
        ]);

        return $c;
    }

    public static function SelectById($id)
    {
        $c = C::find($id);

        return $c;
    }

    public static function SelectAll()
    {
        return C::with('pod_category','color')->get();
    }

    public static function Update(Request $request, $id)
    {
        $c = C::find($id);
        $c->update([
            'name' => $request->input('name'),
            'color_id' => $request->input('color_id'),
            'path' => $request->input('path')
            ]);
        return $c;
    }

    public static function Delete($id)
    {
        $c = C::find($id);
        $c->delete();

        return $c;
    }
}
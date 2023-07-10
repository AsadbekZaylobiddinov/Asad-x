<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\PodCategory as Pc;
use App\Helpers\ResponseBody as res;


class PodCategoryRepository
{
    public static function Create(Request $request)
    {
        $pc = Pc::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'path' => $request->input('path')
        ]);

        return $pc;
    }

    public static function SelectById($id)
    {
        $pc = Pc::find($id);

        return $pc;
    }

    public static function SelectAll()
    {
        return Pc::all();
    }

    public static function Update(Request $request, $id)
    {
        $pc = Pc::find($id);
        $pc->update(
            [
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
                'path' => $request->input('path')
            ]
            );
        return $pc;
    }

    public static function Delete($id)
    {
        $pc = Pc::find($id);
        $pc->delete();

        return $pc;
    }
}
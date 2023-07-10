<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Balance as B;
use App\Helpers\ResponseBody as res;


class BalanceRepository
{
    public static function Create(Request $request)
    {
        $b = B::create([
            'amount' => $request->input('amount'),
            'user_id' => $request->input('user_id')
        ]);

        return $b;
    }

    public static function SelectById($id)
    {
        $b = B::find($id);

        return $b;
    }

    public static function SelectAll()
    {
        return B::all();
    }

    public static function Update(Request $request, $id)
    {
        $b = B::find($id);
        $b->update([
            'amount' => $request->input('amount'),
            'user_id' => $request->input('user_id')
            ]);
        return $b;
    }

    public static function Delete($id)
    {
        $b = B::find($id);
        $b->delete();

        return $b;
    }
}
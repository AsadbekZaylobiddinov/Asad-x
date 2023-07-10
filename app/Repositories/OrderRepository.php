<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Helpers\ResponseBody as res;


class OrderRepository
{
    public static function Create(Request $request)
    {
        $order = Order::create([
            'tarif_id' => $request->input('tarif_id'),
            'amount' => $request->input('amount'),
            'user_id' => $request->input('user_id')
        ]);

        return $order;
    }

    public static function SelectById($id)
    {
        $order = Order::find($id);

        return $order;
    }

    public static function SelectAll()
    {
        return Order::all();
    }

    public static function Update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update(
            [
                'tarif_id' => $request->input('tarif_id'),
                'amount' => $request->input('amount'),
                'user_id' => $request->input('user_id')
            ]
            );
        return $order;
    }

    public static function Delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        return $order;
    }
}
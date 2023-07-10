<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Helpers\ResponseBody as res;


class ReviewRepository
{
    public static function Create(Request $request)
    {
        $review = Review::create([
            'body' => $request->input('body'),
            'user_id' => $request->input('user_id'),
            'writer_id' => $request->input('writer_id')
        ]);

        return $review;
    }

    public static function SelectById($id)
    {
        $review = Review::find($id);

        return $review;
    }

    public static function SelectAll()
    {
        return Review::all();
    }

    public static function Update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->update(
            [
            'body' => $request->input('body'),
            'user_id' => $request->input('user_id'),
            'writer_id' => $request->input('writer_id')
            ]
            );
        return $review;
    }

    public static function Delete($id)
    {
        $review = Review::find($id);
        $review->delete();

        return $review;
    }
}
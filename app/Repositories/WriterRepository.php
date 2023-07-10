<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Writer;

class WriterRepository
{
    public static function Create(Request $request)
    {
        $writer = Writer::create([]);

        return $writer;
    }

    public static function SelectById($id)
    {
        $writer = Writer::find($id);

            return $writer;
    }

    public static function SelectAll()
    {
        return Writer::all();
    }

    public static function Update(Request $request, $id)
    {
        $writer = Writer::find($id);
        $writer->update([]);
        return $writer;
    }

    public static function Delete($id)
    {
        $writer = Writer::find($id);
        $writer->delete();

        return $writer;
    }
}
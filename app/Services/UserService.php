<?php

namespace App\Services;

use App\Repositories\UserRepository as UR;
use App\Repositories\WriterRepository as WR;
use Illuminate\Http\Request;
use App\Models\User;
use App\Helpers\ResponseBody as Result;

class UserService
{
    public static function Add(Request $request)
    {
        $user = User::where('phone_number', $request->input('phone_number'))->first();
        if(!$user)
        {
           $writer = WR::Create($request);
           $user = UR::Create($request,$writer->id);
        }
        else{
            throw new Exception('User already exists');
        }

        return $user;
    }

    public static function GetById($id)
    {
        $user = UR::SelectById($id);
        $result;
        if($user != null)
        {
            $result = new Result(200,"User Found",$user);
        }
        else{
            $result = new Result(404,"User not founded",null);
        }

        return response()->json($result);
    }

    public static function GetAll()
    {
        return UR::SelectAll();
    }

}
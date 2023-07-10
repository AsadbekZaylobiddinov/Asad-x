<?php

namespace App\Services;

use App\Repositories\UserRepository as UR;
use App\Helpers\ResponseBody as Result;

class AuthService
{
    public static function CheckUser($phone)
    {
        $result;
        $user = UR::SelectByPhone($phone);

        if(Count($user)>0)
        {
            $result = new Result(200,"User Found",$user);
        }
        else{
            $result  = new Result(404,"Not Found",null);
        }

        return response()->json($result);
        
    } 
}
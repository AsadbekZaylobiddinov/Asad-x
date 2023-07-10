<?php

namespace App\Services;

use App\Repositories\PremiumRepository as PR;
use Illuminate\Http\Request;
use App\Models\Premium;
use App\Helpers\ResponseBody as Result;

class PremiumService
{
public static function GetAll()
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   return new Result(200, 'Success',PR::SelectAll());
}
}
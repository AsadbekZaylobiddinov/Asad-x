<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use App\Helpers\ResponseBody as Result;
use App\Repositories\WriterRepository as WR;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writer = WR::SelectAll();
        $result;
        if($writer != null){
            $result = new Result(200,"Writer Found", $writer);
        }
        else{
            $result = new Result(404,"Not Found", null);
        }
        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $writer = WR::Create($request);

        $result;

        if($writer != null){

            $result = new Result(200,"Writer Found", $writer);

        }
        else{

            $result = new Result(404,"Not Found", null);

        }

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $writer = WR::SelectById($id);
        $result;
        if($writer != null){
            $result = new Result(200,"Writer Found",$writer);
        }
        else{
            $result = new Result(404,"Not Found",$writer);
        }

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $writer = WR::SelectById($id);
        $result;
        if($writer != null){
            $result = WR::Delete($id);
            $result = new Result(200,"Writer deleted",$result);
        }
        else{
            $result = new Result(404,"Writer Not Found", $result);
        }

        return response()->json($result);
    }
}

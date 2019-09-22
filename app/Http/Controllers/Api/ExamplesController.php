<?php

namespace App\Http\Controllers\Api;

use App\Example;
use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    /**
     * 
     * @OA\Get(
     *    path="/examples",
     *    operationId="examplesAll",
     *    tags={"Pages"},
     *    summary="Display a listing of the Resource",
     *    @OA\Parameter(
     *      name="page",
     *      in="query",
     *      description="The page number",
     *      required=false,
     *      @OA\Schema(
     *          type="integer",
     *      ),
     *    ),
     *    @OA\Response(
     *        response="200",
     *        description="Response status Ok"
     *    )
     * )
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $model = Example::query()->paginate(5);
        return response()->json($model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}

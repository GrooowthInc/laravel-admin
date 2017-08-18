<?php

namespace App\Http\Controllers;

class SampleController extends Controller
{    
    /**
     * @SWG\Get(
     *     path="/api/sample/hoge/{hogeID}",
     *     description="hogeを取得する",
     *     produces={"application/json"},
     *     tags={"hoge"},
     *     @SWG\Parameter(
     *         name="hogeID",
     *         description="hogeのID",
     *         in="path",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Parameter error"
     *     ),
     *     @SWG\Response(
     *         response=403,
     *         description="Auth error",
     *     ),
     * )
     */
    public function hoge($userID)
    // public function hoge()
    {
        return response()->json(['hoge' => $userID]);
    }
}

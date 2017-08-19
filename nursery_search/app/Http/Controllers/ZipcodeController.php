<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Input;

class ZipcodeController extends Controller {
    
    /**
     * @SWG\Get(
     *     path="/zip/{officialCode}",
     *     description="市区町村選択",
     *     produces={"application/json"},
     *     tags={"zipcode"},
     *     @SWG\Parameter(
     *         name="officialCode",
     *         description="全国地方公共団体コード(JISX0401、X0402)CD付き",
     *         in="path",
     *         required=true,
     *         type="string"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success"
     *     )
     * )
     */
  // TODO: swaggerのレスポンスの定義
  public function getConditionCity(string $pref_code) : JsonResponse {

    // SQLのログ出力設定
    \DB::connection()->enableQueryLog();
    $zipcodeArr = Zipcode::findCityByPrefCode($pref_code);

    // SQLのログ出力
    \Log::debug(\DB::getQueryLog());

    return response()->json($zipcodeArr);
  }
  
}

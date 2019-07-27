<?php

namespace Kriyar\CambodiaGeographic\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Kriyar\CambodiaGeographic\Models\CityProvince;

class CityProvinceApiController extends Controller
{
  public function index()
  {
    return response()->json(['data' => CityProvince::all()]);
  }

  public function show($province_id)
  {
    return response()->json(['data' => CityProvince::find($province_id)]);
  }
}

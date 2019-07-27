<?php

namespace Kriyar\CambodiaGeographic\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Kriyar\CambodiaGeographic\Models\CityProvince;
use Kriyar\CambodiaGeographic\Models\Disctrict;

class DistrictApiController extends Controller
{
  public function index()
  {
    return response()->json(['data' => Disctrict::all()]);
  }

  public function show($district_id)
  {
    return response()->json(['data' => Disctrict::find($district_id)]);
  }

  public function districtInProvince($province_id)
  {
    return response()->json(['data' => CityProvince::find($province_id)->districts]);
  }
}

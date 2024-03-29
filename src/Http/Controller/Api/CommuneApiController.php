<?php

namespace Kriyar\CambodiaGeographic\Http\Controller\Api;

use App\Http\Controllers\Controller;
use Kriyar\CambodiaGeographic\Models\CityProvince;
use Kriyar\CambodiaGeographic\Models\District;
use Kriyar\CambodiaGeographic\Models\Commune;

class CommuneApiController extends Controller
{
  public function index()
  {
    return response()->json(['data' => Commune::all()]);
  }

  public function show($commune_id)
  {
    return response()->json(['data' => Commune::find($commune_id)]);
  }

  public function communeInDistrict($district_id)
  {
    return response()->json(['data' => District::find($district_id)->communes]);
  }

  public function communeInProvince($province_id)
  {
    $districts = CityProvince::find($province_id)->districts;
    $data = [];
    foreach ($districts as $district) {
      $communes = District::find($district->id)->communes;
      foreach ($communes as $commune) {
        $data[] = $commune;
      }
    }
    return response()->json(['data' => $data]);
  }
}

<?php

namespace Kriyar\CambodiaGeographic\Http\Controller\Api;

use App\Http\Controllers\Controller;
use Kriyar\CambodiaGeographic\Models\CityProvince;
use Kriyar\CambodiaGeographic\Models\District;
use Kriyar\CambodiaGeographic\Models\Commune;
use Kriyar\CambodiaGeographic\Models\Village;

class VillageApiController extends Controller
{
  public function index()
  {
    return response()->json(['data' => Village::all()]);
  }

  public function show($village_id)
  {
    return response()->json(['data' => Village::find($village_id)]);
  }

  public function villageInCommune($commune_id)
  {
    return response()->json(['data' => Commune::find($commune_id)->villages]);
  }

  public function villageInDistrict($district_id)
  {
    $data = [];
    $communes = District::find($district_id)->communes;
    foreach ($communes as $commune) {
      $villages = Commune::find($commune->id)->villages;
      foreach ($villages as $village) {
        $data[] = $village;
      }
    }
    return response()->json(['data' => $data]);
  }

  public function villageInProvince($province_id)
  {
    $districts = CityProvince::find($province_id)->districts;
    $data = [];
    foreach ($districts as $district) {
      $communes = District::find($district->id)->communes;
      foreach ($communes as $commune) {
        $villages = Commune::find($commune->id)->villages;
        foreach ($villages as $village) {
          $data[] = $village;
        }
      }
    }
    return response()->json(['data' => $data]);
  }
}

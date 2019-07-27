<?php

namespace Kriyar\CambodiaGeographic\Models;

use Illuminate\Database\Eloquent\Model;

class CityProvince extends Model
{
  protected $table = 'city_provinces';

  protected $fillable = [
    'name', 'code'
  ];

  /**
  * Get list of district that belong to a city/province
  */
  public function districts()
  {
    return $this->hasMany('Kriyar\CambodiaGeographic\Models\District');
  }
}

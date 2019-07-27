<?php

namespace Kriyar\CambodiaGeographic\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
  protected $table = 'districts';

  protected $fillable = [
    'province_id', 'name', 'code'
  ];

  /**
  * Get city/province that district is associated with
  */
  public function city_province()
  {
    return $this->belongsTo('Kriyar\CambodiaGeographic\Models\CityProvince');
  }

  /**
  * Get list of commune that belong to a district.
  */
  public function communes()
  {
    return $this->hasMany('Kriyar\CambodiaGeographic\Models\Commune');
  }
}

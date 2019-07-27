<?php

namespace Kriyar\CambodiaGeographic\Models;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
  protected $table = 'communes';

  protected $fillable = [
    'district_id', 'name', 'code'
  ];

  /**
  * Get disctrict that commune is associated with
  */
  public function district()
  {
    return $this->belongsTo('Kriyar\CambodiaGeographic\Models\District');
  }

  /**
  * Get list of village that belong to a commune.
  */
  public function villages()
  {
    return $this->hasMany('Kriyar\CambodiaGeographic\Models\Village');
  }
}

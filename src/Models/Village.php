<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
  protected $table = 'villages';

  protected $fillable = [
    'commnune_id', 'name', 'code'
  ];

  /**
  * Get commune that village is associated with
  */
  public function commune()
  {
    return $this->belongsTo('Kriyar\CambodiaGeographic\Models\Commune');
  }
}

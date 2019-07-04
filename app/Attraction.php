<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Attraction extends Model
{
  use SoftDeletes;
  protected $guarded = [];

  public function location()
    {
        return $this->belongsTo('App\Location','location_id');
    }
    public function category()
      {
          return $this->belongsTo('App\Category','category_id');
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Location extends Model
{
  use SoftDeletes;
  protected $guarded = [];

  public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }
}

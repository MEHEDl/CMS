<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class POST extends Model
{
    protected $fillable = [
      'title','description','content','image','published_at'
    ];
}

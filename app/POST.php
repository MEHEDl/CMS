<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class POST extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'title','description','content','image','published_at'
    ];
}

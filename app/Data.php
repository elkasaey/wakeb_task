<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;
class Data extends Eloquent
{
    use SoftDeletes;
    protected $table = 'data';
    protected $dates = ['deleted_at'];
    protected $fillable = [
      "name",
      "image",
      'screen_name',
      "content",
      "description",
      'user_name',
      "date",
      "statuse"
    ];
}

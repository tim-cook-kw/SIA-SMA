<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Role extends Model
{
    use Cachable;
    protected $guarded = [];
}

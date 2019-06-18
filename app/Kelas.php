<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Kelas extends Model
{
    use Cachable;
    protected $guarded = [];
}

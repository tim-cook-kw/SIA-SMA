<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Subject extends Model
{
    use Cachable;
    protected $table = 'mata_pelajaran';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

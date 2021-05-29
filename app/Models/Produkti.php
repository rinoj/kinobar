<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkti extends Model
{
    use HasFactory;
    protected $table = 'produktet';

    public function kategoria(){
        return $this->belongsTo('App\Models\Kategoria');
    }
}

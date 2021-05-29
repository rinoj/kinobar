<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;
    protected $table = 'kategoria';

    public function produktet(){
        return $this->hasMany('App\Models\Produkti');
    }
}

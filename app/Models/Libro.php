<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Editorial;

class Libro extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'autor',
        'editorial',
        'imagen',
        'categoria'
    ];

    public function editorial(){
        return $this->hasOne(Editorial::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vizsgaidopont extends Model
{
    use HasFactory;

    protected $visible = ['id', 'targy', 'tipus', 'kezdes'];

    protected $fillable = ['targy', 'tipus', 'kezdes'];
}

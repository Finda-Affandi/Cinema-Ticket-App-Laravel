<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $table = 'movies';
}

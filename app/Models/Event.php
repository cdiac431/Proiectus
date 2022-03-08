<?php

namespace App\Models;

use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, Loggable;
    protected $table= 'evento';

    //
    protected $fillable = [
        'titulo', 'descripcion', 'fecha',
    ];

    public $timestamps = false;
}

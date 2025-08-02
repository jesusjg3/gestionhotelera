<?php

// app/Models/Mesa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = 'mesas';

    protected $fillable = ['numero', 'capacidad', 'estado'];
}

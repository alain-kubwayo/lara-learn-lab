<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';
    protected $casts = [
        'additionals' => 'array'
    ]; // array to json on saving and json to array on retrival

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'launchData',
        'dimensions',
        'weight',
        'display_size',
        'display_resolution',
        'camera_front',
        'camera_backend'
    ];
}

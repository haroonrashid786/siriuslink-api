<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $casts = [
        'name' => 'string',
        'active' => 'boolean'
    ];
    protected $fillable = ['name', 'active'];
}

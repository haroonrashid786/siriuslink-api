<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLocation extends Model
{
    use HasFactory;
    protected $table = 'user_locations';
    protected $casts = [
        'country' => 'string', 'city' => 'string', 'user_id' => 'integer', 'state' => 'string',
        'location_coord' => 'string', 'location_str' => 'string'
    ];
    protected $fillable = ['country', 'city', 'user_id', 'state', 'location_coord', 'location_str'];
}

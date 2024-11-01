<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;
    protected $table = 'user_services';
    protected $casts = [
        'user_id' => 'integer',
        'service_id' => 'integer',
        'project_id'  => 'integer'
    ];
    protected $fillable = ['project_id', 'user_id', 'service_id'];
}

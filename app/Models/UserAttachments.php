<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAttachments extends Model
{

    use HasFactory;
    protected $casts = [
        'images' => 'string',
        'user_id' => 'integer', 'project_id' => 'integer'
    ];
    protected $fillable = [
        'images', 'user_id', 'project_id'
    ];
}

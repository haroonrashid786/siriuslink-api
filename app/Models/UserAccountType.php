<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountType extends Model
{
    use HasFactory;
    protected $casts = [
        'user_id' => 'integer',
        'account_type_id' => 'integer',
        'project_id' => 'integer'
    ];
    protected $fillable = ['user_id', 'project_id', 'account_type_id'];
}

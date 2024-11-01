<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExpertise extends Model
{
    use HasFactory;
    protected $table = 'user_expertises';
    protected $cats = [
        'user_id' => 'integer',
        'expertise_id' => 'integer',
        'project_id' => 'integer'
    ];
    protected $fillable = ['user_id', 'project_id', 'expertise_id'];
}

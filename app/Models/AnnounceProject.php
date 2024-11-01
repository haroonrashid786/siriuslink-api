<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnounceProject extends Model
{
    use HasFactory;
    protected $casts = [
        'project_title' => 'string',
        'country' => 'string',
        'region' => 'string',
        'project_closing_date' => 'datetime:Y-m-d',
        'project_closing_date' => 'datetime:Y-m-d',
        'show_my_identity' => 'boolean',
        'general_announcer' => 'boolean', 'user_id' => 'integer'

    ];
    protected $fillable = [
        'project_title',
        'country',
        'region',
        'project_announcement_date',
        'project_closing_date',
        'project_description',
        'show_my_identity',
        'general_announcer',
        'user_id'
    ];


    public function user_project_services()
    {
        return $this->hasMany(UserService::class, 'project_id',   'id');
    }

    public function user_project_expertise()
    {
        return $this->hasOne(UserExpertise::class, 'project_id', 'id');
    }

    public function user_project_accountType()
    {
        return $this->hasMany(UserAccountType::class, 'project_id', 'id');
    }
    public function user_project_attachments()
    {
        return $this->hasMany(UserAttachments::class, 'project_id', 'id');
    }
}

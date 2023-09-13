<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    protected $fillable = [
        'project_id', 'donate_method', 'choosen_shift', 'donate_amount', 'user_id', 'donate_item'
    ];

}

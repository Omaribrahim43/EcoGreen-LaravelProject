<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class UserProject extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }

    protected $fillable = [
       'project_id','donate_method', 'choosen_shift', 'donate_amount','user_id','donate_item'
    ];

}

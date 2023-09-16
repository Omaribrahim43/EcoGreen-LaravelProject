<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $fillable = [
        'id', 'title', 'description', 'budget', 'start_day'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function userProject()
    {
        return $this->hasMany(UserProject::class);
    }

}

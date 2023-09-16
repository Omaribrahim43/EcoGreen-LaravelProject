<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quick_helps extends Model
{
    use HasFactory;
    protected $table = "Quick_helps";
    protected $fillable = [
        'id', 'title', 'description', 'budget', 'start_day','image', 'location','user_id','category_id1','category_id2','category_id3' 
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function userProject()
    {
        return $this->belongsTo(UserProject::class);
    }
}

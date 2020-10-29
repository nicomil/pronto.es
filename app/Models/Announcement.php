<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Announcement extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = ["title","body"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

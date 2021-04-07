<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Laravel\Scout\Searchable;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {

         /* $categories = $this->category()->pluck('name')->join(', '); */ 
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body,
             'aaaaa'=>$this->category->name, 
            'other'=>'announcements announcement',
             /* 'catergorias'=>$categories  */
        ];
        

        return $array;  
    }

    // protected $guarded = [];
    protected $fillable = ["title","body"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static public function ToBeRevisionedCount(){
        return Announcement::where('is_accepted',null)->count();
    }

    public function images()
    {
        return $this->hasMany(AnnouncementImage::class);
    }
}

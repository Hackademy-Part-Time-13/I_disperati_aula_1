<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Auth;

class Announcement extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title','category_id','description', 'price', 'image','user_id', 'is_accepted'];

    public function toSearchableArray(){

        $category = $this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=> $category,
        ];

            return $array;
        }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function SetAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Announcement::where('is_accepted', null)->where('user_id', '!=', Auth::id())->count();
   }

   public function images(){
    return $this->hasMany(Image::class);
   }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'detagli', 'name','category_id','motivo','cover_url'];
    
   public function user(){
    return $this->belongsTo("App\User");
    }

    public function category(){
        return $this->belongsTo("App\Category");
    }
    
    public function tags(){
        return $this->belongsToMany("App\Tag");
    }
}

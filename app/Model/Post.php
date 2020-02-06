<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'cat_id', 'title', 'details', 'img',
    ]; 
    public function categories(){
        return $this->hasOne('App\Model\Category');
    }
    
}

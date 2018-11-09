<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //This is just for reference. Only to show how it can be changed
    // actually it changes nothing jus repeats default values
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}

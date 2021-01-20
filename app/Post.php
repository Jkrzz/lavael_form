<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','category_id','image'];
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function gettitleAttribute($value){
        return strtoupper($value);
    }
    // public function getbodyAttribute($value){
    //     return ucfirst($value);
    // }
    public function setBodyAttribute($value){
        $this->attributes['body']=ucwords($value);
    }
    public function scopeLatest($query){
        return $query->orderBy('id','desc')->get();
    }
}
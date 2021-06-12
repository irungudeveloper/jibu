<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = "question";
    protected $fillable = ['question'];
    public $timestamps = false;

    public function answer()
    {
    	return $this->hasOne('App\Models\Answer','question_id','id');
    }

    public function option()
    {
    	return $this->hasMany('App\Models\Options','question_id','id');
    }
}

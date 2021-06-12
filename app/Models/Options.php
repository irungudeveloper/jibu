<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    use HasFactory;

     protected $table = "options";
    protected $fillable = ['option_a','option_b', 'option_c', 'option_d','question_id'];

    public $timestamps = false;

    public function question()
    {
    	return $this->belongsTo('App\ModelsQuestion','id','question_id');
    }

}

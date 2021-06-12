<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submission';

    public $timestamps = false;

    protected $fillable = ['name','email','description','hours','paper','pages'];
}

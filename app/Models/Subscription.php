<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

     protected $table = "subscription";

     public $timestamps = false;

    protected $fillable = [
    						'name',
    						'amount',
    						'status_id'
    					];

}

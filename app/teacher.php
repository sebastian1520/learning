<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\teacher
 *
 * @mixin \Eloquent
 */
class teacher extends Model
{
    public function Course(){
    	return $this->hasMany(Course::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}

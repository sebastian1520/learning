<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\level
 *
 * @mixin \Eloquent
 */
class level extends Model
{
    public function course()
    {
    	return $this->hasOne(Course::class);
    }
}

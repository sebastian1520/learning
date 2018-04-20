<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\category
 *
 * @mixin \Eloquent
 */
class category extends Model
{
    public function course()
    {
    	return $this->hasOne(Course::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\review
 *
 * @mixin \Eloquent
 */
class review extends Model
{

	protected $fillable =['course_id','user_id','rating','comment' ];

    public function course()
    {
    	return $this->belongsTo(Course::class);
    }

    public function user()
	{
		return $this->belongsTo(User::class);
	}    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\goal
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $course_id
 * @property string $goal
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\goal whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\goal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\goal whereGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\goal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\goal whereUpdatedAt($value)
 */
class goal extends Model
{
   	public function  course()
   	{
   		return $this->belongsTo(Course::class);
   	}
}

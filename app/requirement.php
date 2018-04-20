<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\requirement
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $course_id
 * @property string $requirement
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\requirement whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\requirement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\requirement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\requirement whereRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\requirement whereUpdatedAt($value)
 */
class requirement extends Model
{
    public function course()
    {
    	return $this->belongsTo(Course::class);
    }
}

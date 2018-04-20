<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
/**
 * App\course
 *
 * @mixin \Eloquent
 */
class course extends Model
{
    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;

    protected $withCount = ['reviews', 'students'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function pathAttachment()
    {
        return "/images/courses/" . $this->image;
    }

    public function category()
    {
    	return $this->belongsTo(Category::class)->select('id','name');
    }

    public function goals()
    {
    	return $this->hasMany(Goal::class)->select('id', 'course_id', 'goal');
    }

    public function level()
    {
    	return $this->belongsTo(Level::class)->select('id', 'name');
    }

    public function reviews()
    {
    	return $this->hasMany(Review::class)->select('id', 'course_id', 'user_id', 'rating', 'comment', 'created_at');
    }

    public function requirements()
    {
      return $this->hasMany(Requirement::class)->select('id', 'course_id', 'requirement');
    }

    public function students(){
    	return $this->belongsToMany(Student::class);
    }

    public function teacher(){
    	return $this->belongsTo(teacher::class);
    }

    public function getRatingAttribute()
    {
        return $this->reviews->avg('rating');
    }

    public function relatedCourse()
    {
        return Course::with('reviews')->whereCategoryId($this->category->id)
               ->where('id', '!=', $this->id)
               ->latest()
               ->limit(6)
               ->get();
        
    }
}

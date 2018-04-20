<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\student
 *
 * @mixin \Eloquent
 */
class student extends Model
{

	protected $fillable =['user_id','title'];

   	 public function courses()
   	 {
   	 	return $this->belongsToMany(Course::class);
   	 }

   	 public function  user(){
   	 	return $this->belongsTo(User::class)->select('id', 'role_id', 'name', 'email');
   	 }
}

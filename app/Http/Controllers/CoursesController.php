<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
 
 	public function show(Course $course)
 	{
 		$Course	= $course->load([
 			'category' => function($q)
 			{
 				$q->select('id', 'name');
 			},
 			'goals' =>function($q)
 			{
 				$q->select('id','course_id','goal');
 			},
 			'level' => function($q)
 			{
 				$q->select('id', 'name');
 			},
 			'requirements' => function($q)
 			{
				$q->select('id','course_id','requirement'); 				
 			},
 			'teacher',
 			'reviews.user'
 		])->get();
 		
 		$related = $course->relatedCourse();
  		
  		return view('courses.detail', compact('course', 'related'));
  	}
}

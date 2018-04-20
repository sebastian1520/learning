<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use App\Student;
use App\Teacher;
use App\Course;
use App\Level;
use App\Category;
use App\Goal;
use App\Requirement;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Storage::deleteDirectory('courses');
       Storage::deleteDirectory('users');

       Storage::makeDirectory('courses');
       Storage::makeDirectory('users');

       factory(Role::class,1)->create(['name' => 'admin']);
       factory(Role::class,1)->create(['name' => 'teacher']);
       factory(Role::class,1)->create(['name' => 'student']);

       factory(User::class,1)->create([
       	'name' =>'admin',
       	'email' => 'admin@mail.com',
       	'password' => bcrypt('secret'),
       	'role_id' => Role::admin
       ])->each(function (User $user){
       		factory(Student::class,1)->create(['user_id' => $user->id]);
       });

       factory(User::class,50)->create()
       ->each(function (User $user){
       		factory(Student::class,1)->create(['user_id' => $user->id]);
       });

		
       factory(User::class,10)->create()
       ->each(function (User $user){
       		factory(Student::class,1)->create(['user_id' => $user->id]);
       		factory(Teacher::class,1)->create(['user_id' => $user->id]);
       });       

       factory(Level::class,1)->create(['name' => 'Beginner']);
       factory(Level::class,1)->create(['name' => 'Intermediate']);
       factory(Level::class,1)->create(['name' => 'Advanced']);

       factory(Category::class,5)->create();

       factory(Course::class, 40)
       ->create()
       ->each(function (Course $course)
        {
            $course->goals()->saveMany(factory(Goal::class, 2)->create());
            $course->requirements()->saveMany(factory(Requirement::class, 2)->create());
        });
    }
}

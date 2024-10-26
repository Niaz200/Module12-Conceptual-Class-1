<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Profile;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        /*
        Student::factory(5)->create()
        ->each(function ($student){
            $student->profile()->save(Profile::factory()->make());
        });


        */

        
/*
        Student::factory(5)->create()
        ->each(function ($student){
            $student->profile()->save(Profile::factory()->make());

        })
        
        ->each(function ($student){
            $student->comments()->saveMany(Comment::factory(3)->make());
        });


        */


        Subject::factory(3)->create();
        Student::factory(5)->create()
        ->each(function ($student){
            $student->profile()->save(Profile::factory()->make());

        })
        
        ->each(function ($student){
            $student->comments()->saveMany(Comment::factory(3)->make());
        })

        ->each(function ($student){
            $student->subjects()->attach(Subject::all()->random(rand(1,3)));
        });


    }
}

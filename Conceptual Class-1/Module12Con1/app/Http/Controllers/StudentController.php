<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Get All students

        // $students = Student::all();
        // $students = Student::get();
        // $students = Student::first();
        // dd($students);



        // Get students by id 

        //  $students = Student::find(2);
        //  $students = Student::findOrFail(2);
        // dd($students);

        /*
         $students = Student::findOrFail(2);
         $profiles = $students->profile;
        dd($profiles);

        //ata ke lazy loading bole,evabe code korbo na

        */

        /*
        // Getting students with Profile

        $students = Student::with('profile')->get();
        dd($students);

        */

        //One to Many

            // Get All students

            // $students = Student::get();
            // dd($students);


            // Get students by id 

            /*
       
         $students = Student::findOrFail(4);
         $comments = $students->comments;

            dd($comments);

           */ 

           /*

           $students = Student::findOrFail(4);
           $comments = $students->comments;
  
              return response($comments);

              */


         // Getting students with Comments

         /*
         $students = Student::with('comments')->get();

         return response($students);
         */

        /*
        //  $students = Student::with('comments')->get();
         $students = Student::with('comments')->find(1);

        //  return response($students);

         foreach( $students->comments as $comment){
            echo $comment->comment . '<br>';
         }

      */

     

             /*

             $students = Student::with('comments')->get();

                foreach( $students as $student ){
                        foreach( $student->comments as $comment ){
                            echo $comment->comment . '<br>';
                        }
                }

            */



           // Getting students with Subjects  

           /*
        
        //  $students = Student::with('subjects')->find(1);
         $students = Student::with('subjects')->get();

         return response($students);

       
        */

        /*

        // student -> profile, comments, subject

        $students = Student::with('profile', 'comments', 'subjects')->get();
        return response($students);
     
        */

        /*
        //sub query

        $students = Student::with(['subjects' => function($query){

            $query->where('name','Math');
        }])->get();
        return response($students);

        */

        /*

        $students = Student::with(['subjects' => function($query){

            $query->select('name');

        }])->get();

        return response($students);

        */
        
        /*
        
        $students = Student::with(['subjects' => function($query){

            $query->select('name');

        },

        'coments' => function($query){

            $query->select('comment');

        }
        ])->get();

        return response($students);

        */


        //lazy ever loading

        $students = Student::find(1);
        $students->load('profile');
        return response($students);


    }
}

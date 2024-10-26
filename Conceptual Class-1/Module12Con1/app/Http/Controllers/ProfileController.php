<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   

    public function index()
    {
         // Get All profiles
         /*
        $profiles = Profile::get();

        dd($profiles);

        */

        // get Profile by ID

        /*
        $profiles = Profile::find(3);

        dd($profiles);

        */

        /*

        $profiles = Profile::findOrFail(3);

        dd($profiles);

        */

        /*

        $profiles = Profile::find(3);
        $students = $profiles->student;
        dd($students);

          // lazy loading
        //evabe korbo na

        */

        /*

        $profiles = Profile::find(3);
        $students = $profiles->student;
        dd($students->name);

        // lazy loading
        //evabe korbo na

        */

        // Get Profile with Student

        // ever loading, evabe korbo

        /*

        $profiles = Profile::with('student')->get(); 

        dd($profiles);

        */

        $profiles = Profile::with('student')->get(); 

        return response($profiles);


        


    }
    
   
}

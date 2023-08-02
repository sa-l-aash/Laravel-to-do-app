<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    function createNewTask(Request $request) {
        /**
         * validate imput
         * using the validate method 
         * to ensure all values are provided
         */

        //NB: this works on objects to access properties and methods of objects
        $request->validate(
            [
                //NB:this => works on arrays
                //required makes it so that the title should not be null
                'title'=>'required',
                'description'=>'required',
                'deadline'=>'required',
                'isComplete'=>'required'


            ]
        );
        /**
         * create the task using the task model class
         */
        //Task is the model
        $task = Task::create([

        ])
    }
}

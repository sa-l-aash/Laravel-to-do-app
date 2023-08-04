<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    function createNewTask(Request $request) {
        /**
         * validate input
         * using the validate method 
         * to ensure all values are provided
         * and are filled by the user
         */

        //NB: -> this works on objects to access properties and methods of objects
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
        //this is where we directly interact with the DB
        //here we create a record in the task table
        $task = Task::create([

            'title'=> $request -> title,
            'description' => $request ->description,
            'deadline'=> $request -> deadline,
            'isComplete'=> $request -> isComplete
            //the above list is not terminated by a comma coz its the last one
        ]);

        //response to above request

        $task = Task::find($task->id);
        if($task) {
            return response ([
                'message'=> 'success',
                'task' => $task
            ]);

        }else{
            return response([
                'message' => 'success',
                'task' => 'failed'
            ]);

        };
    }
}

<?php
//this is our task model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    //protected makes it such that it can only be accessed within itself
    protected $fillable = [
     //these will be columns
        'title',
        'description',
        'deadline',
        'isComplete',

    ]

}

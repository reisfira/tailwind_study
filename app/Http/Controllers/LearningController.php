<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function grid()
    {
        return view('modules.learning.grid');
    }
}

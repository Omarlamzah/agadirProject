<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
 public function showprogramme(){
    return view("programms");
 }
}

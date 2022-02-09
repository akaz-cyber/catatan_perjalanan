<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatatanController extends Controller
{
  public function perjalanan(){
   return view('user/catatan');


  }
  public function data(){
    return view('user/isidata');


   }
}

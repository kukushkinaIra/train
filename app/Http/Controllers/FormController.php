<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest1;

class FormController extends Controller
{
    public function submit(FormRequest1 $request){
//      $validation = $request -> validate([
//          'email' => 'required|min:30'
//      ]);
    }
}

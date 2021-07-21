<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest1;
use App\Models\Form;

class FormController extends Controller
{
    public function home(){
        return view('home');
    }

    public function thanks(){
        return view('thanks');
    }
    public function submit(FormRequest1 $request){
//      $validation = $request -> validate([
//          'email' => 'required|min:30'
//      ]);
//        dd($request->all());
        $form = new Form();
        $form->email = $request->input('email');
        $form->password = $request->input('password');

        $form->save();

        return redirect()->route('thanks');
    }
}

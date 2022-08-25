<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(FormRequest $form)
    {
        $form = new Form();
        $form->email = $form->input('email');
        $form->password =$form->input('password');

        $form->save();

        return redirect()->route('home-form');
    }

}

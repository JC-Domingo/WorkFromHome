<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');

        return view('posts.index');
    }

    public function create()
    {
    	return view('registration.create');
    }

    public function store(RegistrationForm $form)
    {
        $form->persist();

        session()->flash('message', 'Thanks so much for signing up!');

    	return redirect()->home();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function home()
    {
        return view('general.home');
    }

    public function about()
    {
        return view('general.about');
    }

    public function contact()
    {
        return view('general.contact');
    }
    public function submitContact()
    {
        return redirect()->route('contact')->with('success', 'Сообщение успешно отправлено.');
    }

    public function error()
    {
        return view('general.error');
    }
}

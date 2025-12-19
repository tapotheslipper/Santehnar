<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'text' => 'required|string|min:10',
        ]);
        Contact::create($validated);
        
        return redirect()->route('contact')->with('success', 'Ваше сообщение успешно отправлено.');
    }

    public function error()
    {
        return view('general.error');
    }
}

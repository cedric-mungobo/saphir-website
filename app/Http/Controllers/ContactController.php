<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //



      $data =  $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'message' => 'required|string',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255'
        ]);



        Mail::to('contact@saphirconsultinggroupe.com')->send(
            new ContactMail($data)
        );



        return Inertia::render('success');

        // return to_route()
    }
}

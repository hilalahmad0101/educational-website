<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $country = $request->country;
        $intake = $request->intake;
        $p_course = $request->p_course;
        $sof = $request->sof;

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'intake' => 'required',
            'p_course' => 'required',
            'sof' => 'required',
        ]);

        $contact = Contact::create($validate);
        if ($contact) {
            return redirect('/');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function connexion () {
        return view('connexion');
    }
    public function inscription () {
        return view('inscription');
    }

    public function  modify() {
        return view('modify');
    }
    public function  ajout() {
        return view('ajout');
    }
    public function  contactlist() {
        return view('contact.contactlist');
    }

}

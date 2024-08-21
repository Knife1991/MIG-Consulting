<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function chiSiamo() {
        return view('chisiamo');
    }

    public function formazioneOperativa() {
        return view('formazioneOperativa/formazioneOperativa');
    }

    public function analisiProcessi() {
        return view('formazioneOperativa/analisiprocessi');
    }

    public function formazioneRuolo() {
        return view('formazioneRuolo/formazioneRuolo');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function chiSiamo() {
        return view('chisiamo');
    }

    // Formazione Operativa

    public function formazioneOperativa() {
        return view('formazioneOperativa/formazioneOperativa');
    }

    public function analisiProcessi() {
        return view('formazioneOperativa/analisiprocessi');
    }

    public function performance() {
        return view('formazioneOperativa/performanceKPI');
    }

    public function project() {
        return view('formazioneOperativa/projectManagement');
    }

    public function leanSixSigma() {
        return view('formazioneOperativa/leanSixSigma');
    }
    
    public function tempiEmetodi() {
        return view('formazioneOperativa/tempiEmetodi');
    }

    public function statisticaSPC() {
        return view('formazioneOperativa/statisticaSPC');
    }

    public function metodologiaSMED() {
        return view('formazioneOperativa/metodologiaSMED');
    }

    public function OEE() {
        return view('formazioneOperativa/OEE');
    }

    public function contabilitaIndustriale() {
        return view('formazioneOperativa/contabilitaIndustriale');
    }

    public function DoE() {
        return view('formazioneOperativa/DoE');
    }

    //Formazione di Ruolo

    public function formazioneRuolo() {
        return view('formazioneRuolo/formazioneRuolo');
    }

    public function formazioneLeader() {
        return view('formazioneRuolo/formazioneLeader');
    }
    

    //Consulenza Aziendale

    public function consulenza() {
        return view('consulenza/consulenza-aziendale');
    }

    //Contatti

    public function contatti() {
        return view('contact/contatti');
    }

    public function submit(Request $request){
        $name = $request->input('nome');
        $email = $request->input('email');
        $body = $request->input('body');

        Mail::to($email)->send(new ContactMail($name, $email, $body));

        return redirect()->route('welcome')->with('status','Messaggio inviato, la ricontatteremo al piú presto.');

    }
}

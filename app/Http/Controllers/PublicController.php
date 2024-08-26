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
}

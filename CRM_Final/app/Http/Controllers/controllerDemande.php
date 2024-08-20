<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerDemande extends Controller
{
    public function listeDemande(){
        return view('CRM.commande.listeDemande');
    }
    public function ajoutTier(){
        return view('CRM.commande.ajoutDemande');
    }
}

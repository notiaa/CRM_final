<?php

namespace App\Http\Controllers;

use App\Models\ActeurTier;
use App\Models\EtatTiers;
use App\Models\QualiteTiers;
use App\Models\UniteMonetaire;
use Illuminate\Http\Request;

class controllerTier extends Controller
{
    public function accueil(){
        return view('CRM.tier.listeTier');
    }
    public function detailTier(){
        return view('CRM.tier.detailTier');
    }
    public function ajoutTier(){
        $acteur=ActeurTier::getAllActeurTier();
        $unite=UniteMonetaire::getAllUniteMonetaire();
        $qualite=QualiteTiers::getAllQualiteTiers();
        $etat=EtatTiers::getAllEtatTiers();
        return view('CRM.tier.ajoutTier',compact('acteur','unite','qualite','etat'));
    }
    public function listeEtatTier(){
        return view('CRM.tier.listeEtat');
    }
    public function listeQualite(){
        return view('CRM.tier.listeQualite');
    }
    public function listeUnite(){
        return view('CRM.tier.listeUnite');
    }

}

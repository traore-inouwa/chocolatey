<?php

namespace App\Http\Controllers;

use App\Models\Serveur_cuis;
use Illuminate\Http\Request;

class ServeurController extends Controller
{
    public function cuisinier()
    {


        $serveur_cuiss = Serveur_cuis::all();
        return view('serveur.cuisinier', compact('serveur_cuiss'));
    }


    public function ajout_cm()
    {
        return view('serveur.ajout_cm');
    }

    public function ajout_cm_serveur(Request $request)
    {

        $serveur_cuis =  new Serveur_cuis();
        $serveur_cuis->num_tab = $request->num_tab;
        $serveur_cuis->name_personnel = $request->name_personnel;
        $serveur_cuis->nourriture = $request->nourriture;
        $serveur_cuis->date = $request->date;

        $serveur_cuis->save();

        return redirect('/ajout_cm')->with('status', 'la commande envoyé avec succès');
    }
}


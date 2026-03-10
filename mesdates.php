<?php

namespace UPJV;

class MesDates
{
    public function demain()
    {
        // Calcul de la date de demain
        $dateDemain = date("d-m-Y", strtotime("+1 day"));

        // Création du tableau
        $resultat = [
            "demain" => $dateDemain
        ];

        // Retour au format JSON
        return json_encode($resultat);
    }
}
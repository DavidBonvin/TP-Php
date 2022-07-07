<?php

// 3. Écrire une fonction genererPlacement(array $places, array $listeStag):array qui retourne un tableau associatif 
// de 16 éléments.
// Cette fonction prend en paramètre deux tableaux (la liste des places disponibles et la liste des stagiaires).
// La fonction devra générer un tableau associatif ("Place_X" => "John Doe") ou les places sont attribuer 
// aléatoirement.
// La fonction shuffle() permet de mélanger un tableau.


// 4. Écrire une fonction sauvegarderPlacement($tabPlacement):void qui prend en paramètre le tableau 
// associatif généré par la fonction précédente
// et qui le sauvegarde dans un fichier nommé : save_'datetime'.csv


// function genererPlacement(array $array1, array $array2, array $array3) : array{
//     shuffle($array2);
//     $array = array_combine($array1,$array2,$array3);

//     return $array;
// }
function genererPlacement(array $places, array $listeStag): array
{
    $newTab = []; 
    shuffle($listeStag);
        for ($i = 0; $i < sizeof($listeStag); $i++) {
            array_push($newTab, $places[$i] . " => " . $listeStag[$i] . "\n");
        }
        return $newTab;
    };

//prend en parametre le tableau associatif mélangé et le sauvegarde dans un fichier CSV sur le disque dur dans ./save
//le nom du fichier doit etre sous le format "save_'datetime'.csv"
function sauvegarderPlacement(array $tabPlacement):void{
$date =  date("Y_m_dH_i_s");
$filename = '../modele/save/save_'.$date.'.csv';
$file =fopen($filename, 'w'); 
//le fichier existe ou pas
if ($file === false) {
    die('Error ' .$filename);
}
// Récupération des clés => valeurs pues le écrits dans le fichiers csv
foreach ($tabPlacement as $key => $value) {
    $tabPlacement = array($key,$value);
    fputcsv($file,$tabPlacement, "; "); 
}
fclose($file);
}








?>
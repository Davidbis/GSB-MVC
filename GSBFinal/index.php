<?php

require_once("modele/fct.inc.php");
require_once ("modele/class.pdogsb.inc.php");
include("vues/v_entete.php");
session_start();
// Objet PDO
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if (!isset($_REQUEST['uc']) || !$estConnecte) {
    $_REQUEST['uc'] = 'connexion';
}
$uc = $_REQUEST['uc'];
switch ($uc) {
    case 'connexion': {
            include("controleurs/c_connexion.php");
            break;
        }
    case 'gererFrais' : {
            include("controleurs/c_gererFrais.php");
            break;
        }
    case 'etatFrais' : {
            include("controleurs/c_etatFrais.php");
            break;
        }
    case 'suiviFrais': {
            include("controleurs/c_suiviFrais.php");
            break;
        }
    case 'validerFrais': {
            include("controleurs/c_validerFrais.php");
            break;
        }
}
include("vues/v_pied.php");

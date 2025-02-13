<?php
// Ce code permet de voir les erreurs PHP même sur un serveur en mode production
error_reporting(E_ALL & ~E_DEPRECATED);
ini_set("display_errors", 1);

// On déclare une constante pour protéger le chargement des fichiers inc/*
// Cette méthode est utilisé pour éviter les injections et chargement à distance de bibliothèque
// C'est une méthode simple pour se protéger, au moins un minumum...
define("CHARGE_AUTOLOAD",true);
// Cet include permet de faire l'autoload automatiquement en PHP>5
require_once("inc/poo.inc.php"); 

// index.php est le contrôleur, vous devez ajouter les modèles et vues sous
// la forme de classes dans le répertoire ./class
// le fichier index.php sera à complèter à chaque étape du TP
// il est recommandé de faire un fichier indexN.php pour le contrôleur
// index.php de la question N. Cela vous permettra de voir toutes les étapes.
// Après la question 7, vous pouvez faire un seul fichier index.php qui gère l'auto-soummission des requêtes. 
// La démonstration en ligne utilise l'auto-soumission.

$monDico=new MotsDico("./data/data.txt");
$random= $monDico->getMot(rand(0,1023));

$maVue=new VueMot($random);
echo $maVue -> show();

// Dans l'exemple donné ci-après, index reconnaît 3 ordres et agit en conséquence.
$cmd="";
if (isset($_GET) && isset($_GET['cmd']))
    $cmd=$_GET['cmd'];

// histoire de voir les résultats avec du style
echo "<pre style='color:blue;background-color:orange'>";
switch ($cmd)
  {
   case "lettres" :
      $desLettres=new LesLettres();
      echo $desLettres;
      break;
   case "test" :
      $unTest=new TestVue();
      echo $unTest;
      break;
   case "":
      break;
   default :
      echo "Désolé je ne comprends pas l'ordre [".$cmd."]";
  }
echo "</pre>";
    
echo "
<h1>Démonstration d'utilisation du contrôleur</h1>
<ul>
<li><a href=\"?cmd=lettres\">Afficher un tableau de lettres</a></li>
<li><a href=\"?cmd=test\">Lancer la fonction de TestVue</a></li>
</ul>
<hr/>
";

echo "Fin du contrôleur";
?>
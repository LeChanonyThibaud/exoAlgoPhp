<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h2>FEUILLE EXO II</h2>
    <h3>Exercice 1</h3>
    <?php
     
        function convertirMajRouge($texte){
           
            return "<span style='color:red;'>".mb_strtoupper($texte)."</span>";
        }
        echo convertirMajRouge("Mon texte en paramètre");
    ?>
<h1>EXERCICE 1 Corrigé</h1>
<?php
    function convertirMaj($texte){
        return "<span style='color:red;'>".mb_strtoupper($texte)."</span>";
    }

    echo convertirMaj("Mon texte en paramètre");
    
?>
<br>
<h1>Exercice 2 COrrigé</h1>
    <style>
        table, th, td{
            border-collapse: collapse;
            border: 1px solid black;
        }
    </style>
    <?php
    $capitales = [
        "France"        => "Paris",
        "Allemagne"     => "Berlin",
        "USA"           => "Washington",
        "Italie"        => "Rome",
        "Espagne"       => "Madrid",
        "Portugal"      => "Lisbonne",
        "Liechtenstein" => "Vaduz"
    ];

    function afficherTable($tableau, $wiki = false)
    {
        echo "<table>";
            echo "<tr>",
                    "<th>Pays</th>",
                    "<th>Capitale</th>",
                    $wiki ? "<th>Lien wiki</th>" : "",
                "</tr>";

        foreach($tableau as $cle => $valeur){
            echo "<tr>",
                    "<td>", mb_strtoupper($cle), "</td>",
                    "<td>", $valeur, "</td>",
                    $wiki ? "<td><a target='_blank' href='https://fr.wikipedia.org/wiki/".$valeur."'>Lien</a></td>" : "",
                "</tr>";
        }
        echo "</table>";
    }

    ksort($capitales);
    afficherTable($capitales);

?>

    <h3>Exercice2 et 4</h3>
      
         
                <?php
                
                $pays = array(
                    "France"    =>"Paris",
                    "Allemagne" =>"Berlin",
                    "USA"       =>"Washington",
                    "Italie"    =>"Rome"
                );
                
              

                function afficherTableHTML($pays){
                 
                
                        echo"<table>";
                        echo "<tr>",
                                "<th>Pays</th>",
                                "<th>Capital</th>",
                                "<th>Lien Wiki</th>",
                            "</tr>";
                    foreach($pays as $pays => $capitale){
                    
                       echo "<td>".mb_strtoupper($pays)."</td><td>".$capitale."</td><td> <a href='https://fr.wikipedia.org/wiki/".$capitale."' target='_blank'>lien vers ".$capitale."</a></td><tr>";

                    
                    }

                    echo"</table>";
               
                } 
                ksort($pays);
                afficherTableHTML($pays);
                ?>
     
       <h3>Exercice3 Corrigé</h3>
   
       <a href="https://www.elan-formation.eu/" target="_blank">Elan Formation</a>

       <h1>Exercice 3</h1>
<a href="https://elan-formation.eu" target="_blank">Elan Formation</a>
<br>
<h1>Exercice 4</h1>
<?php
    asort($capitales);
    afficherTableHTML($capitales, true);
?>
<br>
<h1>Exercice 5</h1>

    <?php
        $nomsInput = ["Nom", "Prénom", "Ville", "Téléphone"];

        function afficherInputs($inputs){

            foreach($inputs as $input){
                echo "<p>",
                        "<label for='$input'>", $input, "<br>",
                            "<input type='text' name='", mb_strtolower($input), "' id='$input'>",
                        "</label>",
                    "</p>";
            }
        }

        afficherInputs($nomsInput);

?>
     

       <h3>Exercice5</h3>
       <div>
            <?php
            
                $nomsInput = array("Nom","Prénom","Ville","email");

                function afficherInput($inputs){
            
                    echo "<form>";
                    foreach($inputs as $noms){
                    
                    echo  '<label for="'.$noms.'">'.$noms.' :<br>
                    <input type="text" name="'.mb_strtolower($noms).'" id="'.$noms.'"></label><br>';
                    

                        }
                        echo "</form>";
                    }

            afficherInput($nomsInput);

            ?>
        </div>
        <h3>Exercice6</h3>
          
            <?php
                $elements = array("Monsieur","Madame","Mademoiselle");

            function alimenterListeDeroulante($elements){

               echo '<select name="civilite">';

                foreach($elements as $element){
                    echo '<option value="'.$element.'">'.$element.'</option>';
                }
                echo "</select>";
            }
            alimenterListeDeroulante($elements);
            ?>
           

        <h3>Exercice7</h3>

        <?php
         $choix= array("choix 1"=>"cheked"?"":"checked","choix 2"=>"cheked"?"":"checked","choix 3"=> "cheked"?"":"checked" );

            function genererCheckbox($choix){

           
           echo "<form>";
           
            foreach($choix as $choice => $checked){
               
               echo'<input type="checkbox" name="'.$choice.'" value="'.$checked.'"><label for="'.$choice.'"style="color:black">'.$choice.'</label><br>';

               }
               echo "</form>"; 
        }
            genererCheckbox($choix);
        ?>
        <h3>Exercice 8</h3>
  
        <?php
        $url="http://my.mobirise.com/data/userpic/764.jpg";
        function repeterImage($url, $nbr){
        

           echo str_repeat('<img src="'.$url.'" alt="toutou">',$nbr);
          
        }
        repeterImage($url,4);
        ?>

        <h3>Exercice 8 corrigé</h3>
            <?php

                $url="http://my.mobirise.com/data/userpic/764.jpg";


                function repeterImg($url, $nb){
                        for($i=1;$i<=$nb;$i++){
                            echo"<img src='".$url."' />";
                        }
                    }   
                repeterImg($url,4);

            ?>

       
       <h3>Exercice 9</h3>
        <div>
            <?php
                function afficherRadio($nomsRadio){
                    
                    foreach($nomsRadio as $key => $value){
                        echo "<input id='sexe' type='radio' name='sexe' value='.$key.'><label for='sexe'>$value</label><br>";
                
                    }
                }
                afficherRadio(['Masculin', 'Féminin', 'Autre', 'Extraterrestre']);

                ?>

            </div>
            <h3>Exercice10</h3>
                    <form>
                        <?php
                        
                    $elements = array("Développeur logiciel","Designer web","Intégrateur","chef de projet");

                    function ListeDeroulante($elements){

                            echo "<select>";
                        foreach($elements as $element){
                            echo '<option value="'.$element.'">'.$element.'</option>';
                            }
                        }
                         echo "</select><br>";

                        afficherInput($nomsInput);
                    
                        ListeDeroulante($elements);
                        ?>
                        
                        <input type="submit" value="Envoyer">
                    </form>

                <h3>Exercice 11</h3>

                <?php
                   function formaterDateFr($date){
                       
                    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
                    echo utf8_encode(strftime('%A %d %B %Y', strtotime($date)));
                 
                    return $date;
                   }
                   formaterDateFr("2018-02-23");
                ?>
        <h3>Exercice 12</h3>
        <?php
            $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));

                foreach ($tableauValeurs as $valeur){
                var_dump($valeur);
                echo "<br>";
                }
        ?>
        <h3>Exercice 13</h3>

            <?php
                class Voiture{
                    private $marque ;
                    private $modele ;
                    private $nbPortes ;
                    private $vitesseActuelle=0;
                    private $demarre= false;
                    
                    public function __construct($marque, $modele, $nbPortes){
                        $this->marque =$marque;
                        $this->modele =$modele;
                        $this->nbPortes =$nbPortes;
                        

                        }

                    public function getMarque(){
                        return $this->marque;
                        }
                    public function getModele(){
                        return $this->modele;
                        }
                    public function getNbPortes(){
                        return $this->nbPortes;
                        }
                    public function setMarque($marque){
                        $this->marque = $marque;
                    }
                    public function setModele($modele){
                        $this->modele = $modele;
                    }
                    public function setNbPortes($nbPortes){
                        $this->nbPortes = $nbPortes;
                    }
                    public function demarrer(){
                        $this->demarre= true;
                        echo "La voiture ".$this->marque." ".$this->modele." démarre<br>";
                    }
                    public function accelerer($vitesse){
                        echo "La voiture veut accélérer de ".$vitesse."<br>";
                        if($this->demarre==true){
                           
                        $this->vitesseActuelle+= $vitesse;
                        return "Le véhicule ".$this->marque." ".$this->modele." accélère de ".$this->vitesseActuelle." km/h<br>";
                        }else{
                            echo "La voiture ne peut pas accélerer car elle n'est pas démarré<br>";
                        }
                    }
                    public function ralentir($vitesse){
                        if($this->demarre==true){
                            $this->vitesseActuelle-= $vitesse;
                            return "La vitesse du véhicule ".$this->marque." ".$this->modele." est de ".$this->vitesseActuelle." km/h<br>";
                            }else{
                                echo "Pour accélérer, il faut démarré le véhicule".$this->marque." ".$this->modele."<br>";
                            }
                        }

                    public function getVitesseActuelle($vitesse){
                    
                        return "La vitesse du véhicule ".$this->marque." ".$this->modele." est de ".$vitesse." km/h<br>";

                    }
                
                    public function stopper(){
                        $this->demarre= false;
                        $this->vitesseActuelle= 0;
                        return "La voiture ".$this->marque." ".$this->modele." est stoppé!<br>";
                    }
              
                    public function informations(){

                        if($this->demarre==true){
                            return "Infos Véhicule: <br>Nom et modèle du véhicule: ".$this->marque." ".$this->modele."<br>Nombre de portes : ".$this->nbPortes."<br>Le véhicule ".$this->marque." est démarré<br>";
                        }else{
                            return "Infos Véhicule: <br>Nom et modèle du véhicule: ".$this->marque." ".$this->modele."<br>Nombre de portes : ".$this->nbPortes."<br>Le véhicule ".$this->marque." est à l'arrêt<br>";
                        }
                    
                       
                    }
                }

                $v1 = new Voiture("Porsche","911",3);
                $v2 = new Voiture("Rolls Roys","Ghost",5);
                $v3 = new Voiture("Peugeot","408", 5);
                $v4 = new Voiture("Citroên", "C4", 5);
            
                echo $v3->demarrer();
                echo $v4->accelerer(50);
                echo $v4->demarrer();
                echo $v4->stopper();
                echo $v4->accelerer(20);
                echo $v3->getVitesseActuelle(50);
                echo $v3->informations();
                echo $v4->informations();                
                
                
                
            ?>
    <h3>Exercice 14</h3>

    <?php
    class Car{
        private $marque;
        private $modele;
    
        public function __construct($marque, $modele){
            $this->marque =$marque;
            $this->modele =$modele;
            }
            public function getMarque(){
                return $this->marque;
                }
            public function getModele(){
                return $this->modele;
                }
            public function setMarque($marque){
                $this->marque = $marque;
            }
            public function setModele($modele){
                $this->modele = $modele;
            } 
            public function getInfos(){
                return "La voiture de marque ".$this->marque." est comme modèle une ".$this->modele."<br>";
            }
        }
        class VoitureElec extends Car{
            private $autonomie;

            public function __construct($marque, $modele, $autonomie){
                parent::__construct($marque, $modele);
                $this->autonomie = $autonomie;
                
            }
            public function getAutonomie(){
                return "L'autonomie est de ".$this->getModele()." est de ".$this->autonomie;
                }
            public function setAutonomie($autonomie){
                $this->autonomie = $autonomie;
             
            }
        } 
    
        $car1 = new Car("Peugeot","408");
        $car2 = new VoitureElec("BMW","I3",100);

        echo $car1->getInfos()."<br>";
        echo $car2->getInfos()."<br>";
        echo $car2->getAutonomie()."<br>";
    ?>
    <h3>Exercice 15</h3>
        
    <?php
  $email = "elan@elan-formation.fr";

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse ",$email," est une adresse e-mail valide";
  } else {
    echo "L'adresse ",$email," n'est pas une adresse e-mail valide";
  }

    ?>
       </body>
</html>
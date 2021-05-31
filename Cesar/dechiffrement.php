<?php
    $alphabet = "abcdefghigklmnopqrstuvwxyz";
    $messageChiffrer = $_POST['msgchif'];
    $cledch = $_POST['nmber']; 
    $longueurAlphabet = strlen($alphabet);

    $longeurDuMessageChiffre = strlen($messageChiffrer);
    $chaineChiffree = [];
    $dch = "";

    //echo $longueurAlphabet;
    //echo $longeurDuMessageEnClair;

        // Boucle pour //
    for($i=0; $i<$longeurDuMessageChiffre; $i++){
        
        $j =strpos($alphabet, substr($messageChiffrer, $i, 1));
        $j -= $cledch;

        // echo $j; //

        while($j+1>$longueurAlphabet){
            $j =$j-$longueurAlphabet;
        }
            

        /* echo $alphabet[$j]; */
        $dch = $dch . $alphabet[$j];


    }

    setcookie("cookiedch",$dch,time()+5);
    header('Location:http://cesar.test');

?>
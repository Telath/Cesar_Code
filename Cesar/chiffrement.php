<?php
    $alphabet = "abcdefghigklmnopqrstuvwxyz";
    $messageAChiffrer = $_POST['msgachif'];
    $cle = $_POST['number']; 
    $longueurAlphabet = strlen($alphabet);

    $longeurDuMessageEnClair = strlen($messageAChiffrer);
    $chaineChiffree = [];
    $new = "";

    //echo $longueurAlphabet;
    //echo $longeurDuMessageEnClair;

        // Boucle pour //
    for($i=0; $i<$longeurDuMessageEnClair; $i++){
        
        $j =strpos($alphabet, substr($messageAChiffrer, $i, 1));
        $j += $cle;

        // echo $j; //

        while($j+1>$longueurAlphabet){
            $j =$j-$longueurAlphabet;
        }
            

        /* echo $alphabet[$j]; */
        $new = $new . $alphabet[$j];


    }

    setcookie("cookie",$new,time()+5);
    header('Location:http://cesar.test');

?>
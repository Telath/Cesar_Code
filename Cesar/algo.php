<?php



var_dump($_POST);

if (isset($_POST["alexis"]) && isset($_POST["jules"])){
    echo "alexis et jules sont cochés";
} 

else if (isset($_POST["alexis"]) || isset($_POST["jules"])){
    if (isset($_POST["jules"])){
        echo "C'est jules qui est côché";
    }
    else{
        echo "C'est Alexis qui est côché";
    }
}

else{
    echo "Aucun des deux n'a été coché";
}
/* if ($alexis.checked == true){
   $resultat.value = "Ouverture.."

} else {
    $resultat.value = "Fermeture.."
} */

/* L'un ou l'autre (ou) : test 1 || test 2 */
/* L'un et l'autre : test 1 && test 2 */
?>
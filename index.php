<?php

$caracteres= ["0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

$motpass1 = "eTr";
$motpass2 = "thuh";
$motpass3 = "ddddD";


// Boucle à travers tableau des caractères valides
for($i = 0 ;$i< count($caracteres);$i++){

    // Sous-boucles pour mot de passe à 3 car
    for($j = 0 ;$j< strlen($motpass1);$j++){
        if($motpass1[$j] === $caracteres[$i]){
            $pass1[] = $caracteres[$i];
        }    
    }

    // Sous-boucles pour mot de passe à 4 car
    for($k = 0 ;$k< strlen($motpass2);$k++){
        if($motpass2[$k] === $caracteres[$i]){
            $pass2[] = $motpass2[$k];
        }    
    }

    // Sous-boucles pour mot de passe à 5 car
    for($l = 0 ;$l< strlen($motpass3);$l++){
        if($motpass3[$l] === $caracteres[$i]){
            $pass3[] = $motpass3[$l];
        }    
    }


    
}
        



        // verification de de la validite du motpass1(3 caractéres)
        // Conversion tableau vers texte
    
        $pass1 = implode($pass1);
      
        if(strlen($pass1)===strlen($motpass1)){
            echo "valide <br>";
        }else{
            echo "non valide<br>";
        }   
       
       // verification de de la validite du motpass2(4 caractéres)
        $pass2 = implode($pass2);
     
        if(strlen($pass2)===strlen($motpass2)){
            echo "valide<br> ";
        }else{
            echo "non valide<br>";
        } 

        // verification de de la validite du motpass3(5 caractéres)
        $pass3 = implode($pass3);
       
        if(strlen($pass3)===strlen($motpass3)){
            echo "valide<br> ";
        }else{
            echo "non valide<br>";
        } 
        
        
      
?>
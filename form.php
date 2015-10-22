<?php

    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])){
        
        $subject = trim(htmlspecialchars($_POST["name"]));
        $email = trim(htmlspecialchars($_POST["email"]));
        $message = trim(htmlspecialchars($_POST["message"]));
    }
    //resume
    $to = "contact@biljanamichel.fr";
    $subject = $name;
    $from = $email;
    $message = wordwrap($message, 70);//La fonction wordwrap() permet d'ajouter un retour à la ligne si une ligne dépasse la taille passée en paramètre $message = wordwr
    
    
    
    if(mail($to, $subject, $message, $from)){
        header('Location: message_success.php');
    }
    else{
        header('Location: message_fail.php');
    }
    
    
    

    
    
?>
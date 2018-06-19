<?php

ini_set("display_errors",0);error_reporting(0);

if(isset($_POST["submit"])){
  $options=array(
              "nom" => FILTER_SANITIZE_STRING,
              "mail" => FILTER_VALIDATE_EMAIL,
              "contenumess" => FILTER_SANITIZE_STRING);
  $result=filter_input_array(INPUT_POST, $options);

  $nom=trim($result["nom"]);  //trim oblige à insérer un caractère, et pas des espaces dans le formulaire
  $mail=trim($result["mail"]);
  $message=trim($result["contenumess"]);
// }

// if(isset($_POST['submit'])){
  $nom=$_POST["nom"];
  $mail=$_POST["mail"];
  $message=$_POST["contenumess"];

  $envoi="Message de: $nom \n ";
  $envoi .="Mail: $mail \n";
  $envoi .="Votre message: $message \n";

  mail("sarahklewiec@gmail.com", $nom, $envoi);

  return"message envoyé";
}

    // if (isset($nom) AND !empty($nom)) {
    //   $verif_name="ok";
    // }
    // else{
    //   $verif_name="nok";
    // }
    // if(isset($message) AND !empty($message)){
    //   $verif_message="ok";
    // }
    // else{
    //   $verif_message="nok";
    // }
    // if($verif_name=="ok" AND $verif_message=="ok"){


?>

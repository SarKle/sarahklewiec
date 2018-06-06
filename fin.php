<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Document</title>
</head>
<body>
  <?php
   $nom=$_POST["nom"];
   $mail=$_POST["mail"];
   $message=$_POST["contenumess"];

   $destinataire="sarahklewiec@gmail.com";

   mail("sarahklewiec@gmail.com", $nom, $envoi);

  ?>

  <p class="merci">
    Je vous remercie pour votre message Mme/Mr <?php echo $nom ?> <br>  Je reviens vers vous dans les plus brefs délais. </p>
  <h2> Vos informations: </h2>
  <div class="confirmation">
  <?php echo "<strong> Nom: </strong> $nom";?> <br/>
  <?php echo "<strong> Adresse email: </strong> $mail"; ?> <br/>
  <?php echo "<strong> Votre message: </strong> $message"; ?> <br/>
 </div>
     <div id="retour">
      <form action="index.php" method="post">
       <input type="submit" name="submit" value="Retour au site"/>
     </div>
   </form>



</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <link href="https://fonts.googleapis.com/css?family=Merienda+One|Quintessential|Poppins|Montserrat|Marcellus+SC" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <title>SARAH KLEWIEC - WEB DEVELOPPEUSE</title>
</head>
<body>
  <section class="part_one">
    <div class="moi">
      <h1> Sarah Klewiec </h1>
        <h2> WEB DEVELOPPEUSE </h2>
    </div>
  </section>

  <section class="part_two">
    <div class="title"> QUI SUIS-JE? </div>
      <div class="presentation">
        <div class="paragraphe1">
           Mon parcours professionnel se résume principalement au helpdesk / services clientèle. C'est en travaillant à la coordination de campagnes d'appels, que j'ai découvert le développement web, j'ai donc décidé de me former dans ce domaine, en suivant des formations à distance chez Technofuturtic en html, css, php et javascript, ainsi qu’en me perfectionnant grâce à la formation BeCode Charleroi.
        </div>
        <div class="paragraphe2">
          Je suis, déterminée, autodidacte, super positive, orientée solutions. Passionnée de lecture, de développement personnel, j’aime me fixer de nouveaux objectifs, et tout mettre en oeuvre pour les atteindre.
        </div>
        <div class="paragraphe3">
          Voici les outils que j’utilise:
            <div class="icones">
              <ul class="list_icones">
                <li> <img src="css/images/html5.png" alt="logo html"> </li>
                <li> <img src="css/images/CSS3.png" alt="logo css"> </li>
                <li> <img src="css/images/javascript.png" alt="logo javascript"> </li>
                <li> <img src="css/images/php_mysql.png" alt="logo php"> </li>
                <li> <img src="css/images/wordpress-logo-stacked-rgb.png" alt="logo wordpress"> </li>
                <li> <img src="css/images/jquery.png" alt="logo jquery"> </li>
                <li> <img src="css/images/react.png" alt="logo react"> </li>
              </ul>
            </div>
          </div>
          <div class="photo">
            <img src="css/images/sarah.jpg" alt="photo de Sarah" class="sarah">
          </div>
  </section>

  <section class="part_three">
    <div class="title2"> MON PORTFOLIO </div>
      <div class="contenuthree">
        <div class="site1">
          <a href="https://todolist-sarah.000webhostapp.com/" target="blank">
            <img src="css/images/todolist.png" alt="todolist" class="tl">
              <div class="descr1">
                <h4> TO-DO LIST <i class="far fa-hand-point-left"></i> </h4>
          </a>
                  <div class="description1">
                    To-Do List, réalisée en HTML, CSS, PHP et MY SQL
                  </div>
              </div>
        </div>
        <div class="site2">
          <a href="https://sarahmvc.000webhostapp.com/" target="blank">
            <img src="css/images/didiermotte.png" alt="didiermotte" class="dm">
              <div class="descr2">
                <h4>DIDIER MOTTE <i class="far fa-hand-point-left"></i> </h4>
          </a>
                  <div class="description2">
                    Reproduction du site de Didier Motte, réalisé en HTML, CSS, PHP
                  </div>
              </div>
        </div>
        <!-- <div class="site3">
            <img src="css/images/construction.png" alt="en construction" class="mp">
              <div class="descr3">
                <h4>MUSEE DE LA PHOTOGRAPHIE DE CHARLEROI <i class="far fa-hand-point-left"></i> </h4>
                 <div class="description3">
                    Refonte du site du musée de la photographie de Charleroi. Réalisation Wordpress
                  </div>
              </div>
        </div> -->
  </section>

  <section class="part_four">
    <div class="title3"> CONTACTEZ-MOI </div>
      <div class="contenufour">
        <div class="formulaire">
          <form action="index.php" method="post">
            <div class="nomdiv">
              <label for="nom"> NOM: </label>
                <input type="text" class="nom" name="nom"required>
            </div>
            <div class="maildiv">
              <label for="mail"> MAIL: </label>
                <input type="mail" class="mail" name="mail"required>
            </div>
            <div class="messagediv">
              <label for="message"> MESSAGE: </label> <br/>
                <textarea class="contenumess" name="contenumess" required> </textarea>
            </div>
            <input type="submit" value="Envoyer" name="submit" class="envoi">
          </form>
          <?php include'form.php'; ?>

        </div>
        <div class="reseaux">
          <ul class="liste_reseaux">
            <li><a href="https://www.linkedin.com/in/sarahklewiec/"><i class="fab fa-linkedin fa-4x"></i></a></li>
            <li><a href="https://github.com/sarahklewiec"><i class="fab fa-github fa-4x"></i></a></li>
            <li><a href="mailto:sarahklewiec@gmail.com"><i class="fas fa-envelope fa-4x"></i></a></li>
          </ul>
        </div>
      </div>
  </section>

  <script type="text/javascript" src="controls/app.js"> </script>
  <script type="jquery" src="jquery-2.2.4.js"> </script>
  

</body>
</html>

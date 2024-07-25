<?php

$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$email = $_GET['email'];
$password = $_GET['password'];

$text = 'Lorem ipsum dolor sit amet ciao consectetur adipisicing elit. Magnam, quod porro sint sequi ab et, ipsam consequuntur fugiat animi accusamus, provident repudiandae sapiente ciao tenetur dolor eveniet dolorum! Aut, explicabo exercitationem!';

$lunghezza_testo_originale = strlen($text);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Risultato</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">

    <h1>RISULTATO</h1>

    <div class="container-form">
      <div class="left-form-get">
        <h2>
          Come ti avevo promesso ecco i tuoi dati!
        </h2>
        <h4>Qui puoi trovare i dati che hai inserito</h4>
        <p>
          Il tuo nome è: <?php echo  $nome ?> mentre il tuo cognome è: <?php echo  $cognome ?>.
          La tua e-mail è: <?php echo  $email ?> ed infine la tua password: <?php echo  $password ?>.
        </p>

        <h5>Questo è un paragrafo dinamico e in fondo puoi notare che ho fatto in modo aparissero il numero di caratteri al suo interno</h5>
        <p><?php echo $text ?></p>
        <strong>Questo testo ha <?php echo $lunghezza_testo_originale ?> caratteri</strong>
      </div>

    </div>
  </div>
</body>

</html>
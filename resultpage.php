<?php
//testo input utente
$user_text = $_GET['userText'];
//lunghezza testo input utente
$user_text_length = strlen($user_text);
//la parola da censurare
$bad_word = $_GET['badWord'];
//censuro la bad word dentro user text
$censored_text = str_replace($bad_word, '***', $user_text);
//ricalcolo la lunghezza di testo input utente
$censored_text_length = strlen($censored_text);
?>

<!DOCTYPE html>
<html lang="it-IT">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Luca Polzone" />
  <meta name="description" content="Esercizio - PHP Badwords" />
  <title>Esercizio - PHP Badwords</title>
  <!-- Bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
  <div class="w-50 mx-auto mt-5">
      <div class="col-12">
        <h3>Questa è la tua frase:</h3>
        <h2 class="fw-bold">
          <?php echo $user_text?>
        </h2>
        <h3>La tua frase è lunga <span class="fw-normal"><?php echo $user_text_length ?></span> caratteri</h3>
      </div>
      
      <div class="col-12 mt-5">
        <h3>Questa è la tua frase censurata:</h3>
        <h2 class="fw-bold"><?php echo $censored_text ?></h2>
        <h3>La tua frase è lunga <span class="fw-normal"><?php echo $censored_text_length ?></span> caratteri</h3>
      </div>
  </div>

</body>
</html>
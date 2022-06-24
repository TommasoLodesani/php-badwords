<?php
$testo = "Allora come è andata con la tipa?
Eh, abbastanza bene
Hai pucciato il biscotto, o almeno hai limonato?
No ragazzi, non scherziamo, lei non è una come tutte le altre
Bll be be bll parlaci di lei
Ah, guardate, questa qui è una tipa davvero simpaticissima, in gambissima
Mi ha raccontato delle cose delle sue ferie divertentissime, ma tipo che lei
Era andata là con un sacco di creme dopo sole, poi ha preso un casino di
Sole, si è brucc
Le hai mostrato il popparuolo?
No ma ho buone possibilità
Allora ci vediamo questa sera? Una serata fra amici, una chitarra e uno spinello
Eh, amici, purtroppo no, questa sera sono invitato a casa sua per vedere le diapositive del mare
Delle sue ferie, poi subito dopo devo accompagnare i suoi genitori che devono prendere il treno
Perché sono rimasti senza macchina, l'hanno distrutta, era mia";

$badWord = $_GET['badWord'];
$testo_censored = str_replace($badWord, '***', $testo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Il testo è:  </h1>
<p> <?php echo $testo ?>  </p>
<p>la badWord è <?php echo $badWord ?> </p>
<h3>La lunghezza del testo è di <?php echo strlen($testo) ?> caratteri </h3>

<form action="" method="GET">
    <label for="input">Bad Word</label>
    <input type="text" name="badWord" id="input">
    <button>Censura</button>
</form>

<h1>Il testo censurato è:</h1>
<p><?php echo $testo_censored ?></p>

    
</body>
</html>
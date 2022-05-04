<?php

// 1 creare una variabile con un paragrafo di testo a nostra scelta.
$sectionText = 'Il cammino dell’uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi. 
Benedetto sia colui che nel nome della carità e della buona volontà conduce i deboli attraverso la valle delle tenebre perchè egli è in verita’ il pastore di suo fratello e il ricercatore dei figli smarriti. 
E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno, su coloro che proveranno ad ammorbare ed infine a distruggere i miei fratelli. 
E tu saprai che il mio nome e’ quello del Signore quando farò calare la mia vendetta sopra di te. Ezechiele 25:17';

// 3 Una parola da censurare viene passata dall'utente tramite parametro GET.
$badWord = $_GET['badword'];

// 4 Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi la parola da censurare.
$sectionCensored = str_replace( $badWord, '***', $sectionText );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

<!-- 2 stampare a schermo il paragrafo e la sua lunghezza. -->
<div>
    Il testo da stampare è:
    <p> <?php echo $sectionText; ?> </p>
</div>
<div>
    <p> La sua lunghezza è di <?php echo strlen( $sectionText ) ?> caratteri. </p>
</div>

<!-- 4 Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi la parola da censurare. -->
<div>
    Il testo censurato è:
    <p> <?php echo $sectionCensored; ?> </p>
</div>
<div>
    <p> La sua lunghezza è di <?php echo strlen( $sectionCensored ) ?> caratteri. </p>
</div>
    
</body>
</html>
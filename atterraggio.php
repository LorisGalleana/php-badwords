<?php
$censored = $_POST["censored"];
$paragraph = $_POST["paragraph"];


//lunghezza paragrafo
$para_length = strlen($paragraph);


//parola da censurare
$censored_word = str_replace($censored, '***', $paragraph);

//lunghezza paragrafo censurato
$para_cens_length = strlen($censored_word);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>parola da censurare: <?= $censored?></h2>
        <div class="original-marine">
            <h3>Paragrafo iniziale</h3>
            <div>
                <p>
                    Testo: <?= $paragraph?>
                </p>
                <p>
                    Lunghezza: <?= $para_length?>
                </p>
            </div>
        </div>
        <div class="redacted-marine">
            <h3>Paragrafo classificato</h3>
            <div>
                <p>
                    Testo redatto: <?= $censored_word?>
                </p>
                <p>
                    Nuova lunghezza: <?= $para_cens_length?>
                </p>
            </div>

        </div>
    </div>
</body>
</html>
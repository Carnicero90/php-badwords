<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INTRO</title>
</head>
<body>
    <?php 
        // la frase in $par non ha particolarmente senso, è tanto per avere alcune parole ripetute un tot di volte.
        $par = 'No alla censura, porca vacca! La vacca in India viene considerata un animale sacro. Porca miseria, non sono mai stato in India, cosa da censurare.';
        $censorParam = 'badword';
        $parLen = strlen($par);
        $hidden = $_GET[$censorParam];
        $printedPar = str_ireplace($hidden, '***', $par);
        ?>
    <p style="color: red"><?php echo $printedPar ?></p>
    <p>La frase di cui al paragrafo precedente è lunga <?php echo $parLen ?> caratteri.</p>
    <p>Per censurare il primo paragrafo, usa "<?php echo $censorParam ?>" come parametro GET.</p>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $testo = "From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly was household applauded incommode. Why kept very ever home mrs. Considered sympathize ten uncommonly occasional assistance sufficient not. Letter of on become he tended active enable to. Vicinity relation sensible sociable surprise screened no up as.";

        $censoredWord = $_GET["censoredWord"];

        $testo2 = str_replace($censoredWord, "***", $testo);
    ?>
    <p style="font-size: 2rem;">
        <?php 
            echo $testo;
        ?>
    </p>
    <p style="font-size: 2rem;">
        text legth: 
        <?php echo(strlen($testo)); ?>
    </p> 
    <form action="" method="GET" style="font-size: 2rem;">
        <label for="censored">Parola da censurare</label>
        <input type="text" id="censored" name="censoredWord" style="font-size: 2rem;">
    </form>
    <p style="font-size: 2rem;">
        <?php echo $testo2; ?>
    </p>
    <p style="font-size: 2rem;">
        text legth with censored word: 
        <?php echo(strlen($testo2)); ?>
    </p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="<?php echo $_GET['mode'] ?>">
    
            <?php
                $title='L\'esempio';
                $text='Dove sei, gente Voli via sempre
                    Resta qui un\'istante
                    Se ti perdo morirò
                    Nostalgia, forse
                    Di magie perse
                    Quando tu, gente
                    Mi aiutavi crescere, a vincere';
            ?>
        <h1>
        <?php 
            echo '<pre>Il titolo del brano è:' . $title . PHP_EOL . 
            'il testo del brano è:' . $text . '</pre>';
            $linea1 = 'Esempio di testo semplice...';
            $linea2 = 'Sono andato a capo con PHP';
            echo '<pre>' . $linea1 . PHP_EOL . $linea2 . '</pre>';
        ?>
        </h1>
    </div>
</body>
</html>

<?php 
// Defining my text and variables
$myText = 'I tried so hard and got so far
But in the end, it doesn’t even matter
I had to fall to lose it all
But in the end, it doesn’t even matter. ';
$myName = 'Quack';
$badWord = $_GET['word'];
$myReplacedText = str_replace('end', $badWord, $myText);
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
    
    <h1>Atterraggio su PHP</h1>

    <!-- Initial text -->
    <p>Il mio testo è: <?php echo $myText . $myName?></p>
    <h2>La lunghezza del mio testo è: <?php echo strlen($myText)?></h2>

    <!-- Bad word -->
    <h2>La bad word è: <?php echo $badWord ?></h2>

    <!-- Reprint -->
    <p>Il mio testo censurato è: <?php echo $myReplacedText . $myName?></p>
    <h2>La lunghezza del mio testo è: <?php echo strlen($myReplacedText)?></h2>
</body>
</html>
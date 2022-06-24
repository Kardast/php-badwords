<?php 
// Defining my text and variables
$myText = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia magnam quaerat, dolor ullam, dignissimos tempore doloremque error laboriosam est cupiditate, voluptatem illo corrupti! Reprehenderit quidem inventore esse veritatis sit quos! ';
$myName = 'Sandro';
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
    <p>Il mio testo è: <?php echo $myText . $myName?></p>
    <h2>La lunghezza del mio testo è: <?php echo strlen($myText)?></h2>
</body>
</html>
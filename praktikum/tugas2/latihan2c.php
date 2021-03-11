<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2C</title>
    <style>
        .bola {
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            border-radius: 50px;
            display: inline-block;
            border: 2px solid black;
            font-weight: bold;
            margin-bottom: 3px;
        }
    </style>
</head>
<body>
    <?php 
    function tumpukanBola($bola)
    {
        for($i = 1; $i <= $bola; $i++)
        {
            for($j = 1; $j <= $i; $j++) {
                echo "<div class=bola>$i</div>";
            }
            echo "<br>";
        }
    }

    echo tumpukanBola(5);
    ?>
</body>
</html>
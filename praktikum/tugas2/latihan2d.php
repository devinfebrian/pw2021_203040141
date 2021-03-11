<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php 
    function hitungDeterminan($a, $b, $c, $d) {
        // Tampilan matriksnya
        echo "<table style='border-left:2px solid black; border-right:2px solid black; cellpadding='5' cellspacing='5'>
            <tr>
                <td>$a</td>
                <td>$b</td>
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            </tr>
        </table>";

        // hitung determinannya
        echo "<br>";
        echo "<b>Determinan dari matriks tersebut adalah ". (($a*$d) - ($b*$c)) . "</b>";
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2D</title>
</head>
<body>
    <?= hitungDeterminan(1, 2, 3, 4); ?>
</body>
</html>
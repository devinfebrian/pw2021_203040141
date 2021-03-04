<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .circle {
            background-color: salmon;
            height: 30px;
            width: 30px;
            line-height: 30px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 30px;
            display: inline-block;
            border: 1px solid black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php for ($i = 1; $i <= 3; $i++ ) : ?>
        <?php for ($j = 1; $j <= $i; $j++ ) : ?>
            <div class="circle"><?= $i ?></div>
        <?php endfor; ?>
    <br>
    <?php endfor; ?>
</body>
</html>
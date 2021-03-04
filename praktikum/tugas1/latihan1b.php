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
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <?php 
        $kolom = 1;
        $baris = 1;
    ?>
        <tr>
            <th></th>
            <?php for ($kolom ; $kolom <=5; $kolom++) : ?>
                <th>Kolom <?= $kolom; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($baris = 1; $baris <= 5; $baris++ ) : ?>
        <tr>
            <th>Baris <?= $baris; ?></th>
            <?php for ($kolom =1; $kolom <= 5; $kolom++ ) : ?>
            <td><?= "Baris $baris, Kolom $kolom" ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>

    </table>
</body>
</html>
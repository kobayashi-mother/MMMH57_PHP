<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
    <?php for ($i=1; $i<=9; $i++): ?>
    <tr>
        <?php for ($k=1; $k<=9; $k++): ?>

        <td><?= "$k * $i =". $k*$i ?></td>
        <?php endfor; ?>

    </tr>
    <?php endfor; ?>


</table>

<?php /*
<table >
    <?php for($i=1; $i<=9; $i++): ?>
    <tr>
        <?php for($s=1; $s<=9; $s++):?>
        <td><?= $i*$s ?></td>
        <?php endfor; ?>

    </tr>
    <?php endfor; ?>
</table>
*/ ?>



</body>
</html>
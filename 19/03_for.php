<?php

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <tr>
            <th></th>
            <?php for ($k = 1; $k <= 9; $k++) : ?>
                <th><?= $k ?></th>
            <?php endfor; ?>
        </tr>
        <tr>
            <th>1</th>
            <?php for ($i = 1; $i <= 9; $i++) : ?>
                <?php if (($i % 10) == 9) : ?>
                    <td><?= $i ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $i ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>2</th>
    <?php for ($j = 2; $j <= 18; $j += 2) : ?>
        <?php if (($j % 20) == 18) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>3</th>
    <?php for ($j = 3; $j <= 27; $j += 3) : ?>
        <?php if (($j % 30) == 27) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>4</th>
    <?php for ($j = 4; $j <= 36; $j += 4) : ?>
        <?php if (($j % 40) == 36) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>5</th>
    <?php for ($j = 5; $j <= 45; $j += 5) : ?>
        <?php if (($j % 50) == 45) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>6</th>
    <?php for ($j = 6; $j <= 54; $j += 6) : ?>
        <?php if (($j % 60) == 54) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>7</th>
    <?php for ($j = 7; $j <= 63; $j += 7) : ?>
        <?php if (($j % 70) == 63) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>8</th>
    <?php for ($j = 8; $j <= 72; $j += 8) : ?>
        <?php if (($j % 80) == 72) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
    <th>9</th>
    <?php for ($j = 9; $j <= 81; $j += 9) : ?>
        <?php if (($j % 90) == 81) : ?>
            <td><?= $j ?></td>
        </tr>
        <tr>
        <?php else : ?>
            <td><?= $j ?></td>
        <?php endif; ?>
    <?php endfor; ?>
        </tr>
    </table>
</body>

</html>

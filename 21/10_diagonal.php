<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>二重構造</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <tr>
            <th>00</th>
            <?php for ($k = 1; $k <= 9; $k++) : ?>
                <td><?= sprintf('%02d', $k) ?></td>
            <?php endfor; ?>
        </tr>
        <?php for ($i = 1; $i <= 9; $i++) : ?>
            <tr>
                <td><?= $i . '0' ?></td>
                <?php for ($j = 1; $j <= 9; $j++) : ?>
                    <?php if ($i == $j) : ?>
                        <th>00</th>
                    <?php else : ?>
                        <td><?= $i . $j ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>

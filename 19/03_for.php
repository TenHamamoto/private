<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九表</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>九九表</h1>
    <table>
        <tr>
            <th></th>
            <?php for ($k = 1; $k <= 9; $k++) : ?>
                <th><?= $k ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($i = 1; $i <= 9; $i++) : ?>
        <tr>
            <th><?= $i ?></th>
            <?php for ($j = 1; $j <= 9; $j++) : ?>
                <td><?= $j * $i ?></td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>

</html>

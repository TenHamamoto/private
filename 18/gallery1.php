<?php

const UP_PATH = "uploads/";

if (!empty($_FILES)) {
    if ($_FILES['upfile']['error'] === UPLOAD_ERR_OK) {
        if (
            !move_uploaded_file(
                $_FILES['upfile']['tmp_name'],
                UP_PATH . mb_convert_encoding(basename($_FILES['upfile']['name']), 'cp932', 'utf8')
            )
        ) {
            $messageError = 'アップロードに失敗しました';
        }
    } elseif ($_FILES['upfile']['error'] === UPLOAD_ERR_NO_FILE) {
        // NO DONE
    } else {
        $messageError = 'アップロードに失敗しました';
    }
}

$files   = glob('uploads/*.png');
$replace = ['uploads/', '.png'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像ギャラリー</title>
    <style>
        h1,
        form,
        table {
            width: 800px;
            margin: auto;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 5px;
            text-align: center;
        }

        th {
            background-color: #eee;
        }

        img {
            display: block;
            padding: 3px;
            border: 1px solid #aaa;
            box-shadow: 0 0 8px #ccc;
        }

        img:hover {
            box-shadow: 0 0 8px #ccc, 0 0 12px #669;
        }

        span {
            font-size: 12px;
            font-weight: bold;
        }

        span::after {
            content: " ]";
        }

        span::before {
            content: "[ ";
        }

        .error {
            color: #990000;
        }
    </style>
</head>

<body>
    <h1>画像ギャラリー</h1>
    <form action="" method="post" enctype="multipart/form-data" novalidate>
        <p>
            <input type="file" name="upfile" accept="images/*">
            <input type="submit" value="送信">
        </p>
    </form>
    <?php if (file_exists('uploads/')) : ?>
        <table>
            <tr>
                <th colspan="5">画像一覧</th>
            </tr>
            <tr>
                <?php for ($i = 0; $i < count($files); $i++) : ?>
                    <?php $fileName = mb_convert_encoding(str_replace($replace, '', $files[$i]), 'utf8', 'cp932'); ?>
                    <?php if ($i % 5 == 4) : ?>
                        <td>
                            <img src="<?= UP_PATH . $fileName . '.png' ?>" alt="<?= $fileName ?>" width="200">
                            <span><?=$fileName?></span>
                        </td></tr><tr>
                    <?php else : ?>
                        <td>
                            <img src="<?= UP_PATH . $fileName . '.png' ?>" alt="<?= $fileName ?>" width="200">
                            <span><?=$fileName?></span>
                        </td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        </table>
    <?php else : ?>
        <table>
            <tr>
                <th>画像一覧</th>
            </tr>
            <tr>
                <td>アップロードされたファイルはありません。</td>
            </tr>
        </table>
    <?php endif; ?>
</body>

</html>

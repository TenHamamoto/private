<?php
const IMGS_PATH = 'images/';
if (!empty($_FILES)) {
    if ($_FILES['userfile']['error'] == UPLOAD_ERR_OK) {
        $name = basename($_FILES['userfile']['name']);
        $name = mb_convert_encoding($name, 'cp932', 'utf8');
        $temp = $_FILES['userfile']['tmp_name'];
        $result = move_uploaded_file($temp, IMGS_PATH . $name);
        if ($result == true) {
            $message = 'ファイルをアップロードしました';
        } else {
            $message = 'tmpからimagesへのファイル移動に失敗しました';
        }
    } elseif ($_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE) {
        $message = 'ファイルのアップロードは空送信です';
    } else {
        $message = 'ファイルのアップロードはシステムエラーです';
    }
}
$files = glob('images/*.jpg');
$replace = ['images/', '.jpg'];
?>
<html>
<!-- 省略 -->
<title>アップロードテスト</title>
<style>
    ul {
        padding: 0;
        list-style-type: none;
        display: grid;
        grid-template-columns:
            repeat(auto-fill, minmax(200px, 1fr));
        gap: 15px;
        grid-auto-rows: 200px;
        grid-auto-flow: dense;
    }

    li {
        border: 1px solid #ccc;
        text-align: center;
    }

    li:nth-of-type(4n+2) {
        grid-column: span 2;
        grid-row: span 2;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<body>
    <h1>アップロードテスト</h1>
    <?php if (isset($message)) : ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <form action="" method="post" enctype="multipart/form-data">
        <p>ファイル：<input type="file" name="userfile" accept="images/*"></p>
        <p><input type="submit" value="送信"></p>
    </form>
    <?php if (0 < count($files)) : ?>
        <h2>画像一覧</h2>
        <ul>
            <?php for ($i = 0; $i < count($files); $i++) : ?>
                <?php
                $file = str_replace($replace, '', $files[$i]);
                $file = mb_convert_encoding($file, 'utf8', 'cp932');
                ?>
                <li><img src="images/<?= $file ?>.jpg" alt="<?= $file ?>" width="100"></li>
            <?php endfor; ?>
        </ul>
        </table>
    <?php else : ?>
        <h2>画像一覧</h2>
        <p>ファイルをアップロードしてください</p>
    <?php endif; ?>
</body>

</html>

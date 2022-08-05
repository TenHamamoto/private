<?php

declare(strict_types=1);

require_once dirname(__FILE__) . '/db.inc.php';

try {
    $pdo = dbConnect();

    $title       = '';
    $article     = '';
    $category_id = '';
    $isValidated = false;

    if (!empty($_POST)) {
        $category_id = $_POST['category'];
        $title       = $_POST['title'];
        $article     = $_POST['article'];
        $isValidated = true;

        if ($title === '') {
            $titleError  = 'タイトルを入力してください';
            $isValidated = false;
        } elseif (mb_strlen($title, 'utf8') > 100) {
            $titleError  = 'タイトルは100文字以内で入力してください';
            $isValidated = false;
        }

        if ($article === '' || mb_ereg_match('/^(\s|　)+$/', $article)) {
            $articleError = '記事を入力してください';
            $isValidated  = false;
        }

        if ($isValidated === true) {

            $stmt = $pdo->prepare(
                'INSERT INTO articles (category_id, title, article, created_at) VALUES (:category_id, :title, :article, NOW())'
            );
            $stmt->bindValue(':category_id', (int) $category_id, PDO::PARAM_INT);
            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':article', $article, PDO::PARAM_STR);
            $stmt->execute();

            //カテゴリー名の変換処理
            $sql = 'SELECT * FROM categories WHERE id = :category_id';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
            $stmt->execute();
            $c = $stmt->fetch();
            $category = $c['name'];
        }
    }

    $stmt = $pdo->query('SELECT * FROM categories');
    $categories = $stmt->fetchAll();
} catch (PDOException $e) {
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taro's Blog | 記事の投稿</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>記事の投稿</h1>
        </header>
        <section class="postform">
            <p class="right"><a href="articles.php">記事の一覧に戻る</a></p>
            <?php if ($isValidated == true) : ?>
                <p>以下の内容で記事を保存しました。</p>
                <table>
                    <tr>
                        <th>カテゴリ</th>
                        <td>
                            <?= $category ?>
                        </td>
                    </tr>
                    <tr>
                        <th>タイトル</th>
                        <td>
                            <?= $title ?>
                        </td>
                    </tr>
                    <tr>
                        <th>記事</th>
                        <td>
                            <?= $article ?>
                        </td>
                    </tr>
                </table>
                <p><a href="post_article.php">続けて投稿する</a></p>
            <?php else : ?>
                <p>記事を入力し、送信ボタンを押してください。</p>
                <form action="" method="post">
                    <table>
                        <tr>
                            <th>カテゴリ</th>
                            <td>
                                <select name="category">
                                    <?php foreach ($categories as $category) : ?>
                                        <option value="<?= $category['id'] ?>" <?= $category['id'] == $category_id ? 'selected' : '' ?>><?= h($category['name']) ?></option>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>タイトル</th>
                            <td>
                                <?php if (isset($titleError)) : ?><p class="error"><?= h($titleError) ?></p><?php endif; ?></p>
                                <input type="text" name="title" size="60" value="" />
                            </td>
                        </tr>
                        <tr>
                            <th>記事</th>
                            <td>
                                <?php if (isset($articleError)) : ?><p class="error"><?= nl2br(h($articleError)) ?></p><?php endif; ?></p>
                                <textarea name="article" cols="60" rows="5"></textarea>
                            </td>
                        </tr>
                    </table>
                    <p><input type="submit" value="送信" /></p>
                </form>

        </section>

    </div>
</body>
<?php endif; ?>

</html>

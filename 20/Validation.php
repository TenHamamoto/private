<?php
class Validation
{
    function validName(?string $name): ?string
    {
        if ($name === '') {
            return '※氏名を入力してください';
        } elseif (mb_strlen($name, 'utf8') > 10) {
            return '氏名は10文字以内で入力してください';
        } else {
            return null;
        }
    }

function validAge(?int $age): array
{
  /* 初期化 */
$res['err'] = '';

  if ($age === '') {
    $res['age'] = // 自身で考える
  } elseif (mb_ereg_match('/^(\s|　)+$/', $age)) {
    /* 判定に引っかかっても値をそのまま返す */
    $res['age'] = // 自身で考える
    $res['err'] = // 自身で考える
} else {
    /* 成功時 */
    $res['age'] = // 自身で考える
    $res['err'] = // 自身で考える
}
return $res;
}

if ($age === '' || mb_ereg_match('/^(\s|　)+$/', $age)) {
    $age = null;
    $ageError = '年齢は0以上の数値を入力してください';
    $isValidated = false;
}

}

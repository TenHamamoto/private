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

/* 入力された年齢の判定結果を元に空値かエラーメッセージの配列を返す */
function validAge(?int $age): array
{
  /* 初期化 */
  $res['err'] = '';

  if (/* 空判定 */) {
    $res['age'] = // 自身で考える
  } elseif (/* 年齢判定 */) {
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

    /**
     * フォームから受けたお問い合わせを空と入力判定
     *
     * @param string|null $detail
     * @return string|null
     */
    public function validDetail(?string $detail): ?string
    {
        if ($detail === '' || mb_ereg_match('/^(\s|　)+$/', $detail)) {
            return 'お問い合わせを入力してください';
        } else {
            return null;
        }
    }


}

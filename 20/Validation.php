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
        $res['err'] = '';
        if ($age === '' || mb_ereg_match('/^(\s|　)+$/', $age)) {
        $res['age'] = null;
        } elseif (!is_numeric($age) || $age < 0) {
        $res['age'] = $age;
        $res['err'] = '※年齢は0以上の数値を入力してください';
        } else {
        $res['age'] = $age;
        $res['err'] = '';
        }
        return $res;
    }
}

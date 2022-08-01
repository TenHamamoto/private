<?php
class Validation
{
    /**
     * フォームから受けた名前を空判定
     *
     * @param string|null $name
     * @return string|null
     */
    public function validName(?string $name): ?string
    {
        if ($name === '' || mb_ereg_match('/^(¥s|　)+$/', $name)) {
            return '名前が入力されていません';
        } else {
            return null;
        }
    }

    /**
     * フォームから受けたフリガナを空と入力判定
     *
     * @param string|null $kana
     * @return string|null
     */
    public function validKana(?string $kana): ?string
    {
        if ($kana === '' || mb_ereg_match('/^(\s|　)+$/', $kana)) {
            return 'フリガナを入力してください';
        } elseif (!preg_match('/^[ァ-ヶー]+$/u', $kana)) {
            return 'フリガナの形式が正しくありません';
        } else {
            return null;
        }
    }

    /**
     * フォームから受けたメールを空と入力判定
     *
     * @param string|null $email
     * @return string|null
     */
    public function validEmail(?string $email): ?string
    {
        if ($email === '' || mb_ereg_match('/^(\s|　)+$/', $email)) {
            return 'メールを入力してください';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return '正しいメールを入力してください';
        } else {
            return null;
        }
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

    /**
     * フォームから受けた電話番号を空と入力判定
     *
     * @param string|null $phone
     * @return string|null
     */
    public function validPhone(?string $phone): ?string
    {
        if ($phone === '' || mb_ereg_match('/^(\s|　)+$/', $phone)) {
            return '電話番号を入力してください';
        } elseif (!preg_match('/^0\d{9,10}$/', $phone)) {
            return '電話番号の形式が正しくありません';
        } else {
            return null;
        }
    }




}

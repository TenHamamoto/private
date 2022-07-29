<?php
class ConvertLang
{
    private $totalLang;

    public function __construct($totalLang)
    {
        $this->totalLang = $totalLang;
    }

    /**
     * 2文字の言語記号(ja)によって各国の挨拶に変換
     *
     * @param string $lang
     * @return string|null
     */
    public function getConvertLang(string $lang): ?string
    {
        for ($i = 0; $i < count($this->totalLang); $i++) {
            if ($lang == $this->totalLang[$i]['nation']) {
                return $this->totalLang[$i]['greeting'];
            }
        }
    }

}

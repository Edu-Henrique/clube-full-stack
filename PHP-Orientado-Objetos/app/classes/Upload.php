<?php

namespace app\classes;

use app\traits\ValidationFile;

abstract class Upload
{

    use ValidationFile;

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    protected function extension()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    protected function rename()
    {
        $uniqId = uniqid(true);
        return $uniqId . "." . $this->extension();
    }

    public static function teste()
    {
        return "teste \n";
    }

}
<?php

namespace app\classes;


class Resize
{
    public function resize()
    {
        return "resize";
    }
}


class UploadFile extends Upload
{

    protected $extensions = ["zip", "rar", "pdf"];

    public function __construct($file)
    {
        parent::__construct($file);
        echo "construtor do upload file \n";
    }


    public function upload()
    {
        $resize = new Resize();
        return "Gerou o arquivo {$this->rename()}";
    }
}
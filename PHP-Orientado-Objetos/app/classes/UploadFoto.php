<?php

namespace app\classes;

class UploadFoto extends Upload
{

    public static $propriedade_teste = "propriedade_teste";

    //const PROPRIEDADE_TESTE = "propriedade_teste";

    protected $extensions = ["png", "jpg", "jpeg"];

    public function upload()
    {
        $this->teste();
        return "Gerou a foto {$this->rename()}";
    }
}
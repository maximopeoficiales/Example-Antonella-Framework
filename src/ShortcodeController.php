<?php

namespace MCPTC;

class ShortcodeController
{

    public function __construct()
    {
    }

    public static function index()
    {
        $dato = "esto es un dato :D";
        return view("index", compact("dato"));
    }
}

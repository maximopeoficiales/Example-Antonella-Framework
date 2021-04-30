<?php

namespace MCPTC;

class AdminController
{

    public function __construct()
    {
    }
    public static function index()
    {
        $cambiar_fuente = get_option("cambiar_fuente");
        echo view("form-admin", compact("cambiar_fuente"));
    }
    public static function save()
    {
        update_option("cambiar_fuente", $_POST["cambiar_fuente"]);
    }
    public static function mostrar()
    {
        if (get_option("cambiar_fuente") == "si") {
            echo '
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Krona+One&display=swap");
                html *{font-family: "Krona One", sans-serif;}
            </style>
            ';
        }
    }
}

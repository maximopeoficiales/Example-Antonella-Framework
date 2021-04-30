<?php

namespace MCPTC;

class ContactoController
{

    public function __construct()
    {
    }
    public static function save()
    {
        // mcf7_contact
        // guardando datos de un post type
        $args = [
            "post_type" => "mcf7_contact",
            "post_title" => $_POST["your-name"] . " con email " . $_POST["your-email"],
            "post_status" => "draft",
            "meta_input" => [
                "nombre" => $_POST["your-name"],
                "email" => $_POST["your-email"],
            ]
        ];
        wp_insert_post($args);
    }
}

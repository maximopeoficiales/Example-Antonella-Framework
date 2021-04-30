<?php

namespace MCPTC;

class ComputersController
{
    public function __construct()
    {
    }
    public static function cmb2_sample_metaboxes()
    {
        /**
         * Initiate the metabox
         */
        $cmb = new_cmb2_box(array(
            'id'            => 'test_metabox',
            'title'         => __('Test Metabox', 'cmb2'),
            'object_types'  => array('computer',), // Post type
            'context'       => 'normal',
            'priority'      => 'high',
            'show_names'    => true, // Show field names on the left
            // 'cmb_styles' => false, // false to disable the CMB stylesheet
            // 'closed'     => true, // Keep the metabox closed by default
        ));

        // Regular text field
        $cmb->add_field(array(
            'name'       => __('Test Text', 'cmb2'),
            'desc'       => __('field description (optional)', 'cmb2'),
            'id'         => 'yourprefix_text',
            'type'       => 'text',
            'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
            // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
            // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
            // 'on_front'        => false, // Optionally designate a field to wp-admin only
            // 'repeatable'      => true,
        ));

        // URL text field
        $cmb->add_field(array(
            'name' => __('Website URL', 'cmb2'),
            'desc' => __('field description (optional)', 'cmb2'),
            'id'   => 'yourprefix_url',
            'type' => 'text_url',
            // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
            // 'repeatable' => true,
        ));

        // Email text field
        $cmb->add_field(array(
            'name' => __('Test Text Email', 'cmb2'),
            'desc' => __('field description (optional)', 'cmb2'),
            'id'   => 'yourprefix_email',
            'type' => 'text_email',
            // 'repeatable' => true,
        ));

        // Add other metaboxes as needed
    }
    public  function tablaColumnas($defaults)
    {
        unset($defaults["categories"]);
        unset($defaults["date"]);
        unset($defaults["comments"]);

        $defaults["text_prueba"] = "Texto Prueba";
        $defaults["web"] = "Sitio Web";
        return $defaults;
    }
    public  static function tablaColumnasContenido($colum_name, $post_id)
    {
        if ($colum_name == "web") {
            // va el id de los cmb2
            echo get_post_meta($post_id, "yourprefix_url", true);
        } else if ($colum_name == "text_prueba") {
            echo get_post_meta($post_id, "yourprefix_text", true);
        }
    }
    public static function btnRamdom()
    {
        $html = '<div class="ganador"></div><input type="button" id="boton-ganador" value="elige ganador" />
            <script type="text/javascript">
                var ajaxurl = "' . admin_url("admin-ajax.php") . '";
                var data ={"action":"computer_ramdom"}
                
                jQuery(function($) {
                $("#boton-ganador").on("click",function(e){
                    $.post(ajaxurl, data, function(response) {
                        $(".ganador").text(response);
                    });
                });
                });
            </script>';
        return $html;
    }
    public static function ajaxComputerRamdom()
    {
        $query = new \WP_Query(
            [
                "post_type" => "computer",
                "orderby" => "rand",
                "limit" => "1",
            ]
        );

        die(($query->post->post_title));
    }
    // agregar ordenamiento en columnas admin
    public static function AsignarOrdenacion($columns)
    {
        $columns['text_prueba'] = 'text_prueba_ord';
        $columns['web'] = 'web_ord';

        return $columns;
    }

    public static function OrdenarColumnas($request)
    {
        if (isset($request['post_type']) && 'computer' == $request['post_type']) {
            if (isset($request['orderby']) &&  'text_prueba' == $request['orderby']) {
                $request = array_merge(
                    $request,
                    array(
                        'meta_key' => 'text_prueba',
                        'orderby' => 'meta_value'
                    )
                );
            }
            if (isset($request['orderby']) && 'web' == $request['orderby']) {
                $request = array_merge(
                    $request,
                    array(
                        'meta_key' => 'web',
                        'orderby' => 'meta_value'
                    )
                );
            }
        }
        return $request;
    }
}

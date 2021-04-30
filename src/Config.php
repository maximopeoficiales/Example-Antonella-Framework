<?php

namespace MCPTC;

class Config
{

    /*
    * Plugins option
    * storage in database the option value
    * Array ('option_name'=>'default value')
    * @example ["example_data" => 'foo',]
    * @return void
    */
    public $plugin_options = [
        "cambiar_fuente" => "no"
    ];
    /**
     * Language Option
     * define a unique word for translate call
     */
    public $language_name = 'antonella';
    /**
     * Plugin text prefix
     * define a unique word for this plugin
     */
    public $plugin_prefix = 'ch_nella';
    /**
     * POST data process
     * get the post data and execute the function
     * @example ['post_data'=>'MCPTC::function']
     */
    public $post = [

        "cambiar_fuente" => __NAMESPACE__ . "\AdminController::save",
    ];
    /**
     * GET data process
     * get the get data and execute the function
     * @example ['get_data'=>'MCPTC::function']
     */
    public $get = [];
    /**
     * add_filter data functions
     * @input array
     * @example ['body_class','MCPTC::function',10,2]
     * @example ['body_class',['MCPTC','function'],10,2]
     */
    public $add_filter = [
        // manage_slug_post_colum
        ["manage_computer_posts_columns", [__NAMESPACE__ . '\ComputersController', "tablaColumnas"], 10, 2],

    ];
    /**
     * add_action data functions
     * @input array
     * @example ['body_class','MCPTC::function',10,2]
     * @example ['body_class',['MCPTC','function'],10,2]
     */
    public $add_action = [

        ["cmb2_admin_init", __NAMESPACE__ . '\ComputersController::cmb2_sample_metaboxes', 10, 2],
        ["admin_head", __NAMESPACE__ . '\AdminController::mostrar', 10, 2],
        ["wpcf7_before_send_email", __NAMESPACE__ . '\ContactoController::save', 10, 2],

        ["manage_computer_posts_custom_column", __NAMESPACE__ . '\ComputersController::tablaColumnasContenido', 10, 2],
        
        // computer_ramdom tiene que ser el input
        ["wp_ajax_computer_ramdom", __NAMESPACE__ . '\ComputersController::ajaxComputerRamdom'],
    ];
    /**
     * add custom shortcodes
     * @input array
     * @example [['example','MCPTC\ExampleController::example_shortcode']]
     */
    public $shortcodes = [
        ['hola', __NAMESPACE__ . '\ShortcodeController::index'],
        ['btnramdom', __NAMESPACE__ . '\ComputersController::btnRamdom'],
    ];
    /**
     * add Gutenberg's blocks
     */
    public $gutenberg_blocks = [];
    /**
     * Dashboard

     * @reference: https://codex.wordpress.org/Function_Reference/wp_add_dashboard_widget
     */
    public $dashboard = [
        [
            'slug'      => '',
            'name'      => '',
            'function'  => '', // example: __NAMESPACE__.'\Admin\PageAdmin::DashboardExample',
            'callback'  => '',
            'args'      => '',
        ]

    ];
    /**
     * Files for use in Dashboard
     */
    public $files_dashboard = [];

    /*
    * Plugin menu
    * set your menu option here
    */
    public $plugin_menu = [
        [
            "path"      => ["page"],
            "name"      => "Computer Page",
            "function"  => __NAMESPACE__ . "\AdminController::index",
            "icon"      => "computadora.png",
            "slug"      => "computer-page",
        ]
        /*
        [
            "path"      => ["page"],
            "name"      => "My Custom Page",
            "function"  => __NAMESPACE__."\Admin\PageAdmin::index",
            "icon"      => "antonella-icon.png",
            "slug"      => "my-custom-page",
        ]
        
            [
                "path"      => ["page"],
                "name"      => "My Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
               // "icon"      => "antonella-icon.png",
                "slug"      => "my-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["page"],
                "name"      => "My SECOND Custom Page",
                "function"  => __NAMESPACE__."\Admin::option_page",
                "icon"      => "antonella-icon.png",
                "slug"      => "my-SECOND-custom-page",
                "subpages"  =>
                [
                    [
                        "name"      => "My Custom sub Page",
                        "slug"      => "my-top-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                    [
                        "name"      => "My  Sencond Custom sub Page",
                        "slug"      => "my-second-sub-level-slug-2",
                        "function"  => __NAMESPACE__."\Admin::option_page",
                    ],
                ]
            ],
            [
                "path"      => ["subpage","tools.php"],
                "name"      => "sub page in tools",
                "slug"      => "sub-tools",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ],
            [
                "path"      => ["option"],
                "name"      => "sub page in option",
                "slug"      => "sub-option",
                "function"  => __NAMESPACE__."\Admin::option_page",
            ]
        */
    ];

    /**
     * Custom Post Type
     * for make simple Custom PostType
     * for simple add fill the 7 frist elements
     * for avanced fill
     * https://codex.wordpress.org/Function_Reference/register_post_type
     */

    public $post_types = [
        [
            "singular"      => "Computer",
            "plural"        => "Computers",
            "slug"          => "computer",
            "position"      => 4,
            "taxonomy"      => ['Category'], //['category','category2','category3'],
            "image"         => "computadora.png",
            "gutemberg"     => false,
            //advanced
            /*
            'labels'        => [],
            'args'          => [],
            'rewrite'       => []
            */
        ],
        [
            "singular"      => "Contact",
            "plural"        => "Contacts",
            "slug"          => "mcf7_contact",
            "position"      => 5,
            "taxonomy"      => ['Category'], //['category','category2','category3'],
            "image"         => "contactos.png",
            "gutemberg"     => false,
            //advanced
            /*
            'labels'        => [],
            'args'          => [],
            'rewrite'       => []
            */
        ],
    ];

    /**
     * Taxonomies
     * for make taxonomies
     * for easy add only fill the 5 first elements
     * for avanced methods
     * https://codex.wordpress.org/Function_Reference/register_taxonomy
     */
    public $taxonomies = [
        [
            "post_type"     => "",
            "singular"      => "",
            "plural"        => "",
            "slug"          => "",
            "gutemberg"     => true,
            //advanced
            /*
            "labels"        =>[],
            "args"          =>[],
            "rewrite"       =>[],
            "capabilities"  =>[]
            */
        ]
    ];

    /**
     * Widget
     * For register a Widget please:
     * Console: php antonella Widget "NAME_OF_WIDGET"
     * @input array
     * @example public $widget = [__NAMESPACE__.'\YouClassWidget']  //only the class
     */
    public $widgets = [];
}

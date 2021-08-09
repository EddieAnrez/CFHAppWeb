<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '- Administración - Comisión Fílmica de Huatulco',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'logo' => '<b>Administración</b>',
    'logo_img' => 'storage/cfh_white.jpg',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Comisión Fílmica de Huatulco',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-secondary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'menu' => [
       /*  [
            'text' => 'Buscar',
            'search' => true,
            'topnav' => true,
        ], */
        /*[
            'text' => 'Usuario',
            'topnav_user' => true,
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-fw fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],*/
        [
            'text'        => 'INICIO',
            'route'         => 'config.home',
            'icon'        => 'fas fa-fw fa-home',
            
        ],
        ['header' => 'ADMINISTRADOR', 'can' => 'config.users.index'],
        [
            'text' => 'Usuarios',
            'route'     => 'config.users.index',
            'icon' => 'fas fa-fw fa-users',
            'active' => ['config/users*'],
            'can' => 'config.users.index'
        ],
        [
            'text' => 'Roles',
            'route'  => 'config.roles.index',
            'icon' => 'fas fa-users-cog fa-fw',
            'active' => ['config/roles*'],
            'can' => 'config.roles.index'
            
        ],
        [
            'text' => 'Leyes y Reglamentos',
            'route'  => 'config.regulations.index',
            'icon' => 'fas fa-gavel',
            'can'  => 'config.regulations.index',
            'active' => ['config/regulations*'] 
        ],
      
        [
            'text' => 'Listados',
            'can'  => 'config.categories.index',
            'icon' => 'fas fa-fw fa-list-ol',
            
            
            'submenu' => [
                [
                    'text' => 'Categorías Blog',
                    'icon' => 'fas fa-caret-square-right',
                    'icon_color' => 'blue',
                    'route'  => 'config.categories.index',
                    'can'  => 'config.categories.index',
                    'active' => ['config/categories','config/categories/create']
                ],
                [
                    'text' => 'Categorías Locaciones',
                    'icon' => 'fas fa-caret-square-right',
                    'icon_color' => 'blue',
                    'route'  => 'config.locationCategories.index',
                    'can'  => 'config.locationCategories.index',
                    'active' => ['config/locationCategories*'] 
                ],
                [
                    'text' => 'Áreas Locaciones',
                    'icon' => 'fas fa-caret-square-right',
                    'icon_color' => 'blue',
                    'route'  => 'config.areas.index',
                    'can'  => 'config.areas.index',
                    ' active' => ['config/areas*'] 
                ],
                               
                [
                    'text'    => 'Etiquetas Blog',
                    'icon' => 'fas fa-caret-square-right',
                    'icon_color' => 'blue',
                    'route'     => 'config.tags.index',
                    'can'     => 'config.tags.index',
                    'active' => ['config/tags*']
                ],
                [
                    'text'    => 'Categorías Servicios',
                    'icon' => 'fas fa-caret-square-right',
                    'icon_color' => 'blue',
                    'route'     => 'config.categoriesServices.index',
                    'can'     => 'config.categoriesServices.index',
                    'active' => ['config/categoriesServices*']
                ],
                [
                    'text'    => 'Sub-Categorias Servicios',
                    'icon' => 'fas fa-caret-square-right',
                    'icon_color' => 'blue',
                    'route'     => 'config.subCategoriesServices.index',
                    'can'     => 'config.subCategoriesServices.index',
                    'active' => ['config/subCategoriesServices*']
                ],

            ]
        ],
        [
            'text' => 'Generales',
            'route'  => 'settings',
            'icon' => 'fas fa-cog',
            'can'  => 'settings',
            'active' => ['settings*']
        ],
        [
            'text' => 'Desktop',
            'route'  => 'config.config.create',
            'can'  => 'config.config.create',
            'icon' => 'fas fa-fw fa-rss',
            
        ],
        

        ['header' => 'EDITOR'],
        /* [
            'text' => 'Locaciones',
            'can'  => 'config.locations.index',
            'icon' => 'fas fa-globe-americas',
            
            'submenu' => [

                [
                    'text' => 'Lista de Locaciones',
                    'route'  => 'config.locations.index',
                    'can'  => 'config.locations.index',
                    'icon' => 'fas fa-fw fa-file',
                    'icon_color' => 'yellow',
                ],

                [
                    'text' => 'Crear Locacion',
                    'route'  => 'config.locations.create',
                    'can'  => 'config.locations.create',
                    'icon' => 'fas fa-fw fa-clipboard',
                    'icon_color' => 'yellow',
                ],
                
            ],
        ], */

        [
            'text' => 'Locaciones',
            'route'  => 'config.locations.index',
            'can'  => 'config.locations.index',
            'icon' => 'fas fa-globe-americas',
            'active' => ['config/locations*']
            
        ],


        [
            'text' => 'Formularios de Contacto',
            'route'  => 'config.contacts.index',
            'can'  => 'config.contacts.index',
            'icon' => 'fas fa-phone-alt',
            'active' => ['config/contacts*']
            
        ],
     
      /*   [
            'text' => 'Noticias y Eventos',
            'icon' => 'fas fa-fw fa-rss',
            
            'submenu' => [

                [
                    'text' => 'Crear Post',
                    'route'  => 'config.posts.create',
                    'can'  => 'config.posts.create',
                    'icon_color' => 'yellow',
                    'icon' => 'fas fa-fw fa-clipboard',
                ],
                [
                    'text' => 'Lista de Posts',
                    'route'  => 'config.posts.index',
                    'can'  => 'config.posts.index',
                    'icon' => 'fas fa-fw fa-file',
                    'icon_color' => 'yellow',
                ],
            ],
        ], */
        [
            'text' => 'Posts',
            'route'  => 'config.posts.index',
            'can'  => 'config.posts.index',
            'icon' => 'fas fa-fw fa-rss',
            'active' => ['config/posts*']
            
        ],
      /*   [
            'text' => 'Servicios',
            'can'  => 'config.services.index',
            'icon' => 'fas fa-fw fa-lock',
            
            'submenu' => [

                [
                    'text' => 'Lista de Servicios',
                    'route'  => 'config.services.index',
                    'can'  => 'config.services.index',
                    'icon' => 'fas fa-fw fa-file',
                    'icon_color' => 'yellow',
                ],

                [
                    'text' => 'Crear Servicio',
                    'route'  => 'config.services.create',
                    'can'  => 'config.services.create',
                    'icon' => 'fas fa-fw fa-clipboard',
                    'icon_color' => 'yellow',
                ],
                
            ],
        ], */

        [
            'text' => 'Servicios',
            'route'  => 'config.services.index',
            'can'  => 'config.services.index',
            'icon' => 'fas fa-fw fa-lock',
            'active' => ['config/services*']
            
        ],
        [
            'text' => 'Tramites y Permisos',
            'route'  => 'config.permissions.index',
            'can'  => 'config.permissions.index',
            'icon' => 'fas fa-archive',
            
            'active' => ['config/permissions*']
        ],
        [
            'text' => 'Enlaces de Interés',
            'route'  => 'config.links.index',
            'can'  => 'config.links.index',
            'icon' => 'fas fa-fw fa-link',
            'active' => ['config/links*']
            
        ],
        [
            'text' => 'Estímulos',
            'route'  => 'config.incentives.index',
            'can'  => 'config.incentives.index',
            'icon' => 'fas fa-money-check-alt',
            'active' => ['config/incentives*']
            
        ],
        [
            'text' => 'Videos',
            'route'  => 'config.videos.index',
            'can'  => 'config.videos.index',
            'icon' => 'fas fa-fw fa-video',
            'active' => ['config/videos*']
            
        ],
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    */

    'livewire' => true,
];

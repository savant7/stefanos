<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Title
      |--------------------------------------------------------------------------
      |
      | Here you can change the default title of your admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
      |
     */

    'title' => 'Oregon Main',
    'title_prefix' => '',
    'title_postfix' => '',
    /*
      |--------------------------------------------------------------------------
      | Logo
      |--------------------------------------------------------------------------
      |
      | Here you can change the logo of your admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#62-logo
      |
     */
    'logo' => '<b>Oregon</b>MAIN',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image-xl',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',
    /*
      |--------------------------------------------------------------------------
      | Layout
      |--------------------------------------------------------------------------
      |
      | Here we change the layout of your admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#63-layout
      |
     */
    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    /*
      |--------------------------------------------------------------------------
      | Extra Classes
      |--------------------------------------------------------------------------
      |
      | Here you can change the look and behavior of the admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#64-classes
      |
     */
    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_header' => 'container-fluid',
    'classes_content' => 'container-fluid',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand-md',
    'classes_topnav_container' => 'container',
    /*
      |--------------------------------------------------------------------------
      | Sidebar
      |--------------------------------------------------------------------------
      |
      | Here we can modify the sidebar of the admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#65-sidebar
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
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#66-control-sidebar-right-sidebar
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
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#67-urls
      |
     */
    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    /*
      |--------------------------------------------------------------------------
      | Laravel Mix
      |--------------------------------------------------------------------------
      |
      | Here we can enable the Laravel Mix option for the admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#68-laravel-mix
      |
     */
    'enabled_laravel_mix' => false,
    /*
      |--------------------------------------------------------------------------
      | Menu Items
      |--------------------------------------------------------------------------
      |
      | Here we can modify the sidebar/top navigation of the admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#69-menu
      |
     */
    'menu' => [
        [
            'text' => 'search',
            'search' => true,
            'topnav' => true,
        ],
        [
            'text' => 'blog',
            'url' => 'admin/blog',
            'can' => 'manage-blog',
        ],
        [
            'text' => 'pages',
            'url' => 'admin/pages',
            'icon' => 'far fa-fw fa-file',
            'can' => 'manage-blog',
            'label' => 4,
            'label_color' => 'success',
        ],
        ['header' => 'DASHBOARD'],
        [
            'text' => 'Dashboard',
            'url' => '#',
            'icon' => 'fas fa-fw fa-tachometer-alt',
        ],
        [
            'text' => 'Clients',
            'url' => '#',
            'icon' => 'fas fa-fw fa-user-circle',
            'submenu' => [
                [
                    'text' => 'Client List',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-users',
                ],
                [
                    'text' => 'Add Client',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user-plus',
                ],
            ]
        ],
        [
            'text' => 'Prospects',
            'url' => '#',
            'icon' => 'fas fa-fw fa-user-tie',
            'submenu' => [
                [
                    'text' => 'Prospect List',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-users',
                ],
                [
                    'text' => 'Add Prospect',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user-plus',
                ],
            ]
        ],
        [
            'text' => 'Web Leads',
            'url' => '#',
            'icon' => 'fas fa-fw fa-filter',
            'submenu' => [
                [
                    'text' => 'Web Lead List',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-list',
                ],
                [
                    'text' => 'Add Web Lead',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-folder-plus',
                ],
            ]
        ],
        [
            'text' => 'Contacts',
            'url' => '#',
            'icon' => 'fas fa-fw fa-address-book',
            'submenu' => [
                [
                    'text' => 'Contact List',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user',
                ],
                [
                    'text' => 'Add Contact',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-address-card',
                ],
            ]
        ],
        ['header' => 'Another Heading (Optional)'],
        [
            'text' => 'To Do Lists',
            'url' => '#',
            'icon' => 'fas fa-fw fa-clipboard-list',
            'submenu' => [
                [
                    'text' => 'Today',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-calendar-day',
                ],
                [
                    'text' => 'This Month',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-calendar-check',
                ],
            ]
        ],
        [
            'text' => 'Tasks',
            'url' => '#',
            'icon' => 'fas fa-fw fa-tasks',
            'submenu' => [
                [
                    'text' => 'Task List',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-list-ul',
                ],
                [
                    'text' => 'Add Task',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-calendar-plus',
                ],
            ]
        ],
        [
            'text' => 'Campaigns',
            'url' => '#',
            'icon' => 'fas fa-fw fa-bullhorn',
            'submenu' => [
                [
                    'text' => 'Manual Campaigns',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-bullhorn',
                    'submenu' => [
                        [
                            'text' => 'Manual Campaign List',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-list',
                        ],
                        [
                            'text' => 'Add Manual Campaign',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-plus',
                        ],
                    ]
                ],
                [
                    'text' => 'Web Campaigns',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-bullhorn',
                    'submenu' => [
                        [
                            'text' => 'Web Campaign List',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-list',
                        ],
                        [
                            'text' => 'Add Web Campaign',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-plus',
                        ],
                    ]
                ],
                [
                    'text' => 'Templates',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user',
                    'submenu' => [
                        [
                            'text' => 'Template List',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-list',
                        ],
                        [
                            'text' => 'Add Template',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-plus',
                        ],
                    ]
                ],
                [
                    'text' => 'Form Code',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-folder-open',
                    'submenu' => [
                        [
                            'text' => 'Form Capture Code',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-folder-open',
                        ]
                    ]
                ]
            ]
        ],
        [
            'text' => 'Socials',
            'url' => '#',
            'icon' => 'fas fa-fw fa-photo-video',
            'submenu' => [
                [
                    'text' => 'Facebook',
                    'url' => '#',
                    'icon' => 'fab fa-fw fa-facebook-square',
                ],
                [
                    'text' => 'Twitter',
                    'url' => '#',
                    'icon' => 'fab fa-fw fa-twitter',
                ],
                [
                    'text' => 'Linkedin',
                    'url' => '#',
                    'icon' => 'fab fa-fw fa-linkedin-in',
                ],
            ]
        ],
        [
            'text' => 'Reports',
            'url' => '#',
            'icon' => 'fas fa-fw fa-file',
            'submenu' => [
                [
                    'text' => 'Client List Report',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-file',
                ]
            ]
        ],
        [
            'text' => 'Tools',
            'url' => '#',
            'icon' => 'fas fa-fw fa-tools',
            'submenu' => [
                [
                    'text' => 'Send File List',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-file-invoice',
                ],
                [
                    'text' => 'Send File',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-file-invoice',
                ],
                [
                    'text' => 'Client Billings',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-money-bill',
                ],
                [
                    'text' => 'Client Video',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-video',
                ],
                [
                    'text' => 'Backup Data',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user',
                ],
                [
                    'text' => 'Export Template',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-file-export',
                ],
                [
                    'text' => 'Export Data',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-file-export',
                ],
                [
                    'text' => 'Import Data',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-file-import',
                ],
            ]
        ],
        ['header' => 'SETTINGS'],
        [
            'text' => 'Admin Settings',
            'url' => '#',
            'icon' => 'fas fa-fw fa-user-shield',
            'submenu' => [
                [
                    'text' => 'CRM Settings',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user',
                    'submenu' => [
                        [
                            'text' => 'Types',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-tape',
                        ],
                        [
                            'text' => 'Client Types',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-user',
                        ],
                        [
                            'text' => 'Client Rating Types',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-star-half-alt',
                        ],
                        [
                            'text' => 'Custom Fields',
                            'url' => '#',
                            'icon' => 'fab fa-fw fa-intercom',
                        ],
                        [
                            'text' => 'Lead Types',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-list-ul',
                        ],
                        [
                            'text' => 'Task Types',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-tasks',
                        ],
                        [
                            'text' => 'Campaign Types ',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-bullhorn',
                        ],
                    ]
                ],
                [
                    'text' => 'Billing Settings',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user',
                    'submenu' => [
                        [
                            'text' => 'Billing Charge Types',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-money-bill',
                        ],
                        [
                            'text' => 'Billing Payment Types',
                            'url' => '#',
                            'icon' => 'fas fa-fw fa-wallet',
                        ],
                    ]
                ],
            ]
        ],
        [
            'text' => 'User Settings',
            'url' => '#',
            'icon' => 'fas fa-fw fa-users-cog',
            'submenu' => [
                [
                    'text' => 'Profile',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user-check',
                ],
                [
                    'text' => 'Change Password',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-user-lock',
                ],
            ]
        ],
        [
            'text' => 'Others',
            'url' => '#',
            'icon' => 'fas fa-fw fa-lock',
            'submenu' => [
                [
                    'text' => 'AWS Settings',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-cogs',
                ],
                [
                    'text' => 'Plan Type',
                    'url' => '#',
                    'icon' => 'fas fa-fw fa-cogs',
                ],
            ]
        ],
        [
            'text' => 'important',
            'icon_color' => 'red',
        ],
    ],
    /*
      |--------------------------------------------------------------------------
      | Menu Filters
      |--------------------------------------------------------------------------
      |
      | Here we can modify the menu filters of the admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#610-menu-filters
      |
     */
    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],
    /*
      |--------------------------------------------------------------------------
      | Plugins Initialization
      |--------------------------------------------------------------------------
      |
      | Here we can modify the plugins used inside the admin panel.
      |
      | For more detailed instructions you can look here:
      | https://github.com/jeroennoten/Laravel-AdminLTE/#611-plugins
      |
     */
    'plugins' => [
        [
            'name' => 'Datatables',
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
        [
            'name' => 'Select2',
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
        [
            'name' => 'Chartjs',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
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
];

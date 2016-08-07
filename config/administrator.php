<?php

return array(

    /**
     * Package URI
     *
     * @type string
     */
    'uri' => 'admin',

    /**
     *  Domain for routing.
     *
     * @type string
     */
    'domain' => '',

    /**
     *  Middleware for admin routing.
     *
     * @type array
     */
    'middleware' => array(),

    /**
     * Page title
     *
     * @type string
     */
    'title' => 'Admin',

    /**
     * The path to your model config directory
     *
     * @type string
     */
    'model_config_path' => config_path('administrator'),

    /**
     * The path to your settings config directory
     *
     * @type string
     */
    'settings_config_path' => config_path('administrator/settings'),

    /**
     * The menu structure of the site. For models, you should either supply the name of a model config file or an array of names of model config
     * files. The same applies to settings config files, except you must prepend 'settings.' to the settings config file name. You can also add
     * custom pages by prepending a view path with 'page.'. By providing an array of names, you can group certain models or settings pages
     * together. Each name needs to either have a config file in your model config path, settings config path with the same name, or a path to a
     * fully-qualified Laravel view. So 'users' would require a 'users.php' file in your model config path, 'settings.site' would require a
     * 'site.php' file in your settings config path, and 'page.foo.test' would require a 'test.php' or 'test.blade.php' file in a 'foo' directory
     * inside your view directory.
     *
     * @type array
     *
     *    array(
     *        'E-Commerce' => array('collections', 'products', 'product_images', 'orders'),
     *        'homepage_sliders',
     *        'users',
     *        'roles',
     *        'colors',
     *        'Settings' => array('settings.site', 'settings.ecommerce', 'settings.social'),
     *        'Analytics' => array('E-Commerce' => 'page.ecommerce.analytics'),
     *    )
     */
    'menu' => array(
        'Не чіпати' => [
            'menus',
            'subparagraph',
            'users',
        ],
        'Статі' => [
            'Статі' => [
                'news',
                'news_photo',
            ],
            'Обговорення' => [
                'discussion',
            ],
            'Три описи які є на головній' => [
                'short_description_index_page'
            ]
        ],
        'Пожертви' => [
            'donate',
            'donate_people',
        ],
        'КФС' => [
            'kfc_spending',
            'kfc_fundraiser',
            'Кандидати' => [
                'kfc_list_of_candidates_year',
                'kfc_list_of_candidates_people',
            ],
            'Положення' => [
                'kfc_regulations_number',
                'kfc_regulations_terms',
            ],
            'Програма' => [
                'kfc_program_number',
                'kfc_program_terms',
            ]
        ],
        'Майданчик' => [
            'platform',
            'platform_photos'
        ],
        'ДЮСША' => [
            'adult',
            'browsing_history_people_day_in_month_school',
            'browsing_history_people_day_school'
        ],
        'Команда' => [
            'standings',
            'Каманда' => [
                'team',
                'Команда ю-18' => [
                    'team_peoples_position',
                    'team_peoples',
                    'team_logo'
                ],
            ],
            'Журнал відвідувань' => [
                'browsing_history',
                'browsing_history_people_day_in_month',
                'browsing_history_people_day'
            ]
        ],
        'Матчі' => [
            'matches_season',
            'racing_circles',
            'matches_tour',
            'matches_played',
            'Наступні матчі' => [
                'next_and_last_matches',
                'next_and_last_teams',
            ],
            'Звіти' => [
                'report_tour',
                'report',
                'report_goals',
                'report_replacements'
            ],
        ],
        'Галерея' => [
            'photo_category',
            'gallery'
        ],
    ),

    /**
     * The permission option is the highest-level authentication check that lets you define a closure that should return true if the current user
     * is allowed to view the admin section. Any "falsey" response will send the user back to the 'login_path' defined below.
     *
     * @type closure
     */
    'permission' => function () {
        return Auth::check();
    },

    /**
     * This determines if you will have a dashboard (whose view you provide in the dashboard_view option) or a non-dashboard home
     * page (whose menu item you provide in the home_page option)
     *
     * @type bool
     */
    'use_dashboard' => TRUE,

    /**
     * If you want to create a dashboard view, provide the view string here.
     *
     * @type string
     */
    'dashboard_view' => 'administrator.home_administrator',

    /**
     * The menu item that should be used as the default landing page of the administrative section
     *
     * @type string
     */
    'home_page' => '',

    /**
     * The route to which the user will be taken when they click the "back to site" button
     *
     * @type string
     */
    'back_to_site_path' => '/',

    /**
     * The login path is the path where Administrator will send the user if they fail a permission check
     *
     * @type string
     */
    'login_path' => 'auth/login',

    /**
     * The logout path is the path where Administrator will send the user when they click the logout link
     *
     * @type string
     */
    'logout_path' => 'auth/logout',

    /**
     * This is the key of the return path that is sent with the redirection to your login_action. Session::get('redirect') will hold the return URL.
     *
     * @type string
     */
    'login_redirect_key' => 'redirect',

    /**
     * Global default rows per page
     *
     * @type int
     */
    'global_rows_per_page' => 20,

    /**
     * An array of available locale strings. This determines which locales are available in the languages menu at the top right of the Administrator
     * interface.
     *
     * @type array
     */
    'locales' => array(),

);

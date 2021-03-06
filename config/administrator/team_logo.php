<?php
return [
    'title' => 'Фото команди Ю-18',
    'single' => 'фото',
    'model' => 'App\Models\Team_logo',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/team_logo_y_18/small/(:value)" />'
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/team_logo_y_18/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/team_logo_y_18/small/', 100],
            ],
        ],

    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

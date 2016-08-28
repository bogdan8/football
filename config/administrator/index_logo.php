<?php
return [
    'title' => 'Фото на головній сторінці',
    'single' => 'фото',
    'model' => 'App\Models\Index_logo',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/index_logo/small/(:value)" />'
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
            'location' => public_path() . '/uploads/index_logo/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/index_logo/small/', 100],
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

<?php
return [
    'title' => 'Фото майданчиків',
    'single' => 'фото',
    'model' => 'App\Models\Platform_photos',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/platform_photos/medium/(:value)" />'
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
            'location' => public_path() . '/uploads/platform_photos/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/platform_photos/medium/', 100],
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

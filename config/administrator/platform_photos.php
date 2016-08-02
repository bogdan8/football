<?php
return [
    'title' => 'Фото майданчиків',
    'single' => 'фото',
    'model' => 'App\Models\Platform_photos',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ]
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
                [500, 500, 'auto', public_path() . '/uploads/news_photos/medium/', 100],
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

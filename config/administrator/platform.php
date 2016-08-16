<?php
return [
    'title' => 'Майданчик головна',
    'single' => 'манданчик',
    'model' => 'App\Models\Platform',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Назва',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/platform/medium/(:value)" />'
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Назва',
        ],
        'description' => [
            'type' => 'wysiwyg',
            'title' => 'Текст',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/platform/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/platform/medium/', 100],
            ],
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
        'title' => array(
            'title' => 'Імя',
        ),
    ),
    'form_width' => 500,
];

<?php
return [
    'title' => 'Обговорення',
    'single' => 'обговорення',
    'model' => 'App\Models\Discussion',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Назва',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/discussion/small/(:value)" />'
        ],
        'created_at' => [
            'title' => 'Дата',
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
        'body' => [
            'type' => 'wysiwyg',
            'title' => 'Текст',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/discussion/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/discussion/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/discussion/small/', 100],
            ],
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
        'title' => array(
            'title' => 'Назва',
        ),
    ),
    'form_width' => 500,
];

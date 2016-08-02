<?php
return [
    'title' => 'Майданчик головна',
    'single' => 'манданчик',
    'model' => 'App\Models\Platform',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Назва',
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
                [500, 500, 'auto', public_path() . '/uploads/news/medium/', 100],
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

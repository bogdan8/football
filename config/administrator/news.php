<?php
return [
    'title' => 'Новини',
    'single' => 'новину',
    'model' => 'App\Models\News',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Назва',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/news/small/(:value)" />'
        ],
        'date_news' => [
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
        'slug' => [
            'type' => 'text',
            'title' => 'Назва на eng (не вживати ці символи (/ ? \ .))',
        ],
        'date_news' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
        'body' => [
            'type' => 'wysiwyg',
            'title' => 'Текст',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/news/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/news/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/news/small/', 100],
            ],
        ],
        'video' => [
            'type' => 'wysiwyg',
            'title' => 'Відео',
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

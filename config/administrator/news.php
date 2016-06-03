<?php
return [
    'title' => 'Новини',
    'single' => 'новину',
    'model' => 'App\Models\News',
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
            'title' => 'картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/news/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/news/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/news/small/', 100],
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

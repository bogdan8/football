<?php
return [
    'title' => 'Фото для новин',
    'single' => 'фото',
    'model' => 'App\Models\News_photo',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'news' => [
            'title' => 'Новина',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'weight' => [
            'title' => 'Порядковий №',
            'type' => 'number',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/news_photos/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/news_photos/small/', 100],
                [500, 500, 'auto', public_path() . '/uploads/news_photos/medium/', 100],
            ],
        ],
        'image_url' => [
            'title' => 'Посилання на картинку',
            'type' => 'wysiwyg',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Назва',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

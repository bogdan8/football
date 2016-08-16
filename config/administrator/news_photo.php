<?php
return [
    'title' => 'Фото для новин',
    'single' => 'фото',
    'model' => 'App\Models\News_photo',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Назва',
        ],
        'weight' => [
            'title' => 'Порядковий №',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/news_photos/small/(:value)" />'
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
            'title' => 'Посилання на картинку в такому вигляді (http://cs6419.vk.me/v62/5/ZowIVLM.jpg)',
            'type' => 'text',
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

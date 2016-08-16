<?php
return [
    'title' => 'Галерея',
    'single' => 'фото',
    'model' => 'App\Models\Gallery',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Назва',
        ],
        'image' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/gallery/small/(:value)" />'
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'photo_category' => [
            'title' => 'Категорія',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Назва, не використовувати такі символи(*|:/?)',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/gallery/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/gallery/small/', 100],
                [500, 500, 'auto', public_path() . '/uploads/gallery/medium/', 100],
            ],
        ],
        'image_url' => [
            'title' => 'Посилання на картинку в такому вигляді (http://cs6419.vk.me/v62/5/ZowIVLM.jpg), якщо загружено фото то посилання нетреба',
            'type' => 'text',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

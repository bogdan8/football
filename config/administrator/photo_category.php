<?php
return [
    'title' => 'Фото категорії',
    'single' => 'категорію',
    'model' => 'App\Models\Photo_category',
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
            'title' => 'Назва, не використовувати такі символи(*|:/?)',
        ],
        'image' => [
            'title' => 'Картинка категорії',
            'type' => 'image',
            'location' => public_path() . '/uploads/photo_category/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/photo_category/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/photo_category/small/', 100],
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

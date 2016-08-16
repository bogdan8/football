<?php
return [
    'title' => 'Команди',
    'single' => 'команду',
    'model' => 'App\Models\Team',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Назва команди',
        ],
        'logotype' => [
            'title' => 'Фото',
            'output' => '<img src="/uploads/team_logotype/small/(:value)" />'
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'logotype' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/team_logotype/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/team_logotype/small/', 100],
            ],
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Назва команди',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

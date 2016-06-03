<?php
return [
    'title' => 'Команди',
    'single' => 'команду',
    'model' => 'App\Models\Team',
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
        'adult' => [
            'title' => 'Дорослі - юнаки',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'image' => [
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

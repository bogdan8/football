<?php
return [
    'title' => 'Гравці',
    'single' => 'гравця',
    'model' => 'App\Models\Team_peoples',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'number_people' => [
            'title' => 'Номер гравця',
        ],
        'name' => [
            'title' => 'Імя',
        ],
        'last_name' => [
            'title' => 'Прізвище',
        ],
        'surname' => [
            'title' => 'Побатькові',
        ],
        'license_number' => [
            'title' => 'Номер ліцензії',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'team_peoples_position' => [
            'title' => 'Команда',
            'type' => 'relationship',
            'name_field' => 'name',
        ],
        'number_people' => [
            'type' => 'number',
            'title' => 'Номер гравця',
        ],
        'name' => [
            'type' => 'text',
            'title' => 'Імя',
        ],
        'last_name' => [
            'type' => 'text',
            'title' => 'Прізвище',
        ],
        'surname' => [
            'type' => 'text',
            'title' => 'Побатькові',
        ],
        'date_of_birth' => [
            'type' => 'date',
            'title' => 'Дата народження',
            'date_format' => 'yy-mm-dd'
        ],
        'license_number' => [
            'type' => 'number',
            'title' => 'Номер ліцензії',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/team_peoples/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/team_peoples/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/team_peoples/small/', 100],
            ],
        ],

    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

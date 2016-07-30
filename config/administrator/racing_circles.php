<?php
return [
    'title' => 'Турнірні кола',
    'single' => 'коло',
    'model' => 'App\Models\Racing_circles',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Опис для себе',
        ],
        'number' => [
            'title' => 'Порядковий номер в сезоні',
        ],
        'name' => [
            'title' => 'Назва кола',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Опис для себе',
        ],
        'number' => [
            'type' => 'number',
            'title' => 'Порядковий номер в сезоні',
        ],
        'matches_season' => [
            'title' => 'Сезон',
            'type' => 'relationship',
            'name_field' => 'number_season',
        ],
        'name' => [
            'type' => 'text',
            'title' => 'Назва кола',
        ],
    ],
    'filters' => array(
        'number' => [
            'title' => 'Номер положення',
        ],
    ),
    'form_width' => 500,
];

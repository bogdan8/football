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
        'name' => [
            'title' => 'Назва кола',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
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

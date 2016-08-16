<?php
return [
    'title' => 'Гравець',
    'single' => 'гравця',
    'model' => 'App\Models\Browsing_history_people_day_in_month',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Скорочений опис',
        ],
        'name_people' => [
            'title' => 'Імя гравця',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Скорочений опис для себе',
        ],
        'browsing_history' => [
            'title' => 'Місяці',
            'type' => 'relationship',
            'name_field' => 'date_visit',
        ],
        'name_people' => [
            'type' => 'text',
            'title' => 'Імя гравця',
        ],
    ],
    'filters' => array(
        'name_people' => array(
            'title' => 'Прізвище імя побатькові',
        ),
    ),
    'form_width' => 500,
];

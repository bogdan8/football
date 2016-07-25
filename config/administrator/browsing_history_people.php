<?php
return [
    'title' => 'Іграки',
    'single' => 'іграка',
    'model' => 'App\Models\Browsing_history_people',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'name_people' => [
            'title' => 'Прізвище імя побатькові',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'browsing_history' => [
            'title' => 'Місяці',
            'type' => 'relationship',
            'name_field' => 'date_visit',
        ],
        'name_people' => [
            'type' => 'text',
            'title' => 'Прізвище імя побатькові',
        ],
    ],
    'filters' => array(
        'initials' => array(
            'title' => 'Прізвище імя побатькові',
        ),
    ),
    'form_width' => 500,
];

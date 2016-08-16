<?php
return [
    'title' => 'КФС список претендентів люди',
    'single' => 'претендента',
    'model' => 'App\Models\Kfc_list_of_candidates_people',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'initials' => [
            'title' => 'Прізвище імя побатькові',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'kfc_list_of_candidates_year' => [
            'title' => 'Роки',
            'type' => 'relationship',
            'name_field' => 'years',
        ],
        'initials' => [
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

<?php
return [
    'title' => 'КФС список претендентів роки',
    'single' => 'роки',
    'model' => 'App\Models\Kfc_list_of_candidates_year',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'years' => [
            'title' => 'Роки',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'years' => [
            'type' => 'text',
            'title' => 'Роки',
        ],
    ],
    'filters' => array(
        'years' => array(
            'title' => 'Роки',
        ),
    ),
    'form_width' => 500,
];

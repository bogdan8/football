<?php
return [
    'title' => 'КФС номер програми',
    'single' => 'номер',
    'model' => 'App\Models\Kfc_program_number',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'program_number' => [
            'title' => 'Номер програми',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'program_number' => [
            'type' => 'number',
            'title' => 'Номер програми',
        ],
    ],
    'filters' => array(
        'program_number' => [
            'title' => 'Номер',
        ],
    ),
    'form_width' => 500,
];

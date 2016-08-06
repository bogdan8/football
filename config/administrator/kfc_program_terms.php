<?php
return [
    'title' => 'КФС пгрограми',
    'single' => 'програму',
    'model' => 'App\Models\Kfc_program_terms',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'number' => [
            'title' => 'Номер положення',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'kfc_program_number' => [
            'title' => 'Номер',
            'type' => 'relationship',
            'name_field' => 'program_number',
        ],
        'number' => [
            'type' => 'number',
            'title' => 'Номер положення(Писати цифрою)',
        ],
        'body' => [
            'type' => 'wysiwyg',
            'title' => 'Текст положення',
        ],
    ],
    'filters' => array(
        'number' => [
            'title' => 'Номер положення',
        ],
    ),
    'form_width' => 500,
];

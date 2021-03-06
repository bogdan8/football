<?php
return [
    'title' => 'КФС загальні положення',
    'single' => 'положення',
    'model' => 'App\Models\Kfc_regulations_terms',
    'columns' => [
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
        'kfc_regulations_number' => [
            'title' => 'Номер',
            'type' => 'relationship',
            'name_field' => 'regulations_number',
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

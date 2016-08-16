<?php
return [
    'title' => 'КФС номер положення',
    'single' => 'номер',
    'model' => 'App\Models\Kfc_regulations_number',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'regulations_number' => [
            'title' => 'Номер положення',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'regulations_number' => [
            'type' => 'number',
            'title' => 'Номер положення',
        ],
    ],
    'filters' => array(
        'regulations_number' => [
            'title' => 'Номер',
        ],
    ),
    'form_width' => 500,
];

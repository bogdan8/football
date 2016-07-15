<?php
return [
    'title' => 'КФС номер положення',
    'single' => 'номер',
    'model' => 'App\Models\Kfc_regulations_number',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'regulations_number' => [
            'title' => 'Назва',
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

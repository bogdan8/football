<?php
return [
    'title' => 'Місяці відвідувань',
    'single' => 'місяць',
    'model' => 'App\Models\Browsing_history',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'date_visit' => [
            'title' => 'місяць',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'date_visit' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
    ],
    'filters' => array(
        'date_visit' => array(
            'title' => 'місяць',
        ),
    ),
    'form_width' => 500,
];

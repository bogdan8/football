<?php
return [
    'title' => 'КФС збір коштів',
    'single' => 'збір коштів',
    'model' => 'App\Models\Kfc_fundraiser',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'initials' => [
            'title' => 'Прізвище імя побатькові',
        ],
        'sum' => [
            'title' => 'Сума',
        ],
        'date' => [
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'initials' => [
            'type' => 'text',
            'title' => 'Прізвище імя побатькові',
        ],
        'sum' => [
            'type' => 'number',
            'title' => 'Сума',
        ],
        'date' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
    ],
    'filters' => array(
        'initials' => array(
            'title' => 'Прізвище імя побатькові',
        ),
    ),
    'form_width' => 500,
];

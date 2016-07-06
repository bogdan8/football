<?php
return [
    'title' => 'КФС збір коштів',
    'single' => 'збір коштів',
    'model' => 'App\Models\Kfc_fundraiser',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'initials' => [
            'title' => 'Назва',
        ],
        'sum' => [
            'title' => 'Сума',
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
        'date' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
        'sum' => [
            'type' => 'number',
            'title' => 'Сума',
        ],
    ],
    'filters' => array(
        'initials' => array(
            'title' => 'Прізвище імя побатькові',
        ),
    ),
    'form_width' => 500,
];

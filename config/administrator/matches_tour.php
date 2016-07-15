<?php
return [
    'title' => 'Тури',
    'single' => 'тур',
    'model' => 'App\Models\Matches_tour',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'tour' => [
            'title' => 'Тур',
        ]
        ,'date_tour' => [
            'title' => 'Дата туру',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'racing_circles' => [
            'title' => 'Коло',
            'type' => 'relationship',
            'name_field' => 'name',
        ],
        'tour' => [
            'type' => 'number',
            'title' => 'Номер тура',
        ],
        'date_tour' => [
            'type' => 'date',
            'title' => 'Дата туру',
            'date_format' => 'yy-mm-dd',
        ],
    ],
    'filters' => array(
        'number' => [
            'title' => 'Номер положення',
        ],
    ),
    'form_width' => 500,
];

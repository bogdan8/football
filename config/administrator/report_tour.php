<?php
return [
    'title' => 'Тури',
    'single' => 'тур',
    'model' => 'App\Models\Report_tour',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Опис для себе',
        ],
        'tour' => [
            'title' => 'Тур',
        ]
        ,'date_tour' => [
            'title' => 'Дата туру',
        ],
        'sequence_number' => [
            'title' => 'Порядковий номер в межах туру',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'sequence_number' => [
            'title' => 'Порядковий номер в межах туру',
            'type' => 'number',
        ],
        'matches_season' => [
            'title' => 'Сезон',
            'type' => 'relationship',
            'name_field' => 'number_season',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Опис для себе',
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

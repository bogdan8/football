<?php
return [
    'title' => 'Зіграні матчі',
    'single' => 'матч',
    'model' => 'App\Models\Matches_played',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'date_played' => [
            'type' => 'date',
            'title' => 'Дата гри',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
        'title_one_team' => [
            'title' => 'Перша команда',
        ],
        'count_one_team' => [
            'title' => 'Перша',
        ],
        'count_second_team' => [
            'title' => 'Друга',
        ],
        'title_second_team' => [
            'title' => 'Друга команда',
        ],

    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'matches_tour' => [
            'title' => 'Тур',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'date_played' => [
            'type' => 'date',
            'title' => 'Дата гри',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
        'title_one_team' => [
            'type' => 'text',
            'title' => 'Назва першої команди',
        ],
        'count_one_team' => [
            'type' => 'number',
            'title' => 'Кількість голів першої команди',
        ],
        'title_second_team' => [
            'type' => 'text',
            'title' => 'Назва другої команди',
        ],
        'count_second_team' => [
            'type' => 'number',
            'title' => 'Кількість голів другої команди',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

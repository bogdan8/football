<?php
return [
    'title' => 'Наступні або минулі матчі',
    'single' => 'матч',
    'model' => 'App\Models\Next_and_last_matches',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'next' => [
            'title' => 'Наступний',
        ],
        'last' => [
            'title' => 'Минулий',
        ],
        'date_played' => [
            'type' => 'date',
            'title' => 'Дата гри',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
        'where_played' => [
            'title' => 'Де грають',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'next' => [
            'type' => 'bool',
            'title' => 'Наступний',
        ],
        'last' => [
            'type' => 'bool',
            'title' => 'Минулий',
        ],
        'matches_tour' => [
            'title' => 'Тур',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'date_played' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'dd-mm-yy', //optional, will default to this value
        ],
        'date_played_hour' => [
            'type' => 'text',
            'title' => 'Година в якій будуть грати(14:00)',
        ],
        'where_played' => [
            'type' => 'text',
            'title' => 'Де будуть грати',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

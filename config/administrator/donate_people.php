<?php
return [
    'title' => 'Пожертви людей',
    'single' => 'пожертву людину',
    'model' => 'App\Models\Donate_people',
    'columns' => [
        'title' => [
            'title' => 'Назва',
        ],
        'count_money' => [
            'title' => 'Кількість грошей',
        ],
        'date' => [
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text',
            'title' => 'Імя та фамілія',
        ],
        'count_money' => [
            'type' => 'number',
            'title' => 'Кількість грошей',
        ],
        'date' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
    ],
    'filters' => array(
        'title' => array(
            'title' => 'Імя',
        ),
    ),
    'form_width' => 500,
];

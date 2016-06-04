<?php
return [
    'title' => 'Пожертви людей',
    'single' => 'пожертву людину',
    'model' => 'App\Models\Donate_people',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'title' => [
            'title' => 'Назва',
        ],
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text',
            'title' => 'Імя та фамілія',
        ],
        'date' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
        'count_money' => [
            'type' => 'number',
            'title' => 'Кількість грошей',
        ],
    ],
    'filters' => array(
        'title' => array(
            'title' => 'Імя',
        ),
    ),
    'form_width' => 500,
];

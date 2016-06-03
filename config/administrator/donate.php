<?php
return [
    'title' => 'Дані про пожертви',
    'single' => 'дані для збирання пожертв',
    'model' => 'App\Models\Donate',
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
            'title' => 'Назва',
        ],
        'collected_money' => [
            'type' => 'number',
            'title' => 'Зібрано грошей',
        ],
        'need_money' => [
            'type' => 'number',
            'title' => 'Потрібно всього грошей',
        ],
    ],
    'filters' => array(
        'title' => array(
            'title' => 'Імя',
        ),
    ),
    'form_width' => 500,
];

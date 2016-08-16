<?php
return [
    'title' => 'Дані про пожертви',
    'single' => 'дані для збирання пожертв',
    'model' => 'App\Models\Donate',
    'columns' => [
        'title' => [
            'title' => 'Назва',
        ],
        'collected_money' => [
            'title' => 'Зібрано грошей',
        ],
        'need_money' => [
            'title' => 'Потрібно всього грошей',
        ],
    ],
    'edit_fields' => [
        'title' => [
            'type' => 'text',
            'title' => 'Назва',
        ],
        'collected_money' => [
            'type' => 'text',
            'title' => 'Зібрано грошей',
        ],
        'need_money' => [
            'type' => 'text',
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

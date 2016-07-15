<?php
return [
    'title' => 'Сезон',
    'single' => 'рік',
    'model' => 'App\Models\Matches_season',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'number_season' => [
            'type' => 'number',
            'title' => 'Рік сезону',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

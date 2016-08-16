<?php
return [
    'title' => 'Сезон',
    'single' => 'рік',
    'model' => 'App\Models\Matches_season',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'number_season' => [
            'title' => 'Рік сезону',
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

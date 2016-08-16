<?php
return [
    'title' => 'КФС витрати',
    'single' => 'витрати',
    'model' => 'App\Models\Kfc_spending',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'goods_or_services' => [
            'title' => 'Товар або послуга',
        ],
        'sum' => [
            'title' => 'Сума',
        ],
        'date' => [
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'goods_or_services' => [
            'type' => 'text',
            'title' => 'Товар або послуга',
        ],
        'sum' => [
            'type' => 'number',
            'title' => 'Сума',
        ],
        'date' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
    ],
    'filters' => array(
        'goods_or_services' => array(
            'title' => 'Товар або послуга',
        ),
    ),
    'form_width' => 500,
];

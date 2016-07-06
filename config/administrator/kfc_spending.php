<?php
return [
    'title' => 'КФС витрати',
    'single' => 'витрати',
    'model' => 'App\Models\Kfc_spending',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'goods_or_services' => [
            'title' => 'Назва',
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
        'date' => [
            'type' => 'date',
            'title' => 'Дата',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ],
        'sum' => [
            'type' => 'number',
            'title' => 'Сума',
        ],
    ],
    'filters' => array(
        'goods_or_services' => array(
            'title' => 'Товар або послуга',
        ),
    ),
    'form_width' => 500,
];

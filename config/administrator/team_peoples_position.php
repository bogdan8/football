<?php
return [
    'title' => 'Позиції гравця',
    'single' => 'позицію',
    'model' => 'App\Models\Team_peoples_position',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'name' => [
            'title' => 'Назва позиції',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'name' => [
            'type' => 'text',
            'title' => 'Назва позиції',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

<?php
return [
    'title' => 'Меню',
    'single' => 'пункт',
    'model' => 'App\Models\Menus',
    'columns' => [
        'active'=>[
            'title'=>'Показувати чи ні',
        ],
        'weight'=>[
            'title'=>'Порядковий номер',
        ],
        'title'=>[
            'title'=>'Назва',
        ],
        'url'=>[
            'title'=>'Адреса',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'title' => 'Показувати',
            'type' => 'bool',
        ],
        'weight' => [
            'title' => 'Порядковий №',
            'type' => 'number',
        ],
        'title' => [
            'title' => 'Назва',
            'type' => 'text',
        ],
        'url' => [
            'title' => 'Адреса',
            'type' => 'text',
        ],
    ],
     'filters' => array(
        'active'=> array(
            'title' => 'Активне',
        ),
        'title' => array(
            'title' => 'Імя',        
        ),
    ),
];

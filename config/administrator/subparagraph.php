<?php
return [
    'title' => 'Підпункти меню',
    'single' => 'підпункт',
    'model' => 'App\Models\Subparagraph',
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
        'menus' => [
            'title' => 'Меню',
            'type' => 'relationship',
            'name_field' => 'title',
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

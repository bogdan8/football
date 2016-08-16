<?php
return [
    'title' => 'Звіт матчу забиті голи',
    'single' => 'забиті голи',
    'model' => 'App\Models\Report_goals',
    'columns' => [
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title_goals' => [
            'title' => 'Хто забив',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'report' => [
            'title' => 'Звіт',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'title_goals' => [
            'type' => 'text',
            'title' => 'Хто забив (Досин Іван(1:0))',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

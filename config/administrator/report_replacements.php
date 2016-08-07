<?php
return [
    'title' => 'Звіт матчу заміни',
    'single' => 'заміну',
    'model' => 'App\Models\Report_replacements',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title_replacements' => [
            'title' => 'Заміна',
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
        'title_replacements' => [
            'type' => 'text',
            'title' => 'Заміна (ДОСИН АРТУР(54))',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

<?php
return [
    'title' => 'Три статі які відображаються на головній',
    'single' => 'статю',
    'model' => 'App\Models\Short_description_index_page',
    'columns' => [
        'name' => [
            'title' => 'Назва',
        ],
        'title' => [
            'title' => 'Назва опису',
        ],
        'link' => [
            'title' => 'Посилання',
        ],
    ],
    'edit_fields' => [
        'name' => [
            'type' => 'text',
            'title' => 'Назва',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Назва опису',
        ],
        'description' => [
            'type' => 'wysiwyg',
            'title' => 'Текст',
        ],
        'link' => [
            'type' => 'text',
            'title' => 'Посилання куди буде переходити',
        ],
        'image' => [
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/index_short_description/original/',
            'sizes' => [
                [500, 500, 'auto', public_path() . '/uploads/index_short_description/medium/', 100],
                [100, 100, 'auto', public_path() . '/uploads/index_short_description/small/', 100],
            ],
        ]
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
        'title' => array(
            'title' => 'Імя',
        ),
    ),
    'form_width' => 500,
];

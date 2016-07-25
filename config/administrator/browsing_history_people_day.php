<?php
return [
    'title' => 'Дні які він був присутній',
    'single' => 'день',
    'model' => 'App\Models\Browsing_history_people_day',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'day_name' => [
            'title' => 'День відвідування',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'browsing_history_people' => [
            'title' => 'Ігрок',
            'type' => 'relationship',
            'name_field' => 'name_people',
        ],
        'day_name' => [
            'type' => 'text',
            'title' => 'День відвідування писати(01.2)',
        ],
        'count_visit' => [
            'type' => 'number',
            'title' => 'Кількість відвідувань',
        ],
    ],
    'filters' => array(
        'initials' => array(
            'title' => 'Прізвище імя побатькові',
        ),
    ),
    'form_width' => 500,
];

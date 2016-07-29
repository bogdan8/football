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
        'day_visit' => [
            'title' => 'День відвідувань',
        ],
        'count_visit' => [
            'title' => 'Кількість відвідування',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'browsing_history_people_day_in_month' => [
            'title' => 'Ігрок',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'day_visit' => [
            'type' => 'text',
            'title' => 'День відвідувань',
        ],
        'count_visit' => [
            'type' => 'number',
            'title' => 'Кількість відвідувань',
        ],
    ],
    'filters' => array(
        'day_visit' => array(
            'title' => 'День відвідування',
        ),
    ),
    'form_width' => 500,
];

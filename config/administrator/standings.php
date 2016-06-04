<?php
return [
    'title' => 'Турнірна таблиця',
    'single' => 'команду',
    'model' => 'App\Models\Standings',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'adult' => [
            'title' => 'Дорослі - юнаки',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'team' => [
            'title' => 'Команда',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'count_games' => [
            'type' => 'number',
            'title' => 'Кількість ігор',
        ],
        'count_win' => [
            'type' => 'number',
            'title' => 'Кількість перемог',
        ],
        'count_draw' => [
            'type' => 'number',
            'title' => 'Кількість нічиїх',
        ],
        'count_loser' => [
            'type' => 'number',
            'title' => 'Кількість проіграшів',
        ],
        'count_goals' => [
            'type' => 'number',
            'title' => 'Кількість забитих голів',
        ],
        'count_missing' => [
            'type' => 'number',
            'title' => 'Кількість пропущених голів',
        ],
        'difference' => [
            'type' => 'text',
            'title' => 'Різниця писати так(+22 або - 22)',
        ],
        'points' => [
            'type' => 'number',
            'title' => 'Кількість очків',
        ],
    ],
    'filters' => array(
        'active' => array(
            'title' => 'Активне',
        ),
    ),
    'form_width' => 500,
];

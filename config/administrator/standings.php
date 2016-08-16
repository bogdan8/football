<?php
return [
    'title' => 'Турнірна таблиця',
    'single' => 'команду',
    'model' => 'App\Models\Standings',
    'columns' => [
        'active' => [
            'title' => 'Показувати',
        ],
        'count_games' => [
            'title' => 'К-сть ігор',
        ],
        'count_win' => [
            'title' => 'К-сть перемог',
        ],
        'count_draw' => [
            'title' => 'К-сть нічиїх',
        ],
        'count_loser' => [
            'title' => 'К-сть проіграшів',
        ],
        'count_goals' => [
            'title' => 'К-сть забитих',
        ],
        'count_missing' => [
            'title' => 'К-сть пропущених',
        ],
        'difference' => [
            'title' => '(+ -)',
        ],
        'points' => [
            'title' => 'К-сть очків',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'matches_season' => [
            'title' => 'Сезон',
            'type' => 'relationship',
            'name_field' => 'number_season',
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

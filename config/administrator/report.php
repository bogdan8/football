<?php
return [
    'title' => 'Звіт матчу',
    'single' => 'звіт',
    'model' => 'App\Models\Report',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
        'active' => [
            'title' => 'Показувати чи ні',
        ],
        'title' => [
            'title' => 'Опис',
        ],
        'teams' => [
            'title' => 'Команди (Коршів-Іванівці)',
        ],
    ],
    'edit_fields' => [
        'active' => [
            'type' => 'bool',
            'title' => 'Показувати',
        ],
        'report_tour' => [
            'title' => 'Сезон',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
        'title' => [
            'type' => 'text',
            'title' => 'Опис для себе',
        ],
        'image' => [
            'title' => 'Картинка схеми',
            'type' => 'image',
            'location' => public_path() . '/uploads/report/original/',
            'sizes' => [
                [100, 100, 'auto', public_path() . '/uploads/report/small/', 100],
            ],
        ],
        'scheme' => [
            'type' => 'text',
            'title' => 'Схема (4-4-2)',
        ],
        'coach' => [
            'type' => 'text',
            'title' => 'Тренер',
        ],
        'teams' => [
            'type' => 'text',
            'title' => 'Команди (Коршів-Іванівці)',
        ],
        'teams_goals' => [
            'type' => 'text',
            'title' => 'Голи команд (3-1)',
        ],
        'best_player' => [
            'type' => 'text',
            'title' => 'Найкращий гравець',
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

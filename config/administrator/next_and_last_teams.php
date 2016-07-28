<?php
return [
    'title' => 'Наступні або минулі матчі(команди)',
    'single' => 'команду',
    'model' => 'App\Models\Next_and_last_teams',
    'columns' => [
        'id' => [
            'title' => 'Індифікатор',
        ],
    ],
    'edit_fields' => [
        'next_and_last_matches' => [
            'title' => 'Номер',
            'type' => 'relationship',
            'name_field' => 'id',
        ],
        'goals' => [
            'title' => 'Забиті',
            'type' => 'number'
        ],
        'team' => [
            'title' => 'Команда',
            'type' => 'relationship',
            'name_field' => 'title',
        ],
    ],
    'form_width' => 500,
];

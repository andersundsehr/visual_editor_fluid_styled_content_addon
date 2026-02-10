<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'visual_editor_fluid_styled_content_addon',
    'description' => 'Adds usage of f:render.text into fluid_styled_content',
    'category' => 'be',
    'author' => 'Matthis Vogel',
    'author_email' => 'm.vogel@andersundsehr.com',
    'state' => 'stable',
    'version' => '13.4.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

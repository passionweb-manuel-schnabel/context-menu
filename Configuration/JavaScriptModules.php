<?php

return [
    'dependencies' => ['core', 'backend'],
    'tags' => [
        'backend.contextmenu',
    ],
    'imports' => [
        '@passionweb/context-menu/' => 'EXT:context_menu/Resources/Public/JavaScript/',
    ],
];
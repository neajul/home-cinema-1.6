<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme-3-0/blueprints.yaml',
    'modified' => 1603727950,
    'data' => [
        'name' => 'Cinema Theme',
        'slug' => 'cinema-theme',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'cinema theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'lukas engelhardt',
            'email' => 'info@lukasengelhardt.net'
        ],
        'homepage' => 'https://github.com/lukas-engelhardt/grav-theme-cinema-theme',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/lukas-engelhardt/grav-theme-cinema-theme/issues',
        'readme' => 'https://github.com/lukas-engelhardt/grav-theme-cinema-theme/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];

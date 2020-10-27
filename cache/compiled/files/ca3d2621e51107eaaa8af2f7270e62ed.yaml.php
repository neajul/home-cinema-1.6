<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/plugins/admin-addon-user-manager/blueprints/user/aaum-account.yaml',
    'modified' => 1603829370,
    'data' => [
        'extends@' => [
            'type' => 'user/account',
            'context' => 'blueprints://'
        ],
        'form' => [
            'fields' => [
                'security' => [
                    'unset-security@' => true
                ],
                'state' => [
                    'ordering@' => 'content',
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ENABLED',
                    'classes' => 'twofa-toggle',
                    'highlight' => 'enabled',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'PLUGIN_ADMIN.YES',
                        'disabled' => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'string'
                    ]
                ]
            ]
        ]
    ]
];

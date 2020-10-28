<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme/blueprints/default.yaml',
    'modified' => 1603908637,
    'data' => [
        'title' => 'Page Content',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.credits' => [
                                    'type' => 'editor',
                                    'label' => 'credits go here'
                                ],
                                'header.vimeo' => [
                                    'type' => 'text',
                                    'label' => 'VIMEO VIDEO ID IN HERE',
                                    'ordering@' => 1
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

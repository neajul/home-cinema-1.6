<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/lukasengelhardt/Dropbox/Current Work/Sandberg/yr 1/08 home cinema/1 code/home-cinema-1.6/user/themes/cinema-theme-2-0/blueprints/day.yaml',
    'modified' => 1603728964,
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
                                'header.title' => [
                                    'label' => 'date'
                                ],
                                'content' => [
                                    'label' => 'Content',
                                    'unset@' => true
                                ],
                                'header.media_order' => [
                                    'label' => 'upload all images here',
                                    'unset@' => true
                                ],
                                'header.programitems' => [
                                    'type' => 'list',
                                    'fields' => [
                                        '.mainimage' => [
                                            'type' => 'file',
                                            'preview_images' => true,
                                            'destination' => 'self@',
                                            'label' => 'Image for segment (max. 5mb)',
                                            'multiple' => false,
                                            'filesize' => 5,
                                            'validate' => [
                                                'message' => 'The Image is to big. 5mb is the maximum size.'
                                            ]
                                        ],
                                        '.moviessection' => [
                                            'type' => 'fieldset',
                                            'collapsed' => true,
                                            'collapsible' => true,
                                            'title' => 'Movies',
                                            'underline' => true,
                                            'fields' => [
                                                '.movies' => [
                                                    'type' => 'list',
                                                    'label' => 'Movie(s) for this Segment ℹ️',
                                                    'help' => 'Put the details of the movie or the movies in this segment',
                                                    'fields' => [
                                                        '.title' => [
                                                            'type' => 'text',
                                                            'label' => 'Title'
                                                        ],
                                                        '.author' => [
                                                            'type' => 'text',
                                                            'label' => 'Author'
                                                        ],
                                                        '.department' => [
                                                            'type' => 'text',
                                                            'label' => 'department'
                                                        ],
                                                        '.length' => [
                                                            'type' => 'text',
                                                            'label' => 'length in min (use when multiple movies) ℹ️',
                                                            'help' => 'only fill this in when there are mulptiple (short) movies in this segment, so their individual length can be written after their title. Only use numbers, the "min" will be added automatically'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        '.metasection' => [
                                            'type' => 'fieldset',
                                            'title' => 'Metadata',
                                            'collapsed' => true,
                                            'collapsible' => true,
                                            'underline' => true,
                                            'fields' => [
                                                '.title' => [
                                                    'type' => 'text',
                                                    'label' => 'Program Item Title (optional) ℹ️',
                                                    'help' => 'This is only necessary when there are more than one movie in this segment. An example would be "Short films 1"'
                                                ],
                                                '.start' => [
                                                    'type' => 'time',
                                                    'label' => 'Start time ℹ️',
                                                    'help' => 'Start time of this segment, has to be in american AM/PM format, sorry about that',
                                                    'size' => 'small'
                                                ],
                                                '.duration' => [
                                                    'type' => 'text',
                                                    'label' => 'Duration in minutes ℹ️',
                                                    'help' => 'Only put in the number of minutes, the "min" after will be added automatically',
                                                    'size' => 'small'
                                                ]
                                            ]
                                        ],
                                        '.content' => [
                                            'type' => 'fieldset',
                                            'collapsed' => true,
                                            'collapsible' => true,
                                            'title' => 'Info',
                                            'underline' => true,
                                            'fields' => [
                                                '.desription' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Program Item Description ℹ️',
                                                    'help' => 'Write the description of the segment in here. If multiple films in this segment, seperate with paragraphs.'
                                                ],
                                                '.credits' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Program Item Credits ℹ️',
                                                    'help' => 'Write the credits of the segment in here. If multiple films in this segment, seperate with paragraphs.'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

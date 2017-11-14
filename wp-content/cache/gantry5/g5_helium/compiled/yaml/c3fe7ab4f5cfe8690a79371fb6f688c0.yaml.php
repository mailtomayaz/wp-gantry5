<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/wp/wp-content/themes/g5_helium/blueprints/content/archive/title.yaml',
    'modified' => 1510684978,
    'data' => [
        'name' => 'Post Title',
        'description' => 'Options for displaying title',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display post titles.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link titles to the posts.',
                    'default' => 0
                ]
            ]
        ]
    ]
];

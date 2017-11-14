<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/wp//wp-content/themes/g5_helium/blueprints/content/single/title.yaml',
    'modified' => 1510684978,
    'data' => [
        'name' => 'Post Title',
        'description' => 'Options for displaying title',
        'type' => 'single',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display post title.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link title to the post.',
                    'default' => 0
                ]
            ]
        ]
    ]
];

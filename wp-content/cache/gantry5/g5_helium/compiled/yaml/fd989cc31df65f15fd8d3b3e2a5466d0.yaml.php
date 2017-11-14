<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/wp/wp-content/themes/g5_helium/blueprints/content/archive/meta-comments.yaml',
    'modified' => 1510684978,
    'data' => [
        'name' => 'Comments Meta',
        'description' => 'Options for displaying comments meta',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Comments',
                    'description' => 'Display number of comments.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Comments',
                    'description' => 'Link comment meta to the comments list.',
                    'default' => 0
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Comments Prefix',
                    'description' => 'Display text directly before the comments count.'
                ]
            ]
        ]
    ]
];

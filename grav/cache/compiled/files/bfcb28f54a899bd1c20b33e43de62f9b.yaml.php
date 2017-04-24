<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mariaszubski/Design/GitHub/recipes/grav/user/config/plugins/email.yaml',
    'modified' => 1493003874,
    'data' => [
        'from' => 'MariaSzubski@gmail.com',
        'to' => 'MariaSzubski@gmail.com',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];

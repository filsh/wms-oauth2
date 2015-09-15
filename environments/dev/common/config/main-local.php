<?php
return [
    'components' => [
        'db' => [
            'dsn' => 'mysql:host=%MYSQL_TCP_ADDR%;port=%MYSQL_TCP_PORT%;dbname=%MYSQL_DATABASE%',
            'username' => '%MYSQL_ENV_MYSQL_USER%',
            'password' => '%MYSQL_ENV_MYSQL_PASSWORD%',
        ],
        'mailer' => [
            'useFileTransport' => true,
        ],
        'wampRouter' => [
            'host' => '%WAMP_TCP_ADDR%',
            'port' => '%WAMP_TCP_PORT%',
        ],
        'configManager' => [
            'rules' => [
                'rule-1' => [
                    'name' => '%SANDBOX_NAME_1%',
                    'include' => '%SANDBOX_INCLUDE_PATTERN_1%',
                    'exclude' => '%SANDBOX_EXCLUDE_PATTERN_1%'
                ]
            ]
        ],
        'authClientCollection' => [
            'clients' => [
                'facebook' => [
                    'clientId'      => '%FACEBOOK_CLIENT_ID%',
                    'clientSecret'  => '%FACEBOOK_CLIENT_SECRET%',
                ],
                'twitter' => [
                    'consumerKey'       => '%TWITTER_CONSUMER_KEY%',
                    'consumerSecret'    => '%TWITTER_CONSUMER_SECRET%',
                ],
                'google' => [
                    'clientId'      => '%GOOGLE_CLIENT_ID%',
                    'clientSecret'  => '%GOOGLE_CLIENT_SECRET%',
                ]
            ],
        ],
    ],
];

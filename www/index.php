<?php

require 'config.php';

$params = [
    'index' => 'developers',
    'type' => 'developer',
    'body' => [
        'query' => [
            'range' => [
                "birthday" => [ "from" => "1970-12-10", "to" => "1974-12-12" ]
            ]
        ]
    ]
];
$response = $client->search($params);

var_dump($response);

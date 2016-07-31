<?php


use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$client = ClientBuilder::create()
                    ->setHosts(['192.168.99.100'])
                    ->build();


# Indexing a document

// $params = [
//     'index' => 'developers',
//     'type' => 'developer',
//     'body' => [ 'name' => 'Kemal', 'last_name' => 'Yenilmez']
// ];
//
// $response = $client->index($params);


# Getting a document

// $params = [
//     'index' => 'developers',
//     'type' => 'developer',
//     'id'  => 'AVY_iVNwGOkYbLNl90-E'
//
// ];
// $response = $client->get($params);

# Updating a document

// $params = [
//     'index' => 'developers',
//     'type'  => 'developer',
//     'id'    => 'AVY_iVNwGOkYbLNl90-E',
//     'body' => [
//             'doc' => ['name' => 'Kemal', 'last_name' => 'Yen']
//           ]
// ];
//
// $response = $client->update($params);

# Searching

$params = [
    'index' => 'developers',
    'type' => 'developer',
    'body' => [
        'query' => [
            'match' => [
                'name' => 'kemal'
            ]
        ]
    ]
];
$response = $client->search($params);


var_dump($response);

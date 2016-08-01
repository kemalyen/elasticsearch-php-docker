<?php
/*
  In this example, I will create a sample data and insert them with bulk function.
*/
require 'config.php';

$faker = Faker\Factory::create();

$params = ['body' => []];

for ($i = 1; $i <= 10000; $i++) {
    $params['body'][] = [
        'index' => [
          '_index' => 'developers',
          '_type' => 'developer'
        ]
    ];

    $params['body'][] = [
        'name'        => $faker->name,
        'email'       => $faker->email,
        'information' => $faker->text,
        'birthday'    => $faker->dateTimeThisCentury->format('Y-m-d'),
    ];

    // Every 1000 documents stop and send the bulk request
    if ($i % 1000 == 0) {
        $responses = $client->bulk($params);

        // erase the old bulk request
        $params = ['body' => []];

        // unset the bulk response when you are done to save memory
        unset($responses);
    }
}

// Send the last batch if it exists
if (!empty($params['body'])) {
    $responses = $client->bulk($params);
}

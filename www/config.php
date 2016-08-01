<?php
use Elasticsearch\ClientBuilder;

require 'vendor/autoload.php';

$client = ClientBuilder::create()
                    ->setHosts(['192.168.99.100'])
                    ->build();

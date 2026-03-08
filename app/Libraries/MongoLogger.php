<?php

namespace App\Libraries;

use MongoDB\Client;

class MongoLogger
{
    public function log($data)
    {
        $client = new Client("mongodb://localhost:27017");

        $collection = $client->tienda_backend->logs;

        $collection->insertOne($data);
    }
}

<?php

require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://127.0.0.1:27017");

$collection = $client->test->productos;

$result = $collection->insertOne([
    "nombre" => "Producto prueba",
    "precio" => 1000,
    "fecha" => new MongoDB\BSON\UTCDateTime()
]);

echo "Documento insertado con ID: " . $result->getInsertedId();
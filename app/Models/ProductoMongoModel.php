<?php

namespace App\Models;

use MongoDB\Client;

class ProductoMongoModel
{
    private $collection;

    public function __construct()
    {
        $client = new Client(env('mongo.uri'));

        $db = $client->selectDatabase(env('mongo.database'));

        $this->collection = $db->productos;
    }

    public function insertar($data)
    {
        return $this->collection->insertOne($data);
    }

    public function actualizar($id, $data)
    {
        return $this->collection->updateOne(
            ['sql_id' => $id],
            ['$set' => $data]
        );
    }

    public function eliminar($id)
    {
        return $this->collection->deleteOne(
            ['sql_id' => $id]
        );
    }

    public function listar()
    {
        return $this->collection->find()->toArray();
    }

    public function buscar($texto)
    {

        return $this->collection->find(
            [
                'nombre' => [
                    '$regex' => $texto,
                    '$options' => 'i'
                ]
            ]
        )->toArray();
    }
}

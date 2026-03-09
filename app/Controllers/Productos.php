<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\ProductoMongoModel;

class Productos extends BaseController
{
    protected $productoModel;
    protected $productoMongoModel;

    public function __construct()
    {
        $this->productoModel = new ProductoModel();
        $this->productoMongoModel = new ProductoMongoModel();
    }

    public function index()
    {
        $data['productos'] = $this->productoModel->findAll();

        return view('productos/index', $data);
    }

    public function crear()
    {
        return view('productos/crear');
    }

    public function guardar()
    {

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock')
        ];

        $id = $this->productoModel->insert($data);

        $dataMongo = $data;
        $dataMongo['sql_id'] = $id;

        $this->productoMongoModel->insertar($dataMongo);

        return redirect()->to('/productos');
    }

    public function editar($id)
    {
        $data['producto'] = $this->productoModel->find($id);

        return view('productos/editar', $data);
    }

    public function actualizar($id)
    {

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock')
        ];

        $this->productoModel->update($id, $data);

        $this->productoMongoModel->actualizar($id, $data);

        return redirect()->to('/productos');
    }

    public function eliminar($id)
    {

        $this->productoModel->delete($id);

        $this->productoMongoModel->eliminar($id);

        return redirect()->to('/productos');
    }

    public function buscar()
    {

        $texto = $this->request->getGet('q');

        $productos = $this->productoMongoModel->buscar($texto);

        $data['productos'] = $productos;

        return view('productos/index', $data);
    }
}

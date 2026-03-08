<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['productos'] = $model->findAll();

        return view('products/list', $data);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
    {
        $model = new ProductModel();

        $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'precio' => $this->request->getPost('precio'),
            'stock' => $this->request->getPost('stock')
        ]);

        return redirect()->to('/productos');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/productos');
    }
}

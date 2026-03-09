<?php

namespace App\Controllers;

class Carrito extends BaseController
{

    public function agregar($id)
    {

        $cart = session()->get('cart') ?? [];

        if (isset($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        session()->set('cart', $cart);

        return redirect()->to('/productos');
    }
}

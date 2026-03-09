<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>

.form-container{
    background:white;
    padding:40px;
    border-radius:10px;
    width:400px;
    margin:auto;
    box-shadow:0 6px 20px rgba(0,0,0,0.1);
}

h2{
    text-align:center;
    margin-bottom:25px;
}

label{
    display:block;
    margin-top:10px;
    font-weight:bold;
}

input{
    width:100%;
    padding:10px;
    margin-top:5px;
    border:1px solid #ddd;
    border-radius:6px;
    font-size:14px;
}

input:focus{
    outline:none;
    border-color:#3498db;
}

button{
    width:100%;
    padding:12px;
    margin-top:20px;
    border:none;
    border-radius:6px;
    background:#3498db;
    color:white;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#2980b9;
}

.volver{
    display:block;
    text-align:center;
    margin-top:15px;
    text-decoration:none;
    color:#666;
}

</style>

<div class="form-container">

<h2>✏️ Editar Producto</h2>

<form method="post" action="<?= base_url('productos/actualizar/'.$producto['id']) ?>">

<?= csrf_field() ?>

<label>Nombre</label>
<input type="text" name="nombre" value="<?= esc($producto['nombre'] ?? '') ?>" required>

<label>Descripción</label>
<input type="text" name="descripcion" value="<?= esc($producto['descripcion'] ?? '') ?>" required>

<label>Precio</label>
<input type="number" step="0.01" min="0" name="precio" value="<?= esc($producto['precio'] ?? 0) ?>" required>

<label>Stock</label>
<input type="number" min="0" name="stock" value="<?= esc($producto['stock'] ?? 0) ?>" required>

<button type="submit">Actualizar Producto</button>

</form>

<a class="volver" href="<?= base_url('productos') ?>">
← Volver a productos
</a>

</div>

<?= $this->endSection() ?>
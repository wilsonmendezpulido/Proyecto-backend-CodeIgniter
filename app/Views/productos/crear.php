<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<style>
    .form-container {
        background: white;
        padding: 40px;
        border-radius: 10px;
        width: 400px;
        margin: auto;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
    }

    label {
        display: block;
        margin-top: 12px;
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
    }

    input:focus {
        outline: none;
        border-color: #27ae60;
    }

    button {
        width: 100%;
        padding: 12px;
        margin-top: 20px;
        border: none;
        border-radius: 6px;
        background: #27ae60;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #1e8449;
    }

    .volver {
        display: block;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        color: #666;
    }
</style>

<div class="form-container">

    <h2>➕ Crear Producto</h2>

    <form method="post" action="<?= base_url('productos/guardar') ?>">

        <?= csrf_field() ?>

        <label>Nombre</label>
        <input type="text" name="nombre" required>

        <label>Descripción</label>
        <input type="text" name="descripcion" required>

        <label>Precio</label>
        <input type="number" step="0.01" name="precio" min="0" required>

        <label>Stock</label>
        <input type="number" name="stock" min="0" required>

        <button type="submit">Guardar Producto</button>

    </form>

    <a class="volver" href="<?= base_url('productos') ?>">
        ← Volver a productos
    </a>

</div>

<?= $this->endSection() ?>
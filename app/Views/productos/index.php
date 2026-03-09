<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<h2>Productos</h2>

<a class="btn btn-success" href="/productos/crear">+ Nuevo Producto</a>

<div class="grid">

    <?php if (!empty($productos) && is_array($productos)): ?>

        <?php foreach ($productos as $p): ?>

            <div class="card">

                <h3><?= esc($p['nombre'] ?? '') ?></h3>

                <p><?= esc($p['descripcion'] ?? '') ?></p>

                <div class="precio">
                    $<?= number_format($p['precio'] ?? 0, 0, ',', '.') ?>
                </div>

                <div class="stock">
                    Stock: <?= esc($p['stock'] ?? 0) ?>
                </div>

                <div class="acciones">

                    <a class="btn btn-primary"
                        href="/productos/editar/<?= esc($p['id'] ?? $p['sql_id']) ?>">
                        Editar
                    </a>

                    <a
                        class="btn btn-danger"
                        href="/productos/eliminar/<?= esc($p['id'] ?? $p['sql_id']) ?>"
                        onclick="return confirm('¿Seguro que deseas eliminar este producto?')">
                        Eliminar
                    </a>

                </div>

            </div>

        <?php endforeach ?>

    <?php else: ?>

        <p>No hay productos registrados.</p>

    <?php endif ?>

</div>

<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .precio {
        font-size: 20px;
        color: #27ae60;
        font-weight: bold;
    }

    .stock {
        color: #777;
    }

    .acciones {
        margin-top: 10px;
    }

    .acciones a {
        margin-right: 5px;
    }
</style>

<?= $this->endSection() ?>
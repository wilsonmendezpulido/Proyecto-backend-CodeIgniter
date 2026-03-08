<h2>Lista de Productos</h2>

<a href="/productos/create">Nuevo producto</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($productos as $p): ?>

        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nombre'] ?></td>
            <td><?= $p['precio'] ?></td>
            <td><?= $p['stock'] ?></td>
            <td>
                <a href="/productos/delete/<?= $p['id'] ?>">Eliminar</a>
            </td>
        </tr>

    <?php endforeach; ?>

</table>
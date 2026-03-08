<h2>Crear Producto</h2>

<form method="post" action="/productos/store">

    Nombre
    <input type="text" name="nombre">

    Descripción
    <textarea name="descripcion"></textarea>

    Precio
    <input type="number" name="precio">

    Stock
    <input type="number" name="stock">

    <button type="submit">Guardar</button>

</form>
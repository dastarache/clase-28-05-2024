
    <form action="procesar.php" method="post">
        <label for="documento">Documento:</label>
        <input type="text" id="documento" name="documento" required>

        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

        <button type="submit">Registrar</button>
    </form>

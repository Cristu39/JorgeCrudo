<p><strong>Insertar nuevo Post:</strong></p>
<form action='?controller=posts&action=insert' method="post" enctype="multipart/form-data">
    <label for="nom">Autor:</label>
    <input type="text" id="author" name="author" required='required'></br>
    
    <label for="nom">Contenido:</label>
    <input type="text" id="content" name="content" required='required'></br>
    
    <label for="nom">Creación:</label>
    <input type="date" id="created" name="created" required='required'></br>
    
    <label for="nom">Última modificación:</label>
    <input type="date" id="modified" name="modified" required='required'></br>
    
    <label for="nom">Imagen:</label>
    <input type="file" id="image" name="image" required='required'></br>
    
    
    <label for="nom">Título:</label>
    <input type="text" id="tittle" name="tittle" required='required'></br></br>

    <input type="submit" name="submit" value="Insertar">
    <input type="reset" name="reset" value="Borrar">
</form>
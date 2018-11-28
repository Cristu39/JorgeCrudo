<p><strong>Actualizar Post:</strong></p>
<form action="?controller=posts&action=update&id=<?php echo $_GET['id']?>" method="post" enctype="multipart/form-data">
    
    <label for="nom">Autor:</label>
    <input type="text" id="author" name="author" required='required' value=<?php echo $_GET['author'];?>></br>
    
    <label for="nom">Contenido:</label>
    <input type="text" id="content" name="content" required='required' value=<?php echo $_GET['content'];?> ></br>
    
    <label for="nom">Creación:</label>
    <input type="date" id="created" name="created" required='required' value=<?php echo $_GET['created'];?>></br>
    
    <label for="nom">Última modificación:</label>
    <input type="date" id="modified" name="modified" required='required' value=<?php echo $_GET['modified'];?>></br>
    
    <label for="nom">Imagen:</label>
    <input type="file" id="image" name="image" required='required' value=<?php echo $_GET['image'];?>></br>
    
    
    <label for="nom">Título:</label>
    <input type="text" id="tittle" name="tittle" required='required' value=<?php echo $_GET['tittle'];?>></br></br>

    <input type="submit" name="submit" value="Insertar">
    <input type="reset" name="reset" value="Borrar">
</form>

<p><strong>Post #<?php echo $post->id; ?></strong></p>
<p><strong>Autor: </strong><?php echo $post->author; ?></p>
<p><strong>Post: </strong><?php echo $post->content; ?></p>
<p><strong>Titulo: </strong><?php echo $post->tittle; ?></p>
<p><strong>Imagen: </strong><?php echo $post->image; ?></p>
<p><strong>Fecha de creacion: </strong><?php echo $post->created; ?></p>
<p><strong>Fecha de modificacion: </strong><?php echo $post->modified; ?></p>

<a href= '?controller=posts&action=formUpdate&id=<?php echo $post->id; ?>&author=<?php echo $post->author?>&content=<?php echo $post ->content?>.&tittle=<?php echo $post ->tittle?>&image=<?php echo $post ->image?>&created=<?php echo $post ->created?>&modified=<?php echo $post ->modified?>'>Actualizar registro</a></br>
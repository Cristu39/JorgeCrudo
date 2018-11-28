<?php
class PostsController {
    public function index() {
        // Guardamos todos los posts en una variable
        $posts = Post::all();
        require_once('views/posts/index.php');
    }
    public function show() {
        // esperamos una url del tipo ?controller=posts&action=show&id=x
        // si no nos pasan el id redirecionamos hacia la pagina de error, el id tenemos
        //que buscarlo en la BBDD
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        require_once('views/posts/show.php');
    }
    public function formInsert() {
        require_once('views/posts/insert.php');
    }
    public function insert(){
        $author = $_POST['author'];
        $content = $_POST['content'];
        $created = $_POST['created'];
        $modified = $_POST['modified'];
        $image = $_FILES['image'];
        $tittle = $_POST['tittle'];
        
        $post = Post::insert($author,$content,$created,$modified,$image,$tittle);
        
    }
    public function formUpdate(){
       require_once('views/posts/update.php');
    }
    public function update(){
        echo $_GET['id'];
        /*
        $id = $_GET['id'];
        $author = $_POST['author'];
        $content = $_POST['content'];
        $created = $_POST['created'];
        $modified = $_POST['modified'];
        $image = $_POST['image'];
        $tittle = $_POST['tittle'];
        */
        if(!isset($_GET['id'])){
            echo 'No';
        }else{echo 'yeah';}
        
    }
}
?>
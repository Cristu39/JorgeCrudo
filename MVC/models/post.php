<?php
class Post {
    // definimos tres atributos
    // los declaramos como públicos para acceder directamente $post->author
    public $id;
    public $author;
    public $content;
    public $tittle;
    public $image;
    public $created;
    public $modified;
    
    public function __construct($id, $author, $content, $created, $modified, $image, $tittle) {
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;
        $this->tittle = $tittle;
        $this->image = $image;
        $this->created = $created;
        $this->modified = $modified;
        
    }
    
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts');

        // creamos una lista de objectos post y recorremos la respuesta de la consulta
        foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['author'], $post['content'], $post['created'], $post['modified'], $post['image'], $post['tittle']);
        }
        return $list;
    }
    
    public static function find($id) {
        $db = Db::getInstance();
        
        // nos aseguramos que $id es un entero
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        
        // preparamos la sentencia y reemplazamos :id con el valor de $id
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        return new Post($post['id'], $post['author'], $post['content'], $post['created'],$post['modified'], $post['image'], $post['tittle']);
    }
    public static function insert($author,$content,$created,$modified,$image,$tittle){
        $db = Db::getInstance();
        $author = $_POST['author'];
        $content = $_POST['content'];
        $created = $_POST['created'];
        $modified = $_POST['modified'];
        $image = !empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
        $tittle = $_POST['tittle'];
        
        $author=htmlspecialchars(strip_tags($author));
        $content=htmlspecialchars(strip_tags($content));
        $created=htmlspecialchars(strip_tags($created));
        $modified=htmlspecialchars(strip_tags($modified));
        $image=htmlspecialchars(strip_tags($image));
        $tittle=htmlspecialchars(strip_tags($tittle));
 
        
        
        
        $req = $db->prepare("INSERT INTO posts (author, content, created, modified, image, tittle) VALUES (:author,:content,:created,:modified,:image,:tittle);");
        
        
        
        // bind values 
        $req->bindParam(":author", $author);
        $req->bindParam(":content", $content);
        $req->bindParam(":created", $created);
        $req->bindParam(":modified", $modified);
        $req->bindParam(":created", $created);
        $req->bindParam(":image", $image);
        $req->bindParam(":tittle", $tittle);
        
        $req -> execute();
        
    }
}
?>

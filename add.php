<?php
    require_once('config.php');
    

if($_POST['id']){
    $id = $_POST['id'];
  $sql = $conn->query("SELECT * FROM bookstores");
  foreach ($sql as $key => $student) {
    if($_POST['id']==$student["id"]) {
        $title = $_POST["title"];
        $author = $_POST["author"];
        $available = $_POST["available"]=="yes"?1:0;
        $pages = $_POST["pages"];
        $isbn = $_POST["isbn"];
        

        $sql = "UPDATE bookstores SET title=:title, author=:author, available=:available,pages=:pages,isbn=:isbn  WHERE id=:id";
        $stmt= $conn->prepare($sql);
        $stmt->execute([':title' => $title, ':author' => $author, ':available' => $available, ':pages' => $pages, ':isbn' => $isbn,':id'=>$id]);
         header('Location:index.php');

    }
  }
}else{
    $title = $_POST["title"];
    $author = $_POST["author"];
    $available = $_POST["available"]=="yes"?1:0;
    $pages = $_POST["pages"];
    $isbn = $_POST["isbn"];
    
    $sql = "INSERT INTO bookstores(title,author,available,pages,isbn) VALUES(:title,:author,:available,:pages,:isbn)";
    $query = $conn->prepare($sql);
    if($query->execute([':title' => $title, ':author' => $author, ':available' => $available, ':pages' => $pages, ':isbn' => $isbn])){
        header('Location:index.php');
    }
}

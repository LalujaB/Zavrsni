<?php
include('include/db.php');

if(!isset($_POST['sendPost'])){
    header("Location:create.php");
}else{
    $author = $_POST['author'];
    $title = $_POST['title'];
    $newPost = $_POST['newPost'];
    $timestamp = date("Y-m-d H:i:s");
    if(empty($author) || empty ($title) || empty ($newPost)){
        header("location:create.php?error=1");
    }else{


        $sql = "INSERT INTO posts (title,body,author,created_at) VALUES ('$title','$newPost','$author','$timestamp')";

        $statement = $connection->prepare($sql);
        $statement->execute();

        header("Location:index.php");
    }
}
?>



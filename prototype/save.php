<?php
require_once "Article.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $article = new Article($pdo);
    $article->create($title, $content);

    header("Location: index.php");
    exit();
}
?>
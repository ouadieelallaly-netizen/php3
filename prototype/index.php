<?php
require_once "Article.php";

$article = new Article($pdo);
$articles = $article->getAll();
?>

<h1>Liste des articles</h1>

<a href="create.php">+ Ajouter un article</a>

<hr>

<?php foreach ($articles as $a): ?>
    <h2><?= htmlspecialchars($a['title']) ?></h2>
    <p><?= htmlspecialchars($a['content']) ?></p>
    <small><?= $a['created_at'] ?></small>
    <hr>
<?php endforeach; ?> 
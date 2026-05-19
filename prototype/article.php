<?php
require_once "db.php";

class Article {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Get all articles
    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM articles ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Create article
    public function create($title, $content) {
        $stmt = $this->pdo->prepare("INSERT INTO articles(title, content) VALUES(?, ?)");
        return $stmt->execute([$title, $content]);
    }
}
?>
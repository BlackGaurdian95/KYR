<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["query"])) {
    $query = strtolower(trim($_POST["query"]));

    require_once 'dbh.inc.php';

    $stmt = $pdo->prepare("SELECT title, snippet, link FROM search_topics WHERE keywords LIKE :query");
    $stmt->execute(["query" => "%$query%"]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);
    exit;
}
?>
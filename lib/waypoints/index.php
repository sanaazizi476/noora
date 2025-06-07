<?php
include 'db.php';

// اجرای کوئری برای انتخاب همه مقالات
$stmt = $conn->query("SELECT * FROM articles");
$articles = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
  <title>بلاگ من</title>
</head>
<body>
  <h1>مقالات</h1>
  <?php foreach ($articles as $article) { ?>
    <h2><?= $article['title'] ?></h2>
    <p><?= $article['content'] ?></p>
    <p>نوشته شده در: <?= $article['created_at'] ?></p>
  <?php } ?>
</body>
</html>
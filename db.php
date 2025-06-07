<!DOCTYPE html>
<html>
<head>
  <title>نمایش داده‌ها</title>
</head>
<body>
  <h1>اطلاعات کاربران</h1>
  <?.php
    include 'db.php';

    $stmt = $conn->query("SELECT * FROM users");
    $users = $stmt->fetchAll();

    if (count($users) > 0) {
      echo "<table>";
      echo "<tr><th>ID</th><th>نام</th><th>ایمیل</th></tr>";
      foreach ($users as $user) {
        echo "<tr><td>" . $user['id'] . "</td><td>" . $user['name'] . "</td><td>" . $user['email'] . "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "db.sql";
    }
  ?>
</body>
</html>
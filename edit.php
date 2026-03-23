<?php
session_start();
if (!isset($_SESSION['user_id'])) header('Location: login.php');

$host = 'localhost'; $db = 'hanakin_db'; $user = 'root'; $pass = '';
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

// 1. 指定されたIDのデータを取得
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM news WHERE id = ?");
$stmt->execute([$id]);
$news = $stmt->fetch();

// 2. 更新処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $update = $pdo->prepare("UPDATE news SET title=?, content=?, category=?, post_date=? WHERE id=?");
    $update->execute([$_POST['title'], $_POST['content'], $_POST['category'], $_POST['post_date'], $id]);
    header('Location: admin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集 - hanakin' crew</title>
</head>
<body>
    <h2>ニュースの編集</h2>
    <form method="POST">
        <input type="text" name="title" value="<?php echo htmlspecialchars($news['title']); ?>" required><br>
        <textarea name="content" required><?php echo htmlspecialchars($news['content']); ?></textarea><br>
        <select name="category">
            <option value="info" <?php if($news['category']=='info') echo 'selected'; ?>>通常</option>
            <option value="event" <?php if($news['category']=='event') echo 'selected'; ?>>イベント</option>
        </select><br>
        <input type="date" name="post_date" value="<?php echo $news['post_date']; ?>" required><br>
        <button type="submit">更新する</button>
        <a href="admin.php">戻る</a>
    </form>
</body>
</html>
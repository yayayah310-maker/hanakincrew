<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$message = "";
$host = 'localhost'; $db = 'hanakin_db'; $user = 'root'; $pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

    // --- 1. 投稿ボタンが押された時の処理 ---
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "INSERT INTO news (title, content, category, post_date) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $_POST['title'],
            $_POST['content'],
            $_POST['category'],
            $_POST['post_date']
        ]);
        $message = "ニュースを投稿しました！";
    }

    // --- 2. 常に最新のリストを取得する（POSTでもGETでも実行される） ---
    $stmt = $pdo->query("SELECT * FROM news ORDER BY post_date DESC");
    $all_news = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    $message = "エラー: " . $e->getMessage();
    $all_news = []; // エラー時は空配列にしておくことでWarningを防ぐ
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>管理画面 - hanakin' crew</title>
    <style>
        body { background: #f4f4f4; font-family: sans-serif; padding: 20px; }
        .form-container { background: #fff; padding: 20px; max-width: 600px; margin: auto; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        input, textarea, select { display: block; width: 100%; margin-bottom: 15px; padding: 10px; box-sizing: border-box; }
        button { background: #000; color: #fff; padding: 10px 20px; border: none; cursor: pointer; }
        .logout { display: block; text-align: center; margin-top: 20px; color: #666; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>新規ニュース投稿</h2>
    <?php if($message): ?><p style="color:blue;"><?php echo $message; ?></p><?php endif; ?>
    
    <form method="POST">
        <label>タイトル</label>
        <input type="text" name="title" required>
        
        <label>内容</label>
        <textarea name="content" rows="5" required></textarea>
        
        <label>カテゴリー</label>
        <select name="category">
            <option value="info">通常お知らせ</option>
            <option value="event">イベント出演</option>
        </select>
        
        <label>表示日付</label>
        <input type="date" name="post_date" value="<?php echo date('Y-m-d'); ?>" required>
        
        <button type="submit">投稿する</button>
    </form>
    
    <a href="logout.php" class="logout">ログアウト</a>
</div>



<hr>
<h3>投稿一覧</h3>
<table border="1" style="width:100%; border-collapse: collapse; background: #fff;">
    <tr style="background: #eee;">
        <th>日付</th>
        <th>タイトル</th>
        <th>操作</th>
    </tr>
    <?php foreach ($all_news as $row): ?>
    <tr>
        <td><?php echo htmlspecialchars($row['post_date']); ?></td>
        <td><?php echo htmlspecialchars($row['title']); ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>">編集</a> | 
            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('本当に削除しますか？')">削除</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
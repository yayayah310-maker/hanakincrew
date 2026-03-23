<?php
session_start();
// すでにログイン済みなら管理画面へ飛ばす
if (isset($_SESSION['user_id'])) {
    header('Location: admin.php');
    exit;
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = 'localhost';
    $db   = 'hanakin_db';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
        
        $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
        $stmt->execute([$_POST['username']]);
        $admin = $stmt->fetch();

        // ユーザーが存在し、パスワードが合致するか確認
        if ($admin && password_verify($_POST['password'], $admin['password'])) {
            // セッションにIDを保存（ログイン成功）
            session_regenerate_id(true); // セキュリティ対策
            $_SESSION['user_id'] = $admin['id'];
            header('Location: admin.php');
            exit;
        } else {
            $error = "ユーザー名かパスワードが違います。";
        }
    } catch (PDOException $e) {
        $error = "エラーが発生しました。";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Login - hanakin' crew</title>
    <style>
        body { background: #000; color: #fff; display: flex; justify-content: center; align-items: center; height: 100vh; font-family: sans-serif; }
        form { border: 1px solid #333; padding: 40px; border-radius: 8px; }
        input { display: block; width: 200px; margin-bottom: 20px; padding: 10px; background: #222; border: 1px solid #444; color: #fff; }
        button { width: 100%; padding: 10px; background: #fff; border: none; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Admin Login</h2>
        <?php if($error): ?><p style="color:red;"><?php echo $error; ?></p><?php endif; ?>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
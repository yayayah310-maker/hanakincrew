<?php
$host = 'localhost'; $db = 'hanakin_db'; $user = 'root'; $pass = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $stmt = $pdo->query("SELECT * FROM news ORDER BY post_date DESC LIMIT 3");
    $news_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    exit('DB接続失敗: ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hanakin' crew | Official Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
     <button class="menu-btn" id="menuBtn">
    <span></span><span></span><span></span>
</button>

<nav class="nav-menu" id="navMenu">
    <ul>
        <li><a href="#news">NEWS</a></li>
        <li><a href="#numbers">NUMBERS</a></li>
        <li><a href="#access">ACCESS</a></li>
    </ul>
</nav>

     <header class="hero">
          <video class="hero-video" autoplay loop muted playsinline >
    <source src="hero.mp4" type="video/mp4">
</video>
        
    </header>

    <main>
     
    <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="main-copy">さあ、金曜日だ。<br>ステップを踏め。夜はまだ長い。</h1>
            <p class="sub-copy">週末のはじまりに、ただダンスが好きで集まる。</p>
        </div>
          <section class="container Instagram-section">
               <h2 class="section-title">Instagram</h2>
          </section>


        <section class="container news-section">
            <h2 class="section-title">NEWS</h2>
            <div class="news-list">
                <?php foreach ($news_list as $news): ?>
                    <article class="news-item">
                        <time><?php echo htmlspecialchars($news['post_date']); ?></time>
                        <span class="category-tag <?php echo htmlspecialchars($news['category']); ?>">
                            <?php echo strtoupper(htmlspecialchars($news['category'])); ?>
                        </span>
                        <h3><?php echo htmlspecialchars($news['title']); ?></h3>
                        <p><?php echo nl2br(htmlspecialchars($news['content'])); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="stats-section">
            <h2 class="section-title">NUMBERS</h2>
            <div class="stats-grid">
                <div class="chart-item" data-percent="90">
                    <canvas id="chart1"></canvas>
                    <p class="chart-text">社会人比率<br><strong>90%</strong></p>
                </div>
                <div class="chart-item" data-percent="40">
                    <canvas id="chart2"></canvas>
                    <p class="chart-text">未経験スタート<br><strong>40%</strong></p>
                </div>
                <div class="chart-item" data-percent="70">
                    <canvas id="chart3"></canvas>
                    <p class="chart-text">東区・近隣在住<br><strong>70%</strong></p>
                </div>
                <div class="chart-item" data-percent="60">
                    <canvas id="chart4"></canvas>
                    <p class="chart-text">平均継続5年以上<br><strong>60%</strong></p>
                </div>
                <div class="chart-item" data-percent="95">
                    <canvas id="chart5"></canvas>
                    <p class="chart-text">打ち上げ参加率<br><strong>95%</strong></p>
                </div>
            </div>
        </section>

        <section id="access" class="container access-section">
    <h2 class="section-title">ACCESS</h2>
    <p>新潟市東区某所 公民館</p>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

    </main>

     <footer class="main-footer">
    <div class="footer-content">
        <div class="footer-logo">hanakin' crew</div>
        
        <nav class="footer-sns">
            <a href="https://www.instagram.com/hanakin_crew/" target="_blank" aria-label="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
            </a>
            <a href="https://www.youtube.com/channel/UCdGVr88pNYOfTYAdXGOwRcA/videos" target="_blank" aria-label="YouTube">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M581.7 188.1C575.5 164.4 556.9 145.8 533.4 139.5C490.9 128 320.1 128 320.1 128C320.1 128 149.3 128 106.7 139.5C83.2 145.8 64.7 164.4 58.4 188.1C47 231 47 320.4 47 320.4C47 320.4 47 409.8 58.4 452.7C64.7 476.3 83.2 494.2 106.7 500.5C149.3 512 320.1 512 320.1 512C320.1 512 490.9 512 533.5 500.5C557 494.2 575.5 476.3 581.8 452.7C593.2 409.8 593.2 320.4 593.2 320.4C593.2 320.4 593.2 231 581.8 188.1zM264.2 401.6L264.2 239.2L406.9 320.4L264.2 401.6z"/></svg>
            </a>
            <a href="https://www.tiktok.com/@hanakincrew" target="_blank" aria-label="TikTok">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M544.5 273.9C500.5 274 457.5 260.3 421.7 234.7L421.7 413.4C421.7 446.5 411.6 478.8 392.7 506C373.8 533.2 347.1 554 316.1 565.6C285.1 577.2 251.3 579.1 219.2 570.9C187.1 562.7 158.3 545 136.5 520.1C114.7 495.2 101.2 464.1 97.5 431.2C93.8 398.3 100.4 365.1 116.1 336C131.8 306.9 156.1 283.3 185.7 268.3C215.3 253.3 248.6 247.8 281.4 252.3L281.4 342.2C266.4 337.5 250.3 337.6 235.4 342.6C220.5 347.6 207.5 357.2 198.4 369.9C189.3 382.6 184.4 398 184.5 413.8C184.6 429.6 189.7 444.8 199 457.5C208.3 470.2 221.4 479.6 236.4 484.4C251.4 489.2 267.5 489.2 282.4 484.3C297.3 479.4 310.4 469.9 319.6 457.2C328.8 444.5 333.8 429.1 333.8 413.4L333.8 64L421.8 64C421.7 71.4 422.4 78.9 423.7 86.2C426.8 102.5 433.1 118.1 442.4 131.9C451.7 145.7 463.7 157.5 477.6 166.5C497.5 179.6 520.8 186.6 544.6 186.6L544.6 274z"/></svg>
            </a>
        </nav>
        
        <p class="copyright">&copy; <?php echo date('Y'); ?> hanakin' crew. All Rights Reserved.</p>
    </div>
</footer>

    <script>
     const menuBtn = document.getElementById('menuBtn');
const navMenu = document.getElementById('navMenu');
menuBtn.addEventListener('click', () => {
    navMenu.classList.toggle('active');
    // 三本線を「×」にする演出などは後ほど！
});
// リンクをクリックしたら閉じる
navMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => navMenu.classList.remove('active'));
});

        let charts = {};
        function initChart(canvasId) {
            const ctx = document.getElementById(canvasId).getContext('2d');
            charts[canvasId] = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [0, 100],
                        backgroundColor: ['#006D77', '#F2ECE4'],
                        borderWidth: 0
                    }]
                },
                options: {
                    cutout: '85%',
                    animation: { animateRotate: true, duration: 2000 },
                    plugins: { tooltip: { enabled: false } }
                }
            });
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const items = entry.target.querySelectorAll('.chart-item');
                    items.forEach((item, index) => {
                        const canvasId = item.querySelector('canvas').id;
                        const finalPercent = item.getAttribute('data-percent');
                        initChart(canvasId);
                        setTimeout(() => {
                            charts[canvasId].data.datasets[0].data = [finalPercent, 100 - finalPercent];
                            charts[canvasId].update();
                        }, index * 200 + 50);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        const target = document.querySelector('.stats-grid');
        if(target) observer.observe(target);
    </script>
</body>
</html>
<?php
// footer.php - Mico Medical Website Footer

$address = [
    'location' => 'Location',
    'phone'    => '+01 1234567890',
    'email'    => 'demo@gmail.com',
];

$useful_links = [
    ['label' => 'Home',       'href' => '#', 'active' => true],
    ['label' => 'About',      'href' => '#'],
    ['label' => 'Treatment',  'href' => '#'],
    ['label' => 'Doctors',    'href' => '#'],
    ['label' => 'Testimonial','href' => '#'],
    ['label' => 'Contact us', 'href' => '#'],
];

$latest_posts = [
    ['title' => 'Normal distribution', 'img' => 'img/post1.jpg'],
    ['title' => 'Normal distribution', 'img' => 'img/post2.jpg'],
];

$news = [
    ['title' => 'Normal distribution', 'img' => 'img/news1.jpg'],
    ['title' => 'Normal distribution', 'img' => 'img/news2.jpg'],
];

$social_links = [
    'facebook'  => '#',
    'twitter'   => '#',
    'linkedin'  => '#',
    'instagram' => '#',
];

$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mico – Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:       #2b2b2b;
            --bg-light: #333333;
            --accent:   #00bfa5;
            --text:     #cccccc;
            --white:    #ffffff;
            --border:   #444444;
        }

        body {
            background: var(--bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text);
        }

        /* ── Newsletter bar ── */
        .footer-newsletter {
            display: flex;
            align-items: center;
            background: var(--bg-light);
            padding: 0 30px;
        }

        .footer-newsletter .logo-box {
            background: var(--white);
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 140px;
        }

        .footer-newsletter .logo-box img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .footer-newsletter .logo-box span {
            color: #333;
            font-weight: 700;
            font-size: 1rem;
            margin-top: 4px;
        }

        .footer-newsletter form {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 18px 30px;
            border-bottom: 1px solid var(--border);
            margin-left: 30px;
        }

        .footer-newsletter form input[type="email"] {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            color: var(--text);
            font-size: 0.95rem;
        }

        .footer-newsletter form input[type="email"]::placeholder {
            color: #888;
        }

        .footer-newsletter form button {
            background: transparent;
            border: none;
            color: var(--accent);
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 1px;
            cursor: pointer;
            text-transform: uppercase;
        }

        .footer-newsletter form button:hover { opacity: 0.8; }

        /* ── Main footer grid ── */
        .footer-main {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            padding: 50px 40px 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Section heading */
        .footer-col h4 {
            color: var(--white);
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 22px;
        }

        .footer-col h4::before {
            content: '';
            display: inline-block;
            width: 14px;
            height: 14px;
            background: var(--accent);
            border-radius: 2px;
            flex-shrink: 0;
        }

        /* Address */
        .footer-address ul { list-style: none; }
        .footer-address ul li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            font-size: 0.9rem;
        }
        .footer-address ul li i { color: var(--text); width: 16px; }

        .footer-social { margin-top: 20px; display: flex; gap: 12px; }
        .footer-social a {
            color: var(--accent);
            font-size: 1.1rem;
            transition: opacity .2s;
        }
        .footer-social a:hover { opacity: 0.7; }

        /* Useful links */
        .footer-links ul { list-style: none; }
        .footer-links ul li { margin-bottom: 10px; }
        .footer-links ul li a {
            text-decoration: none;
            color: var(--text);
            font-size: 0.9rem;
            transition: color .2s;
        }
        .footer-links ul li a:hover,
        .footer-links ul li a.active { color: var(--accent); }

        /* Posts / News */
        .post-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
        }
        .post-item img {
            width: 70px;
            height: 56px;
            object-fit: cover;
            border-radius: 4px;
            background: var(--bg-light);
            flex-shrink: 0;
        }
        .post-item span {
            font-size: 0.88rem;
            color: var(--text);
            line-height: 1.4;
        }

        /* ── Bottom bar ── */
        .footer-bottom {
            text-align: center;
            padding: 18px;
            border-top: 1px solid var(--border);
            font-size: 0.85rem;
            color: #888;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .footer-main { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 560px) {
            .footer-main { grid-template-columns: 1fr; }
            .footer-newsletter { flex-direction: column; }
            .footer-newsletter form { margin-left: 0; padding: 14px 0; }
        }
    </style>
</head>
<body>

<footer>

    <!-- Newsletter -->
    <div class="footer-newsletter">
        <div class="logo-box">
            <!-- Replace src with your actual logo -->
            <img src="img/logo.png" alt="Mico Logo" onerror="this.style.display='none'">
            <span>Mico</span>
        </div>
        <form action="subscribe.php" method="POST">
            <input type="email" name="email" placeholder="Your email" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>

    <!-- Main columns -->
    <div class="footer-main">

        <!-- ADDRESS -->
        <div class="footer-col footer-address">
            <h4>Address</h4>
            <ul>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <?= htmlspecialchars($address['location']) ?>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    Call <?= htmlspecialchars($address['phone']) ?>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <?= htmlspecialchars($address['email']) ?>
                </li>
            </ul>
            <div class="footer-social">
                <?php foreach ($social_links as $platform => $url): ?>
                    <a href="<?= htmlspecialchars($url) ?>" target="_blank" aria-label="<?= ucfirst($platform) ?>">
                        <i class="fab fa-<?= $platform ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- USEFUL LINKS -->
        <div class="footer-col footer-links">
            <h4>Useful Link</h4>
            <ul>
                <?php foreach ($useful_links as $link): ?>
                    <li>
                        <a href="<?= htmlspecialchars($link['href']) ?>"
                           class="<?= !empty($link['active']) ? 'active' : '' ?>">
                            <?= htmlspecialchars($link['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- LATEST POSTS -->
        <div class="footer-col">
            <h4>Latest Posts</h4>
            <?php foreach ($latest_posts as $post): ?>
                <div class="post-item">
                    <img src="<?= htmlspecialchars($post['img']) ?>"
                         alt="<?= htmlspecialchars($post['title']) ?>">
                    <span><?= htmlspecialchars($post['title']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- NEWS -->
        <div class="footer-col">
            <h4>News</h4>
            <?php foreach ($news as $item): ?>
                <div class="post-item">
                    <img src="<?= htmlspecialchars($item['img']) ?>"
                         alt="<?= htmlspecialchars($item['title']) ?>">
                    <span><?= htmlspecialchars($item['title']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Bottom bar -->
    <div class="footer-bottom">
        <p>&copy; <?= $year ?> All Rights Reserved By Free Html Templates</p>
    </div>

</footer>

</body>
</html>
```
<?php
// Configuration
$site_name = "Mico";
$phone = "+01 123455678990";
$email = "demo@gmail.com";
$location = "Location";

// Navigation links
$nav_links = [
    ["label" => "HOME",        "href" => "#home",        "active" => true],
    ["label" => "ABOUT",       "href" => "#about",       "active" => false],
    ["label" => "TREATMENT",   "href" => "#treatment",   "active" => false],
    ["label" => "DOCTORS",     "href" => "#doctors",     "active" => false],
    ["label" => "TESTIMONIAL", "href" => "#testimonial", "active" => false],
    ["label" => "CONTACT US",  "href" => "#contact",     "active" => false],
];

// Treatment services
$treatments = [
    [
        "icon"  => "💉",
        "title" => "Nephrologist Care",
        "desc"  => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything.",
    ],
    [
        "icon"  => "👁️",
        "title" => "Eye Care",
        "desc"  => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything.",
    ],
    [
        "icon"  => "🔬",
        "title" => "Pediatrician Clinic",
        "desc"  => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything.",
    ],
    [
        "icon"  => "🩺",
        "title" => "Parental Care",
        "desc"  => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything.",
    ],
];

// Footer links
$footer_links = ["Home", "About", "Treatment", "Doctors", "Testimonial", "Contact us"];

// Latest posts / news (reused)
$posts = [
    ["img" => "https://placehold.co/80x80/1abc9c/fff?text=Post", "title" => "Normal distribution"],
    ["img" => "https://placehold.co/80x80/1abc9c/fff?text=Post", "title" => "Normal distribution"],
];

$current_year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($site_name) ?> – Hospital &amp; Medical</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />
    <style>
        /* ── CSS Variables ───────────────────────────────────── */
        :root {
            --teal:      #1abc9c;
            --teal-dark: #17a589;
            --dark:      #1e1e1e;
            --dark2:     #252525;
            --dark3:     #2d2d2d;
            --text-muted:#9e9e9e;
            --white:     #ffffff;
            --font-body: 'Nunito', sans-serif;
            --font-head: 'Playfair Display', serif;
        }

        /* ── Reset ───────────────────────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: var(--font-body); color: #333; background: #fff; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }

        /* ── Top Bar ─────────────────────────────────────────── */
        .topbar {
            background: #fff;
            border-bottom: 1px solid #eee;
            padding: 8px 0;
        }
        .topbar .inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            gap: 32px;
            align-items: center;
        }
        .topbar a {
            font-size: 13px;
            color: #555;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .topbar a span.icon { color: var(--teal); font-size: 15px; }

        /* ── Navbar ──────────────────────────────────────────── */
        .navbar {
            background: var(--teal);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 12px rgba(0,0,0,.15);
        }
        .navbar .inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
        }
        .navbar .logo {
            background: #fff;
            padding: 12px 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            min-width: 120px;
        }
        .navbar .logo .logo-icon {
            font-size: 32px;
            line-height: 1;
        }
        .navbar .logo .logo-name {
            font-family: var(--font-head);
            font-size: 16px;
            color: var(--dark);
        }
        .nav-links {
            display: flex;
            flex: 1;
            padding: 0 24px;
            gap: 4px;
        }
        .nav-links li a {
            display: block;
            padding: 22px 18px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .06em;
            color: rgba(255,255,255,.85);
            transition: background .2s, color .2s;
        }
        .nav-links li a:hover,
        .nav-links li a.active {
            background: rgba(0,0,0,.12);
            color: #fff;
        }
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 4px;
            margin-left: auto;
        }
        .nav-actions a {
            padding: 8px 16px;
            font-size: 13px;
            font-weight: 700;
            color: rgba(255,255,255,.85);
            display: flex;
            align-items: center;
            gap: 6px;
            transition: color .2s;
        }
        .nav-actions a:hover { color: #fff; }
        .nav-actions .search-btn {
            background: rgba(0,0,0,.15);
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: background .2s;
        }
        .nav-actions .search-btn:hover { background: rgba(0,0,0,.3); }

        /* ── Treatment Section ───────────────────────────────── */
        #treatment {
            padding: 80px 24px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .section-title {
            text-align: center;
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 56px;
            color: var(--dark);
        }
        .section-title span { color: var(--teal); }

        .treatment-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 32px;
            position: relative;
        }
        .treatment-card {
            padding: 8px 0;
        }
        .treatment-card .t-icon {
            font-size: 48px;
            margin-bottom: 20px;
            display: block;
        }
        .treatment-card h3 {
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 14px;
            color: var(--dark);
        }
        .treatment-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 18px;
        }
        .read-more {
            font-size: 13px;
            font-weight: 700;
            color: var(--teal);
            letter-spacing: .05em;
            transition: color .2s;
        }
        .read-more:hover { color: var(--teal-dark); }

        /* Decorative illustration placeholder */
        .treatment-illustration {
            position: absolute;
            right: -60px;
            bottom: -20px;
            font-size: 120px;
            opacity: .08;
            pointer-events: none;
            transform: scaleX(-1);
        }

        /* ── Footer ──────────────────────────────────────────── */
        footer {
            background: var(--dark);
            color: #ccc;
        }
        .footer-top {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 24px 32px;
            display: flex;
            align-items: center;
            gap: 32px;
            border-bottom: 1px solid var(--dark3);
        }
        .footer-logo {
            background: #fff;
            padding: 16px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            min-width: 130px;
            flex-shrink: 0;
        }
        .footer-logo .logo-icon { font-size: 28px; }
        .footer-logo .logo-name { font-family: var(--font-head); font-size: 15px; color: var(--dark); }

        .footer-subscribe {
            flex: 1;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #555;
            padding-bottom: 4px;
        }
        .footer-subscribe input {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            color: #ccc;
            font-size: 14px;
            font-family: var(--font-body);
            padding: 8px 0;
        }
        .footer-subscribe input::placeholder { color: #666; }
        .footer-subscribe button {
            background: none;
            border: none;
            color: var(--teal);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .08em;
            cursor: pointer;
            padding: 8px 0 8px 16px;
            transition: color .2s;
        }
        .footer-subscribe button:hover { color: var(--teal-dark); }

        .footer-cols {
            max-width: 1200px;
            margin: 0 auto;
            padding: 48px 24px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
        }
        .footer-col h4 {
            font-size: 14px;
            font-weight: 800;
            letter-spacing: .08em;
            color: #fff;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .footer-col h4::before {
            content: '';
            display: inline-block;
            width: 14px;
            height: 14px;
            background: var(--teal);
            flex-shrink: 0;
        }
        .footer-col ul li {
            margin-bottom: 14px;
        }
        .footer-col ul li a {
            font-size: 14px;
            color: #999;
            transition: color .2s;
        }
        .footer-col ul li a:hover,
        .footer-col ul li a.active { color: var(--teal); }

        /* Address col */
        .addr-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
            font-size: 14px;
            color: #999;
        }
        .addr-item .addr-icon { color: var(--teal); font-size: 16px; flex-shrink: 0; }

        .social-links {
            display: flex;
            gap: 16px;
            margin-top: 20px;
        }
        .social-links a {
            color: #ccc;
            font-size: 20px;
            transition: color .2s;
        }
        .social-links a:hover { color: var(--teal); }

        /* Post items */
        .post-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }
        .post-item img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
            flex-shrink: 0;
        }
        .post-item span {
            font-size: 13px;
            color: #999;
        }

        /* Footer bottom */
        .footer-bottom {
            background: var(--dark2);
            text-align: center;
            padding: 18px 24px;
            font-size: 13px;
            color: #666;
            border-top: 1px solid var(--dark3);
        }
    </style>
</head>
<body>



<!-- ── Treatment Section ───────────────────────── -->
<section id="treatment">
    <h2 class="section-title">Hospital <span>Treatment</span></h2>

    <div class="treatment-grid">
        <?php foreach ($treatments as $t): ?>
        <div class="treatment-card">
            <span class="t-icon"><?= $t['icon'] ?></span>
            <h3><?= htmlspecialchars($t['title']) ?></h3>
            <p><?= htmlspecialchars($t['desc']) ?></p>
            <a href="#" class="read-more">READ MORE</a>
        </div>
        <?php endforeach; ?>

        <span class="treatment-illustration">🩺</span>
    </div>
</section>
</body>
</html>
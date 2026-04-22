<?php
// header.php - Mico Medical Website Header

$contact_info = [
    'phone'    => '+01 123455678990',
    'email'    => 'demo@gmail.com',
    'location' => 'Location',
];

$nav_links = [
    ['label' => 'Home',       'href' => 'index.php',       'active' => true],
    ['label' => 'About',      'href' => 'about.php'],
    ['label' => 'Treatment',  'href' => 'treatment.php'],
    ['label' => 'Doctors',    'href' => 'doctors.php'],
    ['label' => 'Testimonial','href' => 'testimonial.php'],
    ['label' => 'Contact Us', 'href' => 'contact.php'],
];

// Current page detection
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mico – Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --accent:   #00bfa5;
            --accent-dark: #009688;
            --white:    #ffffff;
            --topbar-text: #555555;
            --topbar-bg: #ffffff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* ── Top info bar ── */
        .header-topbar {
            background: var(--topbar-bg);
            padding: 8px 40px;
            display: flex;
            align-items: center;
            gap: 30px;
            border-bottom: 1px solid #eee;
        }

        .header-topbar a {
            text-decoration: none;
            color: var(--topbar-text);
            font-size: 0.88rem;
            display: flex;
            align-items: center;
            gap: 7px;
            transition: color .2s;
        }

        .header-topbar a:hover { color: var(--accent); }

        .header-topbar a i {
            color: var(--accent);
            font-size: 0.9rem;
        }

        /* ── Main navbar ── */
        .header-navbar {
            background: var(--accent);
            display: flex;
            align-items: stretch;
        }

        /* Logo box */
        .header-logo {
            background: var(--white);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px 24px;
            min-width: 120px;
            text-decoration: none;
        }

        .header-logo img {
            width: 52px;
            height: 52px;
            object-fit: contain;
        }

        .header-logo span {
            font-weight: 700;
            color: #333;
            font-size: 0.95rem;
            margin-top: 3px;
        }

        /* Nav links */
        .header-nav {
            display: flex;
            align-items: center;
            list-style: none;
            flex: 1;
            padding: 0 20px;
            gap: 5px;
        }

        .header-nav li a {
            display: block;
            padding: 20px 18px;
            color: var(--white);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: background .2s;
            white-space: nowrap;
        }

        .header-nav li a:hover,
        .header-nav li a.active {
            background: rgba(0,0,0,0.12);
        }

        /* Auth + Search */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 0 16px;
            margin-left: auto;
        }

        .header-actions a {
            color: var(--white);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 20px 12px;
            transition: background .2s;
            white-space: nowrap;
        }

        .header-actions a:hover { background: rgba(0,0,0,0.12); }

        .header-search-btn {
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 1rem;
            cursor: pointer;
            padding: 20px 14px;
            transition: background .2s;
        }

        .header-search-btn:hover { background: rgba(0,0,0,0.12); }

        /* Search overlay */
        .search-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }

        .search-overlay.active { display: flex; }

        .search-box {
            background: white;
            border-radius: 6px;
            display: flex;
            overflow: hidden;
            width: min(500px, 90vw);
        }

        .search-box input {
            flex: 1;
            border: none;
            outline: none;
            padding: 14px 18px;
            font-size: 1rem;
        }

        .search-box button {
            background: var(--accent);
            border: none;
            color: white;
            padding: 14px 20px;
            cursor: pointer;
            font-size: 1rem;
        }

        /* Mobile hamburger */
        .hamburger {
            display: none;
            background: transparent;
            border: none;
            color: white;
            font-size: 1.4rem;
            padding: 0 18px;
            cursor: pointer;
        }

        /* ── Responsive ── */
        @media (max-width: 960px) {
            .header-nav { display: none; flex-direction: column; width: 100%; padding: 0; gap: 0; }
            .header-nav.open { display: flex; }
            .header-nav li a { padding: 14px 20px; }

            .header-navbar { flex-wrap: wrap; }
            .header-actions { display: none; }
            .hamburger { display: block; margin-left: auto; }

            .header-topbar { padding: 8px 16px; flex-wrap: wrap; gap: 12px; }
        }
    </style>
</head>
<body>

<header>

    <!-- Top contact bar -->
    <div class="header-topbar">
        <a href="tel:<?= preg_replace('/\s+/', '', $contact_info['phone']) ?>">
            <i class="fas fa-phone-alt"></i>
            Call : <?= htmlspecialchars($contact_info['phone']) ?>
        </a>
        <a href="mailto:<?= htmlspecialchars($contact_info['email']) ?>">
            <i class="fas fa-envelope"></i>
            Email : <?= htmlspecialchars($contact_info['email']) ?>
        </a>
        <a href="#">
            <i class="fas fa-map-marker-alt"></i>
            <?= htmlspecialchars($contact_info['location']) ?>
        </a>
    </div>

    <!-- Main navigation -->
    <nav class="header-navbar">

        <!-- Logo -->
        <a href="index.php" class="header-logo">
            <img src="img/logo.png" alt="Mico Logo" onerror="this.style.display='none'">
            <span>Mico</span>
        </a>

        <!-- Nav links -->
        <ul class="header-nav" id="mainNav">
            <?php foreach ($nav_links as $link):
                $is_active = ($current_page === basename($link['href'])) || (!empty($link['active']) && $current_page === 'header.php');
            ?>
                <li>
                    <a href="<?= htmlspecialchars($link['href']) ?>"
                       class="<?= $is_active ? 'active' : '' ?>">
                        <?= htmlspecialchars($link['label']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Auth + Search -->
        <div class="header-actions">
            <a href="login.php"><i class="fas fa-user"></i> Login</a>
            <a href="signup.php"><i class="fas fa-user-plus"></i> Sign Up</a>
            <button class="header-search-btn" onclick="toggleSearch()" aria-label="Search">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Mobile hamburger -->
        <button class="hamburger" onclick="toggleNav()" aria-label="Menu">
            <i class="fas fa-bars"></i>
        </button>

    </nav>

</header>

<!-- Search overlay -->
<div class="search-overlay" id="searchOverlay" onclick="closeSearch(event)">
    <form class="search-box" action="search.php" method="GET">
        <input type="text" name="q" placeholder="Search..." autofocus>
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>

<script>
    function toggleNav() {
        document.getElementById('mainNav').classList.toggle('open');
    }

    function toggleSearch() {
        document.getElementById('searchOverlay').classList.toggle('active');
    }

    function closeSearch(e) {
        if (e.target === document.getElementById('searchOverlay')) {
            document.getElementById('searchOverlay').classList.remove('active');
        }
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.getElementById('searchOverlay').classList.remove('active');
        }
    });
</script>

</body>
</html>
<?php
// ============================================================
// Medical Clinic Website - index.php
// ============================================================

// --- Data Configuration ---
$site_name = "Mico";
$contact_phone = "+01 123455678990";
$contact_email = "demo@gmail.com";
$contact_location = "Location";

$nav_links = [
    ["label" => "HOME",       "href" => "#",        "active" => false],
    ["label" => "ABOUT",      "href" => "#about",   "active" => false],
    ["label" => "TREATMENT",  "href" => "#treatment","active" => false],
    ["label" => "DOCTORS",    "href" => "#doctors",  "active" => true],
    ["label" => "TESTIMONIAL","href" => "#testimonial","active" => false],
    ["label" => "CONTACT US", "href" => "#contact",  "active" => false],
];

$doctors = [
    [
        "name"       => "Dr. Jenni",
        "degree"     => "MBBS",
        "specialty"  => "General Physician",
        "image"      => "https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop&crop=face",
        "facebook"   => "#",
        "twitter"    => "#",
        "linkedin"   => "#",
        "instagram"  => "#",
    ],
    [
        "name"       => "Dr. Morco",
        "degree"     => "MBBS",
        "specialty"  => "Surgeon",
        "image"      => "https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop&crop=face",
        "facebook"   => "#",
        "twitter"    => "#",
        "linkedin"   => "#",
        "instagram"  => "#",
    ],
    [
        "name"       => "Dr. Hennry",
        "degree"     => "MBBS",
        "specialty"  => "Cardiologist",
        "image"      => "https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop&crop=face",
        "facebook"   => "#",
        "twitter"    => "#",
        "linkedin"   => "#",
        "instagram"  => "#",
    ],
    [
        "name"       => "Dr. Sarah",
        "degree"     => "MBBS",
        "specialty"  => "Pediatrician",
        "image"      => "https://images.unsplash.com/photo-1651008376811-b90baee60c1f?w=400&h=400&fit=crop&crop=face",
        "facebook"   => "#",
        "twitter"    => "#",
        "linkedin"   => "#",
        "instagram"  => "#",
    ],
];

$footer_links = [
    ["label" => "Home",       "href" => "#",         "active" => false],
    ["label" => "About",      "href" => "#about",    "active" => false],
    ["label" => "Treatment",  "href" => "#treatment","active" => false],
    ["label" => "Doctors",    "href" => "#doctors",  "active" => true],
    ["label" => "Testimonial","href" => "#testimonial","active" => false],
    ["label" => "Contact us", "href" => "#contact",  "active" => false],
];

$latest_posts = [
    ["title" => "Normal distribution", "image" => "https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=60&h=60&fit=crop"],
    ["title" => "Normal distribution", "image" => "https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=60&h=60&fit=crop"],
];

$news_items = [
    ["title" => "Normal distribution", "image" => "https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=60&h=60&fit=crop"],
    ["title" => "Normal distribution", "image" => "https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=60&h=60&fit=crop"],
];

// Handle newsletter subscription (POST)
$subscribe_message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["email"])) {
    $email = filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL);
    if ($email) {
        // TODO: save $email to DB or mailing list
        $subscribe_message = "Thank you for subscribing!";
    } else {
        $subscribe_message = "Please enter a valid email address.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?= htmlspecialchars($site_name) ?> – Medical Clinic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        /* ---- CSS Variables ---- */
        :root {
            --teal:    #00c9a7;
            --teal-dk: #00a98a;
            --dark:    #222222;
            --dark2:   #2d2d2d;
            --white:   #ffffff;
            --gray:    #f5f5f5;
            --text:    #444444;
            --radius:  10px;
            --shadow:  0 8px 30px rgba(0,0,0,.12);
        }

        /* ---- Reset ---- */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Nunito', sans-serif; color: var(--text); background: var(--white); }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { display: block; max-width: 100%; }

        /* ---- TOP BAR ---- */
        .topbar {
            background: var(--white);
            border-bottom: 1px solid #eee;
            padding: 7px 0;
            text-align: center;
            font-size: .82rem;
            color: #555;
        }
        .topbar span { margin: 0 14px; }
        .topbar i { margin-right: 4px; color: var(--teal); }

        /* ---- NAVBAR ---- */
        .navbar {
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            height: 72px;
            box-shadow: 0 2px 10px rgba(0,0,0,.07);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            font-size: 1.25rem;
        }
        .navbar .brand img { width: 44px; height: 44px; border-radius: 50%; }
        .navbar nav { display: flex; gap: 28px; }
        .navbar nav a {
            font-size: .82rem;
            font-weight: 700;
            letter-spacing: .06em;
            color: #333;
            transition: color .2s;
        }
        .navbar nav a:hover,
        .navbar nav a.active { color: var(--teal); }
        .navbar .nav-actions { display: flex; gap: 16px; align-items: center; }
        .navbar .nav-actions a {
            font-size: .82rem;
            font-weight: 700;
            color: #444;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .navbar .nav-actions a:hover { color: var(--teal); }
        .navbar .search-btn { cursor: pointer; color: #444; font-size: 1rem; }
        .navbar .search-btn:hover { color: var(--teal); }

        /* ---- DOCTORS SECTION ---- */
        #doctors {
            background: var(--teal);
            padding: 60px 20px 70px;
            text-align: center;
        }
        #doctors h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: var(--dark);
            margin-bottom: 40px;
            letter-spacing: .02em;
        }
        #doctors h2 span { color: var(--white); }

        /* Carousel wrapper */
        .carousel-wrap {
            position: relative;
            max-width: 960px;
            margin: 0 auto;
            overflow: hidden;
        }
        .carousel-track {
            display: flex;
            gap: 22px;
            transition: transform .45s cubic-bezier(.4,0,.2,1);
        }

        /* Doctor card */
        .doctor-card {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            min-width: 280px;
            flex-shrink: 0;
            box-shadow: var(--shadow);
            transition: transform .3s, box-shadow .3s;
        }
        .doctor-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(0,0,0,.18);
        }
        .doctor-card img {
            width: 100%;
            height: 240px;
            object-fit: cover;
        }
        .doctor-card .info {
            padding: 16px 12px 20px;
        }
        .doctor-card .info h3 {
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--dark);
        }
        .doctor-card .info .degree {
            color: var(--teal);
            font-size: .88rem;
            font-weight: 700;
            margin: 3px 0 12px;
        }
        .doctor-card .socials { display: flex; justify-content: center; gap: 12px; }
        .doctor-card .socials a {
            color: #777;
            font-size: .9rem;
            transition: color .2s;
        }
        .doctor-card .socials a:hover { color: var(--teal); }

        /* Carousel buttons */
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--white);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            cursor: pointer;
            font-size: .9rem;
            box-shadow: 0 3px 12px rgba(0,0,0,.15);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .2s, color .2s;
            z-index: 10;
        }
        .carousel-btn:hover { background: var(--teal); color: var(--white); }
        .carousel-btn.prev { left: -20px; }
        .carousel-btn.next { right: -20px; }

        /* ---- FOOTER ---- */
        footer {
            background: var(--dark);
            color: #ccc;
        }
        /* Newsletter strip */
        .newsletter {
            background: var(--dark2);
            display: flex;
            align-items: center;
            gap: 24px;
            padding: 30px 60px;
        }
        .newsletter .brand-box {
            background: var(--white);
            border-radius: var(--radius);
            width: 90px;
            height: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .newsletter .brand-box img { width: 48px; }
        .newsletter .brand-box span {
            font-size: .75rem;
            font-weight: 800;
            color: var(--dark);
            margin-top: 4px;
        }
        .newsletter form {
            flex: 1;
            display: flex;
            border-bottom: 2px solid var(--teal);
            padding-bottom: 6px;
        }
        .newsletter form input {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            color: #aaa;
            font-size: .9rem;
            font-family: inherit;
        }
        .newsletter form input::placeholder { color: #666; }
        .newsletter form button {
            background: none;
            border: none;
            color: var(--teal);
            font-size: .82rem;
            font-weight: 800;
            letter-spacing: .1em;
            cursor: pointer;
            font-family: inherit;
        }
        .newsletter form button:hover { color: var(--white); }
        .subscribe-msg {
            padding: 8px 60px;
            font-size: .85rem;
            color: var(--teal);
        }

        /* Footer grid */
        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr 1fr;
            gap: 40px;
            padding: 50px 60px 40px;
        }
        .footer-col h4 {
            font-size: .78rem;
            font-weight: 800;
            letter-spacing: .12em;
            color: var(--white);
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .footer-col h4::before {
            content: "";
            display: inline-block;
            width: 10px;
            height: 10px;
            background: var(--teal);
            border-radius: 2px;
        }
        .footer-col .address-item {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            font-size: .84rem;
            margin-bottom: 10px;
            color: #aaa;
        }
        .footer-col .address-item i { color: var(--teal); margin-top: 2px; }
        .footer-socials { display: flex; gap: 10px; margin-top: 14px; }
        .footer-socials a {
            color: #aaa;
            font-size: 1rem;
            transition: color .2s;
        }
        .footer-socials a:hover { color: var(--teal); }
        .footer-col ul li {
            margin-bottom: 9px;
            font-size: .85rem;
        }
        .footer-col ul a { color: #aaa; transition: color .2s; }
        .footer-col ul a:hover, .footer-col ul a.active { color: var(--teal); }

        /* News / Latest posts */
        .mini-post {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }
        .mini-post img {
            width: 52px;
            height: 52px;
            object-fit: cover;
            border-radius: 6px;
        }
        .mini-post span { font-size: .83rem; color: #aaa; }

        /* Footer bottom */
        .footer-bottom {
            text-align: center;
            padding: 14px;
            font-size: .78rem;
            color: #555;
            border-top: 1px solid #333;
        }

        /* ---- Responsive ---- */
        @media (max-width: 900px) {
            .footer-grid { grid-template-columns: 1fr 1fr; }
            .navbar nav { display: none; }
        }
        @media (max-width: 600px) {
            .footer-grid { grid-template-columns: 1fr; padding: 30px 20px; }
            .newsletter { padding: 20px; flex-wrap: wrap; }
            .doctor-card { min-width: 240px; }
        }
    </style>
</head>
<body>





<!-- ===== DOCTORS SECTION ===== -->
<section id="doctors">
    <h2>OUR <span>DOCTORS</span></h2>

    <div class="carousel-wrap">
        <button class="carousel-btn prev" onclick="moveCarousel(-1)" aria-label="Previous">&#8249;</button>

        <div class="carousel-track" id="carouselTrack">
            <?php foreach ($doctors as $doc): ?>
            <div class="doctor-card">
                <img src="<?= htmlspecialchars($doc['image']) ?>"
                     alt="<?= htmlspecialchars($doc['name']) ?>"
                     loading="lazy"/>
                <div class="info">
                    <h3><?= htmlspecialchars($doc['name']) ?></h3>
                    <p class="degree"><?= htmlspecialchars($doc['degree']) ?></p>
                    <div class="socials">
                        <a href="<?= htmlspecialchars($doc['facebook'])  ?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= htmlspecialchars($doc['twitter'])   ?>" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="<?= htmlspecialchars($doc['linkedin'])  ?>" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?= htmlspecialchars($doc['instagram']) ?>" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-btn next" onclick="moveCarousel(1)" aria-label="Next">&#8250;</button>
    </div>
</section>


<!-- ===== CAROUSEL SCRIPT ===== -->
<script>
    (function () {
        const track    = document.getElementById('carouselTrack');
        const cards    = track.querySelectorAll('.doctor-card');
        const cardW    = () => cards[0].offsetWidth + 22; // width + gap
        const visible  = () => Math.floor(track.parentElement.offsetWidth / cardW());
        const total    = cards.length;
        let   current  = 0;

        window.moveCarousel = function (dir) {
            const max = total - visible();
            current = Math.max(0, Math.min(current + dir, max));
            track.style.transform = `translateX(-${current * cardW()}px)`;
        };

        // Keyboard support
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowRight') window.moveCarousel(1);
            if (e.key === 'ArrowLeft')  window.moveCarousel(-1);
        });
    })();
</script>

</body>
</html>
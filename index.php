<?php
// Sample data
$nav_links = ['HOME', 'ABOUT', 'TREATMENT', 'DOCTORS', 'TESTIMONIAL', 'CONTACT US'];

$testimonials = [
    [
        'name' => 'Morijorch',
        'role' => 'Default model text',
        'text' => 'editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various'
    ],
    [
        'name' => 'John Doe',
        'role' => 'Patient',
        'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
    ],
    [
        'name' => 'Jane Smith',
        'role' => 'Client',
        'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.'
    ],
];

$useful_links = [
    'Home' => '#',
    'About' => '#',
    'Treatment' => '#',
    'Doctors' => '#',
    'Testimonial' => '#',
    'Contact us' => '#',
];

$latest_posts = [
    ['title' => 'Normal distribution', 'img' => 'https://via.placeholder.com/80x70/e0f0ea/333?text=Post'],
    ['title' => 'Normal distribution', 'img' => 'https://via.placeholder.com/80x70/d0e8ff/333?text=Post'],
];

$news = [
    ['title' => 'Normal distribution', 'img' => 'https://via.placeholder.com/80x70/ffe0e0/333?text=News'],
    ['title' => 'Normal distribution', 'img' => 'https://via.placeholder.com/80x70/fff0d0/333?text=News'],
];
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mico - Medical Website</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --teal: #00b9a8;
            --teal-dark: #009e8f;
            --dark: #212121;
            --darker: #1a1a1a;
            --gray: #555;
            --light: #f9f9f9;
            --white: #ffffff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background: var(--white);
        }

        /* ===== TOP BAR ===== */
        .topbar {
            background: var(--white);
            border-bottom: 1px solid #eee;
            padding: 8px 40px;
            display: flex;
            gap: 30px;
            font-size: 13px;
            color: #555;
        }
        .topbar span { display: flex; align-items: center; gap: 6px; }
        .topbar i { color: var(--teal); font-size: 12px; }

        /* ===== NAVBAR ===== */
        nav {
            background: var(--teal);
            display: flex;
            align-items: center;
            padding: 0 0 0 0;
            position: relative;
        }
        .nav-logo {
            background: white;
            padding: 14px 20px 14px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 140px;
        }
        .nav-logo img {
            width: 55px;
            height: 55px;
            object-fit: contain;
        }
        .nav-logo span {
            font-size: 15px;
            font-weight: 700;
            color: #222;
            margin-top: 3px;
            letter-spacing: 1px;
        }
        .nav-links {
            display: flex;
            align-items: center;
            list-style: none;
            padding: 0 20px;
            flex: 1;
        }
        .nav-links li a {
            display: block;
            padding: 22px 18px;
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: background 0.2s;
        }
        .nav-links li a:hover, .nav-links li.active a {
            background: rgba(0,0,0,0.1);
        }
        .nav-right {
            display: flex;
            align-items: center;
            gap: 6px;
            padding-right: 16px;
        }
        .nav-right a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            padding: 8px 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: opacity 0.2s;
        }
        .nav-right a:hover { opacity: 0.8; }
        .nav-search { background: none; border: none; color: white; cursor: pointer; font-size: 15px; padding: 8px; }

        /* ===== TESTIMONIAL SECTION ===== */
        .testimonial-section {
            padding: 60px 40px 80px;
            background: white;
        }
        .section-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--teal);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 40px;
        }
        .testimonial-wrapper {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }
        .testimonial-slider {
            overflow: hidden;
        }
        .testimonial-cards {
            display: flex;
            transition: transform 0.4s ease;
        }
        .testimonial-card {
            min-width: 100%;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 35px 40px;
            position: relative;
            background: white;
        }
        .testimonial-card .quote-icon {
            position: absolute;
            top: 30px;
            right: 35px;
            font-size: 28px;
            color: #222;
        }
        .testimonial-card h3 {
            color: var(--teal);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 4px;
        }
        .testimonial-card .role {
            color: #aaa;
            font-size: 13px;
            margin-bottom: 18px;
        }
        .testimonial-card p {
            color: #444;
            font-size: 14px;
            line-height: 1.75;
        }
        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--teal);
            border: none;
            color: white;
            width: 44px;
            height: 90px;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            transition: background 0.2s;
        }
        .slider-btn:hover { background: var(--teal-dark); }
        .slider-btn.prev { left: -52px; }
        .slider-btn.next { right: -52px; }

        /* ===== FOOTER ===== */
        footer {
            background: var(--dark);
            color: #ccc;
        }
        .footer-subscribe {
            display: flex;
            align-items: center;
            padding: 28px 40px;
            border-bottom: 1px solid #333;
            gap: 30px;
        }
        .footer-logo {
            background: white;
            padding: 10px 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 120px;
        }
        .footer-logo img { width: 45px; }
        .footer-logo span { font-size: 13px; font-weight: 700; color: #222; margin-top: 3px; }
        .subscribe-form {
            flex: 1;
            display: flex;
            align-items: flex-end;
            border-bottom: 1px solid #666;
            padding-bottom: 6px;
        }
        .subscribe-form input {
            flex: 1;
            background: none;
            border: none;
            outline: none;
            color: #aaa;
            font-size: 14px;
            padding: 4px 0;
        }
        .subscribe-form input::placeholder { color: #666; }
        .subscribe-form button {
            background: none;
            border: none;
            color: var(--teal);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            cursor: pointer;
            text-transform: uppercase;
        }

        .footer-columns {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            padding: 50px 40px;
        }
        .footer-col h4 {
            color: white;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 22px;
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

        /* Address */
        .address-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #aaa;
            font-size: 14px;
            margin-bottom: 12px;
        }
        .address-item i { color: #aaa; width: 16px; }
        .social-links { display: flex; gap: 14px; margin-top: 20px; }
        .social-links a { color: #aaa; font-size: 20px; text-decoration: none; transition: color 0.2s; }
        .social-links a:hover { color: var(--teal); }

        /* Useful links */
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a {
            color: #aaa;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.2s;
        }
        .footer-col ul li a:hover, .footer-col ul li a.active { color: var(--teal); }

        /* Posts / News */
        .post-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }
        .post-item img {
            width: 80px;
            height: 65px;
            object-fit: cover;
            border-radius: 2px;
            flex-shrink: 0;
        }
        .post-item span {
            color: #aaa;
            font-size: 13px;
            line-height: 1.4;
        }

        /* Footer bottom */
        .footer-bottom {
            text-align: center;
            padding: 18px 40px;
            border-top: 1px solid #333;
            font-size: 13px;
            color: #666;
        }

        /* ===== HERO (optional preview) ===== */
        .hero {
            background: linear-gradient(135deg, #e8faf8, #f0fdfc);
            padding: 80px 40px;
            text-align: center;
        }
        .hero h1 { font-size: 42px; color: #222; margin-bottom: 14px; }
        .hero h1 span { color: var(--teal); }
        .hero p { color: #666; font-size: 16px; max-width: 500px; margin: 0 auto 28px; }
        .btn-primary {
            background: var(--teal);
            color: white;
            padding: 12px 32px;
            border: none;
            border-radius: 3px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.2s;
        }
        .btn-primary:hover { background: var(--teal-dark); }
    </style>
</head>
<body>



<!-- TESTIMONIAL SECTION -->
<section class="testimonial-section">
    <h2 class="section-title">TESTIMONIAL</h2>
    <div class="testimonial-wrapper">
        <button class="slider-btn prev" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></button>
        <div class="testimonial-slider">
            <div class="testimonial-cards" id="sliderCards">
                <?php foreach ($testimonials as $t): ?>
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                    <h3><?= htmlspecialchars($t['name']) ?></h3>
                    <p class="role"><?= htmlspecialchars($t['role']) ?></p>
                    <p><?= htmlspecialchars($t['text']) ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <button class="slider-btn next" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>



<script>
let current = 0;
const total = <?= count($testimonials) ?>;

function changeSlide(dir) {
    current = (current + dir + total) % total;
    document.getElementById('sliderCards').style.transform = `translateX(-${current * 100}%)`;
}
</script>

</body>
</html>
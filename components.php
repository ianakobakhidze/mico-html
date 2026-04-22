<?php

function renderDoctors($doctors) {
?>
<section id="doctors">
    <h2>OUR <span>DOCTORS</span></h2>

    <div class="carousel-wrap">
        <button class="carousel-btn prev" onclick="moveCarousel(-1)">&#8249;</button>

        <div class="carousel-track" id="carouselTrack">
            <?php foreach ($doctors as $doc): ?>
            <div class="doctor-card">
                <img src="<?= e($doc['image']) ?>" alt="<?= e($doc['name']) ?>">
                <div class="info">
                    <h3><?= e($doc['name']) ?></h3>
                    <p class="degree"><?= e($doc['degree']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <button class="carousel-btn next" onclick="moveCarousel(1)">&#8250;</button>
    </div>
</section>
<?php
}
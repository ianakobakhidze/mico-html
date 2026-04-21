<?php

function headerSection($data) {
?>

<header class="header_section">

  <div class="header_top">
    <div class="container">
      <div class="contact_nav">

        <?php foreach($data['contacts'] as $contact): ?>
          <?php linkItem($contact['link'], $contact['icon'], $contact['text']); ?>
        <?php endforeach; ?>

      </div>
    </div>
  </div>

  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">

        <a class="navbar-brand" href="#">
          <?php imageItem($data['logo']); ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          <ul class="navbar-nav">

            <?php foreach($data['menu'] as $item): ?>
              <?php navItem($item['title'], $item['link']); ?>
            <?php endforeach; ?>

          </ul>

          <div class="quote_btn-container">

            <?php foreach($data['auth'] as $item): ?>
              <?php linkItem("#", $item['icon'], $item['title']); ?>
            <?php endforeach; ?>

            <form class="form-inline">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </form>

          </div>

        </div>
      </nav>
    </div>
  </div>
</header>

<?php } ?>





<?php

function aboutSection($data) {
?>

<section class="about_section layout_padding">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <div class="img-box">
          <img src="<?php echo $data['image']; ?>" alt="">
        </div>
      </div>

      <div class="col-md-6">
        <div class="detail-box">

          <div class="heading_container">
            <h2>
              <?php echo $data['title']; ?> <span><?php echo $data['highlight']; ?></span>
            </h2>
          </div>

          <p>
            <?php echo $data['text']; ?>
          </p>

          <a href="<?php echo $data['button_link']; ?>">
            <?php echo $data['button_text']; ?>
          </a>

        </div>
      </div>

    </div>
  </div>
</section>

<?php } ?>



<?php

function infoSection($data) {
?>

<section class="info_section">
  <div class="container">

    <div class="info_top">

      <div class="info_logo">
        <a href="<?php echo $data['logo_link']; ?>">
          <img src="<?php echo $data['logo']; ?>" alt="">
        </a>
      </div>

      <div class="info_form">
        <form action="<?php echo $data['subscribe']['action']; ?>">
          <input type="email" placeholder="<?php echo $data['subscribe']['placeholder']; ?>">
          <button><?php echo $data['subscribe']['button']; ?></button>
        </form>
      </div>

    </div>

    <div class="info_bottom layout_padding2">

      <div class="row info_main_row">

        <!-- ADDRESS -->
        <div class="col-md-6 col-lg-3">

          <h5><?php echo $data['address']['title']; ?></h5>

          <div class="info_contact">
            <?php foreach($data['address']['contact'] as $item): ?>
              <a href="<?php echo $item['link']; ?>">
                <i class="<?php echo $item['icon']; ?>"></i>
                <span><?php echo $item['text']; ?></span>
              </a>
            <?php endforeach; ?>
          </div>

          <div class="social_box">
            <?php foreach($data['address']['social'] as $item): ?>
              <a href="<?php echo $item['link']; ?>">
                <i class="<?php echo $item['icon']; ?>"></i>
              </a>
            <?php endforeach; ?>
          </div>

        </div>

        <!-- LINKS -->
        <div class="col-md-6 col-lg-3">

          <h5><?php echo $data['links']['title']; ?></h5>

          <div class="info_links_menu">
            <?php foreach($data['links']['items'] as $item): ?>
              <a href="<?php echo $item['link']; ?>" class="<?php echo $item['active']; ?>">
                <?php echo $item['text']; ?>
              </a>
            <?php endforeach; ?>
          </div>

        </div>

        <!-- POSTS -->
        <div class="col-md-6 col-lg-3">

          <h5><?php echo $data['posts']['title']; ?></h5>

          <?php foreach($data['posts']['items'] as $post): ?>
            <div class="post_box">
              <div class="img-box">
                <img src="<?php echo $post['img']; ?>">
              </div>
              <p><?php echo $post['text']; ?></p>
            </div>
          <?php endforeach; ?>

        </div>

        <!-- NEWS -->
        <div class="col-md-6 col-lg-3">

          <h5><?php echo $data['news']['title']; ?></h5>

          <?php foreach($data['news']['items'] as $news): ?>
            <div class="post_box">
              <div class="img-box">
                <img src="<?php echo $news['img']; ?>">
              </div>
              <p><?php echo $news['text']; ?></p>
            </div>
          <?php endforeach; ?>

        </div>

      </div>

    </div>

  </div>
</section>

<?php } ?>


<?php

function footerSection($data) {
?>

<footer class="footer_section">
  <div class="container">
    <p>
      <?php echo $data['symbol']; ?>
      <span id="year"></span>
      <?php echo $data['text']; ?>
      <a href="<?php echo $data['link']; ?>">
        <?php echo $data['link_text']; ?>
      </a>
    </p>
  </div>
</footer>

<script>
  document.getElementById("year").innerText = new Date().getFullYear();
</script>

<?php
}



function contactSection($contactTitle, $contactForm, $contactButton, $contactImage) {
?>

<section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          <?php renderTitle($contactTitle); ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
            <form action="submit.php" method="GET" target="_blank">

              <?php foreach ($contactForm as $input) { ?>
              <div>
                <?php renderInput($input); ?>
              </div>
              <?php } ?>

              <div class="btn_box">
                <button>
                  <?php renderButton($contactButton); ?>
                </button>
              </div>

            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <?php renderImage($contactImage); ?>
          </div>
        </div>
      </div>
    </div>
</section>

<?php
}





function sliderSection($sliderData) {
?>

<section class="slider_section ">
  <div class="dot_design">
    <?php renderImage($sliderData['dot_image']); ?>
  </div>

  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <?php foreach ($sliderData['slides'] as $index => $slide) { ?>
        <div class="carousel-item <?php echo $index == 0 ? 'active' : ''; ?>">
          <div class="container ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <div class="play_btn">
                    <button>
                      <i class="fa fa-play" aria-hidden="true"></i>
                    </button>
                  </div>
                  <h1>
                    <?php renderTitle($slide['title']); ?> <br>
                    <span>
                      <?php renderTitle($slide['subtitle']); ?>
                    </span>
                  </h1>
                  <p>
                    <?php renderText($slide['text']); ?>
                  </p>
                  <?php renderLink($slide['link'], $slide['link_text']); ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <?php renderImage($slide['image']); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>

    <div class="carousel_btn-box">
      <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
        <?php renderImage($sliderData['prev_image']); ?>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
        <?php renderImage($sliderData['next_image']); ?>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<?php
}
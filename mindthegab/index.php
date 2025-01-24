<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo( 'name' ); ?></title>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="mind the gab" >
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <div class="hero" id="home">
        <img src="/wp-content/themes/mindthegab/assets/images/all/MTG_all_s_DSC00283.jpg" alt="" class="img-fluid">
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <div class="navbar-nav navbar-left">
                <a class="nav-item nav-link" href="https://www.instagram.com/mind.the.gab.band" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="nav-item nav-link" href="https://www.tiktok.com" target="_blank">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a class="nav-item nav-link" href="https://www.youtube.com" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            
            <a class="navbar-brand" href="#home">
                <img src="/wp-content/themes/mindthegab/assets/images/logo/mtg.svg" alt="" height="35">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" ria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#media" class="nav-link">Media</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="row">

                <div class="col-md-12 person-card d-flex align-itens-center">
                    <img src="/wp-content/themes/mindthegab/assets/images/members/YURI_s_DSC09880.jpg" alt="Yuri" class="person-image">
                    <div class="person-info">
                        <h3 class="person-name">Yuri</h3>
                        <p class="person-instrument">Keyboards and backing vocals</p>
                    </div>
                </div>

                <div class="col-md-12 person-card d-flex align-itens-center">
                    <img src="/wp-content/themes/mindthegab/assets/images/members/TIXZIAN_s_DSC09777.jpg" alt="Tizian" class="person-image">
                    <div class="person-info">
                        <h3 class="person-name">Tizian</h3>
                        <p class="person-instrument">Drums and producing</p>
                    </div>
                </div>

                <div class="col-md-12 person-card d-flex align-itens-center">
                    <img src="/wp-content/themes/mindthegab/assets/images/members/KIM_s_DSC09982.jpg" alt="Kim" class="person-image">
                    <div class="person-info">
                        <h3 class="person-name">Kim</h3>
                        <p class="person-instrument">Singer songwriter, guitars</p>
                    </div>
                </div>


                <div class="col-md-12 person-card d-flex align-itens-center">
                    <img src="/wp-content/themes/mindthegab/assets/images/members/VIKTOR_s_DSC00001.jpg" alt="Viktor" class="person-image">
                    <div class="person-info">
                        <h3 class="person-name">Viktor</h3>
                        <p class="person-instrument">Bass guitar and backing vocals</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="media" class="media-section">
        <div class="container">
            <h2 class="section-title">Media</h2>
            <div class="media-content">
                <a href="https://spotify.com" target="_blank">
                    <i class="fab fa-spotify spotify-icon"></i>
                </a>
                <p class="spotify-description">
                    Verpasse nicht die neusten Tracks! Höre jetzt die Musik unserer Band exklusiv auf Spotify. <br>
                    Tauch ein in unsere Klangwelten, entdecke neue Songs und bleibe auf dem Laufenden mit unseren Playlists. <br>
                    Klicke auf das Spotify-Logo und hör rein!
                </p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Mind The Gab.</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
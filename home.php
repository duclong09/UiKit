<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'components/head.php' ?>
</head>

<body>
    <?php require_once 'components/header.php' ?>
    <main id="homepage">
        <div class="panel-banner">
            <div class="uk-container uk-container-1440">
                <div uk-grid>
                    <div class="uk-width-2-3@m">
                        <div class="panel-slide">
                            <div class="swiper-container">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slide-item">
                                            <span class="image img-scaledown">
                                                <img src="resources/img/slider-1.png" alt="">
                                            </span>
                                            <div class="slide-overlay">
                                                <div class="slide-title">
                                                    The TV <br>
                                                    that changes <br>
                                                    everything
                                                </div>
                                                <div class="slide-description">
                                                    Start from $399
                                                </div>
                                                <div class="slide-readmore">
                                                    <a href="#" class="btn-readmore btn">
                                                        <span>Learn more</span>
                                                        <span class="uk-icon" uk-icon="chevron-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-item">
                                            <span class="image img-scaledown">
                                                <img src="resources/img/slider-2.png" alt="">
                                            </span>
                                            <div class="slide-overlay">
                                                <div class="slide-title">
                                                    Blast past <br>
                                                    fats. <br>
                                                </div>
                                                <div class="slide-description">
                                                    Start from $399
                                                </div>
                                                <div class="slide-readmore">
                                                    <a href="#" class="btn-readmore btn">
                                                        <span>Learn more</span>
                                                        <span class="uk-icon" uk-icon="chevron-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slide-item">
                                            <span class="image img-scaledown">
                                                <img src="resources/img/slider-3.png" alt="">
                                            </span>
                                            <div class="slide-overlay">
                                                <div class="slide-title">
                                                    Heavy on <br>
                                                    features <br>
                                                    Light on price
                                                </div>
                                                <div class="slide-description">
                                                    Start from $399
                                                </div>
                                                <div class="slide-readmore">
                                                    <a href="#" class="btn-readmore btn">
                                                        <span>Learn more</span>
                                                        <span class="uk-icon" uk-icon="chevron-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        123
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once 'components/footer.php' ?>
    <?php require_once 'components/script.php' ?>
</body>

</html>
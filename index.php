<?php include 'inc/function.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Winbebas</title>
        <?php include 'inc/header.php';?>
    </head>
    <body>
        <?php include 'inc/navbar.php';?>
        <main class="site-main" id="site-main">
            <section class="main-section">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-9 col-lg-10 px-3 px-md-4">
                            <div class="box">
                                <div class="box-banner col-12 col-xl-9 mx-auto mb-4 mb-md-3"><img src="images/top_banner.jpg" class="img-fluid w-100"/></div>
                                <div class="box-header col-md-6 col-lg-4">
                                    <div class="frame frame-title">
                                        <img src="images/bg-header-official-links.png" class="img-fluid w-100"/>
                                    </div>
                                    <h2>Official Links</h2>
                                </div>
                                <div class="box-body col-12">
                                    <div class="frame frame-body">
                                        <picture>
                                            <source srcset="images/bg-body-official-links.png" media="(min-width: 768px) and (orientation: landscape)">
                                            <img src="images/bg-body-official-links-mobile.png" class="img-fluid w-100 mobile-frame"/>
                                        </picture>
                                    </div>
                                    <div class="box-body-inner">
                                        <div class="d-flex flex-wrap">
                                            <div class="col-12 col-lg-6">
                                                <div class="official-links mb-4 mb-lg-0">
                                                <?php if( $official_links ) {
                                                    foreach( $official_links as $link ) {
                                                        $speed = rand(5,12);
                                                        $label = $link['label'];
                                                        $url = $link['url'];
                                                    ?>
                                                    <div class="link-item">
                                                        <div class="link-column column-left col-4 col-md-3">
                                                            <div class="link-column-inner">
                                                                <p class="text-center data-speed"><?php echo $speed.' ms';?></p>
                                                            </div>
                                                        </div>
                                                        <div class="link-column column-right col-8 col-md-9">
                                                            <div class="link-column-inner">
                                                                <p class="text-center data-link"><?php echo $label;?></p>
                                                                <a href="<?php echo $url;?>" target="_blank" class="caret-right"><span class="d-none">Go To</span> <img src="images/icon-caret-right-yellow.png" class="img-fluid w-100"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                }
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 ps-lg-5">
                                                <div class="banner mb-4 d-block">
                                                    <img src="images/mobile_app_banner.jpg" class="img-fluid w-100"/>
                                                </div>
                                                <div cass="btn-wrapper">
                                                    <a id="download-btn" href="javascript:void(0);" class="btn btn-download btn-animation d-flex justify-content-center align-items-center"><img id="device-icon" src="images/icon-android.png" class="icon-android">DOWNLOAD APP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include 'inc/footer.php';?>
    </body>
</html>
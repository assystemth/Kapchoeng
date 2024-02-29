<div class="welcome">

    <!-- <div class="tab-container">
        <img src="docs/item-news-top.png" width="324" height="100" style="position: absolute; z-index: 2;">
        <div id="marquee-container">
            <div class="marquee">
                <div>
                    <?php
                    $maxIterations = 1000;
                    $iteration = 0;
                    while ($iteration < $maxIterations) {
                        foreach ($qHotnews as $index => $hotnews) {
                            echo '<span>' . $hotnews->hotNews_text . '</span>';
                        }
                        $iteration++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div> -->
</div>

<!-- <div class="tab-container">
    <div class="rectangle1"><span class="news-update">&nbsp;<i>ข่าวสารอัพเดต</i></span></div>
    <div class="rectangle2"></div>
    <?php foreach ($qHotnews as $hotnews) { ?>
        <div class="running-text"><?= $hotnews->hotNews_text; ?></div>
    <?php } ?>
</div> -->
<!-- วิสัยทัศน์  -->
<div class="vision">
    <div class="row">
        <div class="col-4">
            <div class="d-flex justify-content-center">
                <img class="mark-logo" src="docs/k.item-vision-left1.png">
            </div>
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img class="mark-logo" src="docs/k.item-vision-left2v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.item-vision-left3v3.png">
                </a>
            </div>
        </div>
        <div class="col-4" style="margin-top: 128px;">
            <div class="d-flex justify-content-center">
                <img src="docs/k.item-vision-mid2.png">
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center">
                <img class="mark-logo" src="docs/k.item-vision-right1.png">
            </div>
            <div class="d-flex justify-content-center">
                <a href="#">
                    <img class="mark-logo" src="docs/k.item-vision-right2v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.item-vision-right3v3.png">
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top1v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top2v2.png">
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top3v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top4v2.png">
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top5v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="#" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top2v2.png">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bg-main">
    <!-- แทบวิ่ง  -->
    <img src="docs/k.item-news-top3.png" width="272" height="81" style="position: absolute; z-index: 2; margin-top: -22px;">

    <div class="tab-container">
        <?php
        $news = $this->HotNews_model->hotnews_frontend();

        echo '<div class="text-run-update">';
        foreach ($news as $item) {
            echo '<p>' . $item->hotNews_text . '</p>';
        }
        echo '</div>';
        ?>
    </div>

    <div class="content-banner mt-4">
        <div class="d-flex justify-content-center">
            <img src="docs/k.img-top-banner.png" alt="">
        </div>
        <img src="docs/k.bg-banner2.png" height="607px" width="1080px" class="frame-main">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="z-index: 10;">
            <div class="carousel-indicators">
                <?php
                foreach ($qBanner as $index => $img_banner) {
                    $active = ($index === 0) ? "active" : "";
                    echo '<button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-current="true" aria-label="Slide ' . ($index + 1) . '"></button>';
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php foreach ($qBanner as $index => $img_banner) { ?>
                    <div class="carousel-item <?= ($index === 0) ? "active" : ""; ?>" data-bs-interval="5000">
                        <a href="<?= $img_banner->banner_link; ?>" target="_blank">
                            <img src="docs\img\<?= $img_banner->banner_img; ?>" class="d-block w-100">
                        </a>
                    </div>
                <?php } ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div class="head-activity p-3">
    <div class="dropdown-container">
        <!-- Dropdown 1 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 60px; padding-top: 5px;">
            ข้อมูลทั่วไป
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/s.navmid-head1.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/history'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.0-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.0.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.0.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/gci'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.1.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/vision'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.2.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/authority'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.3.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/mission'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.4.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/executivepolicy'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid1.5.png"></a></li>
                </div>
                <div class="dropdown-center">
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/ci'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.7.png'); ?>`)"><img src="docs/s.item-nav-mid1.7.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/travel'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.8.png'); ?>`)"><img src="docs/s.item-nav-mid1.8.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/otop'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.6.png'); ?>`)"><img src="docs/s.item-nav-mid1.6.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/si'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid1.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid1.10.png'); ?>`)"><img src="docs/s.item-nav-mid1.10.png"></a></li>
                    <!-- <li><a class="dropdown-item" href="<?php echo site_url('Pages/travel'); ?>"><img src="docs/navmid-head1.9.png"></a></li> -->
                </div>
            </ul>
        </div>

        <!-- Dropdown 2 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 70px; padding-top: 5px;">
            โครงสร้างบุคลากร
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head21.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/site_map'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.1.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_executives'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.2.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_council'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.3.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_unit_leaders'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.4.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_deputy'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.5.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_treasury'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.6.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.6.png"></a></li>
                </div>
                <div class="dropdown-center">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="" src="docs/navmid-head22.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_maintenance'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.7.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.7.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_education'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.8.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.8.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/p_audit'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid2.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid2.9.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid2.9.png"></a></li>
                </div>
            </ul>
        </div>

        <!-- Dropdown 3 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 75px; padding-top: 5px;">
            แผนงาน
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head5.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pdl'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.1.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pc3y'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.2.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pds3y'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.3.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pdpa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.4.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_poa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.5.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pcra'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.6.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid5.6.png"></a></li>
                </div>
                <div class="dropdown-center">
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pop'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.7.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.7.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_paca'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.8.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.8.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_psi'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.9.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.9.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/plan_pmda'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid5.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid5.10.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid5.10.png"></a></li>
                </div>
            </ul>
        </div>

        <!-- Dropdown 4 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 110px; padding-top: 5px;">
            มาตราการภายใน
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/order'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.1.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.1.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/announce'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.2.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.2.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/mui'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.3.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.3.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/guide_work'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.4.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.4.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/km'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.6.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.6.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/loadform'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid7.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid7.5.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid7.5.png"></a></li>
                </div>
            </ul>
        </div>

        <!-- Dropdown 5 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 105px; padding-top: 5px;">
            การดำเนินงาน
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_reauf'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v6.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v6.1.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v6.1.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_aca'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.2.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.2.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_mcc'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.3.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.3.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_sap'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.4.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.4.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_pgn'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.5.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.5.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_po'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.6.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.6.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_eco'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.7.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.7.png"></a></li>
                </div>
                <div class="dropdown-center">
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/ita'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.8.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.8.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/lpa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.9.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid6v2.9.png"></a></li>
                    <li>
                        <div class="dropdown-item mt-3" href="#" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.10.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid6v2.10.png"></div>
                    </li>
                    <li><a class="dropdown-item mt-2" href="<?php echo site_url('Pages/operation_policy_hr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.11-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.11.png'); ?>`)"><img class="mar-left-17" src="docs/s.item-nav-mid6v2.11.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_am_hr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.12-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.12.png'); ?>`)"><img class="mar-left-17" src="docs/s.item-nav-mid6v2.12.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_rdam_hr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.13-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.13.png'); ?>`)"><img class="mar-left-17" src="docs/s.item-nav-mid6v2.13.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_cdm_topic'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.14-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.14.png'); ?>`)"><img class="mar-left-17" src="docs/s.item-nav-mid6v2.14.png"></a></li>
                </div>
                <div class="dropdown-right">
                    <!-- <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_procurement'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.15-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.15.png'); ?>`)"><img class="mar-left-5" src="docs/s.item-nav-mid6v2.15.png"></a></li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_aa'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.16-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.16.png'); ?>`)"><img class="mar-left-5" src="docs/s.item-nav-mid6v2.16.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_pm'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.17-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.17.png'); ?>`)"><img class="mar-left-5" src="docs/s.item-nav-mid6v2.17.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/operation_aditn'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid6v2.18-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid6v2.18.png'); ?>`)"><img class="mar-left-5" src="docs/s.item-nav-mid6v2.18.png"></a></li>
                </div>
            </ul>
        </div>

        <!-- Dropdown 6 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 55px; padding-top: 5px;">
            บริการประชาชน
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_cac'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.1-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.1.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.1.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_cig'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.2-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.2.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.2.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_cjc'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.3-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.3.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.3.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_sags'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.4-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.4.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.4.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/adding_suggestions'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.5-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.5.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.5.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/q_a'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.6-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.6.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.6.png"></a></li>
                </div>
                <div class="dropdown-center">
                    <!-- <li>
                            <div class="dropdown-item" href="#"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.6.png"></div>
                        </li> -->
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/questions'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.7-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.7.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.7.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_oppr'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.8-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.8.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.8.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_ems'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.9-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.9.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.9.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_ahs'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.10-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.10.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.10.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_e_book'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.11-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.11.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.11.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/adding_corruption'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.12-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.12.png'); ?>`)"><img class="mar-left-7" src="docs/s.item-nav-mid4v2.12.png"></a></li>
                </div>
                <div class="dropdown-right">
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/adding_complain'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.13-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.13.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.13.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/contact'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.14-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.14.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.14.png"></a></li>
                    <li><a class="dropdown-item" href="<?php echo site_url('Pages/pbsv_gup'); ?>" onmouseover="changeImage(`<?php echo base_url('docs/s.item-nav-mid4v2.15-hover.png'); ?>`)" onmouseout="restoreImage(`<?php echo base_url('docs/s.item-nav-mid4v2.15.png'); ?>`)"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.15.png"></a></li>
                </div>
            </ul>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div class="bg-activity">
        <div class="d-flex justify-content-center" style="padding-top: 3%;">
            <img src="docs/k.head-activity.png">
        </div>
        <div class="row d-flex justify-content-center" style="padding-top: 70px; margin-left: -50px;">
            <?php foreach ($qActivity as $activity) { ?>
                <div class="card-activity col-2 mx-4">
                    <?php if (!empty($activity->activity_img)) : ?>
                        <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                            <img src="<?php echo base_url('docs/img/' . $activity->activity_img); ?>">
                        </a>
                    <?php else : ?>
                        <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                            <img src="<?php echo base_url('docs/coverphoto.png'); ?>">
                        </a>
                    <?php endif; ?>
                    <div class="box-activity">
                        <div class="d-flex justify-content-end mt-2">
                            <span class="text-end text-activity-time">
                                <?php
                                // ในการใช้งาน setThaiMonth
                                $date = new DateTime($activity->activity_date);
                                $day_th = $date->format('d');
                                $month_th = setThaiMonth($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                echo $formattedDate;
                                ?>
                            </span>
                        </div>
                        <div class="text-activity underline three-line-ellipsis mt-1">
                            <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                                <span><?= strip_tags($activity->activity_name); ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 13%;">
            <a href="<?php echo site_url('pages/activity'); ?>">
                <img src="docs/k.btn-all.png">
            </a>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div class="bg-video">
        <div class="d-flex justify-content-center" style="padding-top: 1%;">
            <img src="docs/k.head-video.png">
        </div>
        <div class="bg-content-video">
            <?php if (!empty($video_data) && !empty($video_data->video_link)) : ?>
                <?php
                $youtube_url = $video_data->video_link;
                $video_id = get_youtube_video_id($youtube_url);
                ?>
                <?php if (!empty($video_id)) : ?>
                    <?php
                    $embed_url = "https://www.youtube.com/embed/$video_id";
                    ?>
                    <iframe width="482" height="295" src="<?php echo $embed_url; ?>" frameborder="0" allowfullscreen></iframe>
                <?php else : ?>
                    <p>Invalid YouTube URL</p>
                <?php endif; ?>
            <?php else : ?>
                <p>No video available</p>
            <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <a href="<?php echo site_url('pages/activity'); ?>">
                <img src="docs/k.btn-all.png">
            </a>
        </div>


        <div class="content-news-bg-two underline">
            <div class="tab-container2">
                <div class="tab-link-two" onclick="openTabTwo('tabtwo1')">
                    <img src="docs/k.news-head1.png" alt="Tab 1">
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo2')">
                    <img src="docs/k.news-head2.png" alt="Tab 2">
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo3')">
                    <img src="docs/k.news-head3.png" alt="Tab 3">
                </div>
                <div class="tab-link-two" onclick="openTabTwo('tabtwo4')">
                    <img src="docs/k.news-head4.png" alt="Tab 4">
                </div>
            </div>
            <br>
            <div id="tabtwo1" class="tab-content-two">
                <?php foreach ($qNews as $news) { ?>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/news/' . $news->news_id); ?>">
                            <div class="row">
                                <div class="col-10">
                                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($news->news_name); ?></span>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-end ">
                                        <span class="text-news-time">
                                            <?php
                                            // ในการใช้งาน setThaiMonth
                                            $date = new DateTime($news->news_datesave);
                                            $day_th = $date->format('d');
                                            $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                            $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                            $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                            echo $formattedDate;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center" style="margin-top: -28px;">
                    <a href="<?php echo site_url('pages/news'); ?>">
                        <img src="docs/s.btn-all.png">
                    </a>
                </div>
            </div>
            <div id="tabtwo2" class="tab-content-two">
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/canon_bgps'); ?>">
                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติงบประมาณ</span>
                    </a>
                </div>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/canon_chh'); ?>">
                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;การควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span>
                    </a>
                </div>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/canon_ritw'); ?>">
                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span>
                    </a>
                </div>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/canon_market'); ?>">
                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติตลาด</span>
                    </a>
                </div>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/canon_rmwp'); ?>">
                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span>
                    </a>
                </div>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/canon_rcsp'); ?>">
                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติหลักเกณฑ์การคัดมูลฝอย</span>
                    </a>
                </div>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/canon_rcp'); ?>">
                        <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;ข้อบัญญัติการควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span>
                    </a>
                </div>
            </div>
            <div id="tabtwo3" class="tab-content-two">
                <?php foreach ($qOrder as $gw) { ?>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/order_detail/' . $gw->order_id); ?>">
                            <div class="row">
                                <div class="col-10">
                                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->order_name); ?></span>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-end ">
                                        <span class="text-news-time">
                                            <?php
                                            // ในการใช้งาน setThaiMonth
                                            $date = new DateTime($gw->order_date);
                                            $day_th = $date->format('d');
                                            $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                            $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                            $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                            echo $formattedDate;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center" style="margin-top: -28px;">
                    <a href="<?php echo site_url('Pages/order'); ?>">
                        <img src="docs/s.btn-all.png">
                    </a>
                </div>
            </div>
            <div id="tabtwo4" class="tab-content-two">
                <?php foreach ($qAnnounce as $gw) { ?>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/announce_detail/' . $gw->announce_id); ?>">
                            <div class="row">
                                <div class="col-10">
                                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($gw->announce_name); ?></span>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-end ">
                                        <span class="text-news-time">
                                            <?php
                                            // ในการใช้งาน setThaiMonth
                                            $date = new DateTime($gw->announce_date);
                                            $day_th = $date->format('d');
                                            $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                            $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                            $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                            echo $formattedDate;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center" style="margin-top: -28px;">
                    <a href="<?php echo site_url('Pages/announce'); ?>">
                        <img src="docs/s.btn-all.png">
                    </a>
                </div>
            </div>
        </div>


        <div class="content-news-bg mt-5 underline">
            <div class="tab-container2">
                <div class="tab-link" onclick="openTab('tab1')">
                    <img src="docs/k.news-head5.png" alt="Tab 1">
                </div>
                <div class="tab-link" onclick="openTab('tab2')">
                    <img src="docs/k.news-head6.png" alt="Tab 2">
                </div>
                <div class="tab-link" onclick="openTab('tab3')">
                    <img src="docs/k.news-head7.png" alt="Tab 3">
                </div>
                <div class="tab-link" onclick="openTab('tab4')">
                    <img src="docs/k.news-head8.png" alt="Tab 4">
                </div>
            </div>
            <br>
            <div id="tab1" class="tab-content">
                <?php foreach ($qProcurement as $pcm) { ?>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/procurement_detail/' . $pcm->procurement_id); ?>">
                            <div class="row">
                                <div class="col-10">
                                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($pcm->procurement_name); ?></span>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-end ">
                                        <span class="text-news-time">
                                            <?php
                                            // ในการใช้งาน setThaiMonth
                                            $date = new DateTime($pcm->procurement_date);
                                            $day_th = $date->format('d');
                                            $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                            $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                            $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                            echo $formattedDate;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center" style="margin-top: -28px;">
                    <a href="<?php echo site_url('Pages/procurement'); ?>">
                        <img src="docs/s.btn-all.png">
                    </a>
                </div>
            </div>
            <div id="tab2" class="tab-content">
                <?php
                // เพิ่มตัวแปร $limited_data เพื่อจัดเก็บ array ที่จะใช้กับ array_slice
                $limited_data = [];

                foreach ($json_data as $key1 => $value1) :
                    if (is_array($value1)) :
                        foreach ($value1 as $key2 => $value2) :
                            if (is_array($value2)) :
                                foreach ($value2 as $key3 => $value3) :
                                    if ($key3 === 'project_id') :
                                        $url = 'https://process3.gprocurement.go.th/egp2procmainWeb/jsp/procsearch.sch?servlet=gojsp&proc_id=ShowHTMLFile&processFlows=Procure&projectId=' . $value3 . '&templateType=W2&temp_Announ=A&temp_itemNo=0&seqNo=1';
                                    endif;
                                    if ($key3 === 'project_name') :
                                        // ใส่ข้อมูลลงใน $limited_data
                                        $limited_data[] = [
                                            'url' => $url,
                                            'project_name' => $value3,
                                        ];
                                    endif;
                                endforeach;
                            endif;
                        endforeach;
                    endif;
                // Add a new line after each subarray at the first level
                endforeach;

                // เรียงลำดับ $limited_data ตาม 'project_id' ล่าสุด
                usort($limited_data, function ($a, $b) {
                    return $b['url'] <=> $a['url'];
                });

                // ในกรณีที่ต้องการแสดงเฉพาะ 4 แถวล่าสุด
                $limited_data = array_slice($limited_data, 0, 8);

                // ตรวจสอบว่ามีข้อมูลหรือไม่และแสดงผลลัพธ์
                if (!empty($limited_data)) :
                    foreach ($limited_data as $data) :
                ?>
                        <div class="content-news-detail">
                            <span class="text-news"><a href="<?= htmlspecialchars($data['url']) ?>" target="_blank">
                                    <img src="<?php echo base_url("docs/e-gp.png"); ?>" style="width: 40; height: 40px;">
                                    <?= htmlspecialchars($data['project_name']) ?></a></span>
                        </div>
                    <?php
                    endforeach;
                else :
                    ?>
                    <span class="text-center align-center" style="font-size: 36px;">ไม่สามารถดึงข้อมูลจากระบบจัดซือจัดจ้างภาครัฐได้ กรุณาโหลดหน้าเว็บใหม่อีกครั้ง</span>
                <?php
                endif;
                ?>

                <div class="d-flex justify-content-center" style="margin-top: -28px;">
                    <a href="<?php echo site_url('Pages/e_gp'); ?>">
                        <img src="docs/s.btn-all.png">
                    </a>
                </div>
            </div>
            <div id="tab3" class="tab-content">
                <?php foreach ($qP_reb as $anou) { ?>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/p_reb/' . $anou->p_reb_id); ?>">
                            <div class="row">
                                <div class="col-10">
                                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_reb_name); ?></span>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-end ">
                                        <span class="text-news-time">
                                            <?php
                                            // ในการใช้งาน setThaiMonth
                                            $date = new DateTime($anou->p_reb_date);
                                            $day_th = $date->format('d');
                                            $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                            $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                            $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                            echo $formattedDate;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center" style="margin-top: -28px;">
                    <a href="<?php echo site_url('Pages/p_reb'); ?>">
                        <img src="docs/s.btn-all.png">
                    </a>
                </div>
            </div>
            <div id="tab4" class="tab-content">
                <?php foreach ($qP_rpo as $anou) { ?>
                    <div class="content-news-detail">
                        <a href="<?php echo site_url('Pages/p_rpo/' . $anou->p_rpo_id); ?>">
                            <div class="row">
                                <div class="col-10">
                                    <span class="text-news"><img src="docs/s.icon-news.png">&nbsp;&nbsp;<?= strip_tags($anou->p_rpo_name); ?></span>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-end ">
                                        <span class="text-news-time">
                                            <?php
                                            // ในการใช้งาน setThaiMonth
                                            $date = new DateTime($anou->p_rpo_datesave);
                                            $day_th = $date->format('d');
                                            $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                            $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                            $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                            echo $formattedDate;
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-center" style="margin-top: -28px;">
                    <a href="<?php echo site_url('Pages/p_rpo'); ?>">
                        <img src="docs/s.btn-all.png">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-travel">
    <div class="travel-content">
        <div class="slick-carousel ">
            <?php foreach ($qTravel as $travel) { ?>
                <div class="text-center zoom-otop mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                        <img src="<?php echo base_url('docs/img/' . $travel->travel_img); ?>" width="234px" height="295px" class="image-with-shadow-travel">
                    </a>
                    <br>
                    <div class="d-flex justify-content-center" style="margin-left: 25px;">
                        <a class="underline" href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                            <?php
                            $imageName = '';
                            switch ($travel->travel_id) {
                                case 1:
                                    $imageName = 's.text-travel1.png';
                                    break;
                                case 2:
                                    $imageName = 's.text-travel2.png';
                                    break;
                                case 3:
                                    $imageName = 's.text-travel3.png';
                                    break;
                                case 4:
                                    $imageName = 's.text-travel4.png';
                                    break;
                                case 5:
                                    $imageName = 's.text-travel5.png';
                                    break;
                                case 6:
                                    $imageName = 's.text-travel6.png';
                                    break;
                                default:
                                    $imageName = 'default.jpg';
                                    break;
                            }
                            ?>
                            <img src="<?php echo base_url('docs/' . $imageName); ?>" alt="Image for ID <?php echo $travel->travel_id; ?>">
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-end" style="margin-top: 3%;">
            <a href="<?php echo site_url('pages/travel'); ?>">
                <img src="docs/s.btn-all.png">
            </a>
        </div>
    </div>
</div>

<div class="bg-otop">
    <div class="otop-content">
        <div class="text-center">
            <div class="row">
                <div class="col-3" style="margin-top: -50px;">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop1.png">
                    </a>
                </div>
                <div class="col-3" style="padding-top: 0;">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop2.png">
                    </a>
                </div>
                <div class="col-3" style="padding-top: 40px;">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop3.png">
                    </a>
                </div>
                <div class="col-3">
                    <a href="<?php echo site_url('pages/otop'); ?>" class="zoom-otop">
                        <img src="docs\s.item-otop4.png">
                    </a>
                    <div class="d-flex justify-content-center" style="margin-top: 8%;">
                        <a href="<?php echo site_url('pages/otop'); ?>">
                            <img src="docs/s.btn-all.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="bg-travel">
    <div class="travel-content text-center">
        <div class="up-down">
            <a href="<?php echo site_url('pages/travel'); ?>">
                <img class="mark-logo mt-5" src="docs\icon-map.png" width="210px" height="342px">
            </a>
        </div>
    </div>
</div> -->



<div class="bg-page-bottom">
    <div class="d-flex justify-content-center" style="padding-top: 120px;">
        <img src="docs/s.head-e-service.png">
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <span class="font-e-service-32">บริการยื่นคำร้องออนไลน์ 24 ชั่วโมง</span>
    </div>
    <div class="row d-flex justify-content-center underline" style="padding-top: 70px;">
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_complain'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service1.png">
                <br>
                <span class="font-e-service-25">ร้องเรียนร้องทุกข์</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_corruption'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service2.png">
                <br>
                <span class="font-e-service-25">แจ้งเรื่องทุจริต</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_suggestions'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service3.png">
                <br>
                <span class="font-e-service-25">รับฟังความคิดเห็น</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/q_a'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service4.png">
                <br>
                <span class="font-e-service-25">กระทู้ถาม-ตอบ</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/contact'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service5.png">
                <br>
                <span class="font-e-service-25">ติดต่อสอบถาม</span>
            </a>
        </div>
    </div>
    <div class="row underline" style="padding-top: 70px;">
        <div class="col-4 text-end">
            <a href="<?php echo site_url('Pages/e_service'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-1v2.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="<?php echo site_url('Pages/pbsv_e_book'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-2v1.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="<?php echo site_url('Pages/newsletter'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-3v1.png">
            </a>
            <div class="mar-fb">
                <a href="https://www.nacc.go.th/NACCPPWFC?" target="_blank" rel="noopener noreferrer">
                    <img src="docs/btn-corruption.jpg">
                </a>
                <div class="mar-es-intra"></div>
                <?php foreach ($qPublicize_ita as $index => $rs) { ?>
                    <a href="<?= $rs->publicize_ita_name; ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo base_url('docs/img/' . $rs->publicize_ita_img); ?>" width="320px" height="520px">
                    </a>
                <?php } ?>
            </div>
        </div>

        <div class="col-4 text-center">
            <a target="_blank" href="https://dbdregcom.dbd.go.th/mainsite/index.php?id=28" class="zoom-otop">
                <img src="docs/s.menu-e-service-4v1.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="<?php echo site_url('Pages/pbsv_gup'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-5v1.png">
            </a>
            <div class="mar-es-intra"></div>
            <a href="<?php echo site_url('Pages/laws_all'); ?>" class="zoom-otop">
                <img src="docs/s.menu-e-service-6v2.png">
            </a>
            <div class="mar-fb">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100068445171570&tabs=timeline&width=331&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="331" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>

        <div class="col-4">
            <div class="bg-view">
                <div class="head-view text-center ">
                    <span class="font-view">จำนวนผู้เข้าชมเว็บไซต์</span>
                </div>
                <div class="content-view">
                    <div class="mypiechart text-center mt-4">
                        <canvas id="myCanvas" width="150px" height="200px"></canvas>
                    </div>
                    <div class="row" style="margin-top: -5px;">
                        <div class="col-6">
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFE4E2;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">ออนไลน์</span><span style="padding-left: 15px;"><?php echo $onlineUsersCount; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #D7D7D7;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">วันนี้</span><span style="padding-left: 38px;"><?php echo $onlineUsersDay; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFE1BA;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">สัปดาห์นี้</span> <span style="padding-left: 5px;">
                                    <?php if (!empty($onlineUsersWeek)) : ?>
                                        <?php echo $onlineUsersWeek[0]->user_count; ?>
                                    <?php else : ?>
                                        0
                                    <?php endif; ?>
                                    &nbsp;&nbsp;&nbsp;คน
                                </span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFE98E;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">เดือนนี้</span> <span style="padding-left: 15px;"><?php echo $onlineUsersMonth; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px; margin-bottom: 2%;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFBE5C;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">ปีนี้</span> <span style="padding-left: 37px;"><?php echo $onlineUsersYear; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                            <div class="card-view" style="margin-left: 10px;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #D6AE8B;">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                </svg></i><span style="padding: 4%;">ทั้งหมด</span> <span style="padding-left: 10px;"><?php echo $onlineUsersAll; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-like ">
                <div class="head-like text-center ">
                    <span class="font-like">แบบสอบถามความพึงพอใจ</span>
                </div>
                <div class="content-like">
                    <div class="row">
                        <div class="col-6" style="margin-top: -25px;">
                            <form action="<?php echo site_url('home/addLike'); ?>" id="FormaddLike" method="post">
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="ดีมาก" id="flexCheckDefault1" name="like_name" onclick="toggleCheckbox('flexCheckDefault1')" />
                                    <label class="form-check-label font-like-label" for="ดีมาก">ดีมาก</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="ดี" id="flexCheckDefault2" name="like_name" onclick="toggleCheckbox('flexCheckDefault2')" />
                                    <label class="form-check-label font-like-label" for="ดี">ดี</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="พอใช้" id="flexCheckDefault3" name="like_name" onclick="toggleCheckbox('flexCheckDefault3')" />
                                    <label class="form-check-label font-like-label" for="พอใช้">ปานกลาง</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input border-like" type="radio" value="พอใช้" id="flexCheckDefault4" name="like_name" onclick="toggleCheckbox('flexCheckDefault4')" />
                                    <label class="form-check-label font-like-label" for="พอใช้">พอใช้</label>
                                </div>
                                <button type="button" class="btn" id="confirmButton"><img src="docs/s.btn-sent.png"></button>
                                <div id="submitSection" style="display:none;">
                                    <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableSubmit"></div>
                                    <div class="form-group row mt-1">
                                        <div class="col-3">
                                        </div>
                                        <div class="col-9">
                                            <button type="submit" class="btn" id="SubmitLike" disabled><img src="docs/s.btn-sent.png"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6" style="margin-left: -10%; margin-top: -25px;">
                            <div class="content-like-detail" style="display: none;">
                                <div style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countExcellent; ?>%;" aria-valuenow="<?= $countExcellent; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countExcellent; ?></span>
                                </div>
                                <div class="mt-3" style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countGood; ?>%;" aria-valuenow="<?= $countGood; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countGood; ?></span>
                                </div>
                                <div class="mt-3" style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countAverage; ?>%;" aria-valuenow="<?= $countAverage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countAverage; ?></span>
                                </div>
                                <div class="mt-3" style="display: flex; align-items: center;">
                                    <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                        <div class="progress-bar" role="progressbar" style="width: <?= $countOkay; ?>%;" aria-valuenow="<?= $countOkay; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span style="font-size: 20px;">&nbsp;<?= $countOkay; ?></span>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: -45px; margin-left: 170px;">
                            <a class="btn" onclick="showContentLikeDetail()"><img src="docs/s.btn-score.png"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-q-a ">
                <div class="head-q-a text-center">
                    <span class="font-q-a-home-head">กระดานสนทนาถาม-ตอบ</span>
                </div>
                <div class="content-q-a">
                    <form action=" <?php echo site_url('Pages/add_q_a'); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="col-12 control-label font-q-a-home-form">หัวข้อคำถาม</div>
                            <div class="col-12">
                                <input type="text" name="q_a_msg" class="form-control input-home-q-a" required placeholder="กรอกคำถาม...">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="col-2 control-label font-q-a-home-form">ชื่อ</div>
                                    <div class="col-12">
                                        <input type="text" name="q_a_by" class="form-control input-home-q-a" required placeholder="กรอกชื่อผู้ตั้งกระทู้">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="col-2 control-label font-q-a-home-form">อีเมล</div>
                                    <div class="col-12">
                                        <input type="email" name="q_a_email" class="form-control input-home-q-a" required placeholder="example@youremail.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label font-q-a-home-form">รายละเอียด</label>
                            <div class="col-12">
                                <textarea name="q_a_detail" class="form-control input-home-q-a" id="exampleFormControlTextarea1" rows="6" placeholder="กรอกรายละเอียดเพิ่มเติม..."></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <div class="g-recaptcha" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableLoginButton"></div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" id="loginBtn" class="btn" disabled><img src="<?php echo base_url("docs/s.btn-sent.png"); ?>"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 70px;">
        <div class="col-5" style="margin-left: 150px;">

        </div>
        <div class="col-5">

        </div>
    </div>

    <div class="bg-links">
        <div class="text-center">
            <img src="docs/s.head-links.png">
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="https://www.roiet.go.th/101province/" target="_blank"><img src="docs/s.link-link1.png"></a></div>
                <div class="swiper-slide"><a href="https://www.pao-roiet.go.th/" target="_blank"><img src="docs/s.link-link2.png"></a></div>
                <div class="swiper-slide"><a href="http://www.sasuk101.moph.go.th/" target="_blank"><img src="docs/s.link-link3.png"></a></div>
                <div class="swiper-slide"><a href="https://www.cgd.go.th/cs/internet/internet/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%812.html?page_locale=th_TH" target="_blank"><img src="docs/s.link-link4.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/" target="_blank"><img src="docs/s.link-link5.png"></a></div>
                <div class="swiper-slide"><a href="https://www.doe.go.th/" target="_blank"><img src="docs/s.link-link6.png"></a></div>
                <div class="swiper-slide"><a href="https://www.nhso.go.th/" target="_blank"><img src="docs/s.link-link7.png"></a></div>
                <div class="swiper-slide"><a href="https://www.roiet.go.th/dumrong/" target="_blank"><img src="docs/s.link-link8v2.png"></a></div>
                <div class="swiper-slide"><a href="https://www.admincourt.go.th/admincourt/site/09illustration.html" target="_blank"><img src="docs/s.link-link9.png"></a></div>
                <div class="swiper-slide"><a href="https://www.dla.go.th/index.jsp" target="_blank"><img src="docs/s.link-link10.png"></a></div>
                <div class="swiper-slide"><a href="https://info.go.th/" target="_blank"><img src="docs/s.link-link11.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/about-us/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%9B%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81/%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%8A%E0%B8%A7%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89/" target="_blank"><img src="docs/s.link-link12.png"></a></div>
                <div class="swiper-slide"><a href="n" target="_blank"><img src="docs/s.link-link13.png"></a></div>
                <div class="swiper-slide"><a href="https://www.oic.go.th/web2017/km/index.html" target="_blank"><img src="docs/s.link-link15.png"></a></div>
            </div>
            <!-- <div class="swiper-pagination"></div> -->
            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
            <div class="custom-button-prev">
                <img src="docs/s.previous-travel.png" alt="Prev">
            </div>
            <div class="custom-button-next">
                <img src="docs/s.next-travel.png" alt="Next">
            </div>
        </div>
    </div>
</div>
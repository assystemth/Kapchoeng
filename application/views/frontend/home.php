<div class="image-slide-stick-mid">
    <a href="https://itas.nacc.go.th/go/eit/qu7msc" target="_blank">
        <img src="docs/eit-slide-mid.png">
    </a>
    <img src="docs/eit-slide-close.png" class="close-button-slide-mid" onclick="closeImageSlideMid()">
</div>
<div class="welcome">
    <video width="1280" height="690" autoplay muted loop>
        <source src="<?php echo base_url("docs/welcome2.mp4"); ?>" type="video/mp4">
    </video>
</div>

<!-- วิสัยทัศน์  -->
<div class="vision">
    <div class="row">
        <div class="col-4">
            <div class="d-flex justify-content-center">
                <img class="mark-logo" src="docs/k.item-vision-left1.png">
            </div>
            <div class="d-flex justify-content-center">
                <img class="mark-logo" src="docs/k.item-vision-left2v2.png">
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?php echo site_url('Pages/msg_pres'); ?>" class="zoom-otop">
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
                <img class="mark-logo" src="docs/k.item-vision-right1v4.png">
            </div>
            <div class="d-flex justify-content-center">
                <img class="mark-logo" src="docs/k.item-vision-right2v2.png">
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?php echo site_url('Pages/msg_prem'); ?>" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.item-vision-right3v3.png">
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-4">
            <div class="d-flex justify-content-center mt-4">
                <a href="<?php echo site_url('Pages/ita_all'); ?>" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top1v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="https://www.oic.go.th/INFOCENTER25/2518/" class="zoom-otop" target="_blank">
                    <img class="mark-logo" src="docs/k.menu-eservice-top2v2.png">
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center mt-4">
                <a href="#oss" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top3v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="<?php echo site_url('Pages/odata'); ?>" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-open-data.png">
                </a>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-center mt-4">
                <a href="https://dbdregcom.dbd.go.th/mainsite/index.php?id=28" class="zoom-otop" target="_blank">
                    <img class="mark-logo" src="docs/k.menu-eservice-top5v2.png">
                </a>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="<?php echo site_url('Pages/laws_all'); ?>" class="zoom-otop">
                    <img class="mark-logo" src="docs/k.menu-eservice-top6v2.png">
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
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 40px; padding-top: 5px;">
            ข้อมูลทั่วไป
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/s.navmid-head1.png"></div>
                        </li> -->
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/history'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ประวัติความเป็นมา</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/gci'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ข้อมูลสภาพทั่วไป</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/vision'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;วิสัยทัศน์</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/video'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;วิดีทัศน์</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/authority'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;อำนาจหน้าที่</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/mission'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ภารกิจและความรับผิดชอบ</a></li>
                </div>
                <div class="dropdown-center">
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/executivepolicy'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;นโยบายผู้บริหาร</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/travel'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แหล่งท่องเที่ยว</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/ci'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ข้อมูลชุมชน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/otop'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ผลิตภัณฑ์ตำบล</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/activity'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ภาพกิจกรรม</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/award'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รางวัลแห่งความภูมิใจ</a></li>
                </div>
                <div class="dropdown-right">
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/si'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ยุทธศาสตร์การพัฒนา</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/msg_pres'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;สารจากนายก</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/msg_prem'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;สารจากปลัด</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/newsletter'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;จดหมายข่าว</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/emblem'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ตราสัญลักษณ์</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/contact'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ติดต่อเทศบาล</a></li>
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

                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/site_map'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนผังโครงสร้างรวม</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_executives'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;คณะผู้บริหาร</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_council'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;สมาชิกสภาเทศบาล</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_unit_leaders'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;หัวหน้าส่วนราชการ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_deputy'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;สำนักปลัดเทศบาล</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_treasury'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;กองคลัง</a></li>
                </div>
                <div class="dropdown-center">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="" src="docs/navmid-head22.png"></div>
                        </li> -->

                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_maintenance'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;กองช่าง</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_education'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;กองการศึกษา</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_dsab'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;กองยุทธศาสตร์และงบประมาณ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_cdc_brkm'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์พัฒนาเด็กเล็กบ้านตาเกาว์ใหม่</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_cdc_bpsb'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์พัฒนาเด็กเล็กบ้านปราสาทเบง</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_cdc_bbj'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์พัฒนาเด็กเล็กบ้านบักจรัง</a></li>
                </div>
                <div class="dropdown-right">
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_cdc_bnry'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์พัฒนาเด็กเล็กบ้านน้อยร่มเย็น</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/p_cdc_bkc'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์พัฒนาเด็กเล็กบ้านกาบเชิง</a></li>
                </div>

            </ul>
        </div>

        <!-- Dropdown 3 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 75px; padding-top: 5px;">
            บริการประชาชน
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_cac'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์ช่วยเหลือประชาชน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_cig'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์ข้อมูลข่าวสารทางราชการ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_cjc'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ศูนย์ยุติธรรมชุมชน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_sags'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;คู่มือและมาตรฐานการให้บริการ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_gup'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;คู่มือสำหรับประชาชน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_ahs'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;หลักประกันสุขภาพเทศบาลตำบลกาบเชิง</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/odata'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ฐานข้อมูลเปิดภาครัฐ (Open Data) </a></li>
                </div>
                <div class="dropdown-center">
                    <!-- <li>
                            <div class="dropdown-item" href="#"><img class="mar-left-9" src="docs/s.item-nav-mid4v2.6.png"></div>
                        </li> -->

                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_oppr'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;งานอาสาสมัครป้องกันภัยฝ่ายพลเรือน
                            (อปพร.)</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_ems'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;งานกู้ชีพ / การบริการการแพทย์ฉุกเฉิน
                            (EMS)</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_ae'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;เบี้ยผู้สูงอายุ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_e_book'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ดาวน์โหลดแบบฟอร์ม E-Book</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_tax'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ข้อมูลการชำระภาษี</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pbsv_dss'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ข้อมูลเชิงสถิติการให้บริการ </a></li>
                </div>
            </ul>
        </div>


        <!-- Dropdown 4 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 90px; padding-top: 5px;">
            แผนงาน
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head21.png"></div>
                        </li> -->
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pdl'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนพัฒนาท้องถิ่น</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pc3y'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนอัตรากำลัง 3 ปี</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pds3y'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนพัฒนาบุคลากร 3 ปี</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pdpa'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนพัฒนาบุคคลากรประจำปี</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_dpy'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนการบริหารและพัฒนาทรัพยากร<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            บุคคลประจำปี</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_poa'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนการดำเนินงานประจำปี</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pcra'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนการจัดเก็บรายได้ประจำปี</a></li>
                </div>
                <div class="dropdown-center">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="" src="docs/navmid-head22.png"></div>
                        </li> -->

                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pop'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนปฏิบัติการจัดซื้อจัดจ้าง</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_paca'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนปฏิบัติการป้องกันการทุจริต</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_psi'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนแม่บทสารสนเทศ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pmda'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนป้องกันและบรรเทาสาธารณะภัยประจำปี</a>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/plan_pbawa'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;แผนและควาวก้าวหน้าในการดำเนินงาน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และการใช้จ่ายงบประมาณประจำปี</a>
                    </li>
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
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_reauf'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รายงานติดตามและประเมินผลแผน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_rsas'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รายงานผลการประเมินตนตาม<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การดำเนินงานและการให้บริการ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_aca'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การปฏิบัติการป้องกันการทุจริต</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_mcc'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การจัดการเรื่องร้องเรียนการทุจริต</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_sap'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การปฏิบัติงานและการให้บริการ</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_pgn'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;นโยบายไม่รับของขวัญ no gift policy</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_pgnm'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การประเมินผลและรายงานผลนโยบาย<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Gift Policy รอบ 6 เดือน รอบ12</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_po'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การเปิดโอกาสให้มีส่วนร่วม</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/operation_eco'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การเสริมสร้างวัฒนธรรมองค์กร</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/ita_all'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ITA การประเมินคุณธรรมและความโปร่งใส</a></li>
                </div>
                <div class="dropdown-center">
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_policy_hr'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;นโยบายบริหารทรัพยากรบุคคล</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_am_hr'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การดำเนินการบริหารทรัพยากรบุคคล</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_rdam_hr'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_cdm_topic'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;หลักเกณฑ์และการบริหารและพัฒนา</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_aa'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;กิจการสภา</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_pm'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การมีส่วนร่วมของผู้บริหาร</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_aditn'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;หน่วยตรวจสอบภายใน</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_eg'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ประมวลจริยธรรมสำหรับเจ้าหน้าที่ของรัฐ</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/operation_ameg'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การประเมินจริยธรรมเจ้าหน้าที่ของรัฐ</a></li>
                    <li><a class="mar-left-6 dropdown-item" href="<?php echo site_url('Pages/lpa'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;LPA การประเมินประสิทธิภาพขององค์กร</a></li>
                </div>
                <div class="dropdown-right">
                    <li><a class="mar-left-3 dropdown-item" href="<?php echo site_url('Pages/p_rpobuy'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รายงานผลการดำเนินงานจัดซื้อจัดจ้าง</a></li>
                    <li><a class="mar-left-3 dropdown-item" href="<?php echo site_url('Pages/p_sopopip'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ความก้าวหน้าการจัดซื้อจัดจ้าง<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หรือการจัดหาพัสดุ</a></li>
                    <li><a class="mar-left-3 dropdown-item" href="<?php echo site_url('Pages/p_sopopaortsr'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รายงานสรุปผลการจัดซื้อจัดจ้าง<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หรือการจัดหาพัสดุประจำปี</a></li>
                    <li><a class="mar-left-3 dropdown-item" href="<?php echo site_url('Pages/operation_rcaa'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รายงานผลการดําเนินการป้องกัน<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การทุจริตประจําปี</a></li>
                    <!-- <li><a class="mar-left-3 dropdown-item" href="<?php echo site_url('Pages/operation_rpa'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;รายงานผลการดำเนินงานประจำปี</a></li> -->
                    <li><a class="mar-left-3 dropdown-item" href="<?php echo site_url('Pages/operation_caar'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;การประเมินความเสี่ยงเพื่อป้องกันการทุจริต</a></li>
                    <li><a class="mar-left-3 dropdown-item" href="<?php echo site_url('Pages/operation_mccs'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ข้อมูลสถิติเรื่องร้องเรียนการทุจริต<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และประพฤติมิชอบ</a></li>
                </div>
            </ul>
        </div>


        <!-- Dropdown 6 -->
        <button class="dropdown-trigger" style="border: none; background: none; padding: 0; margin: 0; padding-left: 90px; padding-top: 5px;">
            มาตรการภายใน
        </button>
        <div class="dropdown-content">
            <ul class="no-bullets mt-4">
                <div class="dropdown-left">
                    <!-- <li>
                            <div class="dropdown-item mb-3 mt-5"><img class="mx-5" src="docs/navmid-head6.png"></div>
                        </li> -->

                    <!-- <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/order'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;คำสั่งเทศบาล</a></li> -->
                    <!-- <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/announce'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ประกาศเทศบาล</a></li> -->
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/mui'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;มาตรการภายใน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/guide_work'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;คู่มือการปฏิบัติงาน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/km'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;Knowledge Management :
                            KM<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; การจัดการความรู้ของท้องถิ่น</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/loadform'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;ดาวน์โหลดแบบฟอร์ม</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/pppw'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;พรบ./พรก ที่ใช้การปฏิบัติงาน</a></li>
                    <li><a class="mar-left-9 dropdown-item" href="<?php echo site_url('Pages/laws_topic'); ?>"><img src="docs/k.item-img-navmid.png">&nbsp;&nbsp;กฏหมายที่เกี่ยวข้อง</a></li>
                </div>
            </ul>
        </div>

    </div>
</div>

<div class="bg-activity">
    <div class="d-flex justify-content-center" style="padding-top: 3%;">
        <img src="docs/k.head-activity.png">
    </div>
    <div class="row d-flex justify-content-center" style="padding-top: 70px; margin-left: -50px;">
        <?php foreach ($qActivity as $activity) { ?>
            <div class="card-activity col-2 mx-4">
                <?php if (!empty($activity->activity_img)) : ?>
                    <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                        <img src="<?php echo base_url('docs/img/' . $activity->activity_img); ?>" width="180px" height="160px" style="border-radius: 24px;">
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
                        <div style="margin-left: 35px;">
                            &nbsp;
                            <?php
                            // วันที่ของข่าว
                            $activity_date = new DateTime($activity->activity_date);

                            // วันที่ปัจจุบัน
                            $current_date = new DateTime();

                            // คำนวณหาความต่างของวัน
                            $interval = $current_date->diff($activity_date);
                            $days_difference = $interval->days;

                            // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                            if ($days_difference > 30) {
                                // ไม่แสดงรูปภาพ
                            } else {
                                // แสดงรูปภาพ
                                echo '<img src="docs/activity-new.gif">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="text-activity underline three-line-ellipsis mt-1">
                        <a href="<?= site_url('pages/activity_detail/' . $activity->activity_id); ?>">
                            <span class="text-activity">
                                <?= strip_tags($activity->activity_name); ?>
                            </span>
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

<div class="bg-video">
    <div class="d-flex justify-content-center" style="padding-top: 1%;">
        <img src="docs/k.head-video.png">
    </div>
    <div class="bg-content-video">
        <!-- <?php if (!empty($video_data) && !empty($video_data->video_link)) : ?>
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
        <?php endif; ?> -->
        <iframe width="482" height="295" src="https://www.youtube.com/embed/NhFwG6Dz_sg?si=KU6Vwv23GbhXPp8s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <a href="<?php echo site_url('pages/video'); ?>">
            <img src="docs/k.btn-all.png">
        </a>
    </div>


    <div class="content-news-bg-two underline">
        <div class="tab-container2">
            <div class="tab-link-two" onclick="openTabTwo('tabtwo1')">
                <img src="docs/k.news-head1.png" alt="Tab 1">
            </div>
            <div class="tab-link-two" onclick="openTabTwo('tabtwo2')">
                <img src="docs/k.news-head2v2.png" alt="Tab 2">
            </div>
            <div class="tab-link-two" onclick="openTabTwo('tabtwo3')">
                <img src="docs/k.news-head3v2.png" alt="Tab 3">
            </div>
            <div class="tab-link-two" onclick="openTabTwo('tabtwo4')">
                <img src="docs/k.news-head4v2.png" alt="Tab 4">
            </div>
        </div>
        <br>
        <div id="tabtwo1" class="tab-content-two">
            <?php foreach ($qNews as $news) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/news_detail/' . $news->news_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;
                                    <?= strip_tags($news->news_name); ?>
                                </span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($news->news_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -28px; margin-left: -32px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $news_date = new DateTime($news->news_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($news_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-center" style="margin-top: -28px;">
                <a href="<?php echo site_url('pages/news'); ?>">
                    <img src="docs/k.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tabtwo2" class="tab-content-two">
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_bgps'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติงบประมาณ</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_chh'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติการควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_ritw'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_market'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติตลาด</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_rmwp'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_rcsp'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติหลักเกณฑ์การคัดมูลฝอย</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_rcp'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติการควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span>
                </a>
            </div>
            <div class="content-news-detail">
                <a href="<?php echo site_url('Pages/canon_tambol'); ?>">
                    <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;เทศบัญญัติตำบล</span>
                </a>
            </div>
        </div>
        <div id="tabtwo3" class="tab-content-two">
            <?php foreach ($qAnnounce as $gw) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/announce_detail/' . $gw->announce_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;
                                    <?= strip_tags($gw->announce_name); ?>
                                </span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
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
                                    <div class="col-2" style="margin-top: -28px; margin-left: -32px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $announce_date = new DateTime($gw->announce_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($announce_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-center" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/announce'); ?>">
                    <img src="docs/k.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tabtwo4" class="tab-content-two">
            <?php foreach ($qOrder as $gw) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/order_detail/' . $gw->order_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;
                                    <?= strip_tags($gw->order_name); ?>
                                </span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
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
                                    <div class="col-2" style="margin-top: -28px; margin-left: -32px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $order_date = new DateTime($gw->order_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($order_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-center" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/order'); ?>">
                    <img src="docs/k.btn-all.png">
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
                <img src="docs/k.news-head7v2.png" alt="Tab 3">
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
                                <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;
                                    <?= strip_tags($pcm->procurement_name); ?>
                                </span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
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
                                    <div class="col-2" style="margin-top: -28px; margin-left: -32px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $procurement_date = new DateTime($pcm->procurement_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($procurement_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-center" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/procurement'); ?>">
                    <img src="docs/k.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tab2" class="tab-content">
            <?php foreach ($qEgp as $egp) { ?>
                <div class="content-news-detail">
                    <a href="https://process3.gprocurement.go.th/egp2procmainWeb/jsp/procsearch.sch?servlet=gojsp&proc_id=ShowHTMLFile&processFlows=Procure&projectId=<?= $egp->project_id; ?>&templateType=W2&temp_Announ=A&temp_itemNo=0&seqNo=1" target="_blank">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/e-gp.png" width="30px" height="34px">&nbsp;&nbsp;
                                    <?= strip_tags($egp->project_name); ?>
                                </span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // สมมติว่าค่าที่ได้รับมาจากตัวแปร $rs['doc_date'] อยู่ในรูปแบบ "10 ม.ค. 67"
                                                $dateStr = $egp->transaction_date;

                                                // // แปลงเดือนจากชื่อไทยย่อเป็นชื่อเต็ม
                                                // $thaiMonths = [
                                                //     'ม.ค.' => 'มกราคม',
                                                //     'ก.พ.' => 'กุมภาพันธ์',
                                                //     'มี.ค.' => 'มีนาคม',
                                                //     'เม.ย.' => 'เมษายน',
                                                //     'พ.ค.' => 'พฤษภาคม',
                                                //     'มิ.ย.' => 'มิถุนายน',
                                                //     'ก.ค.' => 'กรกฎาคม',
                                                //     'ส.ค.' => 'สิงหาคม',
                                                //     'ก.ย.' => 'กันยายน',
                                                //     'ต.ค.' => 'ตุลาคม',
                                                //     'พ.ย.' => 'พฤศจิกายน',
                                                //     'ธ.ค.' => 'ธันวาคม',
                                                // ];

                                                // // แปลงเดือนใน $dateStr โดยใช้การแทนที่จาก array $thaiMonths
                                                // foreach ($thaiMonths as $shortMonth => $fullMonth) {
                                                //     if (strpos($dateStr, $shortMonth) !== false) {
                                                //         $dateStr = str_replace($shortMonth, $fullMonth, $dateStr);
                                                //         break; // ออกจาก loop เมื่อเจอการแทนที่แล้ว
                                                //     }
                                                // }

                                                // แปลงปีคริสต์ศักราช (สองหลัก) เป็นปีพุทธศักราช (สี่หลัก)
                                                preg_match('/\d{2}$/', $dateStr, $matches);
                                                if ($matches) {
                                                    $year = $matches[0]; // ดึงตัวเลขสองหลักท้ายสุด ซึ่งคือปีในรูปแบบ 67
                                                    $fullYear = (int)$year < 50 ? '25' . $year : '25' . $year; // เพิ่ม '25' ข้างหน้าปี
                                                    $dateStr = str_replace($year, $fullYear, $dateStr); // แทนที่ปีด้วยปีที่เพิ่ม '25' ข้างหน้า
                                                }

                                                // แสดงผลลัพธ์
                                                echo $dateStr; // ตัวอย่างเช่น "10 มกราคม 2567"
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -28px; margin-left: -32px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $contract_contract_date = new DateTime($egp->contract_contract_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($contract_contract_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-center" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/egp'); ?>">
                    <img src="docs/k.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tab3" class="tab-content">
            <?php foreach ($qP_reb as $anou) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/p_reb_detail/' . $anou->p_reb_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;
                                    <?= strip_tags($anou->p_reb_name); ?>
                                </span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
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
                                    <div class="col-2" style="margin-top: -28px; margin-left: -32px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $p_reb_date = new DateTime($anou->p_reb_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($p_reb_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-center" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/p_reb'); ?>">
                    <img src="docs/k.btn-all.png">
                </a>
            </div>
        </div>
        <div id="tab4" class="tab-content">
            <?php foreach ($qP_rpo as $anou) { ?>
                <div class="content-news-detail">
                    <a href="<?php echo site_url('Pages/p_rpo_detail/' . $anou->p_rpo_id); ?>">
                        <div class="row">
                            <div class="col-10">
                                <span class="text-news"><img src="docs/k.logo.png" width="30px" height="34px">&nbsp;&nbsp;
                                    <?= strip_tags($anou->p_rpo_name); ?>
                                </span>
                            </div>
                            <div class="col-2">
                                <div class="row">
                                    <div class="col-10">
                                        <div class="d-flex justify-content-end ">
                                            <span class="text-news-time">
                                                <?php
                                                // ในการใช้งาน setThaiMonth
                                                $date = new DateTime($anou->p_rpo_date);
                                                $day_th = $date->format('d');
                                                $month_th = setThaiMonthAbbreviation($date->format('F')); // เรียกใช้ setThaiMonth สำหรับชื่อเดือน
                                                $year_th = $date->format('Y') + 543; // เพิ่มขึ้น 543 ปี
                                                $formattedDate = "$day_th $month_th $year_th"; // วันที่และเดือนเป็นภาษาไทย
                                                echo $formattedDate;
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: -28px; margin-left: -32px;">
                                        <?php
                                        // วันที่ของข่าว
                                        $p_rpo_date = new DateTime($anou->p_rpo_date);

                                        // วันที่ปัจจุบัน
                                        $current_date = new DateTime();

                                        // คำนวณหาความต่างของวัน
                                        $interval = $current_date->diff($p_rpo_date);
                                        $days_difference = $interval->days;

                                        // ถ้ามากกว่า 30 วัน ให้ซ่อนไว้
                                        if ($days_difference > 30) {
                                            // ไม่แสดงรูปภาพ
                                        } else {
                                            // แสดงรูปภาพ
                                            echo '<img src="docs/news-new.gif" width="40" height="16">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="d-flex justify-content-center" style="margin-top: -28px;">
                <a href="<?php echo site_url('Pages/p_rpo'); ?>">
                    <img src="docs/k.btn-all.png">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bg-travel">
    <div class="travel-content">
        <div class="slick-carousel ">
            <?php foreach ($qTravel as $travel) { ?>
                <div class="text-center zoom-travel mt-5">
                    <a href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                        <img src="<?php echo base_url('docs/img/' . $travel->travel_img); ?>" width="270px" height="254px" class="image-with-shadow-travel">
                    </a>
                    <br>
                    <div class="d-flex justify-content-center" style="margin-left: 0px; width:270px;">
                        <a class="underline" href="<?php echo site_url('Pages/travel_detail/' . $travel->travel_id); ?>">
                            <span class="text-content-travel">
                                <?= $travel->travel_name; ?>
                            </span>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-center" style="margin-top: 3%;">
            <a href="<?php echo site_url('pages/travel'); ?>">
                <img src="docs/k.btn-all.png">
            </a>
        </div>
    </div>
</div>

<div class="bg-otop">
    <div class="otop-content">
        <div class="slick-carousel-otop">
            <?php foreach ($qOtop as $otop) { ?>
                <div class="text-center zoom-travel mt-5">
                    <a href="<?php echo site_url('Pages/otop_detail/' . $otop->otop_id); ?>">
                        <img src="<?php echo base_url('docs/img/' . $otop->otop_img); ?>" width="270px" height="336px" class="image-with-shadow-travel">
                    </a>
                    <br>
                    <div class="d-flex justify-content-center" style="margin-left: 0px; width:270px;">
                        <a class="underline" href="<?php echo site_url('Pages/otop_detail/' . $otop->otop_id); ?>">
                            <span class="text-content-otop">
                                <?= $otop->otop_name; ?>
                            </span>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-center">
            <a href="<?php echo site_url('pages/otop'); ?>">
                <img src="docs/k.btn-all.png">
            </a>
        </div>
    </div>
</div>

<div class="bg-page-bottom">
    <div class="d-flex justify-content-center" style="padding-top: 70px;" id="oss">
        <img src="docs/k.head-e-service.png">
    </div>
    <br>
    <!-- <div class="d-flex justify-content-center">
        <span class="font-e-service-32">บริการยื่นคำร้องออนไลน์ 24 ชั่วโมง</span>
    </div> -->
    <div class="row d-flex justify-content-center underline" style="padding-top: 40px; padding-left: 50px; padding-right: 50px;">
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_complain'); ?>" class="zoom-otop">
                <img src="docs/k.menu-e-service1.png">
                <br>
                <span class="font-e-service-25">แจ้งเรื่อง ร้องเรียน</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_corruption'); ?>" class="zoom-otop">
                <img src="docs/k.menu-e-service2.png">
                <br>
                <span class="font-e-service-25">แจ้งเรื่องทุจริต</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_suggestions'); ?>" class="zoom-otop">
                <img src="docs/k.menu-e-service3.png">
                <br>
                <span class="font-e-service-25">รับฟังความคิดเห็น</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/q_a'); ?>" class="zoom-otop">
                <img src="docs/k.menu-e-service4.png">
                <br>
                <span class="font-e-service-25">กระทู้ ถาม-ตอบ</span>
            </a>
        </div>
        <div class="col-2 text-center">
            <a href="<?php echo site_url('Pages/adding_esv_ods'); ?>" class="zoom-otop">
                <img src="docs/k.menu-e-service5.png">
                <br>
                <span class="font-e-service-25">ยื่นเอกสารออรไลน์</span>
            </a>
        </div>
        <div class="col-2 text-center d-flex ">
            <a href="<?php echo site_url('Pages/pbsv_e_book'); ?>" class="zoom-otop">
                <img src="docs/k.menu-e-service6.png">
                <br>
                <span class="font-e-service-25">แบบฟอร์ม e-Book</span>
            </a>
        </div>
    </div>

    <div class="row" style="padding: 70px 60px">
        <div class="col-7">
            <div class="bg-qa-list">
                <?php foreach ($qQ_a as $rs) { ?>
                    <div class="bg-content-qa-list mt-3">
                        <div class="row">
                            <div class="col-9 one-line-ellipsis" style="padding-top: 7px;">
                                <a href="<?php echo site_url('Pages/q_a_chat/' . $rs->q_a_id); ?>">
                                    <span class="font-qa-list-content ">
                                        <?= $rs->q_a_msg; ?>
                                    </span>
                                </a>
                            </div>
                            <div class="col-3 one-line-ellipsis" style="padding-top: 8px;">
                                <span class="font-qa-list-content-name">ผู้ตั้งกระทู้ :
                                    <?= $rs->q_a_by; ?>y
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="d-flex justify-content-end mt-4">
                    <div class="mx-2">
                        <a href="<?php echo site_url('pages/q_a'); ?>">
                            <img src="docs/k.btn-all-qa.png">
                        </a>
                    </div>
                    <a href="<?php echo site_url('pages/addding_q_a'); ?>">
                        <img src="docs/k.btn-add-qa.png">
                    </a>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <div class="bg-view">
                        <div class="head-view text-center ">
                            <span class="font-view">จำนวนผู้เข้าชมเว็บไซต์</span>
                        </div>
                        <div class="content-view">
                            <div class="mypiechart text-center mt-4">
                                <canvas id="myCanvas" width="150px" height="200px"></canvas>
                            </div>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="card-view" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #1D4A95;">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg></i>&nbsp;<span>ออนไลน์</span>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4  d-flex justify-content-start">
                                        <span class="card-view">
                                            <?php echo $onlineUsersCount; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="card-view" style="margin-right: 28px;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #AEE1F7;">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg></i>&nbsp;<span>วันนี้</span>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4  d-flex justify-content-start">
                                        <span class="card-view">
                                            <?php echo $onlineUsersDay; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="card-view" style="margin-right: 12px;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #FFDF63;">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg></i>&nbsp;<span>เดือนนี้</span>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4  d-flex justify-content-start">
                                        <span class="card-view">
                                            <?php echo $onlineUsersMonth; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน
                                        </span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 d-flex justify-content-end">
                                        <div class="card-view" style="margin-right: 8px;" id="card1"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: #727272;">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg></i>&nbsp;<span>ทั้งหมด</span>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4  d-flex justify-content-start">
                                        <span class="card-view">
                                            <?php echo $onlineUsersAll; ?>&nbsp;&nbsp;&nbsp;&nbsp;คน
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-like ">
                        <div class="head-like text-center ">
                            <span class="font-like">แบบสอบถามความพึงพอใจ</span>
                        </div>
                        <div class="content-like">
                            <div class="row">
                                <div class="col-6" style="margin-top: -25px;">
                                    <form id="reCAPTCHA3" action="<?php echo site_url('home/addLike'); ?>" id="FormaddLike" method="post">
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="ดีมาก" id="flexCheckDefault1" name="like_name" onclick="toggleCheckbox('flexCheckDefault1')" />
                                            <label class="form-check-label font-like-label" for="ดีมาก">ดีมาก</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="ดี" id="flexCheckDefault2" name="like_name" onclick="toggleCheckbox('flexCheckDefault2')" />
                                            <label class="form-check-label font-like-label" for="ดี">ดี</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="ปานกลาง" id="flexCheckDefault3" name="like_name" onclick="toggleCheckbox('flexCheckDefault3')" />
                                            <label class="form-check-label font-like-label" for="ปานกลาง">ปานกลาง</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-like" type="radio" value="พอใช้" id="flexCheckDefault4" name="like_name" onclick="toggleCheckbox('flexCheckDefault4')" />
                                            <label class="form-check-label font-like-label" for="พอใช้">พอใช้</label>
                                        </div>
                                        <div id="submitSection">
                                            <!-- <div class="g-recaptcha" style="margin-left: -15px;" data-sitekey="6LcKoPcnAAAAAKGgUMRtkBs6chDKzC8XOoVnaZg_" data-callback="enableSubmit"></div> -->
                                            <div class="form-group row mt-2">
                                                <div class="col-9">
                                                    <!-- <button type="submit" class="btn" id="SubmitLike" disabled><img src="docs/k.btn-sent-esv.png"></button> -->
                                                    <button data-action='submit' data-callback='onSubmit' data-sitekey="6LcfiLYpAAAAAI7_U3nkRRxKF7e8B_fwOGqi7g6x" type="submit" class="btn g-recaptcha" id="SubmitLike"><img src="docs/k.btn-sent-esv.png"></button>
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
                                            <span style="font-size: 20px;">&nbsp;
                                                <?= $countExcellent; ?>
                                            </span>
                                        </div>
                                        <div class="mt-3" style="display: flex; align-items: center;">
                                            <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: <?= $countGood; ?>%;" aria-valuenow="<?= $countGood; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span style="font-size: 20px;">&nbsp;
                                                <?= $countGood; ?>
                                            </span>
                                        </div>
                                        <div class="mt-3" style="display: flex; align-items: center;">
                                            <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: <?= $countAverage; ?>%;" aria-valuenow="<?= $countAverage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span style="font-size: 20px;">&nbsp;
                                                <?= $countAverage; ?>
                                            </span>
                                        </div>
                                        <div class="mt-3" style="display: flex; align-items: center;">
                                            <div class="progress-sm mr-6" style="flex: 1; height: 20px;">
                                                <div class="progress-bar" role="progressbar" style="width: <?= $countOkay; ?>%;" aria-valuenow="<?= $countOkay; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span style="font-size: 20px;">&nbsp;
                                                <?= $countOkay; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top: -45px; margin-left: 170px;">
                                    <a class="btn" onclick="showContentLikeDetail()"><img src="docs/k.btn-score.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="https://www.nacc.go.th/NACCPPWFC?" target="_blank" rel="noopener noreferrer">
                    <img src="docs/raise_the_level_of_will.jpg" width="702px" height="100px">
                </a>
            </div>
        </div>

        <div class="col-5 ">
            <div class="d-flex justify-content-end">
                <div class="fb-page" data-href="https://www.facebook.com/p/%E0%B9%80%E0%B8%9E%E0%B8%88%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%E0%B8%81%E0%B8%B2%E0%B8%9A%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B8%87-%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%AA%E0%B8%B8%E0%B8%A3%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%8C-100068962338320/?paipv=0&amp;eav=AfYCD9ii8z2jYOf-yDTAcU0tSdfuES5OG8jVboIwWvJMOFe4IwBXCqB-v9ir_A8V9-Q&amp;_rdr" data-tabs="timeline" data-width="386" data-height="523" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/p/%E0%B9%80%E0%B8%9E%E0%B8%88%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%E0%B8%81%E0%B8%B2%E0%B8%9A%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B8%87-%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%AA%E0%B8%B8%E0%B8%A3%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%8C-100068962338320/?paipv=0&amp;eav=AfYCD9ii8z2jYOf-yDTAcU0tSdfuES5OG8jVboIwWvJMOFe4IwBXCqB-v9ir_A8V9-Q&amp;_rdr" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/p/%E0%B9%80%E0%B8%9E%E0%B8%88%E0%B9%80%E0%B8%97%E0%B8%A8%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%95%E0%B8%B3%E0%B8%9A%E0%B8%A5%E0%B8%81%E0%B8%B2%E0%B8%9A%E0%B9%80%E0%B8%8A%E0%B8%B4%E0%B8%87-%E0%B8%88%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%AA%E0%B8%B8%E0%B8%A3%E0%B8%B4%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%8C-100068962338320/?paipv=0&amp;eav=AfYCD9ii8z2jYOf-yDTAcU0tSdfuES5OG8jVboIwWvJMOFe4IwBXCqB-v9ir_A8V9-Q&amp;_rdr">เพจเทศบาลตำบลกาบเชิง
                            จังหวัดสุรินทร์</a></blockquote>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-5">
                <div id="carouselExampleAutoplayingITA" class="carousel slide" data-bs-ride="carousel" style="z-index: 10; left: 0; margin-top: -20px;">
                    <div class="carousel-indicators">
                        <?php
                        foreach ($qPublicize_ita as $index => $img_banner) {
                            $active = ($index === 0) ? "active" : "";
                            echo '<button type="button" data-bs-target="#carouselExampleAutoplayingITA" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-current="true" aria-label="Slide ' . ($index + 1) . '"></button>';
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($qPublicize_ita as $index => $img_publicize_ita) { ?>
                            <div class="carousel-item <?= ($index === 0) ? "active" : ""; ?>" data-bs-interval="3000">
                                <a href="<?= $img_publicize_ita->publicize_ita_link; ?>" target="_blank">
                                    <img src="docs\img\<?= $img_publicize_ita->publicize_ita_img; ?>" class="d-block " style="height: 546px; width: 386px;">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplayingITA" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplayingITA" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- <?php foreach ($qPublicize_ita as $index => $rs) { ?>
                    <a href="<?= $rs->publicize_ita_name; ?>" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo base_url('docs/img/' . $rs->publicize_ita_img); ?>" width="320px" height="520px">
                    </a>
                <?php } ?> -->
            </div>
        </div>
    </div>
    <div class="bg-links" style="margin-top: -30px;">
        <div class="text-center">
            <img src="docs/k.head-links.png">
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="https://www2.surin.go.th/frontpage" target="_blank"><img src="docs/k.link-link1v2.png"></a></div>
                <div class="swiper-slide"><a href="https://surinpao.go.th/" target="_blank"><img src="docs/k.link-link2v2.png"></a></div>
                <div class="swiper-slide"><a href="https://surin.moph.go.th/SPHO/" target="_blank"><img src="docs/k.link-link3v2.png"></a></div>
                <div class="swiper-slide"><a href="https://www.cgd.go.th/cs/internet/internet/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%AB%E0%B8%A5%E0%B8%B1%E0%B8%812.html?page_locale=th_TH" target="_blank"><img src="docs/s.link-link4.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/" target="_blank"><img src="docs/s.link-link5.png"></a></div>
                <div class="swiper-slide"><a href="https://www.doe.go.th/" target="_blank"><img src="docs/s.link-link6.png"></a></div>
                <div class="swiper-slide"><a href="https://www.nhso.go.th/" target="_blank"><img src="docs/s.link-link7.png"></a></div>
                <div class="swiper-slide"><a href="https://www2.surin.go.th/damrongdhama/frontpage" target="_blank"><img src="docs/s.link-link8v3.png"></a></div>
                <div class="swiper-slide"><a href="https://www.admincourt.go.th/admincourt/site/09illustration.html" target="_blank"><img src="docs/s.link-link9.png"></a></div>
                <div class="swiper-slide"><a href="https://www.dla.go.th/index.jsp" target="_blank"><img src="docs/s.link-link10.png"></a></div>
                <div class="swiper-slide"><a href="https://info.go.th/" target="_blank"><img src="docs/s.link-link11.png"></a></div>
                <div class="swiper-slide"><a href="https://moi.go.th/moi/about-us/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5%E0%B8%97%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B9%84%E0%B8%9B%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81/%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%94%E0%B9%84%E0%B8%97%E0%B8%A2%E0%B8%8A%E0%B8%A7%E0%B8%99%E0%B8%A3%E0%B8%B9%E0%B9%89/" target="_blank"><img src="docs/s.link-link12.png"></a></div>
                <div class="swiper-slide"><a href="https://odloc.go.th/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B2%E0%B8%A8%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%84%E0%B8%B3%E0%B8%AA%E0%B8%B1%E0%B9%88%E0%B8%87/%E0%B8%A3%E0%B8%A7%E0%B8%A1%E0%B8%81%E0%B8%8F%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%87/%E0%B8%81%E0%B8%8E%E0%B8%AB%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9B%E0%B8%81%E0%B8%84%E0%B8%A3/" target="_blank"><img src="docs/s.link-link13.png"></a></div>
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
    <div class="text-center">
        <iframe style="z-index:10;" class="map-contact-home" width="1280" height="500" frameborder="0" src="https://www.google.com/maps?q=สำนักงานเทศบาลตำบลกาบเชิง&output=embed" allowfullscreen></iframe>
    </div>
</div>
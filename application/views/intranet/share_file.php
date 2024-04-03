<!-- ส่วนทางขวา -->
<div class="flex-item-right-share-file">
    <div class="mt-4" style="width: 50%;">
        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4" style="border-radius: 20px;">
            <!-- Card Header - Dropdown -->
            <div class="py-3 d-flex flex-row align-items-center justify-content-between">
                <h5 class="m-0 font-weight-bold text-black ml-4">พื้นที่ให้บริการ</h5>
                <!-- <a class="open-button btn btn-sky btn-sm mr-3" id="myBtn">
                        Upgrade</a> -->
            </div>
            <!-- Card Body -->
            <div class="card-body" style="margin-top: -45px;">
                <div class="row">
                    <div class="col-12 mb-2">
                        <?php foreach ($storage as $server) : ?>
                            <?php
                            $serverStorage = $server->server_storage;
                            $serverCurrent = $server->server_current;
                            $percentage = ($serverCurrent / $serverStorage) * 100;
                            $color = 'green'; // เริ่มต้นเป็นสีเขียว (1-69%)
                            if ($percentage >= 70 && $percentage <= 89) {
                                $color = 'orange'; // 70-89% ให้เปลี่ยนเป็นสีส้ม
                            } elseif ($percentage >= 90) {
                                $color = 'red'; // 90% ขึ้นไป ให้เปลี่ยนเป็นสีแดง
                            }
                            ?>

                    </div>
                </div>
                <h5 style="margin-top:20px;">
                    <!-- <?php
                            ?>
                        <?php echo number_format($percentage, 2); ?>% -->
                </h5>
                <div class="progress progress-sm mr-6">
                    <div class="progress-bar" role="progressbar" style="background-color: <?php echo $color; ?>; width: <?php echo $percentage; ?>%" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- color: <?php echo $color; ?>; -->
                <div class="mt-3 row">
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-start">
                            <span style="font-size: 13px; color: #888;">Used space: <?php echo number_format($serverCurrent, 2); ?> GB</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-center">
                            <span style="font-size: 13px; color: #888;">Free space: <?php echo number_format($serverStorage - $serverCurrent, 2); ?> GB</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-end">
                            <span style="font-size: 13px; color: #888;">Capacity: <?php echo number_format($serverStorage, 2); ?> GB</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 mt-2">
            <div class="box-folder mb-4">
                <div class="align-items-center">
                    <a href="<?= site_url('Intra_share_file/sf_all'); ?>" class="underline">
                        <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                        <span class="font-folder mx-3">แชร์ภายในองค์กร</span>
                    </a>
                </div>
            </div>
        </div>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 3): ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_executive'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">คณะผู้บริหาร</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 4) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_council'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">สมาชิกสภาเทศบาล</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 5) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_unit_leaders'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">หัวหน้าส่วนราชการ</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 6) : ?>
            <div class="col-sm-4 mt-2">

                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_deputy'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">สำนักปลัดเทศบาล</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 7) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_treasury'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">กองคลัง</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 8) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_maintenance'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">กองช่าง</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 9) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_education'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">กองการศึกษา</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 10) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_p_dsab'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">กองยุทธศาสตร์และงบประมาณ</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 11) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_p_cdc_brkm'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">ศูนย์พัฒนาเด็กเล็กบ้านตาเกาว์ใหม</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 12) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_p_cdc_bpsb'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">ศูนย์พัฒนาเด็กเล็กบ้านปราสาทเบง</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 13) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_p_cdc_bbj'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">ศูนย์พัฒนาเด็กเล็กบ้านบักจรัง</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 14) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_p_cdc_bnry'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">ศูนย์พัฒนาเด็กเล็กบ้านน้อยร่มเย็น</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($_SESSION['m_level'] == 1 || $_SESSION['m_level'] == 2 || $_SESSION['m_level'] == 15) : ?>
            <div class="col-sm-4 mt-2">
                <div class="box-folder mb-4">
                    <div class="align-items-center">
                        <a href="<?= site_url('Intra_share_file/sf_p_cdc_bkc'); ?>" class="underline">
                            <img src="<?php echo base_url("docs/intranet/folder.png"); ?>" width="auto" style="max-width: 100%;">
                            <span class="font-folder mx-3">ศูนย์พัฒนาเด็กเล็กบ้านกาบเชิง</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
      

    </div>
</div>
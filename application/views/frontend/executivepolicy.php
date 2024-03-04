<div class="bg-pages">
    <div class="row pad-path">
        <div class="path1-1">
            <span class="font-path-1 underline"><a href="<?php echo site_url('Home'); ?>">หน้าแรก</a></span>
        </div>
        <div class="path2-2">
            <span class="font-path-2 underline"><a href="#">ข้อมูลสภาพทั่วไป</a></span>
        </div>
    </div>
    <div class="container-pages-news">
        <div class="page-center">
            <div class="head-pages">
                <span class="font-pages-head">นโยบายผู้บริหาร</span>
            </div>
        </div>
        <div style="padding-top: 80px;"></div>
        <div class="bg-pages-in-gi ">
            <div class="scrollable-container-p">
                <?php foreach ($qExecutivepolicy as $rs) { ?>
                    <div class="pages-content break-word">
                        <span class="font-gi-head">เรื่อง <?= $rs->executivepolicy_name; ?></span>
                        <br>
                        <span class="font-pages-content"><?= $rs->executivepolicy_detail; ?></span>
                    </div>
                    <!-- <div class="row">
                        <div class="col-6 mt-3">
                            <div class="d-flex justify-content-start">
                                <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $rs->executivepolicy_download; ?> ครั้ง</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <div class="d-flex justify-content-end">
                                    <a onclick="downloadFile(event)" href="<?= base_url('docs/file/' . $rs->executivepolicy_pdf); ?>" download>
                                        <img src="<?php echo base_url("docs/s.btn-download.png"); ?>">
                                    </a>
                                    <script>
                                        function downloadFile(event) {
                                            // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลด
                                            var xhr = new XMLHttpRequest();
                                            xhr.open('GET', '<?= base_url('Pages/increment_download_executivepolicy'); ?>', true);
                                            xhr.send();

                                            // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                            window.open(event.currentTarget.href, '_blank');
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-text mt-5">
                        <object data="<?= base_url('docs/file/' . $rs->executivepolicy_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
                    </div> -->
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="d-flex justify-content-start">
                        <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rs->executivepolicy_view; ?> ครั้ง</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="margin-top-delete-topic d-flex justify-content-end">
                        <a href="<?php echo site_url('Home'); ?>"><img src="<?php echo base_url("docs/k.btn-back.png"); ?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
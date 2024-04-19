<div class="bg-pages ">
    <div class="row pad-path">
        <div class="path1-1">
            <span class="font-path-1 underline"><a href="<?php echo site_url('Home'); ?>">หน้าแรก</a></span>
        </div>
        <div class="path2-2">
            <span class="font-path-2 underline"><a href="#">ข่าวจัดซื้อจัดจ้าง</a></span>
        </div>
    </div>
    <div class="page-center">
    <div class="head-pages-three">
                <span class="font-pages-head">รายงานผลการดำเนินการ</span>
            </div>
    </div>
    <div class="bg-pages-in ">
        <div class="scrollable-container">
            <div class="font-pages-content-head">เรื่อง <?= $rsData->p_rpo_name; ?></div>
            <div class="pages-content break-word mt-2">
                <span class="font-pages-content-detail"><?= $rsData->p_rpo_detail; ?></span>
                <a class="font-26" href="<?= $rsData->p_rpo_link; ?>" target="_blank"><?= $rsData->p_rpo_link; ?></a>
                <?php if (!empty($rsDoc)) { ?>
                    <span class="font-pages-content-detail">ไฟล์เอกสารเพิ่มเติม</span>
                    <?php foreach ($rsDoc as $doc) { ?>
                        <a class="font-doc" href="<?= base_url('docs/file/' . $doc->p_rpo_file_doc); ?>" target="_blank"><?= $doc->p_rpo_file_doc; ?></a>,&nbsp;
                    <?php } ?>
                <?php } ?>
                <?php foreach ($rsImg as $img) { ?>
                    <img class="border-radius34 mb-4 mt-4" src="<?php echo base_url('docs/img/' . $img->p_rpo_img_img); ?>" width="950px" height="100%">
                <?php } ?>
                <?php foreach ($rsPdf as $file) { ?>
                    <div class="row">
                        <div class="col-6 mt-2">
                            <div class="d-flex justify-content-start">
                                <span class="font-page-detail-view-news">ดาวโหลดแล้ว <?= $file->p_rpo_pdf_download; ?> ครั้ง</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-end">
                                <a onclick="downloadFile(event, <?= $file->p_rpo_pdf_id; ?>)" href="<?= base_url('docs/file/' . $file->p_rpo_pdf_pdf); ?>" download>
                                    <img src="<?php echo base_url("docs/k.btn-download.png"); ?>">
                                </a>
                                <script>
                                    function downloadFile(event, p_rpo_pdf_id) {
                                        // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลดพร้อมกับ ID
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('GET', '<?= base_url('Pages/increment_download_p_rpo/'); ?>' + p_rpo_pdf_id, true);
                                        xhr.send();

                                        // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                        window.open(event.currentTarget.href, '_blank');
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="blog-text mt-3 mb-5">
                        <object data="<?= base_url('docs/file/' . $file->p_rpo_pdf_pdf); ?>" type="application/pdf" width="100%" height="1500px"></object>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="d-flex justify-content-start">
                    <span class="font-page-detail-view-news">จำนวนผู้เข้าชม <?= $rsData->p_rpo_view; ?> ครั้ง</span>
                </div>
            </div>
            <div class="col-6">
                <div class="margin-top-delete-topic d-flex justify-content-end">
                    <a href="<?php echo site_url('Pages/p_rpo'); ?>"><img src="<?php echo base_url("docs/k.btn-back.png"); ?>"></a>
                </div>
            </div>
        </div>
    </div>
</div>
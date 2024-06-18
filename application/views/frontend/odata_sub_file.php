<div class="bg-pages">
    <div class="row pad-path">
        <div class="path1-1">
            <span class="font-path-1 underline"><a href="<?php echo site_url('Home'); ?>">หน้าแรก</a></span>
        </div>
        <div class="path2-3">
            <span class="font-path-2 underline"><a href="#">ฐานข้อมูลเปิดภาครัฐ</a></span>
        </div>
    </div>
    <div class="container-pages-news">
        <div class="page-center">
            <div class="head-pages-three">
                <span class="font-pages-head">ฐานข้อมูลเปิดภาครัฐ (Open Data)</span>
            </div>
        </div>

        <div class="bg-pages-ita">
            <div class="scrollable-container-news">
                <span class="font-ita-head"><b><?= $query->odata_sub_name; ?></b></span>
                <?php foreach ($query_odata_sub_file as $rs) { ?>
                    <div class="bg-ita-empty">
                        <div class="row mb-2 mt-3">
                            <div class="col-1"></div>
                            <div class="col-9 ml-5">
                                <span class="font-ita-head"><?= $rs->odata_sub_file_name; ?></span>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-ita-open" target="_blank" href="<?= $rs->odata_sub_file_doc; ?>">เปิด</a>
                                <script>
                                    function downloadFile(event, odata_sub_file_id) {
                                        // ทำการส่งคำร้องขอ AJAX ไปยัง URL ที่บันทึกการดาวน์โหลดพร้อมกับ ID
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('GET', '<?= base_url('Pages/increment_download_odata_sub_file/'); ?>' + odata_sub_file_id, true);
                                        xhr.send();

                                        // ทำการเปิดไฟล์ PDF ในหน้าต่างใหม่
                                        window.open(event.currentTarget.href, '_blank');
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="margin-top-delete d-flex justify-content-end">
                <a onclick="goBack()"><img src="<?php echo base_url("docs/k.btn-back.png"); ?>"></a>
            </div>
        </div>
    </div>

    <!-- <div id="popup-ita" class="popup-ita">
        <div class="popup-ita-content">
            <h4><b>test</b></h4>
            <div class="row">
                <div class="col-7">
                    <div class="d-flex justify-content-start">
                        <h5><b>ลิงค์</b></h5>
                        <span id="popup-ita-link"></span>
                    </div>
                </div>
                <div class="col-5">
                    <div class="d-flex justify-content-start">
                        <h5><b>คำอธิบาย</b></h5>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-end">
                <button class="btn-close-ita" onclick="closePopupIta()">ปิด</button>
            </div>
        </div>
    </div>

    <script>
        function closePopupIta() {
            document.getElementById("popup-ita").style.display = "none";
        }

        function openPopupIta(ita_year_link_id) {
            document.getElementById("popup-ita").style.display = "block";

            $.ajax({
                url: 'Pages/ita_year_link_list/' + ita_year_link_id,
                type: 'GET',
                success: function(response) {
                    // ดำเนินการต่อไปตามที่คุณต้องการ
                    console.log(response);
                    // เรียกฟังก์ชันสำหรับแสดงข้อมูลใน popup
                    displayPopupData(response);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }


        function displayPopupData(data) {
            // แสดงข้อมูลที่ได้รับมาจาก AJAX ใน console
            console.log(data);

            // ตรวจสอบโครงสร้างข้อมูลและดึงค่าที่ต้องการ
            // ตัวอย่างเช่น
            if (data) {
                document.getElementById("popup-ita-link").innerText = data.ita_year_link_link1;
            } else {
                console.error('Invalid data structure:', data);
            }
        }
    </script> -->
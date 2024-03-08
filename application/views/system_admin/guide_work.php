    <a class="btn add-btn" href="<?= site_url('Guide_work_backend/adding'); ?>" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg> เพิ่มข้อมูล</a>
    <a class="btn btn-light" href="<?= site_url('Guide_work_backend'); ?>" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
        </svg> Refresh Data</a>

    <!-- <h5 class="border border-#f5f5f5 p-2 mb-2 font-black" style="background-color: #f5f5f5;">จัดการข้อมูลข่าวสารประจำเดือน</h5> -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-black">จัดการข้อมูลคู่มือการปฏิบัติงาน</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <?php
                $Index = 1;
                ?>
                <table id="newdataTables" class="table">
                    <thead>
                        <tr>
                            <th style="width: 5%;">ลำดับ</th>
                            <th style="width: 13%;">รูปภาพ</th>
                            <th style="width: 16%;">ชื่อ</th>
                            <th style="width: 32%;">รายละเอียด</th>
                            <th style="width: 12%;">อัพโหลด</th>
                            <th style="width: 7%;">วันที่</th>
                            <th style="width: 5%;">สถานะ</th>
                            <th style="width: 10%;">จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($guide_work as $rs) { ?>
                            <tr role="row">
                                <td align="center"><?= $Index; ?></td>
                                <td>
                                    <?php if (!empty($rs->guide_work_img)) : ?>
                                        <img src="<?php echo base_url('docs/img/' . $rs->guide_work_img); ?>" width="150px" height="100px">
                                    <?php else : ?>
                                        <img src="<?php echo base_url('docs/k.logo.png'); ?>" width="150px" height="100px">
                                    <?php endif; ?>
                                    <br>
                                    <?php foreach ($rs->file as $pdf) : ?>
                                        <a class="btn btn-info btn-sm mt-1" href="<?php echo base_url('docs/file/' . $pdf->guide_work_file_pdf); ?>" target="_blank">ดูไฟล์เดิม!</a>
                                    <?php endforeach; ?>
                                </td>
                                <td class="limited-text"><?= $rs->guide_work_name; ?></td>
                                <td><?= mb_substr($rs->guide_work_detail, 0, 40, 'UTF-8'); ?>...</td>
                                <td><?= $rs->guide_work_by; ?></td>
                                <td><?= date('d/m/Y H:i', strtotime($rs->guide_work_date . '+543 years')) ?> น.</td>
                                <td>
                                    <label class="switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck<?= $rs->guide_work_id; ?>" data-guide_work-id="<?= $rs->guide_work_id; ?>" <?= $rs->guide_work_status === 'show' ? 'checked' : ''; ?> onchange="update_guide_work_status<?= $rs->guide_work_id; ?>()">
                                        <span class="slider"></span>
                                    </label>
                                    <script>
                                        function update_guide_work_status<?= $rs->guide_work_id; ?>() {
                                            const guide_workId = <?= $rs->guide_work_id; ?>;
                                            const guide_worktatus = document.getElementById('flexSwitchCheck<?= $rs->guide_work_id; ?>').checked ? 'show' : 'hide';

                                            // ส่งข้อมูลไปยังเซิร์ฟเวอร์ด้วย AJAX
                                            $.ajax({
                                                type: 'POST',
                                                url: 'Guide_work_backend/update_guide_work_status',
                                                data: {
                                                    guide_work_id: guide_workId,
                                                    new_status: guide_worktatus
                                                },
                                                success: function(response) {
                                                    console.log(response);
                                                    // ทำอื่นๆตามต้องการ เช่น อัพเดตหน้าเว็บ
                                                },
                                                error: function(error) {
                                                    console.error(error);
                                                }
                                            });
                                        }
                                    </script>
                                </td>
                                <td>
                                    <a href="<?= site_url('Guide_work_backend/editing/' . $rs->guide_work_id); ?>"><i class="bi bi-pencil-square fa-lg "></i></a>
                                    <a href="#" role="button" onclick="confirmDelete(<?= $rs->guide_work_id; ?>);"><i class="bi bi-trash fa-lg "></i></a>

                                    <script>
                                        function confirmDelete(guide_work_id) {
                                            Swal.fire({
                                                title: 'กดเพื่อยืนยัน?',
                                                text: "คุณจะไม่สามรถกู้คืนได้อีก!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'ใช่, ต้องการลบ!',
                                                cancelButtonText: 'ยกเลิก' // เปลี่ยนข้อความปุ่ม Cancel เป็นภาษาไทย
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    window.location.href = "<?= site_url('Guide_work_backend/del_guide_work/'); ?>" + guide_work_id;
                                                }
                                            });
                                        }
                                    </script>
                                </td>
                            </tr>
                        <?php
                            $Index++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <!-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">จัดการข้อมูลข่าวสารประจำเดือน</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th tabindex="0" rowspan="1" colspan="1">ลำดับ</th>
                            <th tabindex="0" rowspan="1" colspan="1">รูปภาพ</th>
                            <th tabindex="0" rowspan="1" colspan="1">ชื่อ</th>
                            <th tabindex="0" rowspan="1" colspan="1">รายละเอียด</th>
                            <th tabindex="0" rowspan="1" colspan="1">ผู้อัพโหลด</th>
                            <th tabindex="0" rowspan="1" colspan="1">วันที่อัพโหลด</th>
                            <th tabindex="0" rowspan="1" colspan="1">สถานะ</th>
                            <th tabindex="0" rowspan="1" colspan="1">ความคิดเห็น</th>
                            <th tabindex="0" rowspan="1" colspan="1">แก้ไข</th>
                            <th tabindex="0" rowspan="1" colspan="1">ลบ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query as $index => $rs) { ?>
                            <tr role="row">
                                <td align="center"><?= $index + 1; ?></td>
                                <td>รูปภาพหน้าปก : <img src="<?= base_url('docs/img/' . $rs->guide_work_img); ?>" width="180px" height="140px"> <br>
                                    รูปภาพเพิ่มเติม : <?php foreach (explode(',', $rs->additional_images) as $img) { ?>
                                        <img src="<?= base_url('docs/img/' . $img); ?>" width="100px" height="60px">
                                    <?php } ?>
                                </td>
                                </td>
                                <td><?= $rs->guide_work_name; ?></td>
                                <td><?= mb_substr($rs->guide_work_detail, 0, 200, 'UTF-8'); ?>...</td>
                                <td><?= $rs->guide_work_by; ?></td>
                                <td><?= date('d/m/Y : H:i', strtotime($rs->guide_work_datesave . '+543 years')) ?></td>
                                <td>
                                       <label class="switch">
                                           <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck<?= $rs->guide_work_id; ?>" data-guide_work-id="<?= $rs->guide_work_id; ?>" <?= $rs->guide_work_status === 'show' ? 'checked' : ''; ?>>
                                           <span class="slider round"></span>
                                       </label>
                                       <script>
                                           // เลือก Switch ตามรายการในลูปโดยใช้ข้อมูลที่เกี่ยวข้องกับแต่ละรายการ
                                           const switchCheckbox<?= $rs->guide_work_id; ?> = document.getElementById('flexSwitchCheck<?= $rs->guide_work_id; ?>');

                                           switchCheckbox<?= $rs->guide_work_id; ?>.addEventListener('change', function() {
                                               const guide_workId = this.getAttribute('data-guide_work-id');
                                               const guide_worktatus = this.checked ? 'show' : 'hide';

                                               // ส่งข้อมูลไปยังเซิร์ฟเวอร์ด้วย AJAX
                                               $.ajax({
                                                   type: 'POST',
                                                   url: 'guide_work/updateguide_workStatus', // แทนค่า '/your-controller/' ด้วย URL ของ Controller ที่คุณสร้าง
                                                   data: {
                                                       guide_work_id: guide_workId,
                                                       new_status: guide_worktatus
                                                   },
                                                   success: function(response) {
                                                       console.log(response);
                                                       // ทำอย่างอื่นตามความต้องการ เช่น อัพเดตหน้าเว็บ
                                                   },
                                                   error: function(error) {
                                                       console.error(error);
                                                   }
                                               });
                                           });
                                       </script>
                                   </td>
                                <td><a href="#" class="btn btn-secondary btn-xs">ดูcomment</a></td>
                                <td><a href="<?php echo site_url('guide_work/edit/' . $rs->guide_work_id); ?>" class="btn btn-warning btn-xs">แก้ไข</a></td>
                                <td><a class="btn btn-danger btn-xs" href="<?= site_url('guide_work/del_guide_work/' . $rs->guide_work_id); ?>" role="button" onclick="return confirm('ยืนยันการลบข้อมูล??');">ลบ</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
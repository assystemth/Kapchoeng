 <!-- <a class="btn add-btn" href="<?= site_url('publicize_ita_backend/adding_publicize_ita'); ?>" role="button">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
         <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
         <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
     </svg> เพิ่มข้อมูล</a> -->
 <a class="btn btn-light" href="<?= site_url('publicize_ita_backend'); ?>" role="button">
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
         <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
         <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
     </svg> Refresh Data</a>

 <!-- <h5 class="border border-#f5f5f5 p-2 mb-2 font-black" style="background-color: #f5f5f5;">จัดการข้อมูลข่าวสารประจำเดือน</h5> -->
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-black">จัดการข้อมูลประชาสัมพันธ์ EIT/IIT</h6>
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
                         <th style="width: 28%;">ชื่อ</th>
                         <th style="width: 25%;">ลิงค์</th>
                         <th style="width: 13%;">อัพโหลด</th>
                         <th style="width: 7%;">วันที่</th>
                         <th style="width: 5%;">สถานะ</th>
                         <th style="width: 7%;">จัดการ</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        foreach ($query as $rs) { ?>
                         <tr role="row">
                             <td align="center"><?= $Index; ?></td>
                             <td><img src="<?= base_url('docs/img/' . $rs->publicize_ita_img); ?>" width="120px" height="80px"></td>
                             <td class="limited-text"><?= $rs->publicize_ita_name; ?></td>
                             <td class="limited-text"><?= $rs->publicize_ita_link; ?></td>
                             <td><?= $rs->publicize_ita_by; ?></td>
                             <td><?= date('d/m/Y H:i', strtotime($rs->publicize_ita_datesave . '+543 years')) ?> น.</td>
                             <td>
                                 <label class="switch">
                                     <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheck<?= $rs->publicize_ita_id; ?>" data-publicize_ita-id="<?= $rs->publicize_ita_id; ?>" <?= $rs->publicize_ita_status === 'show' ? 'checked' : ''; ?> onchange="updatepublicize_itaStatus<?= $rs->publicize_ita_id; ?>()">
                                     <span class="slider"></span>
                                 </label>
                                 <script>
                                     function updatepublicize_itaStatus<?= $rs->publicize_ita_id; ?>() {
                                         const publicize_itaId = <?= $rs->publicize_ita_id; ?>;
                                         const newStatus = document.getElementById('flexSwitchCheck<?= $rs->publicize_ita_id; ?>').checked ? 'show' : 'hide';

                                         // ส่งข้อมูลไปยังเซิร์ฟเวอร์ด้วย AJAX
                                         $.ajax({
                                             type: 'POST',
                                             url: 'publicize_ita_backend/updatepublicize_itaStatus',
                                             data: {
                                                 publicize_ita_id: publicize_itaId,
                                                 new_status: newStatus
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
                                 <a href="<?= site_url('publicize_ita_backend/editing_publicize_ita/' . $rs->publicize_ita_id); ?>"><i class="bi bi-pencil-square fa-lg "></i></a>
                                 <a href="#" role="button" onclick="confirmDelete('<?= $rs->publicize_ita_id; ?>');"><i class="bi bi-trash fa-lg "></i></a>
                                 <script>
                                     function confirmDelete(publicize_ita_id) {
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
                                                 window.location.href = "<?= site_url('publicize_ita_backend/del_publicize_ita/'); ?>" + publicize_ita_id;
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
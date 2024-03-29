   <!-- DataTales Example -->
   <div class="card shadow mb-4">
       <div class="card-header py-3">
           <h6 class="m-0 font-weight-bold text-black">จัดการข้อมูลนโยบายชองผู้บริหาร</h6>
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
                           <th style="width: 20%;">เรื่อง</th>
                           <th style="width: 35%;">รายละเอียด</th>
                           <th style="width: 13%;">อัพโหลด</th>
                           <th style="width: 7%;">วันที่</th>
                           <th style="width: 7%;">จัดการ</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php foreach ($query as $rs) { ?>
                           <tr role="row">
                               <td align="center"><?= $Index; ?></td>
                               <td><?= $rs->executivepolicy_name; ?></td>
                               <td><?= $rs->executivepolicy_detail; ?></td>
                               <td><?= $rs->executivepolicy_by; ?></td>
                               <td><?= date('d/m/Y H:i', strtotime($rs->executivepolicy_datesave . '+543 years')) ?> น.</td>
                               <td><a href="<?= site_url('executivepolicy_backend/editing/' . $rs->executivepolicy_id); ?>"><i class="bi bi-pencil-square fa-lg "></i></a></td>
                           </tr>
                       <?php
                            $Index++;
                        } ?>
                   </tbody>
               </table>
           </div>
       </div>
   </div>
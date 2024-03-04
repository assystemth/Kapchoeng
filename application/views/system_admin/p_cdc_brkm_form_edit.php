<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <h4>แก้ไขข้อมูลบุคลากร</h4>
            <form action=" <?php echo site_url('p_cdc_brkm_backend/edit_p_cdc_brkm/' . $rsedit->p_cdc_brkm_id); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ชื่อ</div>
                    <div class="col-sm-5">
                        <input type="text" name="p_cdc_brkm_name" required class="form-control" value="<?= $rsedit->p_cdc_brkm_name; ?>">
                        <span class="fr">กรุณากรอกคำนำหน้า<?= form_error('p_cdc_brkm_name'); ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ตำแหน่ง</div>
                    <div class="col-sm-10">
                        <input type="text" name="p_cdc_brkm_rank" class="form-control" value="<?= $rsedit->p_cdc_brkm_rank; ?>">
                        <span class="fr"><?= form_error('p_cdc_brkm_rank'); ?></span>
                    </div>
                </div>
                <br>
                <!-- <div class="form-group row">
                    <div class="col-sm-2 control-label">ตำแหน่ง</div>
                    <div class="col-sm-10">
                        <?php
                        $position = $rsedit->p_cdc_brkm_rank;
                        $isDisabled = ($position == 'ผู้อำนวยการกองการศึกษาฯ') ? 'readonly' : '';
                        ?>
                        <input type="text" name="p_cdc_brkm_rank" class="form-control" value="<?= $position; ?>" <?= $isDisabled; ?>>
                        <span class="fr"><?= form_error('p_cdc_brkm_rank'); ?></span>
                    </div>
                </div>
                <br> -->
                <div class="form-group row">
                    <div class="col-sm-2 control-label">เบอร์มือถือ</div>
                    <div class="col-sm-4">
                        <input type="text" pattern="\d{9,10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 9 หรือ 10 ตัว" name="p_cdc_brkm_phone" class="form-control" value="<?= $rsedit->p_cdc_brkm_phone; ?>">
                        <span class="fr"><?= form_error('p_cdc_brkm_phone'); ?></span>
                    </div>
                </div>
                <br>
                <?php if ($rsedit->p_cdc_brkm_id != 1) : ?>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">ตำแหน่งในการแสดงผล</div>
                        <div class="col-sm-4">
                            <select class="form-control" id="p_cdc_brkm_column" name="p_cdc_brkm_column">
                                <option value="<?php echo $rsedit->p_cdc_brkm_column; ?>"><?php echo $rsedit->p_cdc_brkm_column; ?></option>
                                <option value="" disabled>เลือกข้อมูล</option>
                                <?php
                                for ($i = 1; $i <= 100; $i++) {
                                    echo "<option value=\"$i\">$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                <?php endif; ?>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ไฟล์รูป</div>
                    <div class="col-sm-6">
                        ภาพเก่า <br>
                        <?php if (!empty($rsedit->p_cdc_brkm_img)) : ?>
                            <img src="<?= base_url('docs/img/' . $rsedit->p_cdc_brkm_img); ?>" width="180px" height="220px">
                        <?php else : ?>
                            <img src="<?= base_url('docs/coverphoto.jpg'); ?>" width="180px" height="220px">
                        <?php endif; ?>
                        <br>
                        เลือกใหม่
                        <br>
                        <input type="file" name="p_cdc_brkm_img" class="form-control" accept="image/*">
                    </div>
                </div>
                <br>
                <div class="col-sm-10">
                    <input type="hidden" name="p_cdc_brkm_id" value="<?= $rsedit->p_cdc_brkm_id; ?>">
                    <span class="fr"><?= form_error('p_cdc_brkm_id'); ?></span>
                    <div class="form-group row">
                        <div class="col-sm-2 control-label"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                            <a class="btn btn-danger" href="<?php echo site_url('p_cdc_brkm_backend'); ?>">ยกเลิก</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
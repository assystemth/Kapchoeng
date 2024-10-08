<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7">
            <h4>แก้ไขโปรไฟล์</h4>
            <form action=" <?php echo site_url('member_backend/edit_Member/' . $rsedit->m_id); ?> " method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group row">
                    <div class="col-sm-2 control-label">โปรไฟล์</div>
                    <div class="col-sm-5">
                        ภาพเก่า <br>
                        <img src="<?= base_url('docs/img/' . $rsedit->m_img); ?>" width="220px" height="180">
                        <br>
                        เลือกใหม่
                        <br>
                        <input type="file" name="m_img" class="form-control" accept="image/*">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">username</div>
                    <div class="col-sm-5">
                        <input type="text" name="m_username" class="form-control" value="<?php echo $rsedit->m_username; ?>">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">Password</div>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <input type="password" id="m_password" name="current_password" class="form-control" placeholder="****************">
                            <button type="button" class="btn btn-outline-secondary" onclick="swapPasswordType('m_password')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">Confirm Password</div>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <input type="password" id="confirm_password" name="current_password2" class="form-control" placeholder="****************">
                            <button type="button" class="btn btn-outline-secondary" onclick="swapPasswordTypeConfirm('confirm_password')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">ชื่อตำแหน่งงาน</div>
                    <div class="col-sm-4">
                        <select class="form-control" name="ref_pid" required>
                            <option value="<?php echo $rsedit->ref_pid; ?>"><?php echo $rsedit->pname; ?></option>
                        </select>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <div class="col-sm-2 control-label">ชื่อ</div>
                    <div class="col-sm-5">
                        <input type="text" name="m_fname" class="form-control" required value="<?php echo $rsedit->m_fname; ?>">
                        <span class="red">กรุณากรอกคำนำหน้าชื่อ</span>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-2 control-label">นามสกุล</div>
                    <div class="col-sm-5">
                        <input type="text" name="m_lname" class="form-control" required value="<?php echo $rsedit->m_lname; ?>">

                        <input type="hidden" name="m_id" class="form-control" required value="<?php echo $rsedit->m_id; ?>">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <div class="col-sm-2 control-label">E-mail</div>
                    <div class="col-sm-5">
                        <input type="email" name="m_email" class="form-control" required value="<?php echo $rsedit->m_email; ?>">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <div class="col-sm-2 control-label">เบอร์มือถือ</div>
                    <div class="col-sm-4">
                        <input type="text" name="m_phone" class="form-control" pattern="\d{10}" title="กรุณากรอกเบอร์มือถือเป็นตัวเลข 10 ตัว" value="<?php echo $rsedit->m_phone; ?>">
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <div class="col-sm-2 control-label"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                        <a class="btn btn-danger" href="<?php echo site_url('member_backend/index'); ?>">ยกเลิก</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
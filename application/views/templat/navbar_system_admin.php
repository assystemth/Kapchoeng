        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->

                <div class="sidebar-brand-icon ">
                    <img src="<?= base_url('docs/k.logo.png'); ?>" alt="" width="64px" height="64px">
                </div>

                <div class="sidebar-brand-text mx-3">กาบเชิง</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('System_admin'); ?>">
                    <img src="<?= base_url('docs/btn-bend1.png'); ?>">
                    <span>หน้าหลัก</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Member_backend'); ?>">
                    <img src="<?= base_url('docs/btn-bend2.png'); ?>">
                    <span>จัดการสมาชิก</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapseTwo')">
                    <img src="<?= base_url('docs/btn-bend3.png'); ?>">
                    <span>จัดการข้อมูล</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('hotNews_backend'); ?>">ข่าวด่วน</a>
                        <a class="collapse-item" href="<?php echo site_url('banner_backend'); ?>">แบนเนอร์</a>
                        <a class="collapse-item" href="<?php echo site_url('news_backend'); ?>">ข้อมูลข่าวประชาสัมพันธ์</a>
                        <a class="collapse-item" href="<?php echo site_url('procurement_backend'); ?>">ข่าวจัดซื้อจัดจ้าง</a>
                        <a class="collapse-item" href="<?php echo site_url('Newsletter_backend'); ?>">จดหมายข่าว</a>
                        <a class="collapse-item" href="<?php echo site_url('Publicize_ita_backend'); ?>">ประชาสัมพันธ์ EIT/IIT</a>
                        <!-- <a class="collapse-item" href="<?php echo site_url('Form_esv_backend'); ?>">แบบฟอร์ม E-service</a> -->
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapseOne')">
                    <img src="<?= base_url('docs/btn-bend4.png'); ?>">
                    <span>ข้อมูลทั่วไป</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('History_backend'); ?>">ประวัติความเป็นมา</a>
                        <a class="collapse-item" href="<?php echo site_url('Gci_backend'); ?>">ข้อมูลสภาพทั่วไป</a>
                        <a class="collapse-item" href="<?php echo site_url('Vision_backend'); ?>">วิสัยทัศน์และพันธกิจ</a>
                        <a class="collapse-item" href="<?php echo site_url('Video_backend'); ?>">วิดีทัศน์</a>
                        <a class="collapse-item" href="<?php echo site_url('Authority_backend'); ?>">ข้อมูลอำนาจหน้าที่</a>
                        <a class="collapse-item" href="<?php echo site_url('Mission_backend'); ?>">ภารกิจและความรับผิดชอบ</a>
                        <a class="collapse-item" href="<?php echo site_url('Executivepolicy_backend'); ?>">นโยบายผู้บริหาร</a>
                        <a class="collapse-item" href="<?php echo site_url('Otop_backend'); ?>">ผลิตภัณฑ์ชุมชน (OTOP)</a>
                        <a class="collapse-item" href="<?php echo site_url('Activity_backend'); ?>">ภาพกิจกรรม</a>
                        <a class="collapse-item" href="<?php echo site_url('Award_backend'); ?>">รางวัลแห่งความภาคภูมิใจ</a>
                        <a class="collapse-item" href="<?php echo site_url('Ci_backend'); ?>">ข้อมูลชุมชน</a>
                        <a class="collapse-item" href="<?php echo site_url('travel_backend'); ?>">สถานที่ท่องเที่ยว</a>
                        <a class="collapse-item" href="<?php echo site_url('Si_backend'); ?>">ยุทธศาสตร์การพัฒนา<br>และแนวทางการพัฒนา</a>
                        <a class="collapse-item" href="<?php echo site_url('Msg_pres_backend'); ?>">สารจากนายก</a>
                        <a class="collapse-item" href="<?php echo site_url('Msg_prem_backend'); ?>">สารจากปลัด</a>
                        <a class="collapse-item" href="<?php echo site_url('Emblem_backend'); ?>">ตราสัญลักษณ์</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapsethree')">
                    <img src="<?= base_url('docs/btn-bend5.png'); ?>">
                    <span>โครงสร้างบุคลากร</span>
                </a>
                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('Site_map_backend'); ?>">แผนผังโครงสร้างภาพรวม</a>
                        <a class="collapse-item" href="<?php echo site_url('P_executives_backend'); ?>">คณะผู้บริหาร</a>
                        <a class="collapse-item" href="<?php echo site_url('P_council_backend'); ?>">สมาชิกสภาเทศบาล</a>
                        <a class="collapse-item" href="<?php echo site_url('P_unit_leaders_backend'); ?>">หัวหน้าส่วนราชการ</a>
                        <a class="collapse-item" href="<?php echo site_url('P_deputy_backend'); ?>">สำนักปลัดเทศบาล</a>
                        <a class="collapse-item" href="<?php echo site_url('P_treasury_backend'); ?>">กองคลัง</a>
                        <a class="collapse-item" href="<?php echo site_url('P_maintenance_backend'); ?>">กองช่าง</a>
                        <a class="collapse-item" href="<?php echo site_url('P_education_backend'); ?>">กองการศึกษา</a>
                        <!-- <a class="collapse-item" href="<?php echo site_url('P_audit_backend'); ?>">หน่วยตรวจสอบภายใน</a> -->
                        <a class="collapse-item" href="<?php echo site_url('P_dsab_backend'); ?>">กองยุทธศาสตร์<br>และงบประมาณ</a>
                        <a class="collapse-item" href="<?php echo site_url('P_cdc_brkm_backend'); ?>">ศูนย์พัฒนาเด็กเล็ก<br>บ้านตาเกาว์ใหม</a>
                        <a class="collapse-item" href="<?php echo site_url('P_cdc_bpsb_backend'); ?>">ศูนย์พัฒนาเด็กเล็ก<br>บ้านปราสาทเบง</a>
                        <a class="collapse-item" href="<?php echo site_url('P_cdc_bbj_backend'); ?>">ศูนย์พัฒนาเด็กเล็ก<br>บ้านบักจรัง</a>
                        <a class="collapse-item" href="<?php echo site_url('P_cdc_bnry_backend'); ?>">ศูนย์พัฒนาเด็กเล็ก<br>บ้านน้อยร่มเย็น</a>
                        <a class="collapse-item" href="<?php echo site_url('P_cdc_bkc_backend'); ?>">ศูนย์พัฒนาเด็กเล็ก<br>บ้านกาบเชิง</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapsefour')">
                    <img src="<?= base_url('docs/btn-bend6.png'); ?>">
                    <span>แผนงาน</span>
                </a>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('Plan_pdl_backend'); ?>">แผนพัฒนาท้องถิ่น</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_pc3y_backend'); ?>">แผนอัตรากำลัง 3 ปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_pds3y_backend'); ?>">แผนพัฒนาบุคลากร 3 ปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_pdpa_backend'); ?>">แผนพัฒนาบุคลากรประจำปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_dpy_backend'); ?>">แผนการบริหารและพัฒนา<br>ทรัพยากรบุคคลประจำปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_poa_backend'); ?>">แผนการดำเนินงานประจำปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_pcra_backend'); ?>">แผนเก็บรายได้ประจำปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_pop_backend'); ?>">แผนปฏิบัติการจัดซื้อจัดจ้าง</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_paca_backend'); ?>">แผนปฏิบัติการป้องกัน<br>การทุจริต</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_psi_backend'); ?>">แผนแม่บทสารสนเทศ</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_pmda_backend'); ?>">แผนป้องกันและบรรเทา<br>สาธารณภัยประจำปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Plan_pbawa_backend'); ?>">แผนและควาวก้าวหน้าใน<br>การดำเนินงานและการใช้<br>จ่ายงบประมาณประจำปี</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapsefive')">
                    <img src="<?= base_url('docs/btn-bend7.png'); ?>">
                    <span>ข้อมูลเทศบัญญัติ</span>
                </a>
                <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('Canon_bgps_backend'); ?>">เทศบัญญัติงบประมาณ</a>
                        <a class="collapse-item" href="<?php echo site_url('Canon_chh_backend'); ?>">เทศบัญญัติการควบคุมกิจการ<br>ที่เป็นอันตรายต่อสุขภาพ</a>
                        <a class="collapse-item" href="<?php echo site_url('Canon_ritw_backend'); ?>">เทศบัญญัติการติดตั้ง<br>ระบบบำบัดน้ำเสียในอาคาร</a>
                        <a class="collapse-item" href="<?php echo site_url('Canon_market_backend'); ?>">เทศบัญญัติตลาด</a>
                        <a class="collapse-item" href="<?php echo site_url('Canon_rmwp_backend'); ?>">เทศบัญญัติการจัดการ<br>สิ่งปฏิกูลและมูลฝอย</a>
                        <a class="collapse-item" href="<?php echo site_url('Canon_rcsp_backend'); ?>">เทศบัญญัติหลักเกณฑ์การ<br>คัดขยะมูลฝอย</a>
                        <a class="collapse-item" href="<?php echo site_url('Canon_rcp_backend'); ?>">เทศบัญญัติการควบคุมการ<br>เลี้ยงหรือปล่อยสุนัขและแมว</a>
                        <a class="collapse-item" href="<?php echo site_url('Canon_tambol_backend'); ?>">เทศบัญญัติตำบล</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapsesix')">
                    <img src="<?= base_url('docs/btn-bend8.png'); ?>">
                    <span>บริการประชาชน</span>
                </a>
                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_cac_backend'); ?>">ศูนย์ช่วยเหลือประชาชน</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_cig_backend'); ?>">ศูนย์ข้อมูลข่าวสารทางราชการ</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_cjc_backend'); ?>">ศูนย์ยุติธรรมชุมชน</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_ahs_backend'); ?>">หลักประกันสุขภาพเทศบาล</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_ae_backend'); ?>">เบี้ยผู้สูงอายุ</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_e_book_backend'); ?>">ดาวโหลดแบบฟอร์ม E-book</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_tax_backend'); ?>">ข้อมูลชำระภาษี</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_oppr_backend'); ?>">งานอาสาป้องกันภัย<br>ฝ่ายพลเรือน(อปพร.)</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_ems_backend'); ?>">งานกู้ชีพ/บริการ<br>การแพทย์ฉุกเฉิน(EMS)</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_sags_backend'); ?>">คู่มือและ<br>มาตราฐานการให้บริการ</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_gup_backend'); ?>">คู่มือสำหรับประชาชน</a>
                        <a class="collapse-item" href="<?php echo site_url('Pbsv_dss_backend'); ?>">ข้อมูลเชิงสถิติการให้บริการ</a>
                        <a class="collapse-item" href="<?php echo site_url('Odata_backend'); ?>">ฐานข้อมูลเปิดภาครัฐ<br>(Open Data)</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapseseven')">
                    <img src="<?= base_url('docs/btn-bend9.png'); ?>">
                    <span>การดำเนินงาน</span>
                </a>
                <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('Operation_reauf_backend'); ?>">รายงานติดตาม<br>และประเมินผลแผน</a>
                        <a class="collapse-item" href="<?php echo site_url('P_rpobuy_backend'); ?>">รายงานผลการดำเนินงาน<br>การจัดซื้อจัดจ้าง</a>
                        <a class="collapse-item" href="<?php echo site_url('P_sopopip_backend'); ?>">ความก้าวหน้าการจัดซื้อจัดจ้าง<br>หรือการจัดหาพัสดุ</a>
                        <a class="collapse-item" href="<?php echo site_url('P_sopopaortsr_backend'); ?>">รายงานสรุปผล<br>การจัดซื้อจัดจ้างหรือ<br>การจัดหาพัสดุประจำปี</a>
                        <a class="collapse-item" href="<?php echo site_url('P_rpo_backend'); ?>">รายงานผลการดำเนินงาน</a>
                        <a class="collapse-item" href="<?php echo site_url('P_reb_backend'); ?>">รายงานใช้จ่ายงบประมาณ</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_sap_backend'); ?>">การปฏิบัติงาน<br>และการให้บริการ</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_pm_backend'); ?>">การมีส่วนร่วมของผู้บริหาร</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_policy_hr_backend'); ?>">นโยบายบริหาร<br>ทรัพยากรบุคคล</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_am_hr_backend'); ?>">การดำเนินการบริหาร<br>ทรัพยากรบุคคล</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_rdam_hr_backend'); ?>">รายงานผลการบริหาร<br>และพัฒนาทรัพยากรบุคคล</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_cdm_backend'); ?>">หลักเกณฑ์การบริหาร<br>และพัฒนา</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_po_backend'); ?>">การเปิดโอกาสให้มีส่วนร่วม</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_eco_backend'); ?>">การเสริมสร้าง<br>วัฒนธรรมองค์กร</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_pgn_backend'); ?>">นโยบายไม่รับของขวัญ<br>no gift policy</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_pgn_backend'); ?>">การประเมินผลและ<br>รายงานผลนโยบาย <br>No Gift Policy <br>รอบ 6 เดือน รอบ12 </a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_mcc_backend'); ?>">การจัดการเรื่องร้องเรียน<br>การทุจริต</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_aca_backend'); ?>">การปฏิบัติการป้องกัน<br>การทุจริต</a>
                        <a class="collapse-item" href="<?php echo site_url('Lpa_backend'); ?>">LPA การประเมินประสิทธิภาพ<br>ขององค์กร</a>
                        <a class="collapse-item" href="<?php echo site_url('Ita_backend'); ?>">ITA การประเมินคุณธรรม<br>ของหน่วยงานภาครัฐ</a>
                        <a class="collapse-item" href="<?php echo site_url('Ita_year_backend'); ?>">ITA ประจำปี</a>
                        <a class="collapse-item" href="<?php echo site_url('Ita_point_backend'); ?>">คะแนนผลการประเมินคุณธรรม<br>และความโปร่งใส (ITA)</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_aa_backend'); ?>">กิจการสภา</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_aditn_backend'); ?>">ตรวจสอบภายใน</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_eg_backend'); ?>">ประมวลจริยธรรมสำหรับ<br>เจ้าหน้าที่ของรัฐ</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_ameg_backend'); ?>">การประเมินจริยธรรม<br>เจ้าหน้าที่ของรัฐ</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_rcaa_backend'); ?>">รายงานผลการดําเนินการ<br>ป้องกันการทุจริตประจําปี</a>
                        <!-- <a class="collapse-item" href="<?php echo site_url('Operation_rpa_backend'); ?>">รายงานผลการดำเนินงาน<br>ประจำปี</a> -->
                        <a class="collapse-item" href="<?php echo site_url('Operation_caar_backend'); ?>">การประเมินความเสี่ยง<br>เพื่อป้องกันการทุจริต</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_mccs_backend'); ?>">ข้อมูลสถิติเรื่องร้องเรียน<br>การทุจริตและประพฤติมิชอบ</a>
                        <a class="collapse-item" href="<?php echo site_url('Operation_rsas_backend'); ?>">รายงานผลการประเมินตนตาม<br>การดำเนินงานและการให้บริการ</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapseeleven')">
                    <img src="<?= base_url('docs/btn-bend14.png'); ?>">
                    <span>มาตรการภายใน</span>
                </a>
                <div id="collapseeleven" class="collapse" aria-labelledby="headingeleven" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('Announce_backend'); ?>">ประกาศเทศบาล</a>
                        <a class="collapse-item" href="<?php echo site_url('Order_backend'); ?>">คำสั่งเทศบาล</a>
                        <a class="collapse-item" href="<?php echo site_url('Mui_backend'); ?>">มาตราการภายในหน่วยงาน</a>
                        <a class="collapse-item" href="<?php echo site_url('Guide_work_backend'); ?>">คู่มือการปฏิบัติงาน</a>
                        <a class="collapse-item" href="<?php echo site_url('Km_backend'); ?>">การจัดการความรู้ท้องถิ่น KM</a>
                        <a class="collapse-item" href="<?php echo site_url('Loadform_backend'); ?>">ดาวน์โหลดแบบฟอร์ม</a>
                        <a class="collapse-item" href="<?php echo site_url('Pppw_backend'); ?>">พรบ./พรก ที่ใช้การปฏิบัติงาน</a>
                        <a class="collapse-item" href="<?php echo site_url('Laws_backend'); ?>">กฏหมายที่เกี่ยวข้อง</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapseeight')">
                    <img src="<?= base_url('docs/btn-bend10v2.png'); ?>">
                    <span>E-service</span>
                </a>
                <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('Complain_backend'); ?>">ร้องเรียน/ร้องทุกข์</a>
                        <a class="collapse-item" href="<?php echo site_url('Corruption_backend'); ?>">แจ้งเรื่องทุจริต<br>หน่วยงานภาครัฐ</a>
                        <a class="collapse-item" href="<?php echo site_url('Suggestions_backend'); ?>">รับฟังความคิดเห็น<br>และข้อเสนอแนะ</a>
                        <a class="collapse-item" href="<?php echo site_url('Esv_ods_backend'); ?>">ยื่นเรื่องออนไลน์</a>
                        <a class="collapse-item" href="<?php echo site_url('Q_a_backend'); ?>">กระทู้ถาม-ตอบ</a>
                        <a class="collapse-item" href="<?php echo site_url('Questions_backend'); ?>">คำถามที่พบบ่อย</a>
                    </div>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapseten')">
                    <img src="<?= base_url('docs/btn-bend13.png'); ?>">
                    <span>กฏหมาย</span>
                </a>
                <div id="collapseten" class="collapse" aria-labelledby="headingnine" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('Laws_ral_backend'); ?>">กฏหมายและระเบียบที่เกี่ยวข้อง</a>
                        <a class="collapse-item" href="<?php echo site_url('Laws_rl_folder_backend'); ?>">กฏหมายที่เกี่ยวข้อง<br>แบบโฟลเดอร์</a>
                        <a class="collapse-item" href="<?php echo site_url('Laws_rl_file_backend'); ?>">กฏหมายที่เกี่ยวข้อง<br>แบบไฟล์</a>
                        <a class="collapse-item" href="<?php echo site_url('Laws_rm_backend'); ?>">กฏกระทรวง</a>
                        <a class="collapse-item" href="<?php echo site_url('Laws_act_backend'); ?>">พระราชบัญญัติ</a>
                        <a class="collapse-item" href="<?php echo site_url('Laws_ec_backend'); ?>">กฎหมายที่ประเมินกรณี<br> รมว.มท.รักษาการร่วม</a>
                        <a class="collapse-item" href="<?php echo site_url('Laws_la_backend'); ?>">กฏหมายเพิ่มเติม</a>

                    </div>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Laws_backend'); ?>">
                    <img src="<?= base_url('docs/btn-bend13.png'); ?>">
                    <span>กฏหมาย</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" data-toggle="collapse" aria-expanded="true" href="javascript:void(0);" onclick="toggleCollapse('collapsenine')">
                    <img src="<?= base_url('docs/btn-bend11.png'); ?>">
                    <span>รายงาน</span>
                </a>
                <div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('report_backend'); ?>">รายงานภาพรวม</a>
                        <a class="collapse-item" href="<?php echo site_url('report/report_user_backend'); ?>">แยกตามผู้ใช้งาน</a>
                        <a class="collapse-item" href="<?php echo site_url('report/report_date_backend'); ?>">แยกตามวัน/เดือน/ปี</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group search-box">
                            <input id="searchInput" type="text" class="form-control bg-light border-0 small"
                                placeholder="ค้นหาข้อมูล" aria-label="Search" aria-describedby="basic-addon2"
                                oninput="search()">
                            <div class="input-group-append">
                                <button class="btn btn-custom" type="button">
                                    <i class="fas fa-search fa-sm white"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                            <!-- Counter - Alerts แจ้งเตือน -->
                            <!-- <span class="badge badge-danger badge-counter">3+</span>
                            </a> -->
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i> -->
                        <!-- Counter - Messages -->
                        <!-- <span class="badge badge-danger badge-counter">7</span>
                            </a> -->
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                        problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how
                                        would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with
                                        the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                        told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('m_fname'); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url('docs/img/') . $this->session->userdata('m_img'); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('system_admin/profile'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo site_url('user/logout'); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div id="searchResults"></div>
                    <ul id="menuList" style="display: none;">
                        <a href="<?php echo site_url('Member_backend'); ?>" class="link">

                            <li class="hide">
                                <span>จัดการสมาชิก</span>
                            </li>
                        </a>

                        <!-- จัดการข้อมูล -->
                        <a href="<?php echo site_url('hotNews_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข่าวด่วน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Banner_backend'); ?>" class="link">

                            <li class="hide">
                                <span>แบนเนอร์</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('News_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข่าวประชาสัมพันธ์</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Procurement_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข่าวจัดซื้อจัดจ้าง</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Newsletter_backend'); ?>" class="link">

                            <li class="hide">
                                <span>จดหมายข่าว</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Publicize_ita_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ประชาสัมพันธ์ EIT/IIT</span>
                            </li>
                        </a>

                        <!-- ข้อมูลทั่วไป -->
                        <a href="<?php echo site_url('History_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ประวัติความเป็นมา</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Gci_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลสภาพทั่วไป</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Ci_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลชุมชน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Video_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลวิดีทัศน์</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Vision_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลวิสัยทัศน์และพันธกิจ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Activity_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ภาพกิจกรรม</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Authority_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลอำนาจหน้าที่</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Mission_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ภารกิจและความรับผิดชอบ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Executivepolicy_backend'); ?>" class="link">

                            <li class="hide">
                                <span>นโยบายของผู้บริหาร</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Award_backend'); ?>" class="link">

                            <li class="hide">
                                <span>รางวัลแห่งความภาคภูมิใจ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Travel_backend'); ?>" class="link">

                            <li class="hide">
                                <span>สถานที่ท่องเที่ยว</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Otop_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ผลิตภัณฑ์ชุมชน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Si_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลยุทธศาสตร์</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Msg_pres_backend'); ?>" class="link">

                            <li class="hide">
                                <span>สารจากนายก</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Msg_prem_backend'); ?>" class="link">

                            <li class="hide">
                                <span>สารจากปลัด</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Emblem_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ตราสัญลักษณ์</span>
                            </li>
                        </a>

                        <!-- โครงสร้างบุคลากร -->
                        <a href="<?php echo site_url('Site_map_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลโครงสร้างภาพรวม</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_executives_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลคณะผู้บริหาร</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_council_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลสมาชิกสภาเทศบาล</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_unit_leaders_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลหัวหน้าส่วนราชการ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_deputy_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลสำนักปลัดเทศ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_treasury_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลกองคลัง</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_maintenance_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลกองช่าง</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_education_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลกองการศึกษา</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('P_dsab_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลกองยุทธศาสตร์และงบประมาณ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_cdc_brkm_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลศูนย์พัฒนาเด็กเล็กบ้านตาเกาว์ใหม่</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_cdc_bpsb_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลศูนย์พัฒนาเด็กเล็กบ้านปราสาทเบง</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_cdc_bbj_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลศูนย์พัฒนาเด็กเล็กบ้านบักจรัง</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_cdc_bnry_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลศูนย์พัฒนาเด็กเล็กบ้านน้อยร่มเย็น</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_cdc_bkc_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลศูนย์พัฒนาเด็กเล็กบ้านกาบเชิง</span>
                            </li>
                        </a>

                        <!-- แผนงาน -->
                        <a href="<?php echo site_url('Plan_pdl_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนพัฒนาท้องถิ่น</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_pc3y_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนอัตรากำลัง 3 ปี</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_pds3y_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนพัฒนาบุคลากร 3 ปี</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_pdpa_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนพัฒนาบุคลากรประจำปี</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_dpy_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนการบริหารและพัฒนาทรัพยากรบุคคลประจำปี</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_poa_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนการดำเนินงานประจำปี</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_pcra_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนการจัดเก็บรายได้ประจำปี</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_pop_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนปฏิบัติการจัดซื้อจัดจ้าง</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_paca_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนปฏิบัติการป้องกันการทุจริต</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_psi_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนแม่บทสารสนเทศ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Plan_pmda_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลแผนป้องกันและบรรเทาสาธารณภัยประจำปี</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Plan_pbawa_backend'); ?>" class="link">

                            <li class="hide">
                                <span>แผนและควาวก้าวหน้าในการดำเนินงานและการใช้จ่ายงบประมาณประจำปี</span>
                            </li>
                        </a>

                        <!-- ข้อมูลเทศบัญญัติ -->
                        <a href="<?php echo site_url('Canon_bgps_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติงบประมาณ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Canon_chh_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติการควบคุมกิจการที่เป็นอันตรายต่อสุขภาพ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Canon_ritw_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติการติดตั้งระบบบำบัดน้ำเสียในอาคาร</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Canon_market_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติตลาด</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Canon_rmwp_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติการจัดการสิ่งปฏิกูลและมูลฝอย</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Canon_rcsp_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติหลักเกณฑ์การคัดขยะมูลฝอย</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Canon_rcp_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติการควบคุมการเลี้ยงหรือปล่อยสุนัขและแมว</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Canon_tambol_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เทศบัญญัติตำบล</span>
                            </li>
                        </a>

                        <!-- บริการประชาชน -->
                        <a href="<?php echo site_url('Pbsv_cac_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ศูนย์ช่วยเหลือประชาชน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Pbsv_cig_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ศูนย์ข้อมูลข่าวสารทางราชการ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Pbsv_cjc_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ศูนย์ยุติธรรมชุมชน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Pbsv_ahs_backend'); ?>" class="link">

                            <li class="hide">
                                <span>หลักประกันสุขภาพเทศบาล</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Pbsv_ae_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เบี้ยผู้สูงอายุ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Pbsv_oppr_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลงานอาสาสมัครป้องกันภัยฝ่ายพลเรือน (อปพร.)</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Pbsv_ems_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลงานกู้ชีพ / การบริการการแพทย์ฉุกเฉิน(EMS)</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Pbsv_sags_backend'); ?>" class="link">

                            <li class="hide">
                                <span>คู่มือและมาตราฐานการให้บริการ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Pbsv_tax_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ข้อมูลการชำระภาษี</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Pbsv_gup_backend'); ?>" class="link">

                            <li class="hide">
                                <span>คู่มือสำหรับประชาชน</span>
                            </li>
                        </a>
                        <li class="hide">
                            <a href="<?php echo site_url('Pbsv_e_book_backend'); ?>" class="link">
                                <span>ดาวโหลดแบบฟอร์ม E-book</span>
                            </a>
                        </li>
                        <li class="hide">
                            <a href="<?php echo site_url('Pbsv_dss_backend'); ?>" class="link">
                                <span>ข้อมูลเชิงสถิติการให้บริการ</span>
                            </a>
                        </li>
                        <li class="hide">
                            <a href="<?php echo site_url('Odata_backend'); ?>" class="link">
                                <span>ฐานข้อมูลเปิดภาครัฐ (Open Data)</span>
                            </a>
                        </li>
                        <!-- การดำเนินงาน -->
                        <a href="<?php echo site_url('Operation_reauf_backend'); ?>" class="link">

                            <li class="hide">
                                <span>รายงานติดตามและประเมินผลแผน</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_rpobuy_backend'); ?>" class="link">

                            <li class="hide">
                                <span>รายงานผลการดำเนินงานการจัดซื้อจัดจ้าง</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_sopopip_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ความก้าวหน้าการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</span>
                            </li>
                        </a>
                        <!-- <a href="<?php echo site_url('Operation_rpa_backend'); ?>" class="link">

                    <li class="hide">
                        <span>xxxxxxx</span>
                    </li>
                </a> -->
                        <a href="<?php echo site_url('P_rpo_backend'); ?>" class="link">

                            <li class="hide">
                                <span>รายงานผลการดำเนินงาน</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_reb_backend'); ?>" class="link">

                            <li class="hide">
                                <span>รายงานใช้จ่ายงบประมาณ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_sap_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การปฏิบัติงานและการให้บริการ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_pm_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การมีส่วนร่วมของผู้บริหาร</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_policy_hr_backend'); ?>" class="link">

                            <li class="hide">
                                <span>นโยบายบริหารทรัพยากรบุคคล</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_am_hr_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การดำเนินการบริหารทรัพยากรบุคคล</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_rdam_hr_backend'); ?>" class="link">

                            <li class="hide">
                                <span>รายงานผลการบริหารและพัฒนาทรัพยากรบุคคล</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_cdm_backend'); ?>" class="link">

                            <li class="hide">
                                <span>หลักเกณฑ์การบริหารและพัฒนา</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_po_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การเปิดโอกาสให้มีส่วนร่วม</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_eco_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การเสริมสร้างวัฒนธรรมองค์กร</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_pgn_backend'); ?>" class="link">

                            <li class="hide">
                                <span>นโยบายไม่รับของขวัญ no gift policy</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_pgnm_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การประเมินผลและรายงานผลนโยบาย No Gift Policy รอบ 6 เดือน รอบ12 เดือน</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_mcc_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การมีส่วนร่วมของผู้บริหาร</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_aca_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การปฏิบัติการป้องกันการทุจริต</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Lpa_backend'); ?>" class="link">

                            <li class="hide">
                                <span>LPA การประเมินประสิทธิภาพขององค์กร</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Ita_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ITA การประเมินคุณธรรมของหน่วยงานภาครัฐ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Ita_year_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ITA ประจำปี</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Ita_point_backend'); ?>" class="link">

                            <li class="hide">
                                <span>คะแนนผลการประเมินคุณธรรมและความโปร่งใส (ITA)</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_aa_backend'); ?>" class="link">
                            <li class="hide">
                                <span>กิจการสภา</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_aditn_backend'); ?>" class="link">
                            <li class="hide">
                                <span>ตรวจสอบภายใน</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_eg_backend'); ?>" class="link">
                            <li class="hide">
                                <span>ประมวลจริยธรรมสำหรับเจ้าหน้าที่ของรัฐ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_ameg_backend'); ?>" class="link">
                            <li class="hide">
                                <span>การประเมินจริยธรรมเจ้าหน้าที่ของรัฐ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_sopopip_backend'); ?>" class="link">
                            <li class="hide">
                                <span>ความก้าวหน้าการจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('P_sopopaortsr_backend'); ?>" class="link">
                            <li class="hide">
                                <span>รายงานสรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_rcaa_backend'); ?>" class="link">
                            <li class="hide">
                                <span>รายงานผลการดําเนินการป้องกันการทุจริตประจําปี</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_caar_backend'); ?>" class="link">
                            <li class="hide">
                                <span>การประเมินความเสี่ยงเพื่อป้องกันการทุจริต</span>
                            </li>
                        </a>
                        <a href="<?php echo site_url('Operation_mccs_backend'); ?>" class="link">
                            <li class="hide">
                                <span>ข้อมูลสถิติเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</span>
                            </li>
                        </a>
                        <!-- มาตราการภายใน -->
                        <a href="<?php echo site_url('Order_backend'); ?>" class="link">

                            <li class="hide">
                                <span>คำสั่งเทศบาล</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Announce_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ประกาศเทศบาล</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Mui_backend'); ?>" class="link">

                            <li class="hide">
                                <span>มาตรการภายในหน่วยงาน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Guide_work_backend'); ?>" class="link">

                            <li class="hide">
                                <span>คู่มือและมาตราฐานการปฏิบัติงาน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Loadform_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ดาวน์โหลดแบบฟอร์ม</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Km_backend'); ?>" class="link">

                            <li class="hide">
                                <span>การจัดการความรู้ท้องถิ่น KM</span>
                            </li>
                        </a>

                        <!-- E-service -->
                        <a href="<?php echo site_url('Complain_backend'); ?>" class="link">

                            <li class="hide">
                                <span>เรื่องร้องเรียน</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Corruption_backend'); ?>" class="link">

                            <li class="hide">
                                <span>แจ้งเรื่องทุจริตหน่วยงานภาครัฐ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Suggestions_backend'); ?>" class="link">

                            <li class="hide">
                                <span>รับฟังความคิดเห็นและข้อเสนอแนะ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Esv_ods_backend'); ?>" class="link">

                            <li class="hide">
                                <span>ยื่นคำร้องออนไลน์</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Q_a_backend'); ?>" class="link">

                            <li class="hide">
                                <span>กระทู้ถาม-ตอบ</span>
                            </li>
                        </a>

                        <a href="<?php echo site_url('Questions_backend'); ?>" class="link">

                            <li class="hide">
                                <span>คำถามที่พบบ่อย</span>
                            </li>
                        </a>

                        <!-- กฏหมาย -->
                        <a href="<?php echo site_url('Laws_backend'); ?>" class="link">

                            <li class="hide">
                                <span>กฏหมาย</span>
                            </li>
                        </a>

                    </ul>

                    <style>
                        /* #searchResults {
                            background-color: #000;
                            width: 200px;
                            padding: 10px;
                            color: white;
                        } */

                        #menuList {
                            list-style-type: none;
                            padding: 0;
                            /* background-color: #ccc; */
                            backdrop-filter: blur(15px);
                            box-shadow: 0 0 5px rgba(8, 7, 16, 0.6);
                            z-index: 999;
                            position: absolute;
                            margin-top: -35px;
                            padding: 10px 10px;
                            border-radius: 24px;
                        }

                        #menuList li {
                            background-color: #e2e2e2;
                            width: auto;
                            max-width: 100%;
                            height: 30px;
                            margin-bottom: 10px;
                            padding: 3px 10px;
                            border-radius: 24px;
                        }

                        #menuList li a {
                            text-decoration: none;
                            color: #777777;
                        }

                        #menuList li:hover {
                            background-color: #f2f2f2;
                            width: auto;
                            max-width: 100%;
                            height: 30px;
                            margin-bottom: 10px;
                            padding: 3px 10px;
                            border-radius: 24px;
                        }

                        #menuList li a:hover {
                            text-decoration: none;
                            color: #777777;
                        }


                        .color-search {
                            color: blue;
                        }

                        .link {
                            color: #777777;
                            text-decoration: none;
                        }

                        .link:hover {
                            color: #777777;
                            text-decoration: none;
                        }
                    </style>
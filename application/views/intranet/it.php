<!-- ส่วนทางขวา -->
<div class="flex-item-right">
    <div class="row">
        <!-- <?php foreach ($api_data1 as $service): ?>
            <div>
                <h2><?php echo $service['service_title']; ?></h2>
                <p><?php echo $service['service_intro']; ?></p>
                <img src="<?php echo $service['service_img']; ?>" alt="<?php echo $service['service_title']; ?>">
                <p><?php echo $service['service_detail']; ?></p>
                <p>Date: <?php echo $service['service_date']; ?></p>
            </div>
        <?php endforeach; ?> -->
        <!-- <br>
        <?php foreach ($api_data2 as $sale): ?>
            <div>
                <h2><?php echo $sale['sale_fname']; ?></h2>
                <p><?php echo $sale['sale_lname']; ?></p>
                <img src="<?php echo $sale['sale_img']; ?>" alt="<?php echo $service['service_title']; ?>">
                <p><?php echo $sale['sale_nickname']; ?></p>
                <p><?php echo $sale['sale_phone']; ?></p>
            </div>
        <?php endforeach; ?> -->



        <h4 class="font-topic-all-it mt-5">ผลิตภัณฑ์</h4>
        <div class="col-9">
            <div class="row">
                <?php foreach ($api_data1 as $service): ?>
                    <div class="col-4 mt-4 mb-3">
                        <div class="card-all-it">
                            <div class="row">
                                <img src="https://www.assystem.co.th/asset/img_services/<?php echo $service['service_img']; ?>"
                                    style="border-radius: 30px;">
                                <div class="text-center">
                                    <h5 class="card-service-top"><?php echo $service['service_title']; ?></h5>
                                    <p class="card-service limit-font-five mt-3"><?php echo $service['service_intro']; ?>
                                    </p>
                                    <a href="https://www.assystem.co.th/service/detail/<?php echo $service['service_id']; ?>"
                                        target="blank" class="btn btn-all-it">เพิ่มเติม
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-3 mt-4">
            <div class="all-complain">
                <div class="card-all-it2">
                    <h5 class="card-sale text-center" style="margin-top: -15px;">สอบถามข้อมูล<br>
                        บริษัท เอเอส ซิสเต็ม จำกัด<br>
                        โทร : 043-009-848</h5>
                    <?php foreach ($api_data2 as $sale): ?>
                        <div class="row" style="margin-left: 25px;">
                            <div class="col-9">
                                <img class="sale-img"
                                    src="https://www.assystem.co.th/asset/img_sale/<?php echo $sale['sale_img']; ?>">
                                <div class="text-center">
                                    <p class="card-sale mt-1"><?php echo $sale['sale_phone']; ?></p>
                                    <p class="card-sale" style="margin-top: -20px;">(<?php echo $sale['sale_nickname']; ?>)
                                    </p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="dropdown-sale dropleft">
                                    <div data-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
  <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
</svg>
                                    </div>
                                    <div class="dropdown-menu" style="margin-left: 15px;">
                                    <div class="border-gray">
                                        <span class="padding-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
  <path d="M8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8ZM0 16V13.2C0 12.6333 0.145833 12.1125 0.4375 11.6375C0.729167 11.1625 1.11667 10.8 1.6 10.55C2.63333 10.0333 3.68333 9.64583 4.75 9.3875C5.81667 9.12917 6.9 9 8 9C9.1 9 10.1833 9.12917 11.25 9.3875C12.3167 9.64583 13.3667 10.0333 14.4 10.55C14.8833 10.8 15.2708 11.1625 15.5625 11.6375C15.8542 12.1125 16 12.6333 16 13.2V16H0ZM2 14H14V13.2C14 13.0167 13.9542 12.85 13.8625 12.7C13.7708 12.55 13.65 12.4333 13.5 12.35C12.6 11.9 11.6917 11.5625 10.775 11.3375C9.85833 11.1125 8.93333 11 8 11C7.06667 11 6.14167 11.1125 5.225 11.3375C4.30833 11.5625 3.4 11.9 2.5 12.35C2.35 12.4333 2.22917 12.55 2.1375 12.7C2.04583 12.85 2 13.0167 2 13.2V14ZM8 6C8.55 6 9.02083 5.80417 9.4125 5.4125C9.80417 5.02083 10 4.55 10 4C10 3.45 9.80417 2.97917 9.4125 2.5875C9.02083 2.19583 8.55 2 8 2C7.45 2 6.97917 2.19583 6.5875 2.5875C6.19583 2.97917 6 3.45 6 4C6 4.55 6.19583 5.02083 6.5875 5.4125C6.97917 5.80417 7.45 6 8 6Z" fill="#6298E8"/>
</svg></span><span class="dropdown-top">ข้อมูล</span><br>
                                    </div>
                                        <div class="detail-sale2">

                                            <!-- <p>ชื่อ <?php echo $sale['sale_fname']; ?> นามสกุล
                                                <?php echo $sale['sale_lname']; ?>
                                            </p> -->
                                            <!-- <p>E-mail <?php echo $sale['sale_email']; ?></p> -->
                                            <!-- <p>Line <?php echo $sale['sale_line']; ?></p> -->

                                            <span class="font-sale-gray">ชื่อ </span>&nbsp;<span class="font-sale-black"><?php echo $sale['sale_fname']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="font-sale-gray"> นามสกุล</span>&nbsp;<span class="font-sale-black"> <?php echo $sale['sale_lname']; ?></span><br>
                                            <span class="font-sale-gray" >E-mail </span><span class="font-sale-black"><?php echo $sale['sale_email']; ?></span><br>
                                            <span class="font-sale-gray">Line </span><span class="font-sale-black"><?php echo $sale['sale_line']; ?></span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>
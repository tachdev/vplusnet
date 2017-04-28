	<section style="background-image: url('assets/images/slider/smartphone-user.jpg');background-position: 50% 0px;">
		<div class="overlay">
			<div class="container">
                <div class="section-title text-center">
                    <div class="bigtitle"><h2>Promotion Voip Choice</h2></div>
                </div>
                <div class="general_row">
                	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box skill promotion" style="height:600px;">
                            <span><img src="assets/images/slider/phone.png"></span>
                            <h3>VOIP PROMOTION</h3>
                            <p style="text-align:left;">
                            	โทรออกเริ่มต้นที่ 0.60 บาท/นาที ไม่โชว์เบอร์<br>
								*Package รายเดือน Prepaid เริ่มต้นที่ 1,299 บาท/เดือน โทรได้ 1,450 นาที
								เกินจาก Package คิด 0.80 บาท/นาที<br><br>
								ฟรี! ค่าติดตั้งและค่าบริการระบบรายเดือน<br>
								รายเดือน Postpaid จ่ายตามนาทีที่ใช้จริงนาทีละ 0.95 บาท ค่าบริการรายเดือน 199 บาท
								พิเศษ! โทรออก 2,999 นาที เป็นต้นไป คิดนาทีละ 0.75 บาท
                            </p>
                        </div>
                    </div> 
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box skill promotion" style="height:600px;">
                            <span><img src="assets/images/slider/sim.png"></span>
                            <h3>SIM AIS</h3>
                            <p style="text-align:left;">
								ซิมเครื่อข่าย AIS เน้นโทรอย่างเดียว
								โทรออกเริ่มต้นที่ 0.75 บาท/นาที ไม่โชว์เบอร์
								โทรออกเริ่มต้นที่ 0.85 บาท/นาที โชว์เบอร์<br><br>
								<u>Package รายเดือน เริ่มต้นที่ 599 บาท/เดือน</u><br> โทรได้ 500 นาที<br>
								-799 บาท/เดือน โทรได้ 700 นาที<br>
								-999 บาท/เดือน โทรได้ 1,000 นาที<br>
								-1,299 บาท/เดือน โทรได้ 1500 นาที<br><br>
								พิเศษ! สมัครภายใน ตุลาคม 2557 เพิ่มนาทีโทรออกอีก Package ละ 50 นาที นาน 3 เดือน
								ในกรณีเกินจาก Package 999 และ 1,299 คิดนาทีละ 0.85 บาท/นาที เท่านั้น
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    	<div class="inner-box skill promotion" style="height:600px;">
                            <span><img src="assets/images/slider/sim.png"></span>
                            <h3>SIM TOT</h3>
                            <p style="text-align:left;">
								ซิมเครือข่าย TOT โทรและเล่น Internet 3G<br><br>
								โทรออกเริ่มต้นที่ 1.00 บาท/นาที
								Internet 3G เปิดซิม 79 บาท ฟรี Internet 500 MB<br><br>
								-Package รายเดือน เริ่มต้นที่ 399 บาท/เดือน
								(โทรได้ 250 นาที Internet 3G 500 MB)
								พิเศษ! สมัครภายใน ตุลาคม 2557 เพิ่ม Internet 3G 500 MB เป็น 1GB
                            </p>
                        </div>
                    </div>              
                </div><!-- end row -->
			</div><!-- end container -->
		</div>
	</section>
    <section id="team" >  
        <div class="container">
            <div class="section-title text-center">
                <div class="bigtitle"><h2><i class="fa fa-phone"></i>  TABLE RATE PRICE</h2></div>
                <p class="lead">
                    ตารางอัตราค่าบริการของ VOIP
                </p>
            </div>
            <div>
                <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">                   
                    <table class="table table-striped table-hover" style="text-align:center" >
                        <tbody>
                            <tr class="info">
                                <td><strong>ITEM</strong></td>
                                <td><strong>NAME</strong></td>
                                <td><strong>COUNTRY</strong></td>
                                <td><strong>Fixed Rate(baht)</strong></td>
                                <td><strong>Mobile Rate(baht)</strong></td>
                            </tr>
                            <?php foreach ($price_rate as $price_rates ) { ?>
                            <tr style="background:white;border:none;">
                                <td><?php echo $price_rates['item_id'] ?></td>
                                <td><?php echo $price_rates['country_name'] ?></td>
                                <td><?php echo $price_rates['country_code'] ?></td>
                                <td><?php echo $price_rates['fixed_rate_price'] ?></td>
                                <td><?php echo $price_rates['mobile_rate_price'] ?></td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div><!-- end col-lg-4 -->

            </div>
        </div><br>

    </section><!-- end whitewrapper -->
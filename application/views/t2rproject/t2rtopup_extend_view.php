<body class="bg-dark bg-t2r">
    <div class="container topup-container">
            <?php $this->load->view('t2rproject/element/step'); ?>
    	<div class="col-lg-4  sidebar-style">
            <?php $this->load->view('t2rproject/element/sidebar'); ?>
        </div>     	
        <div class="user-container col-lg-8 package-topup">
            <section class="panel">                
                <div class="user">
                    <h4>หากท่านต้องการ Package เสริมกรุณาเลือก</h4> 
                    <p>หากไม่ต้องการให้กดที่ปุ่มข้ามขั้นตอนนี้</p>                                 
                </div>                 
            </section>
            <form  method="post" role="form" action="<?php echo base_url(); ?>t2rproject/user/t2rcheckout">
            <section class="panel">                
                <div class="user">
                    <h4><input type="checkbox" name="package_standard" value="package_standard">Package Standard </h4><hr>
                    <p>
                        Package   Standard   โทรทั่วไทย 24 ชม. 0.85 บาท/นาที  ใช้เท่าไหร่จ่ายเท่านั้น
                        บริการอัตราเดียวทั่วไทย โทรทุกเวลา 0.85 บาท/นาที พร้อมบริการดูดวงกับหมอช้าง นาทีละ 5 บาท
                    </p>
                    <div class="policy-topup">
                        <p>เงื่อนไขบริการ</p>
                        <p>1.  เลือกสมัครและเติมเงินได้ทันที และหลังใช้บริการทุกๆครั้งระบบจะหักค่าบริการจากการเติมเงินขั้นต่ำ 50 บาท</p>
                        <p>2.  กรณีที่เงินคงเหลือศูนย์ ท่านไม่สามารถใช้บริการการโทรออกได้</p>
                        <p>3.  การใช้บริการนี้ท่านต้องชำระค่าบริการ Package Basic ทุกๆเดือน</p>
                        <p>4.  การเติมเงิน Package ใดๆหากไม่มีการชำระค่าบริการ Package Basic เป็นระยะเวลา 6 เดือนหากมีเงินเหลือใน package อื่นๆไม่สามารถใช้บริการได้ และเมื่อครบอายุสัญญา 1 ปี มูลค่าที่คงเหลือจะเป็นศูนย์ ไม่สามารถนำกลับมาใช้งานได้</p> 
                    </div>                    
                </div>                 
            </section>
            <section class="panel">                
                <div class="user">
                	
                	 <div class="package-select">
                	 	<h4>Package Buffet </h4><hr>
                        <h4>เลือก Package Buffet ที่ต้องการชำระเงิน</h4>
    		            <p><input type="radio" name="package_buffet_199" value="package_buffet_199"> Buffet คุยสั้นๆ 199 บาท เหมารวมโทรได้ 4 ชม./เดือน</p> 
    		            <p><input type="radio" name="package_buffet_399" value="package_buffet_399"> Buffet คุยนาน 399 บาท เหมารวมโทรได้ 8 ชม./เดือน  </p> 
                    </div>  
                    <p>-Buffet คุยสั้นๆ 199 บาท เหมารวมโทรได้ 4 ชม./เดือน</p>
                    <p>กรณีโทรเกินจากจำนวนเวลา 4   ชั่วโมงต่อเดือน  ระบบจะดำเนินการระงับสัญญาณอัตโนมัติ  ยกเว้นมีการเติมเงินล่วงหน้าไว้ตั้งแต่ 50 บาทขึ้นไปต่อเดือน</p>
                    <p>-Buffet คุยนาน 399 บาท เหมารวมโทรได้ 8 ชม./เดือน </p>
                    <p>กรณีโทรเกินจากจำนวนเวลา 4   8 ชั่วโมงต่อเดือน  ระบบจะดำเนินการระงับสัญญาณอัตโนมัติ  ยกเว้นมีการเติมเงินล่วงหน้าไว้ตั้งแต่ 50 บาทขึ้นไปต่อเดือน</p>
                                     
                </div>
               <div class="policy-topup">
                        <u>เงื่อนไขบริการ</u></p>
                        <p>1.  เลือกสมัครและเติมเงินได้ทันที และหลังใช้บริการทุกๆครั้งระบบจะหักค่าบริการจากการเติมเงินขั้นต่ำ 50 บาท</p>
                        <p>2.  กรณีที่เงินคงเหลือศูนย์ ท่านไม่สามารถใช้บริการการโทรออกได้</p>
                        <p>3.  การใช้บริการนี้ท่านต้องชำระค่าบริการ Package Basic ทุกๆเดือน</p>
                        <p>4.  การเติมเงิน Package ใดๆหากไม่มีการชำระค่าบริการ Package Basic เป็นระยะเวลา 6 เดือนหากมีเงินเหลือใน package อื่นๆไม่สามารถใช้บริการได้ และเมื่อครบอายุสัญญา 1 ปี มูลค่าที่คงเหลือจะเป็นศูนย์ ไม่สามารถนำกลับมาใช้งานได้</p>
                </div>    
              
            </section>
            <section class="panel">                
                <div class="user">
                    <h4><input type="checkbox" name="package_standard" value="package_a2z">Package โทรต่างประเทศ A-Z </h4><hr>
                    <p>
                       โทรแบบไร้พรมแดนด้วยบริการ A-Z โทรต่างประเทศ ประหยัดกว่า
                       อัตราค่าบริการและประเทศที่บริการ 
                    </p>                
                </div>
               <div class="policy-topup">
                        <p>หมายเหตุ  อัตราดังกล่าวอาจมีการเปลี่ยนแปลงได้ บริษัทฯขอสงวนสิทธิ์ ไม่มีการแจ้งล่วงหน้า</p><br>
                        <h5><strong>อัตราค่าบริการ Package โทรต่างประเทศ A-Z</strong></h5>
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
	                            <tr>
	                                <td><?php echo $price_rates['item_id'] ?></td>
	                                <td><?php echo $price_rates['country_name'] ?></td>
	                                <td><?php echo $price_rates['country_code'] ?></td>
	                                <td><?php echo $price_rates['fixed_rate_price'] ?></td>
	                                <td><?php echo $price_rates['mobile_rate_price'] ?></td>
	                            </tr>
	                            <?php } ?>
	                            
	                        </tbody>
                    	</table>
                </div>  
            </section>
            <a href="<?php echo base_url(); ?>t2rproject/user/t2rtopup" class="jobutton btn btn-danger btn-lg mg-t-sm mg-b-sm pull-left"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;ย้อนกลับ&nbsp;&nbsp;</a>
            <a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="jobutton btn btn-danger btn-lg mg-t-sm mg-b-sm mg-l-md pull-left">&nbsp;&nbsp;&nbsp;&nbsp;ข้ามขั้นตอนนี้&nbsp;&nbsp;</a>
            <input type="hidden" name="topup" value="topup">
            <button type="submit" class="btn btn-success btn-lg mg-t-sm mg-b-sm pull-right"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;ดำเนินการต่อ&nbsp;&nbsp;</button>
            </form>
        </div>

        
    </div>
</body>

</html>

    
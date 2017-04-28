<body class="bg-t2r">
	<?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-8 t2r-login centered-2">
        	<div class="user">
		        	<section class="panel">  
		        			<div style="text-align: center;"><img src="<?php echo base_url(); ?>assets/images/pic_3.png" ></div> <br>  
		        			<h4><strong>Bank Tranfer Payment</strong></h4> 
		        			<div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            	เราได้ส่งเมล invoice ไปยัง <?php echo $email; ?>
                        	</div>           
		                    <div class="detail-box">
		    		            <p><strong>Name</strong> : <?php echo $firstname; ?> <?php echo $lastname; ?></p>
		                        <p><strong>Phone Number</strong> : <?php echo $mobile; ?></p>
		                        <p><strong>Email</strong> : <?php echo $email; ?></p>
		                        <p><strong>Country</strong> : <?php echo $country ?></p>
		                        <p><strong>Package</strong> : Package <?php echo $expire; ?> วัน <?php echo $price ?> บาท รับสายไม่จำกัด  </p>
		                    </div>
		                    <div class="detail-box mg-t-md">
			                    <table class="table no-margin">
			                        <thead>
			                            <tr>
			                                <th class="col-md-2">Start Date</th>
			                                <th class="col-md-2">End Date</th>
			                                <th class="col-md-3" style="text-align: center;">อัตราค่าบริการรายเดือน</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                            <tr>
			                                <td><?php echo $date_start ?></td>
			                                <td><?php echo $date_end ?></td>
			                                <td style="text-align: center;"><?php echo $price ?></td>
			                            </tr>
			                        </tbody>
			                	</table>
		                	</div>
		                	<div class="detail-box mg-t-md mg-b-md ">
			                	<p><strong>บัญชีธนาคารของบริษัท วี-พลัส เน็ต แอนด์ คอมมูนิเคชั่น จำกัด</strong></p>
			                	<?php foreach ($bank_number as $bank_numbers) { ?>
			                		<p>-<?php echo $bank_numbers['name_bank'] ?></p>
			                	<?php } ?>
								
				
		                 	</div>
		                 	<a href="<?php echo base_url(); ?>customer/user/printinvoice/<?php echo $tran_id; ?>" class="jobutton btn btn-success btn-md col-xs-3 mg-b-lg mg-r-sm" target="_blank">พิมพ์ใบชำระเงิน</a>
		                 	<a href="<?php echo base_url(); ?>customer/user/paymentconfirm/<?php echo $tran_id; ?>" class="jobutton btn btn-success btn-md col-xs-3 mg-b-lg mg-r-sm" target="_blank">เเจ้งโอนเงิน</a><a href="<?php echo base_url(); ?>customer/user" class="jobutton btn btn-info btn-md col-xs-4 mg-b-lg mg-r-sm">กลับสู่ menu</a>
		            </section>
            </div>
        </div>
    </div>
</body>

</html>
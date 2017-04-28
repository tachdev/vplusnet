<body class="bg-t2r">
	<?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-8 t2r-login centered-2">
        	<div class="user">
		        	<section class="panel">   
		        			<h4><strong>Counter Service</strong></h4>             
		                    <div class="detail-box">
		    		            <p><strong>Name</strong> : <?php echo $firstname; ?> <?php echo $lastname; ?></p>
		                        <p><strong>Phone Number</strong> : <?php echo $mobile; ?></p>
		                        <p><strong>Email</strong> : <?php echo $email; ?></p>
		                        <p><strong>Country</strong> : <?php echo $country ?></p>
		                        <p><strong>Package</strong> : <?php echo $package_total['0']['package_title']; ?> </p>
		                    </div>
		                    <div class="detail-box mg-t-md">
			                    <table class="table no-margin">	
			                        <thead>
			                            <tr>
			                                <th class="col-md-2">Start Date</th>
			                                <th class="col-md-2">End Date</th>
			                                <th class="col-md-3">อัตราค่าบริการรายเดือน</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                            <tr>
			                                <td><?php echo $date_start ?></td>
			                                <td><?php echo $date_end ?></td>
			                                <td><?php echo $package_total['0']['package_price']; ?></td>
			                            </tr>
			                        </tbody>
			                	</table>
		                	</div>
		                	<div class="detail-box mg-t-md mg-b-md barcode">
		                		<h4>รหัสบาร์โคด</h4>
			                	<img src="<?php echo base_url(); ?>assets/img/webimage/code93.gif">
		                 	</div>
		                 	<input type="submit" class="jobutton btn btn-success btn-lg col-xs-5 mg-b-lg mg-r-sm" value="พิมพ์ใบชำระเงิน">		              
		            </section>
            </div>
        </div>
    </div>
</body>

</html>
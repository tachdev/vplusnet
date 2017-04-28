
<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="user-container col-lg-8 t2r-login centered-2">
            <section class="panel">                
                <div class="user"> 
                               	
	                 <div class="general_row register">
	                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <h3 style="color:orange;"><strong>Congratulation</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h3>                      
		                <?php if( isset($message_error)): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $message_error ?>
                        </div>
                    	<?php endif; ?>
                        <?php if( isset($message_success)): ?>
                        <div class="alert alert-success">
                            <?php echo $message_success ?>
                        </div>
                        <?php endif; ?>
                        <div style="font-size:12px;line-height: 0.5;border:1px solid #ccc;padding:15px;color:#000;height: auto;">
                            <p><strong>Package</strong> : Basic <?php echo $customer_order['0']['total_price']; ?>  บาท</p>
                            <p><strong>Country</strong> : <?php echo $customer_order['0']['country']; ?></p>
                            <p><strong>Start Date</strong> : <?php echo date_format( new DateTime($customer_order['0']['date_start']),"d-m-Y"); ?></p>
                            <p><strong>End Date</strong> : <?php echo  date_format( new DateTime($customer_order['0']['date_end'])   ,"d-m-Y"); ?></p><br>
                            <p><strong>Name</strong> : <?php echo $customer_order['0']['first_name']; ?> <?php echo $customer_order['0']['last_name']; ?></p>
                            <p><strong>Phone Number</strong> : <?php echo $customer_order['0']['mobile_number']; ?></p>
                            <p><strong>Email</strong> : <?php echo $customer_order['0']['email']; ?></p>
                            <p></p><br><hr>
                            <h4>DID NUMBER(เบอร์ 02) คือ: <?php echo $customer_order['0']['did_number']; ?></h4>
                            <div>
                    	</div>
                            
                     	</div>
                             
                	</div><!-- end row -->
                	</div>

                </div>
            </section>
        </div>
    </div>
</body>


</html>

    
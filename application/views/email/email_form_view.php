          <!-- main content -->
            <section class="main-content" style="font-size:14px;font-family:tahoma">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content ">
                                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo">
                                <hr>
                                <section class="tab-pane active" id="elements">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <form action="<?php echo current_url(); ?>" method="post" id="formPostContent">
                                            <section class="panel edit_user_account">
                                                <header class="panel-heading"><h2>Payment Invoice<h2></header>
                                                <div class="panel-body" >
                                                	<div class="customer-info overflow " style="border-bottom:1px solid #ccc;font-size:12px;">
                                                		<h4><strong>Customer info</strong> | Date Order : <?php echo $content['0']['order_date']; ?></h4>
                                                		<p><label>Name</label>&nbsp;&nbsp;<?php echo $address['0']['first_name']; ?>&nbsp;&nbsp;<?php echo $address['0']['last_name']; ?> </p>
                                                		<p><label>Email</label>&nbsp;&nbsp;<?php echo $content['0']['email_address']; ?> </p>
                                                		<p><label>Tel</label>&nbsp;&nbsp;<?php echo $address['0']['tel']; ?> </p>
                                                		<p><label>Address</label>&nbsp;&nbsp;<?php echo $address['0']['address']; ?> <br>เขต <?php echo $address['0']['district']; ?> จังหวัด <?php echo $address['0']['province']; ?> <?php echo $address['0']['zipcode']; ?></p>
                                                		<p><label>Notice</label>&nbsp;&nbsp;<?php echo $content['0']['comment'] ?></p>
                                                		<br>                                                  		
                                                	</div>
                                                	<div>
                                                    <table border="1" cellpadding="0" cellspacing="0" style="margin-top:10px;width:100%;font-size:14px;font-family:tahoma;border-color:#ccc;">
			                                            <thead>
			                                                <tr style="border-bottom:1px solid #ccc;">
			                                                    <th>Item</th>		                                                    
			                                                    <th>Quantity</th>
			                                                    <th>Coin</th>
			                                                    <th>Price</th>
			                                                </tr>
			                                            </thead>
			                                            <tbody>
			                                            	<?php foreach ($product_list as $product_lists ) { ?>

			                                            	<tr class="row-tr" style="height:25px;">
			                                                    	<td class="basket-tr">&nbsp;<?php echo $product_lists['product_name']; ?></td>
			                                                    	<td style="text-align:center;">&nbsp;<?php echo $product_lists['qty']; ?></td>
		                                                    		<td style="text-align:center;">&nbsp;<?php echo $product_lists['coin']*$product_lists['qty']; ?> gold</td>
                                                    				<td style="text-align:center;">&nbsp;<?php echo $product_lists['price']*$product_lists['qty']; ?> baht</td>
			                                                </tr>

			                                            	<?php } ?>
		                                               		<?php if($shipping != 0): ?>
        		                                            <tr style="height:25px;">
			                                                    <td>&nbsp;ค่าขนส่ง</td>
			                                                    <td></td>
			                                                    <td></td>
			                                                    <td style="text-align:center;"><?php echo $shipping; ?> บาท</td>
			                                                </tr>
                                                            <?php endif; ?>
			                                                <tr style="height:25px;" >
			                                                    <td colspan="1"><strong>&nbsp;ราคาสุทธิ</strong></td>
			                                                    <td></td>
			                                                    <td style="text-align:center;"><strong><span class="total-coin-ajax"><?php echo $content['0']['total_coin']; ?></span> Gold</strong></td>
			                                                    <td style="text-align:center;"><strong><span class="total-price-ajax"><?php echo $content['0']['total_price']; ?></span> Baht</strong></td>
			                                                </tr>

			                                            </tbody>
			                                        </table>
			                                    	</div>

                                                    <br>
                                                    <br>
                                                    <br>
                                                    <?php if($content['0']['total_price'] > 0){ ?>
                                                        <table border="1" cellpadding="0" cellspacing="0" style="margin-top:10px;width:100%;font-size:14px;font-family:tahoma;border-color:#ccc;">
                                                            <thead>
                                                                <tr style="border-bottom:1px solid #ccc;height:25px;">                                                          
                                                                    <th height="50px">เลขบัญชีโอนเงิน</th>
                                                                </tr>
                                                                                                                            
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($bank as $banks ) { ?>
                                                                    <tr>
                                                                        <td style="height:25px;"><?php echo $banks['bank_name']; ?></td>                                
                                                                    </tr>
                                                                <?php } ?>
                                                            <tbody>
                                                        </table>
                                                    <?php } ?>
                                                                                                          
                                                </div>
                                            </section>
                                            </form>                                                                                   
                                        </div>

                                    </div>
                                                              
                                </section>

                             
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->

            </section>
            <!-- /main content -->

        </section>

    </div>


    

</body>
<!-- /body -->

</html>

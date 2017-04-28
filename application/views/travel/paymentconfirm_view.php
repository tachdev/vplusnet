
<body class="bg-dark bg-t2r">
    <?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-8 t2r-login centered-2">
            <section class="panel">                
                <div class="user"> 
                               	
                    <form  id="submit" method="post" role="form" action="<?php echo current_url(); ?>" enctype="multipart/form-data" >
	                    <div class="general_row register">
	                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <h3 style="color:orange;"><strong>Payment Confirm</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h3>                      
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
                        <?php else: ?>
                        <div style="font-size:12px;line-height: 0.5;border:1px solid #ccc;padding:15px;color:#000">
                            <p><strong>Package</strong> : Basic <?php echo $customer_order['0']['total_price']; ?>  บาท</p>
                            <p><strong>Country</strong> : <?php echo $customer_order['0']['country']; ?></p>
                            <p><strong>Start Date</strong> : <?php echo date_format( new DateTime($customer_order['0']['date_start']),"d-m-Y"); ?></p>
                            <p><strong>End Date</strong> : <?php echo  date_format( new DateTime($customer_order['0']['date_end'])   ,"d-m-Y"); ?></p><br>
                            <p><strong>Name</strong> : <?php echo $customer_order['0']['first_name']; ?> <?php echo $customer_order['0']['last_name']; ?></p>
                            <p><strong>Phone Number</strong> : <?php echo $customer_order['0']['mobile_number']; ?></p>
                            <p><strong>Email</strong> : <?php echo $customer_order['0']['email']; ?></p>
                            
                                
                        </div>  <br>
                        <!--<div class="input-group">
                            <label>เบอร์โทรศัพท์</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" name="mobile" class="form-control " placeholder="กรุณากรอกเบอร์โทรศัพท์" value="<?php echo $customer_order['0']['mobile_number']; ?>" >                   
                        </div>
                        <div class="input-group">
                            <label>อีเมล</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="กรุณากรอก email" value="<?php echo $customer_order['0']['email']; ?>">                    
                        </div>-->
		                <!--<div class="input-group">
		                    <label>เบอร์โทรศัพท์</label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
		                    <input type="text" name="mobile" class="form-control " placeholder="กรุณากรอกเบอร์โทรศัพท์">                    
		                </div>
		                <div class="input-group">
                            <label>อีเมล</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="กรุณากรอก email">                    
                        </div>
                        <div class="input-group">
		                    <label>ชื่อ<label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                    <input type="text" name="firstname" class="form-control " placeholder="กรุณากรอกชื่อจริงของคุณ" >  
		                </div>
		                <div class="input-group">
		                    <label>นามสกุล</label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                    <input type="text" name="surname" class="form-control " placeholder="กรุณากรอกนามสกุลของคุณ" >                    
		                </div>-->
                        <div class="input-group">
                            <label>ธนาคาร</label>
                        </div>
                        <div class="input-group mg-b-xs" style="width: 100%;z-index: 1000;font-size: 12px">
                            <select class="form-control selectpicker" name="bank" style="width:100%" >
                                  <option value="">เลือกบัญชีธนาคาร</option>
                                  <?php foreach ($bank_number as $bank_numbers) { ?>
                                        <option value="<?php echo $bank_numbers['name_bank'] ?>"><?php echo $bank_numbers['name_bank'] ?></option>
                                  <?php } ?>

                            </select>
                        </div>
                        <div class="input-group">
                            <label>วันที่</label>
                        </div>
                        <div class="input-group">
                            <div class="input-group  input-append date datepicker no-padding"  data-date-format="dd-mm-yyyy">
                                <input type="text" name="date" class="form-control" value="<?php echo date("d-m-Y"); ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-white add-on" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="input-group">
                            <label>เวลา</label>
                        </div>
                        <div class="input-group time" style="width:100%;">
                            <div style="width:30%;float:left;z-index:1000;">
                                <select class="form-control selectpicker" name="hour">
                                  <?php for ($i=0; $i <= 23  ; $i++) {  ?>

                                      <option value="<?php echo $i ; ?>"><?php echo  sprintf("%02.2d", $i ); ?></option>

                                  <?php } ?>
                                  
                                </select>
                            </div>
                            <div style="width:30%;float:left;z-index:1000;margin-left:5px;">
                                <select class="form-control selectpicker" name="minutes">
                                  <?php for ($i=0; $i <= 59  ; $i++) {  ?>

                                      <option value="<?php echo $i ; ?>"><?php echo  sprintf("%02.2d", $i ); ?></option>

                                  <?php } ?>
                                </select>
                            </div>
                        </div><br><br>
                        <div class="input-group">
                            <label>จำนวนเงิน (Baht)</label>
                        </div>
                        <div class="input-group" style="z-index: 0;">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="text" name="money" class="form-control " placeholder="กรุณากรอกจำนวนเงิน" style="z-index: 0;" value="<?php echo $customer_order['0']['total_price']; ?>">                    
                        </div><br>
                        <div class="input-group">
                            <label>อัปโหลด เอกสาร(ถ้ามี)</label>
                        </div>
                        <div class="input-group" style="width:100%">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                              <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                              <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="pay_confirm" ></span>
                              <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                        <input type="hidden" name="mobile" class="form-control "  value="<?php echo $customer_order['0']['mobile_number']; ?>">
                        <input type="hidden" name="email" class="form-control "  value="<?php echo $customer_order['0']['email']; ?>">
	                    <button type="submit" class="jobutton btn btn-primary btn-md col-xs-12 mg-t-lg">sumbit</button>
                        <a href="<?php echo base_url(); ?>customer/user" class="jobutton btn btn-danger col-xs-12 mg-t-xs">Back To Menu</a>
	                   <?php endif; ?>
                    </div>              
                	</div><!-- end row -->
                 </form>

                </div>
            </section>
        </div>
    </div>
</body>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

        $('.datepicker').datepicker({ });
        $('.datepicker').on('changeDate', function(ev){
                $(this).datepicker('hide');
        });
        $('.selectpicker').selectpicker({ style: 'btn-info' , size: 3 , showIcon: false });
   
        $('#submit').submit(function() {

            $( 'body').css( "display" ,"none" );
            $(".submit-button").prop('disabled', false);

        });
    


</script>
</html>

    

<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="user-container col-lg-8 t2r-login centered-2">
            <section class="panel">                
                <div class="user">
                	
                    <form  method="post" role="form" action="<?php echo current_url(); ?>">
	                    <div class="general_row register">
	                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <h3 style="color:orange;"><strong>SmartVoice Register</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h3>                      
		                <?php if( isset($message_error)): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $message_error ?>
                        </div>
                    	<?php endif; ?>
		                <div class="input-group">
		                    <label>เบอร์โทรศัพท์</label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
		                    <input type="text" name="mobile" class="form-control " placeholder="กรุณากรอกเบอร์โทรศัพท์ smartvoice">                    
		                </div>
		                <div class="input-group">
                            <label>อีเมล</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="กรุณากรอก email"  >                    
                        </div>
                        <div class="input-group">
                            <label>รหัสผ่าน</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="กรุณากรอก Password" >                    
                        </div>
                        <div class="input-group">
                            <label>ยืนยันรหัสผ่าน</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password2" class="form-control" placeholder="กรุณากรอก Password" >                    
                        </div>
                        <div class="input-group">
		                    <label>ชื่อ<label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                    <input type="text" name="name" class="form-control " placeholder="กรุณากรอกชื่อจริงของคุณ" >  
		                </div>
		                <div class="input-group">
		                    <label>นามสกุล</label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                    <input type="text" name="surname" class="form-control " placeholder="กรุณากรอกนามสกุลของคุณ" >                    
		                </div>
		                <div class="input-group">
		                    <label>เลขที่บัตรประชาชน</label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
		                    <input type="number" name="national_id" class="form-control " placeholder="กรุณากรอกนามสกุลของคุณ" >                     
		                </div>
		                <br>
	                    <button type="submit" class="jobutton btn btn-primary btn-md col-xs-12 mg-b-sm">sumbit</button>
	
                    </div>              
                	</div><!-- end row -->
                 </form>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    
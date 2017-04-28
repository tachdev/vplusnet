<?php $this->load->library('session'); ?>
<body class="bg-dark bg-t2r">
    <?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-8 t2r-login centered-2">
            <section class="panel">                
                <div class="user">
                	
                    <form  method="post" role="form" action="<?php echo current_url(); ?>" id="submit">
	                    <div class="general_row register">
	                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <h3 style="color:orange;"><strong>SmartVoice Travel Register</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h3>                      
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
		                    <input type="text" name="mobile" class="form-control " placeholder="กรุณากรอกเบอร์โทรศัพท์ที่ใช้กับ package smartvoice" value="<?php echo $this->session->userdata('mobile'); ?>">                    
		                </div>
		                <div class="input-group">
                            <label>อีเมล</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="กรุณากรอก email"  value="<?php echo $this->session->userdata('email'); ?>">                    
                        </div>
                        <div class="input-group">
                            <label>รหัสผ่าน</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="กรุณากรอก Password เป็นตัวอักษรเเละตัวเลขไม่ต่ำกว่า 8 ตัวอักษร" value="">                    
                        </div>
                        <div class="input-group">
                            <label>ยืนยันรหัสผ่าน</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password2" class="form-control" placeholder="กรุณากรอก Password ยืนยัน" value="">                    
                        </div>
                        <div class="input-group">
		                    <label>ชื่อ<label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                    <input type="text" name="name" class="form-control " placeholder="กรุณากรอกชื่อจริงของคุณ" value="<?php echo $this->session->userdata('name'); ?>">  
		                </div>
		                <div class="input-group">
		                    <label>นามสกุล</label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                    <input type="text" name="surname" class="form-control " placeholder="กรุณากรอกนามสกุลของคุณ" value="<?php echo $this->session->userdata('surname'); ?>">                    
		                </div>
		                <div class="input-group">
		                    <label>เลขที่บัตรประชาชน</label>
		                </div>
		                <div class="input-group">
		                    <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
		                    <input type="text" name="national_id" class="form-control " placeholder="กรุณากรอกเลขบัตรประชาชน" value="<?php echo $this->session->userdata('nationnal_id'); ?>" >                     
		                </div>
		                <br>
                        <button type="submit" class="jobutton btn btn-primary btn-md col-xs-12 mg-b-sm submit-button">submit</button>
                        <hr>
	                    <a href="<?php echo base_url(); ?>customer/user/index" class="jobutton btn btn-danger btn-md col-xs-12 mg-b-sm "><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;กลับสู่หน้า Log In</a>
	
                    </div>              
                	</div><!-- end row -->
                 </form>

                </div>
            </section>
        </div>
    </div>
</body>
<script>

$('#submit').submit(function() {
    $( 'body').css( "display" ,"none" );
    $(".submit-button").prop('disabled', false);

});

$( 'body').css( "display" ,"block" );

</script>
</html>

    
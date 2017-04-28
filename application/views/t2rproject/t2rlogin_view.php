<?php $this->load->view('t2rproject/element/head'); ?>

<body class="bg-dark bg-t2r">
    <div class="container">
        <!--<div class="col-lg-6 t2r-register" style="text-align:center;padding-top:5%;">
             <img src="<?php echo base_url(); ?>assets/images/smartphone_icon.png" >

        </div>-->
        <div class="user-container col-lg-6 t2r-login">
            <section class="panel">                
                <div class="user">

                    <form  method="post" role="form" action="<?php echo current_url(); ?>">
	                    <div class="general_row register">
	                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <h3 style="color:orange;"><strong>SmartVoice</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h3>
                        <?php if( isset($message_error)): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $message_error ?>
                        </div>
                    	<?php endif; ?>
		                <div class="input-group">
                            <label class="text-black">Username</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="mobile" class="form-control main-field" placeholder="กรุณากรอก Username" value=""  autocomplete='off'>                    
                        </div>
                        <div class="input-group">
                            <label class="text-black">Password</label>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input type="password" name="password" class="form-control main-field" placeholder="กรุณากรอก password " value=""  autocomplete='off'>                    
                        </div>
						<br>
	                    <input type="submit" class="jobutton btn btn-primary btn-md col-xs-12 mg-b-xs" value="ดำเนินการต่อ">
	                    <a href="<?php echo base_url(); ?>customer/user/register" class="jobutton btn btn-danger btn-md col-xs-12">สมัครสมาชิก</a>
	
                    </div>              
                	</div><!-- end row -->
                 </form>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    
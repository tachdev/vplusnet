

<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="col-lg-3 col-lg-offset-2 t2r-register sidebar-style pd-lg">
            <?php $this->load->view('t2rproject/element/sidebar'); ?>
        </div>
        <div class="user-container col-lg-6 package-topup" style="margin-top:8%;text-shadow:none">
            <section class="panel">                
                <div class="user ">

                    <form  method="post" role="form" action="<?php echo base_url('t2rproject/user/validate_credentials'); ?>">
	                    <div class="general_row mainmenu">
	                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <h3 style="margin-top:0;"><strong>Select Your Service</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h3>
		                <div class="input-group col-xs-12">
                            <?php if(empty($current_package)): ?>
		                          <a href="<?php echo base_url(); ?>t2rproject/user/t2rpackage" class="jobutton btn bg-menu btn-lg col-xs-12"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;สมัครบริการ SmartVoice&nbsp;&nbsp;</a>
                            <?php else: ?>
                                  <a href="<?php echo base_url(); ?>t2rproject/user/status/have_package" class="jobutton btn bg-menu btn-lg col-xs-12"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;สมัครบริการ SmartVoice&nbsp;&nbsp;</a>
                            <?php endif; ?>
		                </div><br>
                        <div class="input-group col-xs-12">
                            <a href="<?php echo base_url(); ?>t2rproject/user/status/not_system" class="jobutton btn bg-menu btn-lg col-xs-12"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;เติมเงิน&nbsp;&nbsp;</a>
                        </div><br>
		                <div class="input-group col-xs-12">
                            <?php if(!empty($current_package)): ?>
		                          <a href="<?php echo base_url(); ?>t2rproject/user/t2rtopup" class="jobutton btn bg-menu btn-lg col-xs-12"><i class="fa fa-edit"></i>&nbsp;&nbsp;เปลี่ยนเเปลง Package&nbsp;&nbsp;</a>
                            <?php else: ?>
                                  <a href="<?php echo base_url(); ?>t2rproject/user/status/not_package" class="jobutton btn bg-menu btn-lg col-xs-12"><i class="fa fa-edit"></i>&nbsp;&nbsp;เปลี่ยนเเปลง Package&nbsp;&nbsp;</a>
                            <?php endif; ?>
		                </div><br>
		                <div class="input-group col-xs-12">

		                    <a href="<?php echo base_url(); ?>t2rproject/user/t2rcalldetail" class="jobutton btn bg-menu btn-lg col-xs-12"><i class="fa fa-bar-chart-o"></i>&nbsp;&nbsp;ดูรายละเอียดการใช้งาน Call Detail &nbsp;&nbsp;</a>
		                </div><br>
		                <div class="input-group col-xs-12">
		                    <a href="<?php echo base_url(); ?>t2rproject/user/t2r_contact" class="jobutton btn bg-menu btn-lg col-xs-12"><i class="fa fa-phone-square"></i>&nbsp;&nbsp;สอบถามข้อมูลติดต่อ T2R Call&nbsp;&nbsp;</a>
		                </div><br>
		                <div><i class="fa fa-book"></i> วิธีการใช้งาน</div>
                    </div>              
                	</div><!-- end row -->
                 </form>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    
<?php $this->load->view('t2rproject/element/head'); ?>

<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="user-container col-lg-6 col-lg-offset-3 t2r-register">
        		<h4>ติดต่อสอบถามข้อมูล</h4>
        		<p>
        	   		ติดต่อสอบถามด้านปัญหาการใช้งาน เเจ้งข้อผิดพลาดการทำรายการได้ที่ช่องทางนี้
        	   		หากคนสนใจข้อมูลเพิ่มเติมหรือต้องการติดต่อขอใช้ package 
					สามารถติดต่อได้ที่  02-204-7989 หรือ  email info@vplus-net.com 
				</p>
				
				<form id="contact_f" action="<?php current_url(); ?>" name="contactform" method="post" data-effect="slide-bottom">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mg-b-sm">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-bookmark"></i></span>
							<input type="text" name="title" class="form-control" placeholder="หัวข้อเรื่องที่ต้องการติดต่อ">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding mg-b-sm">
						<textarea class="form-control" name="comments" id="comments" rows="4" placeholder="ข้อความ"></textarea>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
						<button type="submit" id="submit" class="jobutton btn btn-primary">SEND MESSAGE</button>
						<a href="<?php echo base_url(); ?>t2rproject/user" class="jobutton btn btn-danger">Back To Menu</a>
					</div>
				</form> 

        </div>
    </div>
</body>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
        $('.datepicker').datepicker({ });
</script>
</html>

    
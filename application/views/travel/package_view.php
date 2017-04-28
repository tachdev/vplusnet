
<body class="bg-dark bg-t2r">
    <?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-10 t2r-login centered-2 mg-lg">

            <section class="panel">  
                <div style="text-align: center;"><img src="<?php echo base_url(); ?>assets/images/pic_1.png" ></div> <br>             
                <div class="user">
                	
	                    <div class="general_row register">
	                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <h3 style="color:orange;"><strong>Step 1</strong> 
                        <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"> | Select Package</h3>      
                        <p style="background: yellow;color:black;padding:15px">ผู้ใฃ้บริการจะสามารถเริ่มใฃ้งานในวันเวลาที่กำหนดไว้เท่านั้น</p>                
                        <div class="alert alert-danger" style="display:none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            คุณยังไม่ได้เลือกประเทศ
                        </div>
		                <div class="input-group">
		                    <label>ประเทศที่จะเดินทาง</label>
		                </div>
		                <div class="input-group col-lg-12">

                                  <select class="selectpicker" id="sel1">
                                           <option value="">กรุณาเลือกประเทศ</option>
                                    <?php if(!empty($country)): ?>

                                        <?php foreach ($country as $countrys) { ?>

                                            <option value="<?php echo $countrys['country_name']; ?>"> <?php echo $countrys['country_name']; ?> </option>

                                        <?php } ?>
                                        
                                    <?php endif; ?>
                                  </select>              
		                </div>
		                <div class="input-group mg-t-md">
                            <label>วันที่ไป</label>
                        </div>
                        <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control date-data" value="<?php echo date("d-m-Y");  ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-white add-on date-button" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                        </div>
                        <!--<div class="input-group">
                            <label>วันที่กลับ</label>
                        </div>
                        <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" value="<?php $endtime = strtotime(date("Y-m-d H:i:s")); echo date("d-m-Y" , strtotime("-1 month", $endtime));  ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-white add-on" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                        </div>-->
		                <br>
                        <div class="input-group">
                            <label>เลือก Package</label>
                        </div>
                           <br>
                           <?php  $i = 0; foreach ($package as $packages ) {?>

                            <?php if($packages['expire_type'] == "D"): ?>

                                <form method="post" id="#target"  action="<?php echo base_url(); ?>customer/user/checkout">
                                    <input class="date-submit" type="hidden"  name="date_start" 
                                    value="<?php echo date("d-m-Y");  ?>">
                                    <input  type="hidden" name="package" value="<?php echo $packages['expire_type'] ?>">
                                    <input  type="hidden" name="package_id" value="<?php echo $packages['package_id'] ?>">
                                    <input  type="hidden" name="package_row" value="<?php echo $i; ?>">
                                    <input  type="hidden" class="country" name="country" value="">                                    
                                    <button type="submit" class="jobutton btn btn-primary btn-lg col-xs-12 mg-b-sm submit" >Package <?php echo $packages['expire_amount'] ?> วัน <?php echo $packages['price'] ?> บาท รับสายไม่จำกัด</button>
                                </form>

                            <?php $i++; endif; ?>

                           <?php } ?>

	                         <a href="<?php echo base_url(); ?>customer/user/" class="jobutton btn btn-danger btn-lg col-xs-12 mg-b-lg mg-t-lg">
                                    <i class="fa fa-arrow-circle-left"></i>
                                    &nbsp;&nbsp;ย้อนกลับ&nbsp;&nbsp;
                           </a>      
                    </div>              
                	</div><!-- end row -->
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
            $('.date-data').change(function(){

                  var date = $('.date-data').val();
                  $('.date-submit').val(date);
                  

            });
            


            $("button.submit").click(function(){

                  var country = $('.country').val();
                  if(country == "" || country == null ){

                        $('.alert').show().delay(1000).fadeOut( 300 );
                        return false;                    
                  } 

            });


            $('#sel1').change(function(){

                  var country = $( "#sel1 option:selected" ).text();
                  $('input.country').val(country.trim());
            });
            
            $('.selectpicker').selectpicker({style: 'btn-info',size: 8, showIcon : false });

</script>
</html>

    
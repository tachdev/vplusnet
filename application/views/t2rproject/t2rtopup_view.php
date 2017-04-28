<body class="bg-dark bg-t2r">
    <div class="container topup-container">
    	    <?php $this->load->view('t2rproject/element/step'); ?>
        <div class="col-lg-4  sidebar-style">
            <?php $this->load->view('t2rproject/element/sidebar'); ?>
        </div>   	
        <div class="user-container col-lg-8  package-topup">
            <section class="panel">                
                <div class="user">
                    <form  method="post" role="form" action="<?php echo current_url(); ?>">
                	<h3>จ่ายค่า Package Basic ล่วงหน้า</h3><hr>
		            <p>                        
                        Package Basic 99 บาท/เดือน ใช้ฟรีทันที<br>
                        - Member Toll Free โทรหากันฟรี ระหว่างสมาชิก<br>
                        - Call Center T2R Free โทร 02-xxx-xxxx Free<br>
                        - T2R News Free ฟังข่าว IVR PR for Free (Content ของ T2R)<br>
                        - 5 Conference Call Free ประชุมทางโทรศัพท์ฟรี 5 คน<br>
                    </p>
                    <div class="package-select">
                        <h4>เลือกจำนวนเดือนที่ต้องการ</h4>
                        <p><input class="checkman" type="radio" name="month_pay" data-price="<?php echo $price_package['0']['package_price']; ?>"   value="1">  1 เดือน  </p> 
                        <p><input class="checkman" type="radio" name="month_pay" data-price="<?php echo $price_package['0']['package_price']*3; ?>" value="3">  3 เดือน  </p> 
                        <p><input class="checkman" type="radio" name="month_pay" data-price="<?php echo $price_package['0']['package_price']*6; ?>" value="6">  6 เดือน  </p> 
                        <p><input class="checkman" type="radio" name="month_pay" data-price="<?php echo $price_package['0']['package_price']*12; ?>" value="12">  12 เดือน </p> 
                    </div>  
                    <div class="policy-topup">
                        <u>เงื่อนไขบริการ</u></p>
                        <p>1.  เลือกสมัครและเติมเงินได้ทันที และหลังใช้บริการทุกๆครั้งระบบจะหักค่าบริการจากการเติมเงินขั้นต่ำ 50 บาท</p>
                        <p>2.  กรณีที่เงินคงเหลือศูนย์ ท่านไม่สามารถใช้บริการการโทรออกได้</p>
                        <p>3.  การใช้บริการนี้ท่านต้องชำระค่าบริการ Package Basic ทุกๆเดือน</p>
                        <p>4.  การเติมเงิน Package ใดๆหากไม่มีการชำระค่าบริการ Package Basic เป็นระยะเวลา 6 เดือนหากมีเงินเหลือใน package อื่นๆไม่สามารถใช้บริการได้ และเมื่อครบอายุสัญญา 1 ปี มูลค่าที่คงเหลือจะเป็นศูนย์ ไม่สามารถนำกลับมาใช้งานได้</p>
                    </div>

                                    
                </div>
                <div class="input-group col-lg-3" style="float:left;text-shadow:none;">
                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                    <input type="text" name="name" class="form-control main-field text-currency" placeholder="" disabled>                  
                </div>
                <div class="col-lg-1 currency">บาท</div> 
                <div class="col-lg-12 no-padding">            
                    <a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="jobutton btn btn-danger btn-lg mg-t-sm pull-left"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;ย้อนกลับ&nbsp;&nbsp;</a>
                    <button type="submit" class="btn btn-success btn-lg mg-t-sm pull-right"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;ดำเนินการต่อ&nbsp;&nbsp;</button>
                </div>
                </form>
            </section>
        </div>
      
</body>
<script type="text/javascript" >
        
          $(function(){

                $('input:radio').change(function(){

                        $('input.text-currency').val($(this).data('price'));
                });    

          });



</script>
</html>

    
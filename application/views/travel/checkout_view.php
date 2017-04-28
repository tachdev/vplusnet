<body class="bg-t2r">
    <?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container checkout">

            <section class="panel">
                <div style="text-align: center;"><img src="<?php echo base_url(); ?>assets/images/pic_2.png" ></div>
                <div class="alert alert-danger" style="display:none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            คุณยังไม่เลือกช่องทางชำระเงิน
                </div>           
                <div class="user">
                	<h3 style="color:orange;" ><strong>Step 2</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"> | Checkout</h3>
                    <hr>
		            <p><strong>Name</strong> : <?php echo $firstname; ?> <?php echo $lastname; ?></p>
		            <p><strong>Mobile</strong> : <?php echo $mobile; ?></p>
                    <p><strong>Country</strong> : <?php echo $country ?></p>
		            <p><strong>Package</strong> : Smartvoice Travel </p><br>
		            <table class="table no-margin bg-checkout">
                        <thead>
                            <tr>
                                <th class="col-md-3 pd-l-lg">
                                <span class="pd-l-sm"></span>Package</th>
                                <th class="col-md-2" style="text-align:center;width: 10%;">Start Date</th>
                                <th class="col-md-2" style="text-align:center;width: 10%;">End Date</th>
                                <th class="col-md-3" style="text-align:center;width: 10%;">ราคารวม</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="pd-l-sm" style="font-size:13px;" >Package <?php echo $expire; ?> วัน <?php echo $price?> บาท รับสายไม่จำกัด </span></td>
                                <td style="text-align:center;width: 10%;font-size:13px;"><?php echo $date_start; ?> </td>
                                <td style="text-align:center;width: 10%;font-size:13px;">
                                    <?php 


                                        echo $date_end;
                                    ?>
                                </td>
                                <td style="text-align:center;font-size:13px;">
                                    <?php echo $price ?> 
                                </td>
                            </tr>

                            <tr>
                                <td><span class="pd-l-sm"></span><strong>ยอดรวมสุทธิ</strong></td>
                                <td></td>
                                <td></td>
                                <td  style="text-align:center"><strong><?php echo $price ?> </strong></td>
                            </tr>
                            

                        </tbody>
                    </table>
                    <div class="payment">
                        <form  id="myForm" method="post" role="form" action="<?php echo base_url(); ?>customer/user/paymentprocess">
                             <h4 class="packageplusone">ช่องทางการชำระเงิน</h4>
    	                       <div class="mg-b-md payment-inner">
    							           <div class="radio col-lg-12 ">
                                      <!--<div class="col-xs-12 no-padding">
                                        <label><input type="radio" class="bull1" name="optradio" value="1">Credit Card</label>
                                        <img class="payment-image-1" src="<?php echo base_url(); ?>assets/img/webimage/credit_card.jpg">
                                      </div>
                                      <div class="col-xs-12 no-padding credit-box" style="display:none;">
                                          <div class="col-xs-6 mg-t-md">
                                                <label ><strong>Firstname</strong></label>
                                                <input type="text" name="firstname" class="form-control mg-t-xs" placeholder="กรุณากรอกชื่อ" value="" autocomplete="off"> 
                                          </div>
                                          <div class="col-xs-6 mg-t-md">
                                                <label class="mg-b-xs"><strong>Lastname</strong></label>
                                                <input type="text" name="lastname" class="form-control col-xs-6 mg-t-xs" placeholder="กรุณากรอกนามสกุล" value="" autocomplete="off">
                                          </div>
                                          <div class="col-xs-8 mg-t-md">
                                                <label class="mg-b-xs"><strong>Credit Card Number</strong></label>
                                                <input type="text" name="credit_card_number" class="form-control col-xs-6 mg-t-xs" placeholder="กรุณากรอกเลขบัตรเครดิต" value="" autocomplete="off">
                                          </div>
                                          <div class="col-xs-4 mg-t-md">
                                                <label class="mg-b-xs"><strong>CCV</strong></label>
                                                <input type="text" name="ccv" class="form-control col-xs-6 mg-t-xs" placeholder="กรุณากรอก CCV" value="" autocomplete="off">
                                          </div>
                                          <div class="col-xs-3 mg-t-md">
                                              <label class="mg-b-xs"><strong>Expired Month</strong></label>
                                              <select name="month" id="month" onchange="" class="selectpicker mg-t-xs">
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                               </select>
                                          </div> 
                                          <div class="col-xs-4 mg-t-md">
                                              <label class="mg-b-xs"><strong>Expired Year</strong></label>
                                              <select name="year" id="day" onchange=""  class="selectpicker mg-t-xs">

                                                    <?php for ($i=2016; $i <= 2050 ; $i++) {  ?>

                                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>

                                                    <?php } ?>

                                              </select>
                                          </div>  
                                      </div>
                                      
                                    </div>-->
                                    <div class="radio col-lg-12 ">
                                        <label><input type="radio" class="bull2" name="optradio" value="bank">โอนเงินผ่านธนาคารด้วยตนเอง (Manual Pay)</label>
                                        <img class="payment-image-2" src="<?php echo base_url(); ?>assets/img/webimage/bank.jpg">
                                    </div>
                                    <!--<div class="radio col-lg-12 ">
                                        <label><input type="radio" class="bull2" name="optradio" value="Credit">Credit Card</label>
                                        <img class="payment-image-1" src="<?php echo base_url(); ?>assets/img/webimage/credit_card.jpg">
                                    </div>
                                    <div class="radio col-lg-12 ">
                                        <label><input type="radio" class="bull2" name="optradio" value="SCB">SCB ธนาคารไทยพานิชย์ (Internet Banking)</label>
                                        <img class="payment-image-1" src="<?php echo base_url(); ?>assets/img/webimage/b1.png">
                                    </div>
                                    <div class="radio col-lg-12 ">
                                        <label><input type="radio" class="bull2" name="optradio" value="KTB">KTB ธนาคารกรุงไทย (Internet Banking)</label>
                                        <img class="payment-image-1" src="<?php echo base_url(); ?>assets/img/webimage/b6.png">
                                    </div>
                                    <div class="radio col-lg-12 ">
                                        <label><input type="radio" class="bull2" name="optradio" value="BAY">BAY ธนาคารกรุงศรี (Internet Banking)</label>
                                        <img class="payment-image-1" src="<?php echo base_url(); ?>assets/img/webimage/b5.png">
                                    </div>
                                    <div class="radio col-lg-12 ">
                                        <label><input type="radio" class="bull2" name="optradio" value="BBL">BBL ธนาคารกรุงเทพ (Internet Banking)</label>
                                        <img class="payment-image-1" src="<?php echo base_url(); ?>assets/img/webimage/b3.png">
                                    </div>
                                    <div class="radio col-lg-12">
                                        <label><input type="radio" class="bull3" name="optradio" value="CounterService">Counter Service</label>
                                        <img class="payment-image-3" src="<?php echo base_url(); ?>assets/img/webimage/counter_service.jpg">
                                    </div>-->
    						               </div>
                               <br>
                               <a href="<?php echo base_url(); ?>customer/user/package" class="jobutton btn btn-danger btn-lg col-xs-3 mg-b-lg mg-r-xs">
                                    <i class="fa fa-arrow-circle-left"></i>
                                    &nbsp;&nbsp;ย้อนกลับ&nbsp;&nbsp;
                               </a>                   
                               <input type="hidden"  name="comfirm" value="confirm_payment">
                               <input type="submit" class="jobutton btn btn-success btn-lg col-xs-5 mg-b-lg mg-r-sm submit" value="ยืนยันการสั่งซื้อ">
                        </form>
                    </div>
                    <br><br>
                </div>
            </section>
        </div>
    </div>
</body>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">

        $("input.submit").click(function(){
            
            var check = $('input[name=optradio]:checked', '#myForm').val();
            if(check === undefined ){

                $('.alert').show().delay(1500).fadeOut( 300 );
                return false;  
            }

        
        });

        $('.selectpicker').selectpicker({
              style: 'btn-info',
              size: 4,
              showIcon: false
        });

        $('#myForm').submit(function() {
            
            $( 'body').css( "display" ,"none" )
            $(".submit").prop('disabled', false);

        });

        $(document).ready(function () { 

            $(".bull1,.bull2,.bull3").change(function(){

                if ($(".bull1").is(":checked")) {

                    $('.credit-box').show();

                }else if ($(".bull2").is(":checked")) {

                    $('.credit-box').hide();

                }else if ($(".bull3").is(":checked")) {

                    $('.credit-box').hide();
                }
            });

        });
</script>
</html>

    
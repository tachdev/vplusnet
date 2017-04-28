

<body class="bg-dark bg-t2r">
<?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class=" col-lg-12 package-topup no-padding mg-t-lg">
            <section class="panel">                
                <div class="user ">

                    <form  method="post" role="form" action="<?php echo base_url('t2rproject/user/validate_credentials'); ?>">
                        <div class="general_row mainmenu">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                        <h3 style="margin-top:0;"><strong>Buy Package</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h3>
                        <div class="col-xs-12 package-box">
                                  <div class="col-xs-9 no-padding">
                                    <img src="<?php echo base_url(); ?>assets/images/Shopping-basket-icon.png">
                                    <div class="package-text">
                                        <h2><strong>Smart Voice Travel Package</strong></h2>
                                        <p>บริการรับสาย-โทรกลับเมืองไทย เมื่ออยู่ต่างเเดน <br>โดยใช้เบอร์มือถือของท่านเพียงมี Wifi (ไม่ต้องเปิดบริการ Voice Roaming)</p>
                                    </div>
                                  </div>
                                  <div class="col-xs-3 no-padding" style="text-align: right;margin-top:5px;position: relative;">
                                      <a href="<?php echo base_url(); ?>customer/user/package" class="jobutton btn btn-info btn-lg" style="text-align: center">
                                      &nbsp;&nbsp;<span style="font-size:30px;">Buy</span> <br>SmartVoice Travel Package&nbsp;&nbsp;
                                      </a>
                                  </div>

                        </div>
                        <br>
                        
                    </div>              
                    </div><!-- end row -->
                 </form>

                </div><br>
                <a href="<?php echo base_url(); ?>customer/user" class="jobutton btn btn-danger btn-lg">Back To Menu</a>
            </section>

        </div>

        
    </div>
</body>

</html>

    
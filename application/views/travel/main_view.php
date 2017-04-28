

<body class="bg-dark bg-t2r">
    <?php $this->load->view('travel/element/nav'); ?>
    <div class="container">        
        <div class="col-lg-12 sidebar-style mg-t-lg main-style">            
            
          
            <div class="col-lg-12 no-padding" >
                <div class=" col-lg-4 package-topup mg-t-lg" >
                <section class="panel" >
                    <h3 style="margin-top:0;"><strong>User Detail</strong></h3>  
                    <p>รายละเอียดผู้ใช้งาน</p>
                    <hr>              
                    <div class="user " style="height:98px">
                        <img class="profile-img" src="<?php echo base_url(); ?>assets/images/profile_2.png">
                        <div>
                        <p><strong>Name</strong>  : <?php echo $firstname ?> <?php echo $lastname ?></p>
                        <p><strong>Email</strong> : <?php echo $email; ?></p>
                        <p><strong>Mobile Number</strong> :  <?php echo $mobile; ?></p>
                        </div>

                    </div>
                </section>
                </div>
                <div class=" col-lg-4 package-topup mg-t-lg" >
                    <section class="panel" >                
                        <div class="user ">

                            <div class="general_row mainmenu">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <h3 style="margin-top:0;"><strong>Call Detail</strong></h3>
                                <p>รายละเอียดการใช้งาน</p>
                                <hr>
                               
                                          <div class="col-xs-4 no-padding">
                                            <img src="<?php echo base_url(); ?>assets/images/slider/phone.png">
                                            
                                          </div>
                                          <div class="col-xs-3 no-padding" style="text-align: right;margin-top:5px;position: relative;">
                                              <a href="<?php echo base_url(); ?>customer/user/userpackage" class="jobutton btn btn-info btn-md mg-t-md" style="text-align: center">
                                              &nbsp;&nbsp;<span style="font-size:25px;">View Call </span>&nbsp;&nbsp;
                                              </a>
                                          </div>
                                          <!--<div class="package-text">
                                                <p>บริการรับสาย-โทรกลับเมืองไทย เมื่ออยู่ต่างเเดน <br>โดยใช้เบอร์มือถือของท่านเพียงมี Wifi (ไม่ต้องเปิดบริการ Voice Roaming)</p>
                                          </div>-->
                                <br>
                                
                            </div>              
                            </div><!-- end row -->

                        </div>
                    </section>
                </div>
                <div class=" col-lg-4 package-topup mg-t-lg">
                    <section class="panel">                
                        <div class="user ">

                                <div class="general_row mainmenu">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <h3 style="margin-top:0;"><strong>Buy Package</strong> </h3>
                                <p>ซื้อเเพ็คเกจ</p>
                                <hr>
                                          <div class="col-xs-4 no-padding">
                                            <img src="<?php echo base_url(); ?>assets/images/slider/ecommerce-buy-icon.png">
                                            
                                          </div>

                                          
                                            <?php if(!empty($package)): ?>

                                                <div style="text-align:right">คุณไม่สามารถซื้อPackage ได้<br>เนื่องจากมี Package เเล้ว</div>

                                            <?php else: ?>

                                             <div class="col-xs-3 no-padding" style="text-align: right;margin-top:5px;position: relative;">
                                                <a href="<?php echo base_url(); ?>customer/user/buymain" class="jobutton btn btn-info btn-md mg-t-md" style="text-align: center">&nbsp;&nbsp;<span style="font-size:25px;">Buy Package</span>&nbsp;&nbsp;
                                              </a>

                                              </div>
                                            <?php endif;?>
                                              
                                         
                                          <!--<div class="package-text">
                                                <p>บริการรับสาย-โทรกลับเมืองไทย เมื่ออยู่ต่างเเดน <br>โดยใช้เบอร์มือถือของท่านเพียงมี Wifi (ไม่ต้องเปิดบริการ Voice Roaming)</p>
                                          </div>-->
                                <br>
                                
                            </div>              
                            </div><!-- end row -->

                        </div>
                    </section>
                </div>

            
            </div>
            <div class="col-lg-12 package-topup" >
                    <h3><strong>Your Package</strong></h3>
                    <br>
                    <?php if(!empty($package)): ?>
                      <div style="display: block;">
                                <div style="width:7%;float:left"><strong>#Order </strong></div>
                                <div style="width:22%;float:left"><strong>Package Name</strong></div>
                                <div style="width:11%;float:left"><strong>Country</strong></div>
                                <div style="width:6%;float:left"><strong>Price</strong></div>
                                <div style="float:left;width:15%;"><strong>เริ่มต้นวันที่ / Start Date</strong></div>
                                <div style="float:left;width:15%;"><strong>หมดอายุวันที่ / Expire Date</strong></div>
                                <div style="width:10%;float:left;text-align:center;"><strong>Status</strong></div>
                      </div><br><br>

                     <?php for ($i=0; $i < count($package); $i++) { ?>
                      <section class="panel" style="display: block;">

                        <div style="width:6%;float:left;margin-top:4px"><?php echo $package[$i]['order_id']; ?></div>
                        <div style="width:23%;float:left;margin-top:4px"><?php echo $package[$i]['package_title']; ?></div>
                        <div style="width:11%;float:left;margin-top:4px"><?php echo $package[$i]['country']; ?></div>
                        <div style="width:6%;float:left;margin-top:4px"><?php echo $package[$i]['total_price']; ?></div>
                        <div style="float:left;width:15%;margin-top:4px"><?php echo date_format(date_create($package[$i]['date_start']),"Y/m/d ");?></div>
                        <div style="float:left;width:19%;margin-top:4px"><?php echo date_format(date_create($package[$i]['date_end']),"Y/m/d ");?></div>
                        <?php if($package[$i]['status'] == 1): ?>
                        <div style="width:20%;float:left;">
                        <div style="float:left;margin-top:4px"> <i class="fa fa-money" aria-hidden="true"></i> รอการชำระเงิน*</div>
                        <a  href="<?php echo base_url(); ?>customer/user/paymentconfirm/<?php $package[$i]['tran_id'] = $package[$i]['tran_id']+1985;  echo base_convert($package[$i]['tran_id'] , 10 , 36 ); ?>" class="jobutton btn btn-danger btn-sm" style="float:right">เเจ้งชำระเงิน</a>
                        </div>
                        <?php endif; ?>
                        <?php if($package[$i]['status'] == 2): ?>
                            <div style="width:20%;float:left;">
                            <div style="float:left;margin-top:4px"> <i class="fa fa-clock-o" aria-hidden="true"></i> รอการอนุมัติ...</div>
                            <a  href="<?php echo base_url(); ?>customer/user/paymentconfirm/<?php $package[$i]['tran_id'] = $package[$i]['tran_id']+1985;  echo base_convert($package[$i]['tran_id'] , 10 , 36 ); ?>" class="jobutton btn btn-info btn-sm" style="float:right">เเจ้งชำระเงิน</a>
                            </div>
                        <?php endif; ?>
                        <?php if($package[$i]['status'] == 3): ?>
                            <div style="width:20%;float:left;">
                            <div style="float:left;margin-top:4px"><i class="fa fa-check" aria-hidden="true"></i>  พร้อมใช้งาน</div>
                            <div  class="btn-success btn-sm" style="float:right">ชำระเงินเเล้ว</div>
                            </div>
                        <?php endif; ?>

                     </section>
                   <?php  } ?>
                    
                 <?php else: ?>

                    <div class="no-package mg-b-sm">ท่านยังไม่มี package ในขณะนี้&nbsp;
                    <a href="<?php echo base_url(); ?>customer/user/buymain" > 
                    <strong><u>ซื้อ Package Smartvoice Travel</u></strong>&nbsp;&nbsp;
                   </a></div>

                <?php endif; ?>

                
            </div>
            <!--<div class="col-lg-12 package-topup" >
                <h4><strong>Your Package</strong></h4>
                <table class="table no-margin bg-sidebar mg-b-lg tableman" style="text-align: left;">
                            <tr>
                                <th style="width:40%;" >Package Name</th>
                                <th style="width:11%;" >Country</th>
                                <th style="width:6%;" >Price</th>
                                <th >เริ่มต้นวันที่ / Start Date</th>
                                <th >หมดอายุวันที่ / Expire Date</th>
                                <th style="width:13%;" ></th>
                            </tr>
                </table>
                <section class="panel" style="overflow-y:scroll;height: 150px"> 
                <?php if(isset($package)): ?>

                    <table class="table no-margin bg-sidebar mg-b-lg tableman">


                            
                            <?php foreach ($package as $packages) { ?>
                                <tr>
                                <td style="width:40%;"><?php echo $packages['package_title']; ?></td>
                                <td style="width:12%;"><?php echo $packages['country']; ?></td>
                                <td style="width:6%;"><?php echo $packages['total_price']; ?></td>
                                <td>
                                    <?php echo $packages['date_start'];?>
                                   
                                </td>
                                <td>
                                     <?php 

                                        $timenow = strtotime(date('Y-m-d H:i:s'))."<br>"; 
                                        $timeend = strtotime($packages['date_end']);

                                        if($timenow >= $timeend ){

                                            echo "<p><span style='color:red'>".$packages['date_end']."**</span></p>";

                                        }else{

                                            echo "<p>".$packages['date_end']."</p>";
                                        }

                                    ?>
                                </td>
                                <td style="width:10%;"><a href="#" class="jobutton btn btn-info btn-xs" style="float:right">รอการชำระเงิน</a></td>
                                </tr>
                            <?php } ?>
                            
                    </table>

                <?php else: ?>

                    <div class="no-package mg-b-sm">ท่านยังไม่มี package ในขณะนี้</div>

                <?php endif; ?>
                </section>-->
            </div>


            
           

        </div>
        
    </div>
</body>

</html>

    
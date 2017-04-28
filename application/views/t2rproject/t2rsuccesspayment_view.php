<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="user-container col-lg-8 col-lg-offset-2 t2r-register package">
            <div class="col-lg-12  mg-b-sm" style="color:#fff;">
                <ul class="progress col-lg-12">
                    <li class="col-xs-3 <?php if($step == 1){echo 'active'; } ?>">Step 1
                        <p class="progress-font">Select Package</p>
                    </li>
                    <li class="col-xs-1 bg-none mg-t-md">
                        <i class="fa fa-arrow-circle-right"></i>
                    </li>
                    <li class="col-xs-3 <?php if($step == 2){echo 'active'; } ?>">
                        Step 2 
                        <p class="progress-font">add on package</p>
                    </li>
                    <li class="col-xs-1 bg-none mg-t-md">
                        <i class="fa fa-arrow-circle-right"></i>
                    </li>
                    <li class="col-xs-3 <?php if($step == 3){echo 'active'; }?>">
                        Finished
                        <p class="progress-font">Payment Confirm</p>
                    </li>
                </ul>            
            </div>
            <section class="panel">                
                <div class="user">
                	<h3>
                        Payment Success
                        <a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="jobutton btn btn-success btn-md mg-b-lg pull-right"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;mainmenu&nbsp;&nbsp;</a>
                        <a href="<?php echo base_url(); ?>t2rproject/user/logout" class="jobutton btn btn-info btn-md mg-r-sm mg-b-lg pull-right"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;logout&nbsp;&nbsp;</a>
                    </h3>
		            <p>ชื่อ <?php echo $firstname; ?> <?php echo $lastname; ?></p>
		            <p>หมายเลขโทรศัพท์ : <?php  echo $mobile; ?></p>
		            <p>เงินในบัญชี : <?php  echo $money; ?> บาท</p>
                    <hr><br>
                        <ul id="success_finish" class="col-lg-7 col-lg-offset-2 menu-success-payment">
                            <li><a style="color:orange;" href="<?php echo base_url(); ?>t2rproject/user/t2rtopup">เปลี่ยนแปลง Package/ Top up</a></li>
                            <li><a style="color:orange;" href="<?php echo base_url(); ?>t2rproject/user/t2rcalldetail">ดูรายละเอียดการใช้งาน Call Detail</a></li>
                        </ul>
                    <div class="thank col-lg-7 col-lg-offset-2">
                        <h3 style="text-align:center">Thank For Payment</h3>
                        <h3 style="text-align:center">ยอดรวมสุทธิในการสั่งซื้อ <?php echo $total_price; ?> บาท</h3>
                    </div>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    
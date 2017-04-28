

<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="col-lg-3 col-lg-offset-2 t2r-register sidebar-style">
            <?php $this->load->view('t2rproject/element/sidebar'); ?>
        </div>
        <div class="user-container col-lg-6 t2r-register package mg-l-md">
            <div class="col-lg-12 mg-b-sm" style="color:#fff;">
                <ul class="progress col-lg-12">
                    <li class="col-xs-3 <?php if($step == 1){echo 'active'; } ?>">Step 1
                        <p class="progress-font">Select Package</p>
                    </li>
                    <li class="col-xs-1 bg-none mg-t-md">
                        <i class="fa fa-arrow-circle-right"></i>
                    </li>
                    <li class="col-xs-3 <?php if($step == 2){echo 'active'; } ?>">
                        Step 2 
                        <p class="progress-font">add package</p>
                    </li>
                    <li class="col-xs-1 bg-none mg-t-md">
                        <i class="fa fa-arrow-circle-right"></i>
                    </li>
                    <li class="col-xs-3 <?php if($step == 3){echo 'active'; }?>">
                        Checkout
                        <p class="progress-font">Payment</p>
                    </li>
                </ul>            
            </div>
            <section class="panel">               
                <div class="user">

                    <form  method="post" role="form" action="<?php echo base_url(); ?>t2rproject/user/t2rpackageplus">
	                       <h2><?php echo $package['0']['package_title']; ?></h2> 
                           <h4>Detail : Call Free</h4><br>
                            <p>pecial Offer for Member “   โชว์เบอร์มือถือคุณทุกครั้งที่โทรออก ”(เฉพาะโทรไทย)
                            เพียงคุณสมัครสมาชิกวันนี้ เริ่มต้นที่ Welcome Package Basic <?php echo $package['0']['package_price']; ?> บาท/เดือน  ใช้ฟรีทันที</p>
                            <ul>
                                <li>- Member Toll Free โทรหากันฟรี ระหว่างสมาชิก</li>
                                <li>- Call Center T2R Free โทร 02-xxx-xxxx Free</li>
                                <li>- T2R News Free ฟังข่าว IVR PR for Free (Content ของ T2R)</li>
                                <li>- 5 Conference Call Free  ประชุมทางโทรศัพท์ฟรี 5 คน</li>
                            </ul>
                            <div class="policy">
                                    
                                    <?php echo $package['0']['package_des']; ?>

                           </div>                          
                           <a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="jobutton btn btn-danger btn-lg pull-left col-xs-5 mg-b-lg "><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;กลับสู่ menu&nbsp;&nbsp;</a>
                           <button type="submit" class=" btn btn-info btn-lg col-xs-5  mg-b-sm pull-right"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;ดำเนินการต่อ&nbsp;&nbsp;</button>
                    </form>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    
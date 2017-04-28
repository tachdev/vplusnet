
<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="user-container col-lg-8 col-lg-offset-2 t2r-register package">
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
                        <p class="progress-font">add on package</p>
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
                	<h3>Account</h3>
		            <p>ชื่อ <?php echo $firstname ?> <?php echo $lastname; ?></p>
		            <p>หมายเลขโทรศัพท์ : <?php echo $mobile ?></p>
		            <p>เงินในบัญชี : <?php echo $money ?> บาท</p>
		            <table class="table no-margin bg-checkout">
                        <thead>
                            <tr>
                                <th class="col-md-3 pd-l-lg">
                                <span class="pd-l-sm"></span>Package</th>
                                <th class="col-md-2">Start Date</th>
                                <th class="col-md-2">End Date</th>
                                <th class="col-md-2" style="text-align:center">ราคาต่อเดือน</th>
                                <th class="col-md-3" style="text-align:center">ราคารวม</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 

                                $total_price = 0; 
                                foreach ($checkout as $checkouts) { 

                            ?>

                                <tr>
                                    <td><span class="pd-l-sm"></span><?php echo $checkouts['package_short_name'] ?></td>
                                    <td><?php echo date("d/m/Y"); ?> </td>
                                    <td>
                                    <?php 

                                        $time = strtotime(date("Y/m/d"));
                                        echo date("d/m/Y", strtotime("+1 month", $time)); 
                                    ?>
                                    </td>
                                    <td style="text-align:center" >
                                    <?php 

                                        if($checkouts['package_price'] != 0){

                                            if(isset($month_pay)){

                                                echo $checkouts['package_price']." x ".$month_pay;

                                            }else{

                                                echo $checkouts['package_price'];
                                            }
                                            

                                        }else{

                                            echo $checkouts['package_price_on_demand'];
                                        }
                                    ?>
                                    </td>
                                    <td style="text-align:center">
                                        <?php 

                                            if($checkouts['package_price'] != 0){

                                                if(isset($month_pay)){
                                                    $checkouts['package_price']  =  $checkouts['package_price']*$month_pay;
                                                    echo $checkouts['package_price']."   Baht";

                                                }else{

                                                    echo $checkouts['package_price']."   Baht";  
                                                }

                                                
                                            }else{

                                                echo $checkouts['package_price_on_demand'];
                                            }
                                           
                                            $total_price +=  $checkouts['package_price'];
                                            $this->session->set_userdata('total_price', $total_price);
                                        ?> 
                                    </td>
                                </tr>

                            <?php } ?>

                            <tr>
                                    <td><span class="pd-l-sm"></span><strong>ยอดรวมสุทธิ</strong></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td style="text-align:center">
                                        <strong><?php echo  $total_price; ?>  Baht</strong>
                                    </td>
                            </tr>
                            

                        </tbody>
                    </table>
                    <form  method="post" role="form" action="<?php echo current_url(); ?>">
	                       
                           <h4 class="packageplusone">เงื่อนไข</h4>
	                       <div class="packageplusone mg-b-md">
							   <p><u>เงื่อนไขการบริการ</u></p>
							   <p>1.CLI -โชว์เบอร์ SIMมือถือของสมาชิกตามที่ลงทะเบียนเบอร์ SIM</p>
							   <p>2.เงินที่เติมสามารถใช้บริการได้สูงสุด 1 ปี หรือจนกว่าเงินหมด</p>
							   <p>3.ในกรณีที่เกิน 1 ปี หากมีเงินคงเหลืออยู่ใน Account  สมาชิกยินยอมให้หักเงินเป็นศูนย์ได้</p>
						   </div>
                           <?php if(isset($topup)): ?>
                                <a href="<?php echo base_url(); ?>t2rproject/user/t2rtopup" class="jobutton btn btn-danger btn-lg col-xs-3 mg-b-lg mg-r-xs"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;ย้อนกลับ&nbsp;&nbsp;</a>
                           <?php else: ?>
                                <a href="<?php echo base_url(); ?>t2rproject/user/t2rpackageplus" class="jobutton btn btn-danger btn-lg col-xs-3 mg-b-lg mg-r-xs"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;ย้อนกลับ&nbsp;&nbsp;</a>
                           <?php endif; ?>                           
                           <input type="hidden"  name="comfirm" value="confirm_payment">
                           <input type="submit" class="jobutton btn btn-success btn-lg col-xs-5 mg-b-lg mg-r-sm" value="ยืนยันการสั่งซื้อ">
                           
                    </form>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    
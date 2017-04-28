<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="col-lg-3 col-lg-offset-1 t2r-register sidebar-style">
            <?php $this->load->view('t2rproject/element/sidebar'); ?>
        </div>
        <div class="user-container col-lg-7 t2r-register package mg-l-md">
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

                <form  method="post" role="form" action="<?php echo base_url(); ?>t2rproject/user/t2rcheckout">
                 <h2>เลือก Package เสริม</h2> 
                 <p>หากท่านไม่ต้องการ package เสริมให้กดที่ปุ่มข้ามไปขั้นตอนนี้</p>
                 <hr>
                 <h4 class="packageplusone"><input type="checkbox" name="<?php echo $package['1']['des_name']; ?>" value="<?php echo $package['1']['des_name']; ?>">  <?php echo $package['1']['package_title']; ?>
                    <a class="btn btn-info btn-md mg-t-sm mg-l-md" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fa fa-toggle-down"></i>  อ่านรายละเอียด Package
                    </a>
                </h4>
                <div class="collapse packageplusone mg-b-md" id="collapseExample">
                      <?php echo $package['1']['package_des']; ?>
               </div>

      			   <h4 class="packageplusone">
      						   		<p>Buffet คุ้มค่าทุกเวลา โทรทั่วไทย (กรุณาเลือก มี 2 แบบ ) </p><br>
      						   		<p><input type="checkbox" name="<?php echo $package['2']['des_name']; ?>" class="checkman1" value="<?php echo $package['2']['des_name']; ?>"> <?php echo $package['2']['package_title']; ?></p>
      						   		<p><input type="checkbox" name="<?php echo $package['3']['des_name']; ?>" class="checkman2" value="<?php echo $package['3']['des_name']; ?>"> <?php echo $package['3']['package_title']; ?> </p>
                        <a class="btn btn-info btn-md mg-t-sm mg-l-md" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                              <i class="fa fa-toggle-down"></i>  อ่านรายละเอียด Package
                        </a>
      			   </h4>
               <div class="collapse packageplusone mg-b-md" id="collapseExample2">
                      <?php echo $package['2']['package_des']; ?>
               </div>

						  <h4 class="packageplusone"><input type="checkbox" name="<?php echo $package['4']['des_name']; ?>" value="<?php echo $package['4']['des_name']; ?>"> 
                <?php echo $package['4']['package_title']; ?> <br>
                <a class="btn btn-info btn-md mg-t-sm mg-l-md" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa fa-toggle-down"></i>  อ่านรายละเอียด Package
                </a>
              </h4>
              <div class="collapse packageplusone mg-b-md" id="collapseExample3">
                        <p>หมายเหตุ  อัตราดังกล่าวอาจมีการเปลี่ยนแปลงได้ บริษัทฯขอสงวนสิทธิ์ ไม่มีการแจ้งล่วงหน้า</p><br>
                        <h5><strong>อัตราค่าบริการ Package โทรต่างประเทศ A-Z</strong></h5>
                        <table class="table table-striped table-hover" style="text-align:center">
                        <tbody>
                            <tr class="info">
                                <td><strong>ITEM</strong></td>
                                <td><strong>NAME</strong></td>
                                <td><strong>COUNTRY</strong></td>
                                <td><strong>Fixed Rate(baht)</strong></td>
                                <td><strong>Mobile Rate(baht)</strong></td>
                            </tr>
                            <?php foreach ($rate_price as $rate_prices ) { ?>

                                <tr>
                                    <td><?php echo $rate_prices['item_id']; ?></td>
                                    <td><?php echo $rate_prices['country_name']; ?></td>
                                    <td><?php echo $rate_prices['country_code']; ?></td>
                                    <td><?php echo $rate_prices['fixed_rate_price']; ?></td>
                                    <td><?php echo $rate_prices['mobile_rate_price']; ?></td>
                                </tr>

                            <?php } ?>                                                        
                        </tbody>
                    </table>

                </div><p></p>
                        
                           <a href="<?php echo base_url(); ?>t2rproject/user/t2rpackage" class=" btn btn-danger btn-lg pull-left col-xs-3 mg-b-lg"><i class="fa fa-arrow-circle-left"></i>&nbsp;&nbsp;กลับสู่ menu&nbsp;&nbsp;</a>
                           <a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class=" btn btn-danger btn-lg pull-left col-xs-3 mg-b-lg mg-l-sm">&nbsp;&nbsp;ข้ามขั้นตอนนี้&nbsp;&nbsp;</a>
                           <button type="submit" class=" btn btn-info btn-lg col-xs-3  mg-b-sm pull-right"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;ดำเนินการต่อ&nbsp;&nbsp;</button>
                </form>

                </div>
            </section>
        </div>
    </div>
</body>

<script type="text/javascript" >
    
            $(".checkman1").live('click', function() {

                if($('input.checkman2').prop('checked')){

                     $('input.checkman2').attr('checked', false);

                }

            });

            $(".checkman2").live('click', function() {

                if($('input.checkman1').prop('checked')){

                     $('input.checkman1').attr('checked', false);

                }

            });

</script>

</html>

    
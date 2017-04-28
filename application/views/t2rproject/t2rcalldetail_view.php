

<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="user-container col-lg-8 col-lg-offset-2 t2r-detail package">
            <section class="panel">                
                <div class="user">
                	<h3>Account</h3>
		            <p>ชื่อ <?php echo $firstname; ?> <?php echo $lastname; ?></p>
		            <p>หมายเลขโทรศัพท์ : <?php echo $mobile ?></p>
		            <p>เงินในบัญชี : <? echo $money; ?> บาท</p><br>

                    <hr>
                    <h3>Package ของคุณ</h3>
		            <table class="table no-margin bg-checkout">
                        <thead>
                            <tr>
                                <th class="col-md-3 pd-l-lg"><span class="pd-l-sm"></span>Package</th>
                                <th class="col-md-2">Start Date</th>
                                <th class="col-md-2">End Date</th>
                                <th class="col-md-3">อัตราค่าบริการรายเดือน</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($current_package_detail as $current_packages_detail) { ?>
                            
                                <tr>
                                    <td><?php echo $current_packages_detail['package_name']; ?></td>
                                    <td><?php echo date( "d-m-Y" , strtotime($current_package['0']['date_start'])); ?></td>
                                    <td><?php echo date( "d-m-Y" , strtotime($current_package['0']['date_end']));   ?></td>
                                    <td style="text-align:center"><?php echo $current_packages_detail['package_price']; ?></td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                   

                </div>
            </section>

            <section class="panel">                
                <div class="user">
                    <h3>รายละเอียดการใช้งาน</h3><hr>
                    <div class="form-group">
                        
                        <div class="col-sm-5 calldetail-date">
                            <label class="col-lg-3 control-label">Start</label>
                            <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" value="<?php $endtime = strtotime(date("Y-m-d H:i:s")); echo date("d-m-Y" , strtotime("-1 month", $endtime));  ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-white add-on" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        
                        <div class="col-sm-5 calldetail-date">
                            <label class="col-lg-3 control-label">End</label>
                            <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" value="<?php echo date("d-m-Y"); ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-white add-on" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-md btn-success mg-t-xs">filter</button>
                        </div>
                    </div>
                    <table class="table no-margin bg-checkout">
                        <thead>
                            <tr>
                                <th class="col-md-3 pd-l-lg">
                                    <span class="pd-l-sm"></span>Mobile Number</th>
                                <th class="col-md-2">Date</th>
                                <th class="col-md-2">Start Call</th>
                                <th class="col-md-2">End Call</th>
                                <th class="col-md-3" style="text-align:center">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($call_used as $call_useds ) { ?>
                                 <tr>
                                    <td><?php echo $call_useds['mobile_number'] ?></td>
                                    <td><?php echo date("Y-m-d", strtotime($call_useds['call_start'])); ?></td>
                                    <td><?php echo date("H:i:s", strtotime($call_useds['call_start'])); ?></td>
                                    <td><?php echo date("H:i:s", strtotime($call_useds['call_end']));   ?></td>
                                    <td style="text-align:center">
                                        <?php echo $call_useds['amount'] ?>
                                    </td>
                                </tr>
                            <?php } ?>                           
                        </tbody>
                    </table>
                   
                    <a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="jobutton btn btn-success btn-lg col-xs-3 mg-b-lg mg-t-lg"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;mainmenu&nbsp;&nbsp;</a><br>
                </div>
            </section>
        </div>
    </div>
</body>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
        $('.datepicker').datepicker({ });
</script>
</html>

    
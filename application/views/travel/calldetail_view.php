

<body class="bg-dark bg-t2r">
<?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-12 mg-t-lg package" style="padding:25px;">
            <section class="panel">                
                <div class="user">
                	<h3><strong>Smart Voice Travel </strong></h3>
                    
                    <div class="detail-box">
                            <p><strong>Mobile Number</strong> : <?php echo $mobile; ?></p>
                            <p><strong>Name</strong> <?php echo $firstname; ?> <?php echo $lastname; ?></p>
                            <p><strong>Email</strong> : <?php echo $email; ?></p>
                    </div>
                </div>
            </section>
            <section class="panel col-lg-12 detail-box">
                             
                <div class="user ">
                    <h4>รายละเอียดการใช้งาน</h4><hr>
                    <!--<div class="form-group">
                      <form method="post" action="<?php echo current_url(); ?>`">
                        <div class="col-sm-5 calldetail-date">
                            <label class="col-lg-3 control-label">Start</label>
                            <div class="input-group mg-b-md input-append date datepicker"  data-date-format="dd-mm-yyyy">
                                <input type="text" class="form-control" name="date_range_start" 
                                value="<?php if( isset($date_range_start)) echo date("d-m-Y" , $date_range_start);  ?>">
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
                                <input type="text" name="date_range_end" class="form-control" 
                                value="<?php if( isset($date_range_end)) echo date("d-m-Y" , $date_range_end);  ?>">
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
                    </form>-->
                    <table id="example" class="display responsive nowrap table"  width="100%">
                        <thead>
                            <tr>
                                <th>Caller</th>
                                <th>Starttime</th>
                                <th>StopTime</th>
                                <th>Station</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Caller</th>
                                <th>Starttime</th>
                                <th>StopTime</th>
                                <th>Station</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!--<table class="table no-margin ">
                        <thead>
                            <tr>
                                <th class="col-md-3 pd-l-lg">
                                    <span class="pd-l-sm"></span>Call Number</th>
                                <th class="col-md-2">Date</th>
                                <th class="col-md-2">Start Call</th>
                                <th class="col-md-2">Duration(Minute)</th>
                                <th class="col-md-3" style="text-align:center">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($call as $calls) { ?>

                                <tr>
                                    <td><span class="pd-l-sm"></span><?php echo $calls['call_out_number']?></td>
                                    <td><?php echo date("d/m/Y", strtotime($calls['call_start'])); ?></td>
                                    <td><?php echo date("H:i", strtotime($calls['call_start'])); ?></td>
                                    <td style="text-align:center"><?php echo $time_duration = ceil(( strtotime($calls['call_end']) - strtotime($calls['call_start']) ) / 60 )?></td>
                                    <td style="text-align:center"><?php echo $calls['amount']?></td>
                                </tr> 

                            <?php } ?>
                                               
                        </tbody>
                    </table>-->
                   
                </div>

            </section>
            <a href="<?php echo base_url(); ?>customer/user" class="jobutton btn btn-danger">Back To Menu</a>
        </div>
    </div>
    <input type="hidden" class="url" name="url" value="<?php echo base_url(); ?>">
</body>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker.css">
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/foundation.min.css">-->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.foundation.min.css">-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.foundation.min.css">
<!--<script type="text/javascript" src="jQuery-2.2.3/jquery-2.2.3.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.foundation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/responsive.foundation.min.js"></script>
<script type="text/javascript">
        $('.datepicker').datepicker({ });
        $(document).ready(function() {
            $('#example').DataTable( {
                "ajax": {

                    "url": $(".url").val()+"customer/user/usage_customer_api",
                    "type": "POST",
                    "data": {mobile : "0868966386", password : "0868966386"}
                }
            });
        } );

</script>
</html>

    
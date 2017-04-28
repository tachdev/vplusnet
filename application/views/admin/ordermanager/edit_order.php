          <!-- main content -->
            <section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content ">
                                <section class="tab-pane active" id="elements">
                                    <div class="row">

                                        <div class="col-lg-12 ">
                                            <?php if( isset($message) && $message == 1) :?>
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Finish!</strong>ข้อมูลของคุณได้ถูก update เเล้ว.
                                                </div>
                                            <?php elseif( isset($message) && $message == 2): ?>
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <?php echo $message_error ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-lg-12">
                                            <section class="panel team_account">
                                               <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Order Create : <?php echo $order['0']['date_create']; ?></header>
                                                <div class="panel-body team col-lg-12">
                                                <div class=" col-lg-6 mg-b-lg">
                                                <p><strong>Order Id</strong> : <?php echo $order['0']['order_id']; ?></p>
                                                <p><strong>Package Id</strong> : <?php echo $order['0']['package_id']; ?></p>
                                                <p><strong>Country</strong> : <?php echo $order['0']['country']; ?></p>
                                                <p><strong>Total Price</strong> : <?php echo $order['0']['total_price']; ?></p><br>
                                                <p><strong>Status</strong> : 

                                                		<?php 

						                                                    if($order['0']['status'] == 1){

						                                                        echo "&nbsp;&nbsp;<span class='btn btn-warning btn-xs'>ยังไม่ได้ชำระเงิน</span>";

						                                                    }elseif($order['0']['status'] == 2){

						                                                        echo "&nbsp;&nbsp;<span class='btn btn-warning btn-xs'>รอการตรวจสอบ</span>";
						                                                        
						                                                    }else{

						                                                        echo "&nbsp;&nbsp;<span class='btn btn-success btn-xs'>ชำระเงินเรียบร้อยเเล้ว</span>";
						                                                    }

                                                		?>
                                                		
                                                	</p>
                                                <p><strong>Date Start</strong> : <?php echo $order['0']['date_start']; ?></p>
                                                <p><strong>Date End</strong> : <?php echo $order['0']['date_end']; ?></p>
		                        				
		                        				<p><strong>Tran Id</strong> : <?php echo $order['0']['tran_id']; ?></p>
		                        				<p><strong>Method Payment</strong> : <?php echo $order['0']['method_payment']; ?></p>
		                        				
		                        				
		                        				</div>
		                        				<div class="col-lg-6">
		                        					<p><strong>Mobile Number</strong> : <?php echo $order['0']['mobile_number']; ?></p>
		                        					<p><strong>Name</strong> : <?php echo $order['0']['firstname']; ?> <?php echo $order['0']['lastname']; ?></p>
		                        					<?php if(isset( $order['0']['did_number'])): ?>
		                        					<p><strong>Did Number</strong> : <?php echo $order['0']['did_number']; ?></p>
		                        				<?php endif; ?>
		                        				</div>
                                                <div class=" col-lg-12">
                                                	
                                                    <form action="<?php echo current_url(); ?>" method="post" role="form">
                                                        
                                                        <!--<div class="form-group team_active col-xs-4">
                                                           <label style="padding-top: 7px;" for="inputEmail3" class="col-sm-8 control-label">
                                                            Payment Order
                                                           </label>
                                                           <div class="col-sm-4">
                                                                <span> No</span> &nbsp;<input type="checkbox" name="active" class="js-switch-pink" value="1" <?php if($order['0']['status'] == 3) echo 'checked'; ?> /> &nbsp;<span> Yes </span>
                                                           </div>
                                                        </div>-->
                                                        <div class="form-group  col-xs-12" style="padding-left:0;">
                                                            <input name="order_id" type="hidden" value="<?php echo $order_id; ?>" />
                                                            <!--<button type="submit" class="btn btn-success btn-sm">Save Change</button>-->
                                                            <a href="<?php echo base_url(); ?>customer/user/printinvoice/<?php echo $tran_id_encode; ?>" class="btn btn-info btn-sm" target="_blank">Invoice Generate</a>
                                                        </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </section>
                                            <section class="panel">
						                        <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Report Transfer</header>
						                        <div class="panel-body">						                           
						                            <div class="table-responsive no-border">
						                    
						                                <div class="teamTable">
						                                <?php if($order['0']['status'] != 3): ?>
								                            <div class="form-group team_active col-xs-6">
		                                                           <label style="padding-top: 7px;" for="inputEmail3" class="col-sm-8 control-label">
		                                                            Approve
		                                                           </label>
		                                                           <div class="col-sm-2">
		                                                                <a href="<?php echo base_url(); ?>customer/user/approve_order/<?php echo $tran_id_encode ?>/<?php echo $order['0']['salt']; ?>" class="btn btn-success btn-sm"  target="_blank" > Approve Order </a>
		                                                           </div>
		                                                    </div>

		                                                <?php endif; ?>

						                                <?php if(!empty($payment_confirm)): ?>
						                                 <div class=" col-lg-6 mg-b-lg">
                                                			<p><strong>Tran Id</strong>    : <?php echo $payment_confirm['0']['tran_id']; ?></p>                    
                                                			<p><strong>Mobile</strong>     : <?php echo $payment_confirm['0']['mobile']; ?></p>
                                                			<p><strong>Name</strong>  : <?php echo $payment_confirm['0']['firstname']; ?> <?php echo $payment_confirm['0']['lastname']; ?></p>
                                               				<p><strong>Email</strong> : <?php echo $payment_confirm['0']['email']; ?></p><br> 
                                                		 </div>
                                                		 <div class=" col-lg-6 mg-b-lg">
                                                			<p><strong>Method</strong>    : <?php echo $order['0']['method_payment']; ?> / <?php echo $payment_confirm['0']['bank']; ?></p>
                                              			    <p><strong>Money</strong>  : <?php echo $payment_confirm['0']['money']; ?></p>
                                                			<p><strong>Time</strong>     : <?php echo $payment_confirm['0']['hour']; ?> : <?php echo $payment_confirm['0']['minute']; ?></p>
                                               				<p><strong>File</strong> : <a href="<?php echo base_url(); ?>assets/upload/<?php echo $payment_confirm['0']['file']; ?>" target="_blank">ดูไฟล์ที่เเนบมา</a></p><br>
                                                		 </div>
                                                		 <?php if($order['0']['status'] != 3): ?>
								                            <div class="form-group team_active col-xs-3">
		                                                           <label style="padding-top: 7px;" for="inputEmail3" class="col-sm-8 control-label">
		                                                            Approve
		                                                           </label>
		                                                           <div class="col-sm-2">
		                                                                <a  href="<?php echo base_url(); ?>customer/user/approve_order/<?php echo $tran_id_encode ?>/<?php echo $order['0']['salt']; ?>" class="btn btn-success btn-sm"  target="_blank" > Approve Order </a>
		                                                           </div>
		                                                    </div>
		                                                <?php endif; ?>
						                            	<?php else: ?>
						                            			<div class="col-xs-12">
						                            			<hr>
						                            			No Payment Report!
						                            		</div>

						                            	<?php endif; ?>
														</div>
						                            </div>
						                            
						                        </div>
						                    </section>
                                          


                                        </div>
                                    </div>       
                                </section>

                                
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /content wrapper -->

            </section>
            <!-- /main content -->

        </section>

    </div>
    <!--modal-->
    <div class="modal fade bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h5 class="modal-title text-center" id="myModalLabel">Confirm Delete Account</h5>
                    </div>
                    <div class="modal-body">
                        คุณต้องการลบข้อมูล ผู้ใช้นี้ใช่หรือไม่
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-default btn-sm" data-dismiss="modal">Cancel</button>
                        <a id="modal_link" href="#" class="btn btn-primary btn-sm">Confirm Delete</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
    <script src="<?php echo base_url(); ?>assets/js/main.min.js"></script>

    <!-- page scripts -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-slider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-spinedit.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/parsley.js"></script>     
    <script src="<?php echo base_url(); ?>assets/js/switchery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/command/forms.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.form.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/summernote.js"></script>

    <script type="text/javascript">


        $(document).ready(function(){ 

            $('#summernote').summernote();

            var options = { 
                target:   '.image_slider',   // target element(s) to be updated with server response 
                beforeSubmit:  beforeSubmit,  // pre-submit callback 
                success:       afterSuccess,  // post-submit callback 
                resetForm: true        // reset the form after successful submit 
            }; 
        
            $('#MyUploadForm').submit(function(){ 

                $(this).ajaxSubmit(options);

                return false; 

            });

        });

        $('#imageInput').change(function(){

            $('#MyUploadForm').submit();

        });

        function afterSuccess(){

            $('#submit-btn').show(); //hide submit button
            $('#loading-img').hide(); //hide submit button

        }

        function beforeSubmit(){
            //check whether browser fully supports all File API
           if (window.File && window.FileReader && window.FileList && window.Blob)
            {
                
                if( !$('#imageInput').val()) //check empty input filed
                {
                    $(".message").html("Are you kidding me?");
                    return false
                }
                
                var fsize = $('#imageInput')[0].files[0].size; //get file size
                var ftype = $('#imageInput')[0].files[0].type; // get file type
                

                //allow only valid image file types 
                switch(ftype)
                {
                    case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                        break;
                    default:
                        $(".message").html("<b>"+ftype+"</b> Unsupported file type!");
                        return false
                }
                
                //Allowed file size is less than 1 MB (1048576)
                if(fsize>1048576) 
                {
                    $(".message").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
                    return false
                }
                        
                $('#submit-btn').hide(); //hide submit button
                $('#loading-img').show(); //hide submit button
                $(".image_profile").html("");  
            }
            else
            {
                //Output error to older unsupported browsers that doesn't support HTML5 File API
                $(".message").html("Please upgrade your browser, because your current browser lacks some new features we need!");
                return false;
            }
        }

        //function to format bites bit.ly/19yoIPO
        function bytesToSize(bytes) {
           var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
           if (bytes == 0) return '0 Bytes';
           var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
           return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
        }



    </script>

    <!--
       
    <script src="vendor/wysiwyg/jquery.hotkeys.js"></script>
    
	-->


</body>
<!-- /body -->

</html>

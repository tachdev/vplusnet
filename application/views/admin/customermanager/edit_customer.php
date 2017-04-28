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
                                               <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Customer Status</header>
                                                <div class="panel-body team col-lg-12">
                                                <div class=" col-lg-12 mg-b-lg">
                                                <p><strong>Name</strong> : <?php echo $customer['0']['first_name']; ?> <?php echo $customer['0']['last_name']; ?></p>
		                       					<p><strong>Phone Number</strong> : <?php echo $customer['0']['mobile']; ?></p>
		                        				<p><strong>Email</strong> : <?php echo $customer['0']['email']; ?></p>
		                        				<p><strong>Nation Id</strong> : <?php echo $customer['0']['id_card_number']; ?></p>
		                        				<p><strong>Date Registered</strong> : <?php echo $customer['0']['date_create']; ?></p>
		                        				<?php if(isset( $package_active['0']['did_number'])): ?>
		                        					<p><strong>Did Number</strong> : <?php echo $package_active['0']['did_number']; ?></p>
		                        				<?php endif; ?>
		                        				</div>
                                                <div class=" col-lg-12">
                                                    <form action="<?php echo current_url(); ?>" method="post" role="form">
                                                        
                                                        <div class="form-group team_active col-xs-3">
                                                           <label style="padding-top: 7px;" for="inputEmail3" class="col-sm-8 control-label">
                                                            Approve
                                                           </label>
                                                           <div class="col-sm-2">
                                                                <input type="checkbox" name="approve" class="js-switch-pink" value="1" <?php if($customer['0']['role'] == 2 || $customer['0']['role'] == 3 ) echo 'checked'; ?>/>
                                                           </div>
                                                        </div>
                                                        <div class="form-group team_active col-xs-3">
                                                           <label style="padding-top: 7px;" for="inputEmail3" class="col-sm-8 control-label">
                                                            Banned
                                                           </label>
                                                           <div class="col-sm-2">
                                                                <input type="checkbox" name="banned" class="js-switch-blue" value="1" <?php if($customer['0']['role'] == 3 || $customer['0']['role'] == 4) echo 'checked'; ?>/>
                                                           </div>
                                                        </div>
                                                        <div class="form-group  col-xs-12" style="padding-left:0;">
                                                            <input name="customer_id" type="hidden" value="<?php echo $customer_id; ?>" />
                                                            <button type="submit" class="btn btn-info btn-sm">Save Change</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                </div>
                                            </section>
                                            <section class="panel">
						                        <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Package Active</header>
						                        <div class="panel-body">						                           
						                            <div class="table-responsive no-border">
						                                 <?php if(!isset($order_type)) $order_type = 'asc'; ?>
						                                 <div class="teamTable">
						                                 <?php if(!empty($package_active)): ?>
						                                 <table class="table  table-striped mg-t datatable">
						                                    <thead>
						                                        <tr>
						                                            <th>
						                                                <a href="">Order Id&nbsp;&nbsp;&nbsp;</a>
						                                                <a href=""><i class="fa fa-sort"></i></a>
						                                            </th>
						                                            <th>
						                                                <a href="">Package Type&nbsp;&nbsp;&nbsp;</a>
						                                                <a href=""><i class="fa fa-sort"></i></a>
						                                            </th>
						                                            <th>
						                                                <a href="">Start Date&nbsp;&nbsp;&nbsp;</a>
						                                                <a href=""><i class="fa fa-sort"></i></a>
						                                            </th>
						                                            <th>
						                                                <a href="">End Date&nbsp;&nbsp;&nbsp;</a>
						                                                <a href=""><i class="fa fa-sort"></i></a>
						                                            </th>
						                                            <th>
						                                                <a href="">Price&nbsp;&nbsp;&nbsp;</a>
						                                                <a href=""><i class="fa fa-sort"></i></a>
						                                            </th>
						                                            <th>
						                                                <a href="">Country&nbsp;&nbsp;&nbsp;</a>
						                                                <a href=""><i class="fa fa-sort"></i></a>
						                                            </th>
						                                            <th>
						                                                <a href="">Status&nbsp;&nbsp;&nbsp;</a>
						                                                <a href=""><i class="fa fa-sort"></i></a>
						                                            </th>                   
						                                            <th></th>
						                                        </tr>
						                                    </thead>
						                                    <tbody class="table_update">
						                                    <?php foreach ( $package_active as $package_actives ): ?>
						                                            
						                                        <tr>
						                                            <td><?php echo $package_actives['order_id']; ?></td>
						                                            <td><?php echo $package_actives['package_id']; ?></td>                                                               
						                                            <td><?php echo $package_actives['date_start']; ?></td>                                                                            
						                                            <td><?php echo $package_actives['date_end']; ?></td>                                                                            
						                                            <td><?php echo $package_actives['total_price']; ?></td>                                                                            
						                                            <td><?php echo $package_actives['country']; ?></td>                                                                            
						                                            <td>
						                                                <?php 

						                                                    if($package_actives['status'] == 1){

						                                                        echo "ยังไม่ได้ชำระเงิน";

						                                                    }elseif($package_actives['status'] == 2){

						                                                        echo "รอการตรวจสอบ";
						                                                        
						                                                    }else{

						                                                        echo "ชำระเงินเรียบร้อยเเล้ว";
						                                                    }

						                                                ?>

						                                            </td>                                                                            
						                                            <td>
						                                                <a href="<?php echo base_url('backoffice/ordermanager/edit/'.$package_actives['order_id']);?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> edit </a> 
						                                                <!--<button name="delete_button" data-toggle="modal" data-target=".bs-modal-sm" class="btn btn-danger btn-xs del" value="<?php echo $package_actives['order_id']; ?>"><i class="fa fa-trash-o"></i> delete</button>-->
						                                            </td>
						                                        </tr>

						                                    <?php endforeach; ?>
						                                               
						                                    </tbody>
						                                    
						                                </table>
						                            	<?php else: ?>

						                            			This User Have Not Package Active

						                            	<?php endif; ?>
														</div>
						                            </div>
						                            <div><?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?></div>
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

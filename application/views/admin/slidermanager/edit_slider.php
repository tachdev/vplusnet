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
                                                <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Team Info</header>
                                                <div class="panel-body team col-lg-12">
                                                    <div class"message"></div>
                                                    <div id="output_slider" style="positon:relative">
                                                        <div class="image_slider">
                                                            <?php if(isset($slider['0']['slider_image']) && $slider['0']['slider_image'] != ""): ?>       
                                                                <img src="<?php echo base_url().'assets/img/'.$slider['0']['slider_image']; ?>" alt="Resized Image">
                                                            <?php else: ?>
                                                                <img src="<?php echo base_url(); ?>assets/img/webimage/image_slider.png" alt="Resized Image">
                                                            <?php endif; ?>
                                                        </div>
                                                        <img src="<?php echo base_url(); ?>assets/img/webimage/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
                                                    </div>
                                                    <form action="<?php echo base_url(); ?>backoffice/slidermanager/uploadimage" method="post" enctype="multipart/form-data" id="MyUploadForm">
                                                        <div class="uploadman">
                                                        <input name="ImageFile" id="imageInput" type="file" />
                                                        </div>
                                                        <input name="team_id" type="hidden" value="<?php echo $slider_id; ?>" />
                                                        <img src="<?php echo base_url(); ?>assets/img/webimage/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
                                                    </form>

                                                </div>
                                                <div class=" col-lg-12">
                                                    <form action="<?php echo current_url(); ?>" method="post" role="form">
                                                        <div class="form-group">
                                                            <label for="InputEmail1">Text First</label>
                                                            <div class="input-group mg-b-md col-xs-8">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="text_first" class="form-control" placeholder="Text Top" value="<?php echo $slider['0']['slider_top_text']; ?>" >
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="UInputUser">Text Main</label>
                                                            <div class="input-group mg-b-md col-xs-8">
                                                                  <textarea id="summernote" name="text_main" class="form-control"  maxlength="100" placeholder="meta description 100 word"><?php echo $slider['0']['slider_main_text']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div >
                                                            <label for="UInputUser">Text Bottom</label>
                                                            <div class="input-group mg-b-md col-xs-8">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="text_bottom" class="form-control " placeholder="Text Bottom" value="<?php echo $slider['0']['slider_bottom_text']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group team_active col-xs-8">
                                                           <label style="padding-top: 7px;" for="inputEmail3" class="col-sm-7 control-label">
                                                            Slider Active
                                                           </label>
                                                           <div class="col-sm-3">
                                                                <input type="checkbox" name="active" class="js-switch-pink" value="1" <?php if($slider['0']['slider_active'] == 1) echo 'checked'; ?>/>
                                                           </div>
                                                        </div>
                                                        <div class="form-group  col-xs-7" style="padding-left:0;">
                                                            <input name="slider_id" type="hidden" value="<?php echo $slider_id; ?>" />
                                                            <button type="submit" class="btn btn-info btn-sm">Save Change</button>
                                                        </div>
                                                    </form>
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

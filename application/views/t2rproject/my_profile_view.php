          <!-- main content -->
            <section class="main-content">
                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="tab-content ">
                                <section class="tab-pane active" id="elements">
                                    <div class="row">
                                        <div class="col-xs-12 ">
                                            <?php if( isset($message_success) && $message_success == 1) :?>
                                                <div class="alert alert-success">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Finish!</strong>ข้อมูลของคุณได้ถูก update เเล้ว.
                                                </div>
                                            <?php elseif( isset($message_error)): ?>
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <?php echo $message_error ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-xs-12">
                                            <section class="panel team_account">
                                                <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;User Info</header>
                                                <div class="panel-body teamman col-xs-9">
                                                    <form action="<?php echo current_url(); ?>" method="post" role="form">
                                                        <div class="form-group">
                                                            <label for="InputEmail1">Name</label>
                                                            <div class="input-group mg-b-md">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="pagetitle" class="form-control" placeholder="Name" value="Teetach">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail1">Surname</label>
                                                            <div class="input-group mg-b-md">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="pagetitle" class="form-control" placeholder="Name" value="Surname">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail1">Email</label>
                                                            <div class="input-group mg-b-md">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="email" class="form-control" placeholder="insert your email" value="<?php echo $site['0']['email']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail1">T2R ID</label>
                                                            <div class="input-group mg-b-md">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="password" class="form-control" placeholder="insert password Email" value="25688888">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail1">Adrress</label>
                                                            <div class="input-group mg-b-md">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="address" class="form-control" placeholder="insert your appId" value="<?php echo $site['0']['address']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="InputEmail1">Telephone</label>
                                                            <div class="input-group mg-b-md">
                                                                  <span class="input-group-addon"><i class="fa fa-archive"></i></span>
                                                                  <input type="text" name="telephone" class="form-control" placeholder="insert your FacookID" value="<?php echo $site['0']['telephone']; ?>">
                                                            </div>
                                                        </div>                                                        
                                                        <button type="submit" class="btn btn-info btn-sm">Save Change</button>
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
    <script src="<?php echo base_url(); ?>assets/js/main.min.js"></script>

    <!-- page scripts -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
    <!--<script src="<?php echo base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-slider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-spinedit.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/parsley.js"></script>     
    <script src="<?php echo base_url(); ?>assets/js/switchery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/command/forms.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.form.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function() { 

        var options = { 
            target:   '.image_profile',   // target element(s) to be updated with server response 
            beforeSubmit:  beforeSubmit,  // pre-submit callback 
            success:       afterSuccess,  // post-submit callback 
            resetForm: true        // reset the form after successful submit 
        }; 
        
        $('#MyUploadForm').submit(function() { 
                $(this).ajaxSubmit(options);            
                // always return false to prevent standard browser submit and page navigation 
                return false; 
            }); 
        });

        $('#imageInput').change(function() {

            $('#MyUploadForm').submit();

        });

        function afterSuccess()
        {
            $('#submit-btn').show(); //hide submit button
            $('#loading-img').hide(); //hide submit button

        }

        //function to check file size before uploading.
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

        $("select#division").change(function() {
            
            var ajaxurl = '<?php echo base_url(); ?>backofficespare/playermanager/ajaxgetselector';
            var batman = $( "select#division option:selected" ).val();
            $.ajax({

                   type: "POST",
                   url: ajaxurl,
                   dataType: "json",
                   data: { name: batman }, // serializes the form's elements.
                   success: function(data)
                   {                       
                       $('div.teamname').html(data);
                       $('.selectpicker').selectpicker('render');                 
                   }
            });
          
        });


    </script>

    <!--
       
    <script src="vendor/wysiwyg/jquery.hotkeys.js"></script>
    
    -->


</body>
<!-- /body -->

</html>

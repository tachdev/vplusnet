
    <div class="app">


        <section class="layout">            
            <!-- main content -->
            <section class="main-content">
                <div class="content-wrap">
                    <div class="alert alert-danger ajaxalert" style="display:none;">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <span></span>
                    </div>
                    <section class="panel">
                        <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Add Slider</header>
                        <div class="panel-body"> 
                            <div class="form-group add_team col-lg-8">
                                <form method="post" action="<?php echo base_url(); ?>backofficespare/slidermanager/addslide"  id="addTeamForm">
                                    <div class="input-group mg-b-md col-lg-4">
                                        <span class="input-group-addon"><i class="fa fa-flag-o"></i></span>
                                        <input type="text" name="slider_name" class="form-control add" placeholder="Add Slider" value="">
                                    </div>                                    
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus-circle"></i>&nbsp;Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section class="panel">
                        <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Slider Table List</header>
                        <div class="panel-body">
                            <div class="table-responsive no-border">
                                 <?php if(!isset($order_type)) $order_type = 'asc'; ?>
                                 <div class="teamTable">
                                 <table class="table  table-striped mg-t datatable">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" ></th>
                                            <th>
                                                <a href="">Slider Id&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Slider Name&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>                     
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table_update">
                                    <?php foreach ( $query as $querys ): ?>
                                            
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><?php echo $querys['slider_id']; ?></td>
                                            <td><?php echo $querys['slider_name']; ?></td>                                                                            
                                            <td>
                                                <a href="<?php echo base_url('backoffice/slidermanager/edit/'.$querys['slider_id']);?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> edit </a> 
                                                <button name="delete_button" data-toggle="modal" data-target=".bs-modal-sm" class="btn btn-danger btn-xs del" value="<?php echo $querys['slider_id']; ?>"><i class="fa fa-trash-o"></i> delete</button>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                               
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>Team Id</th>
                                            <th>Team Name</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
								</div>
                            </div>
                            <div><?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?></div>
                        </div>
                    </section>

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
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-slider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-spinedit.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/parsley.js"></script>     
    <script src="<?php echo base_url(); ?>assets/js/switchery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/command/forms.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.form.min.js"></script>
    <!-- page scripts -->
    <script type="text/javascript"> 
        // this is the id of the form
        $("#addTeamForm").submit(function() {

            var url = "<?php echo base_url(); ?>backoffice/slidermanager/addslider"; // the script where you handle the form input.

            $.ajax({

                   type: "POST",
                   url: url,
                   dataType: "json",
                   data: $("#addTeamForm").serialize(), // serializes the form's elements.
                   success: function(data)
                   {
                       

                       if(data['error'] == 'error'){

                            $('div.alert.alert-danger.ajaxalert').show();
                            $('div.alert.alert-danger.ajaxalert span').html(data['message_error']);

                       }else{

                            $('div.alert.alert-danger.ajaxalert').hide();
                            $("input.add").val("");
                            $(".table_update").html(data['success']); // show response from the php script.*/


                       }
                 
                   }

            });

            return false; // avoid to execute the actual submit of the form.
        });

        $(document).on("click","button.del", function (event) {
            
            var id = $(this).val();
            $("#modal_link").attr("href", "<?php echo  base_url();?>backoffice/slidermanager/del/"+id );

        }); 

       
    </script>
    
        

</body>
<!-- /body -->

</html>

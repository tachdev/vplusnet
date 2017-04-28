
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
                        <header class="panel-heading"><i class="fa fa-edit"></i>&nbsp;&nbsp;Slider Table List</header>
                        <div class="panel-body">
                            <div class="form-group add_team col-lg-8">
                                <form method="post" action="<?php echo base_url(); ?>backoffice/customermanager/index/s"  id="addTeamForm">
                                    <div class="input-group mg-b-md col-lg-4">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                        <input type="text" name="search_string" class="form-control add" placeholder="Input Mobile or Email" value="">
                                    </div>                                    
                                    <button type="submit" class="btn btn-primary btn-sm">
                                       &nbsp;Search
                                    </button>
                                    <a href="<?php echo base_url(); ?>backoffice/customermanager/" class="btn btn-success btn-sm" style="padding-top: 9px;
    margin-left: 5px;">Clear</a>
                                </form>
                            </div>
                            <div class="table-responsive no-border">
                                 <?php if(!isset($order_type)) $order_type = 'asc'; ?>
                                 <div class="teamTable">
                                 <table class="table  table-striped mg-t datatable">
                                    <thead>
                                        <tr>
                                            <th>
                                                <a href="">Customer Id&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Mobile&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Email&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Firstname&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Lastname&nbsp;&nbsp;&nbsp;</a>
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
                                    <?php foreach ( $query as $querys ): ?>
                                            
                                        <tr>
                                            <td><?php echo $querys['id']; ?></td>
                                            <td><?php echo $querys['mobile']; ?></td>                                                                            
                                            <td><?php echo $querys['email']; ?></td>                                                                            
                                            <td><?php echo $querys['first_name']; ?></td>                                                                            
                                            <td><?php echo $querys['last_name']; ?></td>                                                                            
                                            <td>
                                                <?php 

                                                    if($querys['role'] == 1){

                                                        echo "unapprove";

                                                    }elseif($querys['role'] == 2){

                                                        echo "approve";
                                                        
                                                    }else{

                                                        echo "banned";
                                                    }

                                                ?>

                                            </td>                                                                            
                                            <td>
                                                <a href="<?php echo base_url('backoffice/customermanager/edit/'.$querys['id']);?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> edit </a> 
                                                <button name="delete_button" data-toggle="modal" data-target=".bs-modal-sm" class="btn btn-danger btn-xs del" value="<?php echo $querys['id']; ?>"><i class="fa fa-trash-o"></i> delete</button>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                               
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                <a href="">Customer Id&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Mobile&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Email&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Firstname&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Lastname&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>
                                            <th>
                                                <a href="">Status&nbsp;&nbsp;&nbsp;</a>
                                                <a href=""><i class="fa fa-sort"></i></a>
                                            </th>                   
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


        $(document).on("click","button.del", function (event) {
            
            var id = $(this).val();
            $("#modal_link").attr("href", "<?php echo  base_url();?>backoffice/customermanager/del/"+id );

        }); 

       
    </script>
    
        

</body>
<!-- /body -->

</html>

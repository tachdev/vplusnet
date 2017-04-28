<!-- body -->

        <!-- top header -->
        <header class="header">

            <div id="navigation" class="navbar navbar-default" role="navigation">
                <div class="navbar-inners" style="height: 92px;">
                    <div class="navbar-header">
                        
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars fa-2x"></i>
                        </button>
                        <a id="brand"  class="navbar-brand" data-scroll href="#home">
                            <img class="img-responsive" style="float:left;border-right: 1px solid #DADADA;padding: 5px;margin-right: 15px;margin-top:-15px;margin-left:-15px;" src="<?php echo base_url(); ?>assets/images/logo.png">
                            <span >
                                  <h1 style="display:inline-block;">SmartVoice</h1>
                                  <p>by vplusnet</p>
                            </span>
                        </a>
                    </div>
                     <?php if($this->session->userdata('is_logged_in')){ ?>
                    <div class="navbar-collapse collapse col-xs-6" >
                        <ul class="nav navbar-nav ">
                            <li><a data-scroll href="<?php echo base_url(); ?>customer/user/main" class="int-collapse-menu">Main Menu</a></li>
                            <?php if(empty($package)): ?>
                            <li><a data-scroll href="<?php echo base_url(); ?>customer/user/buymain" class="int-collapse-menu">Buy Package</a></li>
                            <?php endif; ?>
                            <li><a data-scroll href="<?php echo base_url(); ?>customer/user/paymentconfirm" class="int-collapse-menu">Teller Payment</a></li>
                            <li><a data-scroll href="<?php echo base_url(); ?>customer/user/userpackage" class="int-collapse-menu">Usage Details</a></li>

                              
                        </ul>            

                    </div><!-- end navbar-collapse collapse -->
                   
                    
                    <div class="user-login">
                       

                        <a href="<?php echo base_url(); ?>customer/user/logout" class="btn btn-danger" >Logout</a>
                        <a href="<?php echo base_url(); ?>customer/user/contact" class="btn btn-info">Problem / Contact</a>
                        

                    </div> 

                     <?php } ?>


                </div><!-- nav -->
            </div><!-- end navigation -->
    </header><!-- end header -->
        <!-- /top header -->
<?php $url =  $this->uri->segment(2); $class="class=\"active\"";?>
<section class="layout">
            <!-- sidebar menu -->
            <aside class="sidebar canvas-left bg-dark" style="background:#666;">
                <!-- main navigation -->
                <nav class="main-navigation">
                    <ul>                     
                        <li <?php if($url == 'sitemanager') echo $class; ?>>
                            <a href="<?php echo base_url('backoffice/sitemanager'); ?>">
                                <i class="fa fa-gear"></i>
                                <span>Sites Manager</span>
                            </a>
                        </li>
                        <li <?php if($url == 'slidermanager') echo $class; ?>>
                            <a href="<?php echo base_url('backoffice/slidermanager'); ?>">
                                <i class="fa fa-picture-o"></i>
                                <span>Slider Manager</span>
                            </a>
                        </li>
                        <li <?php if($url == 'customermanager') echo $class; ?>>
                            <a href="<?php echo base_url('backoffice/customermanager'); ?>">
                                <i class="fa fa-user"></i>
                                <span>Customer Manager</span>
                            </a>
                        </li>
                        <li <?php if($url == 'ordermanager') echo $class; ?>>
                            <a href="<?php echo base_url('backoffice/ordermanager'); ?>">
                                <i class="fa fa-user"></i>
                                <span>Order Manager</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /main navigation -->
                <!-- footer -->
                <footer>                 
                    <div class="footer-toolbar pull-left">
                        <a href="#" class="pull-left help">
                            <i class="fa fa-question-circle"></i>
                        </a>

                        <a href="#" class="toggle-sidebar pull-right hidden-xs">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                </footer>
                <!-- /footer -->
            </aside>
            <!-- /sidebar menu -->
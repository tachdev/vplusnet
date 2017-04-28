<!-- body -->
<body>
    <div class="app" data-sidebar="locked">
        <!-- top header -->
        <header class="header header-fixed navbar bg-white">

            <div class="brand bg-primary">
                <a href="#" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>

                <a href="index-2.html" class="navbar-brand text-white">
                    <i class="fa fa-microphone mg-r-xs"></i>
                    <span>Vplus
                        <b>Net</b>
                    </span>
                </a>
            </div>

            <form class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <button class="btn no-border no-margin bg-none no-pd-l" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" class="form-control no-border no-padding search" placeholder="Search Workspace">
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right off-right">
                <li class="quickmenu mg-r-md" >
                    <a href="<?php echo base_url();  ?>backoffice/logout" class="bg-info" style="color:#fff;">
                        <i class="fa fa-sign-out"></i> logout
                    </a>
                </li>
            </ul>

        </header>
        <!-- /top header -->
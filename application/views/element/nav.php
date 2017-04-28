<body>
	<header class="header">

			<div id="navigation" class="navbar navbar-default" role="navigation">
				<div class="navbar-inners">
					<div class="navbar-header">
						
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars fa-2x"></i>
						</button>
						<a   class="navbar-brand mobile-show" >
							<img class="img-responsive" src="assets/images/logo.png">
						</a>
						<a id="brand" style="padding:0;float:left;" class="navbar-brand" data-scroll href="#home">
							<img class="img-responsive" style="float:left;border-right: 1px solid #DADADA;padding: 5px;margin-right: 15px;" src="assets/images/logo.png">
							<span>
								  <h1 style="display:inline-block;">SmartVoice</h1>
								  <p>by vplusnet</p>
							</span>
						</a>
					</div>
					<div class="navbar-collapse collapse" style="height: 0;">
                        <ul class="nav navbar-nav ">
                            <li><a data-scroll href="<?php echo base_url(); ?>home" class="int-collapse-menu">Home</a></li>
							<li><a data-scroll href="<?php echo base_url(); ?>about" class="int-collapse-menu">About us</a></li>
							<li><a data-scroll href="<?php echo base_url(); ?>smartvoice" class="int-collapse-menu">Smart Voice</a></li>
							<li><a data-scroll href="<?php echo base_url(); ?>promotion" class="int-collapse-menu">Promotion & Prices</a></li>							
							<li><a data-scroll href="<?php echo base_url(); ?>service" class="int-collapse-menu">Services</a></li>
                            <li><a data-scroll href="<?php echo base_url(); ?>ourclient" class="int-collapse-menu">Our Client</a></li>                            
                            <li><a data-scroll href="<?php echo base_url(); ?>contact" class="int-collapse-menu">Contact</a></li>
                              
                        </ul>            

					</div><!-- end navbar-collapse collapse -->
					<div class="user-login">

						<a href="<?php echo base_url(); ?>customer/user/index" class="btn btn-info" target="_blank">Login</a>
						<a href="<?php echo base_url(); ?>customer/user/register" class="btn btn-danger" target="_blank">Register</a>

					</div> 



				</div><!-- nav -->
			</div><!-- end navigation -->
	</header><!-- end header -->
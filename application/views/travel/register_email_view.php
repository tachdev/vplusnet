<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Confirm Email</title>
    <style media="all" type="text/css">

    @media all {

      	.v-body{ background:#fff }
		.my_container{style="width:100%;font-size:12px}
		.top{font-size:12px;line-height: 0.5}
		.top-2{font-size:12px;line-height: 0.5;border:1px solid #ccc;padding:25px;}
		.mytable{width:100%;border:1px solid #ccc;text-align: center;border-spacing: 0 rem;height:100px}
		.mytable tbody tr{border:1px solid #ccc;text-align: center;background: #000;color:#fff;height:30px}
		.mytablemy th{width:30%;border:1px solid #ccc;text-align: center;}
		.mytable tbody tr td{width:30%;border:1px solid #ccc;text-align: center;}
    }
    
 
    </style>
 </head>
<body style="background:#fff">
    <div>
        <div> 
			<h2><img  src="<?php echo base_url(); ?>assets/images/fav.gif">   <strong>เมลเเจ้งว่าคุณได้ทำการสมัครสมาชิกเเล้ว&nbsp;</strong>  </h2> 
			<hr>
			<p> คุณได้ทำการ Register Account เเล้ว</p>
           	<div>
	            <p><strong>Name</strong> : <?php echo $firstname; ?> <?php echo $lastname; ?></p>
                <p><strong>Phone Number</strong> : <?php echo $mobile; ?></p>
                <p><strong>Email</strong> : <?php echo $email; ?></p>

                <p><strong>Username</strong> :  <?php echo $mobile; ?></p>
                <p><strong>Password</strong> : <?php echo $password; ?></p>
                <p><strong>id</strong> : <?php echo $id ?></p><br>
                <p>
				
				<?php 
				
					$ptn = "/^0/";  
					$sip_username = $mobile; 
					$rpltxt = "66"; 				
				?>
				<p>-------------------------------------------------------------------------------</p>
				<p>App Sip-Phone User and Password </p>
				<p><strong>Username</strong> : <?php echo preg_replace($ptn, $rpltxt, $sip_username); ?></p>
                <p><strong>Password</strong> : <?php echo $password; ?></p>
				<p></p>
				<p>-------------------------------------------------------------------------------</p>
				

              	<a href="<?php echo base_url(); ?>customer/user/register_approve/<?php echo $mobile; ?>/<?php echo $m_key ?>/<?php echo $key ?>">	คลิ๊กที่นี่เพื่อยืนยันการเปิดใช้งาน Account
             	</a>

                </p>
            </div>
            <br>
         	<a href="<?php echo base_url(); ?>customer/user/register_approve/<?php echo $mobile; ?>/<?php echo $m_key ?>/<?php echo $key ?>">
         	  <h3>Approve My Account</h3>
         	 </a><br><br>
        </div>
    </div>
</body>
</html>
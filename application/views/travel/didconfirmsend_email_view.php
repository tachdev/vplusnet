<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Did Email</title>
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
        <div style="width:100%;"> 
		        			<h2><img  src="<?php echo base_url(); ?>assets/images/fav.gif">   Congratulation | <strong>SMARTVOICE TRAVEL</strong>&nbsp;  </h2> 
		        			<hr>
		        			<div>
		    		            <p><strong>V PLUS NET AND COMMUNICATION CO,LTD</strong></p>
		                        <p><strong>TEL</strong> 02-204-7989 หรือ <strong>EMAIL</strong> INFO@VPLUS-NET.COM | MARKETING@VPLUS-NET.COM</p>
		                        <p><strong>ADDRESS:</strong> 496-502 AMARIN PLAZA BIDG. SECTION 2.1 UNIT 4 </p>
		                        <p>PLEONCHID RD. LUMPINI PATHUMWAN BANGKOK 10330</p>
		                    </div><br> <br>
		                    <div>
		                        <p>
			                        <strong>รายการ Package ที่ท่านสมัครใช้บริการได้รับการ approve เเล้ว ท่านสามารถใช้งานตามระยะเวลาที่กำหนดได้ทันที</strong> <br>
			                        (username password สามารถนำไปใช้ได้ใน app ios เเละ android ได้ทันที )
		                        </p>
		                        <p><strong>Package</strong> : Basic <?php echo $customer_order['0']['total_price']; ?>  บาท</p>
	                            <p><strong>Country</strong> : <?php echo $customer_order['0']['country']; ?></p>
	                            <p><strong>Start Date</strong> : <?php echo date_format( new DateTime($customer_order['0']['date_start']),"d-m-Y"); ?></p>
	                            <p><strong>End Date</strong> : <?php echo  date_format( new DateTime($customer_order['0']['date_end'])   ,"d-m-Y"); ?></p><br>
	                            <p><strong>Name</strong> : <?php echo $customer_order['0']['first_name']; ?> <?php echo $customer_order['0']['last_name']; ?></p>
	                            <p><strong>Phone Number</strong> : <?php echo $customer_order['0']['mobile_number']; ?></p>
	                            <p><strong>Email</strong> : <?php echo $customer_order['0']['email']; ?></p>
	                            <p></p>
	                            <h3>Smartvoice Travle Number <strong>(เบอร์ที่จะต้องทำการโอนสายก่อนเดินทาง)</strong>: <?php echo $customer_order['0']['did_number']; ?></h3>
								
								
								<p>-------------------------------------------------------------------------------</p>
								<br>
								<p>Web Username and Password</p>
								<p><strong>Username(เบอร์ที่สมัครใช้บริการ smartvoice)</strong> : <?php echo $customer_order['0']['mobile_number']; ?></p>
	                            <p><strong>Password</strong> : <?php echo base64_decode($customer_order['0']['password']); ?></p>
								<p></p>
								<?php 
				
									$ptn = "/^0/";  
									$sip_username = $customer_order['0']['mobile_number']; 
									$rpltxt = "66"; 				
								?>
								<p>-------------------------------------------------------------------------------</p>
								<p>App Sip-Phone User and Password </p>
								<p><strong>Username</strong> : <?php echo preg_replace($ptn, $rpltxt, $sip_username); ?></p>
								<p><strong>Password</strong> : <?php echo base64_decode($customer_order['0']['password']); ?></p>
								<p></p>
								<p>-------------------------------------------------------------------------------</p>
		                        
		                    </div>

		        			


		                    <br>

		                 	<a  href="<?php echo base_url(); ?>customer/user"><h3>ไปหน้า Menu</h3></a><br><br>
		                 
        </div>
    </div>
</body>
</html>
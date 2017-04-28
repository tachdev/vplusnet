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
<body class="v-body">
    <div class="my_container">
        <div> 
		        			<h2><img  src="<?php echo base_url(); ?>assets/images/fav.gif">   Payment Confirm Package | <strong>SMARTVOICE TRAVEL</strong>&nbsp;  </h2> 
		        			<hr>
		        			<div class="top">
		    		            <p><strong>V PLUS NET AND COMMUNICATION CO,LTD</strong></p>
		                        <p><strong>TEL</strong> 02-204-7989 หรือ <strong>EMAIL</strong> INFO@VPLUS-NET.COM | MARKETING@VPLUS-NET.COM</p>
		                        <p><strong>ADDRESS:</strong> 496-502 AMARIN PLAZA BIDG. SECTION 2.1 UNIT 4 </p>
		                        <p>PLEONCHID RD. LUMPINI PATHUMWAN BANGKOK 10330</p>
		                    </div><br> 
		                    <?php if($admin == "yes"): ?>
			                    <div class="top" >
			                        <p>รายการ ที่ order</p>
			    		            <p><strong>Name</strong> : <?php echo $customer_order['0']['firstname']; ?> <?php echo $lastname; ?></p>
			                        <p><strong>Phone Number</strong> : <?php echo $customer_order['0']['mobile']; ?></p>
			                        <p><strong>Email</strong> : <?php echo $customer_order['0']['email']; ?></p>
			                        <p><strong>Country</strong> : <?php echo $customer_order['0']['country'] ?></p>
			                        <p>รายการสั่งซื้อ :<strong>Smartvoice Package</strong> : Package <?php echo $customer_order['0']['total_price']; ?> บาท รับสายไม่จำกัด </p>
			                    </div>
		                    <?php endif; ?>
		        			<br>

		        			<?php if($admin == "yes"): ?>

		        				<p> รายการที่ลูกค้าเเจ้งมา </p>

		        			<?php else: ?>

	        					<p> คุณได้ทำการเเจ้งชำระเงินเเล้ว  เราจะทำการ approve package ภายใน 24 ชม.</p>

		        			<?php endif; ?>

		                   	<div>
		    		            <p><strong>Name</strong> : <?php echo $firstname; ?> <?php echo $lastname; ?></p>
		                        <p><strong>Phone Number</strong> : <?php echo $mobile; ?></p>
		                        <p><strong>Email</strong> : <?php echo $email; ?></p>
		                        <p><strong>Bank</strong> : <?php echo $bank ?></p>
		                        <p><strong>Date</strong> : <?php echo $date ?></p>
		                        <p><strong>Time</strong> : <?php echo  sprintf("%02.2d", $hour ); ?> : <?php echo  sprintf("%02.2d", $minute ); ?> </p>
		                        <p><strong>Amout</strong> : <?php echo $money ?>  Baht</p>
		                        <?php if($admin == "yes"): ?>
			                        <?php if(isset($file_name)): ?>

			                        		<p><strong>Filepath</strong> : <a href="<?php echo base_url(); ?>assets/upload/<?php echo $file_name; ?>">มี file ที่เเนบมาด้วย</a></p>

			                        <?php endif; ?>
		                    	<?php endif; ?>
		                        
		                    </div>


		                    <br>
		                    <?php if($admin == "yes"): ?>
		                    	<br>
		                    	<br><br>
		                    	<a href="<?php echo base_url(); ?>customer/user/approve_order/<?php echo $tran_id ?>/<?php echo $customer_order['0']['salt']; ?>"><h3>อนุมติ order นี้</h3></a><br><br>

		                    <?php else: ?>
		                 	<a  href="<?php echo base_url(); ?>customer/user"><h3>ไปหน้า Menu</h3></a><br><br>
		                 	<?php endif; ?>
        </div>
    </div>
</body>



</html>
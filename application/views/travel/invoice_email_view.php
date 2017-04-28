<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Vplus Email</title>
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

        <div class="my_container" > 
		        			<h2><img  src="<?php echo base_url(); ?>assets/images/fav.gif">  รายการ  Package SmartVoice Travel ที่ order </h2> 
		        			<hr>
		        			<div clsss="top">
		    		            <p><strong>V PLUS NET AND COMMUNICATION CO,LTD</strong></p>
		                        <p><strong>TEL</strong> 02-204-7989 หรือ <strong>EMAIL</strong> INFO@VPLUS-NET.COM | MARKETING@VPLUS-NET.COM</p>
		                        <p><strong>ADDRESS:</strong> 496-502 AMARIN PLAZA BIDG. SECTION 2.1 UNIT 4 </p>
		                        <p>PLEONCHID RD. LUMPINI PATHUMWAN BANGKOK 10330</p>
		                    </div><br>  
		                    <div class="top-2">
		    		            <p><strong>Name</strong> : <?php echo $firstname; ?> <?php echo $lastname; ?></p>
		                        <p><strong>Phone Number</strong> : <?php echo $mobile; ?></p>
		                        <p><strong>Email</strong> : <?php echo $email; ?></p>
		                        <p><strong>Country</strong> : <?php echo $country ?></p>
		                        
		                    </div>
		                    <div ><br>
		                   		<p>รายการสั่งซื้อ : <strong>Smartvoice Travel Package</strong> : Package <?php echo $price; ?> บาท <?php echo $expire; ?> วัน รับสายไม่จำกัด </p><hr><br>
			                    <table class="mytable" cellspacing="0" border="1" width="100%" align="center">
			                        <thead>
			                            <tr >
			                                <th height="30" >Start Date</th>
			                                <th>End Date</th>
			                                <th>อัตราค่าบริการรายเดือน</th>
			                                <th></th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                            <tr>
			                                <td height="30" align="center">
			                                	<?php echo $date_start ?>
			                                </td>
			                                <td align="center">
			                                	<?php echo $date_end ?>
			                                </td align="center">
			                                <td align="center">
			                                	<?php echo $price; ?>
			                                </td>
			                                <td></td>
			                            </tr>
			                            <tr>
			                                <td height="30" align="center">ยอดรวมสุทธิื</td>
			                                <td></td>
			                                <td align="center"><?php echo $price; ?></td>
			                                <td align="center">บาท</td>
			                            </tr>
			                        </tbody>
			                	</table>
		                	</div><br>
		                	<div class="top">
			                	<p><strong>บัญชีธนาคารของบริษัท วี-พลัส เน็ต แอนด์ คอมมูนิเคชั่น จำกัด</strong></p>
			                	<?php foreach ($bank_number as $bank_numbers) { ?>
			                		<p>-<?php echo $bank_numbers['name_bank'] ?></p>
			                	<?php } ?>
		                 	</div><br><br><br>
		                 	<a href="<?php echo base_url(); ?>customer/user/paymentconfirm/<?php echo $tran_id; ?>" target="_blank"><h3>เเเจ้งชำระเงิน</h3></a><br><br>
        </div>
    </div>
</body>
</html>
<body style="background:#fff">
    <div class="container">
        <div class="col-lg-12 "> 
		        			<h4><img  src="<?php echo base_url(); ?>assets/images/fav.gif">   INVOICE <strong>SMARTVOICE</strong>&nbsp;  </h4> 
		        			<hr>
		        			<div>
		    		            <p><strong>V PLUS NET AND COMMUNICATION CO,LTD</strong></p>
		                        <p><strong>TEL</strong> 02-204-7989 หรือ <strong>EMAIL</strong> INFO@VPLUS-NET.COM | MARKETING@VPLUS-NET.COM</p>
		                        <p><strong>ADDRESS:</strong> 496-502 AMARIN PLAZA BIDG. SECTION 2.1 UNIT 4 </p>
		                        <p>PLEONCHID RD. LUMPINI PATHUMWAN BANGKOK 10330</p>
		                    </div><br>  
		                    <div class="detail-box">
		    		            <p><strong>Name</strong> : <?php echo $print_view['0']['firstname']; ?> <?php echo $print_view['0']['lastname']; ?></p>
		                        <p><strong>Phone Number</strong> : <?php echo $print_view['0']['mobile']; ?></p>
		                        <p><strong>Email</strong> : <?php echo $print_view['0']['email']; ?></p>
		                        <p><strong>Country</strong> : <?php echo $print_view['0']['country']; ?></p>
		                        
		                    </div>
		                    <div class="detail-box mg-t-md">
		                   		<p>รายการสั่งซื้อ :&nbsp;&nbsp;<strong>Smartvoice Package</strong> : <?php echo $package_total['0']['package_title']; ?> </p><hr>
			                    <table class="table no-margin">
			                        <thead>
			                            <tr>
			                                <th class="col-md-2">Start Date</th>
			                                <th class="col-md-2">End Date</th>
			                                <th class="col-md-3" style="text-align: center;">อัตราค่าบริการรายเดือน</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                            <tr>
			                                <td><?php echo $print_view['0']['date_start']; ?></td>
			                                <td><?php echo $print_view['0']['date_end']; ?></td>
			                                <td style="text-align: center;"><?php echo $package_total['0']['package_price']; ?></td>
			                                <td style="text-align: center;"></td>
			                            </tr>
			                            <tr>
			                                <td>ยอดรวมสุทธิื</td>
			                                <td></td>
			                                <td style="text-align: center;"><?php echo $package_total['0']['package_price']; ?></td>
			                                <td style="text-align: center;">บาท</td>
			                            </tr>
			                        </tbody>
			                	</table>
		                	</div>
        </div>
    </div>
</body>
<script type="text/javascript">
	$( document ).ready(function() {
    		window.print();
	});
</script>
</html>
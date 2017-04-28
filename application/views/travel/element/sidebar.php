
            <h4>ยินดีต้อนรับ คุณ<?php echo $firstname; ?></h4>
            <p>Mobile Number : <?php echo $mobile; ?></p>
            <p>Name <?php echo $firstname; ?> <?php echo $lastname; ?></p>
            <h3>เงินในบัญชี : <?php echo $money; ?> บาท</h3>
            
            <?php if($current_package): ?>

	            <table class="table no-margin bg-sidebar mg-b-lg">
	                <thead>
	                    <tr>
	                        <th class="col-md-3 pd-l-lg">Package ของคุณ</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	<?php foreach ($current_package_detail as $current_packages_detail) { ?>
	                	    
	                	    <tr><td><?php echo $current_packages_detail['package_name']; ?></td></tr>

	                	<?php } ?>

	                    <tr>
	                        <td>
	                        	<p>เริ่มต้นวันที่ : <?php echo $current_package['0']['date_start'];?></p>
	                            <?php 

	                            	$timenow = strtotime(date('Y-m-d H:i:s'))."<br>"; 
	                            	$timeend = strtotime($current_package['0']['date_end']);

	                            	if($timenow >= $timeend ){

	                            		echo "<p>หมดอายุวันที่ : <span style='color:red'>".$current_package['0']['date_end']."</span></p>";
	                            		echo "<p style='color:red'>*package ของคุณหมดอายุเเล้ว</p>";

	                            	}else{

	                            		echo "<p>หมดอายุวันที่ :".$current_package['0']['date_end']."</p>";

	                            	}

	                            ?>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>

        	<?php else: ?>

        		<div class="no-package mg-b-sm">
        			 ท่านยังไม่มี package ในขณะนี้
        		</div>

       	 	<?php endif; ?>
            
            <a href="<?php echo base_url(); ?>t2rproject/user/destroy_session" class="jobutton btn btn-warning btn-lg col-xs-12"><i class="fa fa-edit"></i>&nbsp;&nbsp;ออกจากระบบ&nbsp;&nbsp;</a>
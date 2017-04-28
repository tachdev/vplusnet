<body style="background: #fff;">

    <div>
    <?php echo $method_payment ?>
    	<form  id="payforu" method="post" role="form" action="<?php echo $api ?>">
    		<input type="hidden" name="merchantcode" value="<?php echo $merchantcode ?>">
    		<input type="hidden" name="ref" value="<?php echo $ref ?>">
    		<input type="hidden" name="refdate" value="<?php echo $refdate ?>">
    		<input type="hidden" name="productlist" value="<?php echo $productlist ?>">
    		<input type="hidden" name="amount" value="<?php echo $price ?>">
    		<input type="hidden" name="backurl" value="<?php echo $backurl ?>">
    		<input type="hidden" name="firsname" value="<?php echo $firstname ?>">
    		<input type="hidden" name="mobile" value="<?php echo $mobile ?>">
    		<input type="hidden" name="email" value="<?php echo $email ?>">
    		<input type="hidden" name="paymenttype" value="<?php echo $method_payment ?>">
    	</form>
    </div>
    <img class="loader" src="<?php echo base_url(); ?>assets/images/ajax_loader_metal_512.gif">
</body>
<script type="text/javascript">
    document.getElementById('payforu').submit(); // SUBMIT FORM
</script>


</html>
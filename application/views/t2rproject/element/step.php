<div class="col-lg-12  t2r-register mg-b-sm" style="color:#fff;">
    <ul class="progress col-lg-12">
        <li class="col-xs-3 <?php if($step == 1){echo 'active'; } ?>">Step 1
            <p class="progress-font">Select Package</p>
        </li>
        <li class="col-xs-1 bg-none mg-t-md">
        	<i class="fa fa-arrow-circle-right"></i>
        </li>
        <li class="col-xs-3 <?php if($step == 2){echo 'active'; } ?>">
        	Step 2 
        	<p class="progress-font">add on package</p>
        </li>
        <li class="col-xs-1 bg-none mg-t-md">
        	<i class="fa fa-arrow-circle-right"></i>
        </li>
        <li class="col-xs-3 <?php if($step == 3){echo 'active'; }?>">
        	Checkout
        	<p class="progress-font">Payment</p>
        </li>
    </ul>            
</div>
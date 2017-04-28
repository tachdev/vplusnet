     <section id="four-parallax" class="parallax" style="background-image: url('assets/images/slider/parallaxbg_04.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="overlay">
			<div class="container">
				<div class="testimonial-widget">
					<div class="title text-center">
                        <i class="fa fa-quote-left fa-4x"></i>
					</div>
					<div class="text-center">
						<div class="testimonial">
							<p class="lead col-md-12 col-sm-12">เป็นนวัตกรรมการสื่อสารที่ใช้เทคโนโลยีอินเตอร์เน็ตเพื่อการสื่อสาร เหมาะสมสำหรับชีวิตที่ทันสมัย การใช้งานที่สะดวกและง่าย <br>
								และไม่ต้องยุ่งยากในการเดินสายโทรศัพท์ภายในบ้าน เพียงใช้งานโทรศัพท์ผ่าน Internet ซึ่งติดตั้ง wifi ก็สามารถใช้งานได้ทุกเวลา ทุกพื้นที่ของบ้านได้สะดวกและชัดเจน
							<h3>Vplusnet</h3>
						</div><!-- end tweet -->
					</div><!-- end owl-testimonial -->
				</div><!-- end testimonial widget -->
			</div><!-- end container -->
		</div>
	</section><!-- end whitewrapper -->

    <section id="contact" >  
		<div class="container">
            <div class="section-title text-center">
                <div class="bigtitle"><h2>SAY “ Hello ” TO US</h2></div>
				<div class="hrstyle animateFade"><i class="fa fa-envelope-o"></i></div>
                <p class="lead col-md-12 col-sm-12">
                	หากคนสนใจข้อมูลเพิ่มเติมหรือต้องการติดต่อขอใช้ package <br>สามารถติดต่อได้ที่   <i class="fa fa-phone"></i> <?php echo $site['0']['telephone'] ?> หรือ  <i class="fa fa-envelope-o"></i>  email <?php echo $site['0']['email'] ?>
                	<br>ติดต่อฝ่ายบัญชี กด 1 | ติดต่อฝ่ายการตลาด กด 2  |
					ติดต่อฝ่ายเทคนิค กด 3 | ติดต่อฝ่ายโอเปอร์เรเตอร์ กด 0 
                </p>
            </div>
            
            <div class="general_row">
            	<div class="col-xs-12 ">
                    <?php if( isset($message_success) && $message_success == 1) :?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong>Finish!</strong>ข้อมูลของคุณได้ถูก update เเล้ว.
                        </div>
                    <?php elseif( isset($message_error)): ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $message_error ?>
                        </div>
                    <?php endif; ?>
                </div>
				<form id="contact_f" action="<?php echo current_url(); ?>" name="contactform" method="post" data-effect="slide-bottom">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="text" name="email" class="form-control" placeholder="กรุณากรอก email">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="name" class="form-control" placeholder="กรุณากรอกชื่อของคุณ">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-bookmark"></i></span>
							<input type="text" name="title" class="form-control" placeholder="หัวข้อเรื่องที่ต้องการติดต่อ">
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<textarea class="form-control" name="comments" id="comments" rows="4" placeholder="ข้อความ"></textarea>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<button type="submit" id="submit" class="jobutton btn btn-primary"><i class="fa fa-long-arrow-right"></i>SEND MESSAGE</button>
					</div>
				</form> 
            </div><!-- end row -->
		</div> <!-- /container -->
  	</section><!-- end section-wrap -->
    
    <section class="googlemap">
    	<div id="map"></div>
    </section><!-- end googlemap -->
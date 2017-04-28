	<section id="home" class="colon1">
		<div id="slides" class="slides">
            <ul class="slides-container">

                <li class="slider-first ">
                    <div class="home-content-2 col-lg-3 col-md-12">
                    <div class="col-lg-12 top-detail-box" >
                        <div class="col-lg-12 top-section">        
                            <div class="left-top-text">
                            <h3>Smart Voice Travel Package</h3>
                            <p>บริการรับสาย-โทรกลับเมืองไทย เมื่ออยู่ต่างเเดน โดยใช้เบอร์มือถือของท่านเพียงมี Wifi
                            (ไม่ต้องเปิดบริการ Voice Roaming) <span style="color:#cdfffe">สามารถสมัคร บริการเเล้วเปิดใช้งานเเล้วโหลด app เพื่อใช้งานได้ทันที</span></p></div>
                            <div class="right-top-text">
                                <div></div>
                                <img class="img-responsive top-logo applogo" src="<?php echo base_url(); ?>assets/images/cloud-download-1.png">
                                <img class="img-responsive top-logo applogo" src="<?php echo base_url(); ?>assets/images/applogo.png">       <img class="img-responsive  " src="<?php echo base_url(); ?>assets/images/android.png">
                                <img class="img-responsive " src="<?php echo base_url(); ?>assets/images/ios.png">
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-lg-12 box-detail">
                            <h3>Smart Voice Travel ดีอย่างไร</h3>
                            <div style="overflow: auto;">
                            <div class="col-lg-2-xt slider-promo">
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/webimage/a1.png">
                                <p class="slider-des"><span>ไม่พลาดทุกการติดต่อจากทั่วโลก</span></p>
                            </div>
                            <div class="col-lg-2-xt slider-promo" >
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/webimage/a2.png">
                                <p class="slider-des"><span>ใช้ได้ทั้งรับสายและโทรกลับไม่ต้องซื้อ sim  ปลายทาง</span></p>
                            </div>
                            <div class="col-lg-2-xt slider-promo" >
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/webimage/a3.png">
                                <p class="slider-des"><span>ราคาประหยัดกว่า roaming  ถึง 5 เท่า</span></p>
                            </div>
                            <div class="col-lg-2-xt slider-promo">
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/webimage/a4.png">
                                <p class="slider-des"><span>เรียกดู miss call ขณะไม่มีสัญญาณ internet เเล้วโทรกลับได้เหมือนปกติ</span></p>
                            </div>
                            <div class="col-lg-2-xt slider-promo" >
                                <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/webimage/a5.png">
                                <p class="slider-des"><span>ใช้เบอร์มือถือเดิมของคุณ ไม่ต้องเปลี่ยนเบอร์ ไม่ต้องเปลี่ยนซิมให้ยุ่งยาก</span></p>
                            </div>
                            </div>
                            <div style="padding-top:25px;"><a href="<?php echo base_url(); ?>customer/user/register" id="price-promos">สมัครเลย</a></div>
                        </div>

                    </div>


                </li>

                <?php foreach ( $slider as $sliders): ?>

                    <?php if($sliders['slider_active'] != 0): ?>

                        <li><img class="bgslide" src="assets/img/<?php echo $sliders['slider_image']; ?>" alt="">
                            <div class="home-content text-center">
                                <h3><?php echo $sliders['slider_top_text']; ?></h3>
                                <h1><?php echo $sliders['slider_main_text']; ?></h1>
                                <p class="lead"><?php echo $sliders['slider_bottom_text']; ?></p>
                                <a href="<?php echo base_url(); ?>register" class="jobutton btn btn-primary"> Register</a>
                            </div>
                        </li>
                        
                    <?php endif; ?>

                <?php endforeach ?>

            </ul>
			<nav class="slides-navigation">
				<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
				<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
			</nav>
		</div> 
    </section>
    <section id="about" class="price-detail">  
        <div class="container">
            <div class="bigtitle text-center" ><h2 style="color:white">Package Smartvoice Travel</h2></div>
            <div class="general_row row text-center">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3 class="price-package"><span>250/Month</span></h3>
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/s_package.png"></h3><br>
                        <p>S Package  250 บาท (7 วัน)  <br>โทรได้ 170 นาที รับสายได้ไม่จำกัด</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3 class="price-package"><span>350/Month</span></h3>
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/m_package.png"></h3><br>
                        <p>M Package  350 บาท (15 วัน)  <br>โทรได้ 240 นาที รับสายได้ไม่จำกัด</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3 class="price-package"><span>450/Month</span></h3>
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/l_package.png"></h3><br>
                        <p>L Package  450 บาท  (30วัน)  <br>โทรได้ 300 นาที รับสายได้ไม่จำกัด</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
            </div>         
        </div> <!-- /container -->
    </section><!-- end section-wrap -->
    <section id="about" class="section-wrap ">  
        <div class="container">
            <div class="bigtitle text-center"><h2>ขั้นตอนการสมัครสมาชิก</h2></div>
            <div class="general_row row text-center">

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/aa1.png"></h3>
                        <p>เเจ้งเบอร์มือถือของท่านเละวันเดินทางไปกลับผ่าน smartvoicetravel@gmail.com</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/aa2.png"></h3>
                        <p>โหลด Application Smartvoice (ได้ทั้งระบบ ios เเละ android)</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/aa3.png"></h3>
                        <p>ใส่ username , password</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
            </div>
            <div class="general_row row text-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/aa4.png"></h3>
                        <p>ลงทะเบียน appication รอรับ username , password</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/aa5.png"></h3>
                        <p>โอนสายเบอร์ 02-xxx-xxxx ก่อนขึ้นเครื่อง</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="servicebox">
                        <h3><img src="<?php echo base_url(); ?>assets/img/webimage/aa6.png"></h3>
                        <p>เมื่อถึงประเทศที่เป็นปลายทางเชื่อมต่อ internet พร้อมใช้งาน</p>
                    </div><!-- end servicebox -->
                </div><!-- end col-lg-4 -->
            </div><!-- end row -->
            
        </div> <!-- /container -->
    </section><!-- end section-wrap -->
    <!--<section id="login" class="section-wrap login-section roaming-register-form">
        <div class="container">
            <div class="user-container col-lg-12">              
                <div class="user pd-lg">
                    <form  method="post" role="form" action="<?php echo current_url(); ?>">
                        <div id="roaming-form" class="col-lg-6 col-md-6 col-sm-6 col-xs-6 roaming-form">
                        <h1><strong>Smartvoice Travel Register</strong> <img src="<?php echo base_url(); ?>assets/images/slider/vplus_icon_light.png"></h1>                      
                        <div class="input-group mg-b-lg col-xs-12 no-padding ">
                            <label>Your Phone Number</label>
                        </div>
                        <div class="input-group mg-b-lg col-xs-12 no-padding">
                            <input type="text" name="mobile" class="form-control " placeholder="กรุณากรอกเบอร์โทรศัพท์ smartvoice">                    
                        </div>
                        <div class="input-group col-xs-12 no-padding mg-t-xs">
                            <label>Name</label>
                        </div>
                        <div class="input-group col-xs-12 no-padding">
                            <input type="text" name="name" class="form-control" placeholder="กรุณากรอกชื่อของคุณ" >                    
                        </div>
                        <div class="input-group col-xs-12 no-padding mg-t-xs">
                            <label>Surname</label>
                        </div>
                        <div class="input-group col-xs-12 no-padding">
                            <input type="text" name="surname" class="form-control " placeholder="กรุณากรอกนามสกุลของคุณ" >                     
                        </div>
                        <div class="input-group col-xs-12 no-padding mg-t-xs">
                            <label>Password</label>
                        </div>
                        <div class="input-group col-xs-12 no-padding">
                            <input type="password" name="password" class="form-control " placeholder="กรุณากรอกรหัสผ่านของคุณ" >                     
                        </div>
                        <div class="input-group col-xs-12 no-padding mg-t-xs">
                            <label>Re-Password</label>
                        </div>
                        <div class="input-group col-xs-12 no-padding">
                            <input type="password" name="password2" class="form-control " placeholder="กรุณากรอกรหัสผ่านของคุณอีกครั้ง" >                     
                        </div>
                        <div class="input-group col-xs-12 no-padding mg-t-xs">
                            <label>Email</label>
                        </div>
                        <div class="input-group col-xs-12 no-padding">
                            <input type="text" name="email" class="form-control " placeholder="กรุณากรอก email" >                     
                        </div>
                        <div class="input-group col-xs-12 no-padding mg-t-xs">
                            <label>Id Nation</label>
                        </div>
                        <div class="input-group col-xs-12 no-padding">
                            <input type="text" name="national_id" class="form-control " placeholder="กรุณากรอกรหัสบัตรประชาชน" >                     
                        </div>
                        <br>
                        <button type="submit" class="jobutton btn btn-primary btn-sm col-xs-12 mg-b-sm" style="font-size:18px">submit</button><br><br>              
                    </div>
                 </form>

                </div>
        </div>
        </div>
    </section>  -->
    <section id="about" class="section-wrap-centent">  
		<div class="container">
            <div class="section-title text-center">
                <div class="bigtitle"><h2>ทำไมต้องใช้ Smartvoice</h2></div>
                <div class="hrstyle">
                    <i class="fa fa-mobile fa-2x" style="margin-top:10px;"></i>
                </div>
                <div class="col-xs-12 text-detail">Smartvoice คือ บริการโทรศัพท์รูปแบบใหม่ 
                ที่ทำให้คุณสามารถติดต่อสื่อสารไปยังจุดหมายปลายทางทุกที่ทั่วโลกด้วยอัตราค่าบริการที่ประหยัด 
                แต่ให้ประสิทธิภาพสูง
                </div>
                <img class="img-responsive  " src="<?php echo base_url(); ?>assets/images/d1.png">
                <img class="img-responsive  " src="<?php echo base_url(); ?>assets/images/d2.png">
            </div>            
          
            
            <div class="clearfix"></div>
            <br><br><br>
			<div class="general_row table-price" >
				<div id="features" class="tabbable text-center">
              		<div class="tab-content">
                		<div class="tab-pane active" id="tab1" >
                        	<h1 style="color:#757575;">อัตราค่าโทรจากต่างประเทศ</h1>
							<table class="table table-striped table-hover" style="text-align:center">
                    <tbody>
                            <tr class="info">
                                <td><strong>ITEM</strong></td>
                                <td><strong>NAME</strong></td>
                                <td><strong>COUNTRY</strong></td>
                                <td><strong>Fixed Rate(baht)</strong></td>
                                <td><strong>Mobile Rate(baht)</strong></td>
                            </tr>
                                                        <tr>
                                <td>1</td>
                                <td>Afghanistan</td>
                                <td>93</td>
                                <td>22</td>
                                <td>22</td>
                            </tr>
                                                        <tr>
                                <td>2</td>
                                <td>Australia</td>
                                <td>61</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                                                        <tr>
                                <td>3</td>
                                <td>Austria</td>
                                <td>43</td>
                                <td>18</td>
                                <td>18</td>
                            </tr>
                                                        <tr>
                                <td>4</td>
                                <td>Bahrain</td>
                                <td>973</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>
                                                        <tr>
                                <td>5</td>
                                <td>Bangladesh</td>
                                <td>880</td>
                                <td>12</td>
                                <td>12</td>
                            </tr>
                                                        <tr>
                                <td>6</td>
                                <td>Belgium</td>
                                <td>32</td>
                                <td>4</td>
                                <td>9</td>
                            </tr>
                                                        <tr>
                                <td>7</td>
                                <td>Bhutan</td>
                                <td>975</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>8</td>
                                <td>Brazil</td>
                                <td>55</td>
                                <td>6</td>
                                <td>6</td>
                            </tr>
                                                        <tr>
                                <td>9</td>
                                <td>Brune</td>
                                <td>673</td>
                                <td>4</td>
                                <td>4</td>
                            </tr>
                                                        <tr>
                                <td>10</td>
                                <td>Bulgaria</td>
                                <td>359</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>11</td>
                                <td>Cambodia</td>
                                <td>855</td>
                                <td>8</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>12</td>
                                <td>Canada</td>
                                <td>1</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                                                        <tr>
                                <td>13</td>
                                <td>China</td>
                                <td>86</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                                                        <tr>
                                <td>14</td>
                                <td>Denmark</td>
                                <td>45</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>15</td>
                                <td>France</td>
                                <td>33</td>
                                <td>4</td>
                                <td>6</td>
                            </tr>
                                                        <tr>
                                <td>16</td>
                                <td>Germany</td>
                                <td>49</td>
                                <td>4</td>
                                <td>6</td>
                            </tr>
                                                        <tr>
                                <td>17</td>
                                <td>Ghana</td>
                                <td>233</td>
                                <td>22</td>
                                <td>22</td>
                            </tr>
                                                        <tr>
                                <td>18</td>
                                <td>Hongkong</td>
                                <td>852</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                                                        <tr>
                                <td>19</td>
                                <td>India</td>
                                <td>91</td>
                                <td>9</td>
                                <td>9</td>
                            </tr>
                                                        <tr>
                                <td>20</td>
                                <td>Indonesia</td>
                                <td>62</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                                                        <tr>
                                <td>21</td>
                                <td>Iran</td>
                                <td>98</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>22</td>
                                <td>Iraq</td>
                                <td>964</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>
                                                        <tr>
                                <td>23</td>
                                <td>Israel</td>
                                <td>972</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                                                        <tr>
                                <td>24</td>
                                <td>Italy</td>
                                <td>39</td>
                                <td>4</td>
                                <td>10</td>
                            </tr>
                                                        <tr>
                                <td>25</td>
                                <td>Japan</td>
                                <td>81</td>
                                <td>4</td>
                                <td>5</td>
                            </tr>
                                                        <tr>
                                <td>26</td>
                                <td>Jordan</td>
                                <td>962</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>
                                                        <tr>
                                <td>27</td>
                                <td>Kazakhstan</td>
                                <td>7</td>
                                <td>17</td>
                                <td>18</td>
                            </tr>
                                                        <tr>
                                <td>28</td>
                                <td>Korea South</td>
                                <td>82</td>
                                <td>4</td>
                                <td>4</td>
                            </tr>
                                                        <tr>
                                <td>29</td>
                                <td>Kuwait</td>
                                <td>965</td>
                                <td>4</td>
                                <td>4</td>
                            </tr>
                                                        <tr>
                                <td>30</td>
                                <td>Kyrgyzstan</td>
                                <td>996</td>
                                <td>18</td>
                                <td>18</td>
                            </tr>
                                                        <tr>
                                <td>31</td>
                                <td>Lao</td>
                                <td>856</td>
                                <td>4</td>
                                <td>4</td>
                            </tr>
                                                        <tr>
                                <td>32</td>
                                <td>Macau</td>
                                <td>853</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                                                        <tr>
                                <td>33</td>
                                <td>Malaysia</td>
                                <td>60</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                                                        <tr>
                                <td>34</td>
                                <td>Maldives</td>
                                <td>960</td>
                                <td>30</td>
                                <td>30</td>
                            </tr>
                                                        <tr>
                                <td>35</td>
                                <td>Mongolia</td>
                                <td>976</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>36</td>
                                <td>Mynmar</td>
                                <td>95</td>
                                <td>10</td>
                                <td>10</td>
                            </tr>
                                                        <tr>
                                <td>37</td>
                                <td>Nepal</td>
                                <td>977</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>38</td>
                                <td>Netherland</td>
                                <td>31</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>39</td>
                                <td>New Zealand</td>
                                <td>64</td>
                                <td>9</td>
                                <td>9</td>
                            </tr>
                                                        <tr>
                                <td>40</td>
                                <td>Nigeria</td>
                                <td>234</td>
                                <td>23</td>
                                <td>23</td>
                            </tr>
                                                        <tr>
                                <td>41</td>
                                <td>Norway</td>
                                <td>47</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>42</td>
                                <td>Oman</td>
                                <td>968</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>
                                                        <tr>
                                <td>43</td>
                                <td>Pakistan</td>
                                <td>92</td>
                                <td>18</td>
                                <td>18</td>
                            </tr>
                                                        <tr>
                                <td>44</td>
                                <td>Palestine</td>
                                <td>970</td>
                                <td>18</td>
                                <td>18</td>
                            </tr>
                                                        <tr>
                                <td>45</td>
                                <td>Philipines</td>
                                <td>63</td>
                                <td>12</td>
                                <td>12</td>
                            </tr>
                                                        <tr>
                                <td>46</td>
                                <td>Portugal</td>
                                <td>351</td>
                                <td>17</td>
                                <td>17</td>
                            </tr>
                                                        <tr>
                                <td>47</td>
                                <td>Qatar</td>
                                <td>974</td>
                                <td>12</td>
                                <td>12</td>
                            </tr>
                                                        <tr>
                                <td>48</td>
                                <td>Romanta</td>
                                <td>40</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>49</td>
                                <td>Russia</td>
                                <td>7</td>
                                <td>4</td>
                                <td>4</td>
                            </tr>
                                                        <tr>
                                <td>50</td>
                                <td>Saudi Arabia</td>
                                <td>966</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>51</td>
                                <td>Singapore</td>
                                <td>65</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                                                        <tr>
                                <td>52</td>
                                <td>South Africa</td>
                                <td>27</td>
                                <td>4</td>
                                <td>9</td>
                            </tr>
                                                        <tr>
                                <td>53</td>
                                <td>Spain</td>
                                <td>34</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>54</td>
                                <td>Srilanka</td>
                                <td>94</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>55</td>
                                <td>Sweden</td>
                                <td>46</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>56</td>
                                <td>Switzerland</td>
                                <td>41</td>
                                <td>4</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>57</td>
                                <td>Syria</td>
                                <td>963</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>
                                                        <tr>
                                <td>58</td>
                                <td>Taiwan</td>
                                <td>886</td>
                                <td>3</td>
                                <td>4</td>
                            </tr>
                                                        <tr>
                                <td>59</td>
                                <td>Tajikistan</td>
                                <td>992</td>
                                <td>18</td>
                                <td>18</td>
                            </tr>
                                                        <tr>
                                <td>60</td>
                                <td>Thailand</td>
                                <td>66</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                                                        <tr>
                                <td>61</td>
                                <td>Timor-Leste</td>
                                <td>670</td>
                                <td>22</td>
                                <td>22</td>
                            </tr>
                                                        <tr>
                                <td>62</td>
                                <td>Turkey</td>
                                <td>90</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>63</td>
                                <td>Turmenistan</td>
                                <td>993</td>
                                <td>20</td>
                                <td>20</td>
                            </tr>
                                                        <tr>
                                <td>64</td>
                                <td>Uae</td>
                                <td>971</td>
                                <td>12</td>
                                <td>12</td>
                            </tr>
                                                        <tr>
                                <td>65</td>
                                <td>United Kingdom</td>
                                <td>44</td>
                                <td>4</td>
                                <td>6</td>
                            </tr>
                                                        <tr>
                                <td>66</td>
                                <td>USA</td>
                                <td>1</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>
                                                        <tr>
                                <td>67</td>
                                <td>Uzbekistan</td>
                                <td>998</td>
                                <td>15</td>
                                <td>15</td>
                            </tr>
                                                        <tr>
                                <td>68</td>
                                <td>Vietnam</td>
                                <td>84</td>
                                <td>8</td>
                                <td>8</td>
                            </tr>
                                                        <tr>
                                <td>69</td>
                                <td>Yemen</td>
                                <td>967</td>
                                <td>17</td>
                                <td>17</td>
                            </tr>
                                                        
                        </tbody>
                </table>
						</div>
					
                    </div><!-- end tab-content -->
				</div><!-- end tabbable -->
			</div><!-- end general_row -->
		</div> <!-- /container -->
  	</section><!-- end section-wrap -->


    <!-- Modal -->
    <?php if(isset($message_error)): ?>
    <div id="modal-alert" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" style="font-family: tahoma;">Register Smartvoice ไม่สำเร็จ</h3>
          </div>
          <div class="modal-body">
            <?php if( isset($message_error)): ?>
                        <div class="alert alert-danger">
                            <?php echo $message_error ?>
                        </div>
            <?php endif; ?>
             <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
          </div>
         
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <?php endif; ?>
   
  	<script type="text/javascript">

        $(function () {
          
          $('#slides').superslides({

              inherit_height_from: 1000px,
             
          });

        });

        /*$(document).ready(function(){


    
           $('#modal-alert').modal('show'); 
           
        });

        function goToByScroll(id){
              // Reove "link" from the ID
            id = id.replace("link", "");
            $('html,body').animate({scrollTop: $("section#login").offset().top},'slow');

        }

        $("button#price-promos").click(function(e) { 
              // Prevent a page reload when a link is pressed
            e.preventDefault();
            goToByScroll($(this).attr("id"));  

        });*/


    </script>


	
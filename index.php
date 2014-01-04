<?php
	include 'v-templates/home_header.php';
?>
<!-- body container starts here --->
<div class="body">
	<div class="container body_container">
        <?php include 'v-templates/home_slider.php'; ?>
        <!-- body parts starts here -->
        <!-- category starts here -->
        <div class="row body_category">
        	<div class="col-md-2 col-sm-6 category_details">
            	<img src="image/category_image1.png" />
                <h3 class="category_heading">activity tracking</h3>
                <p class="category_para">Lorem Ipsum is passages, and more recently with desktop upon Lorem Ipsum</p>
            </div>
            <div class="col-md-2 col-sm-6 category_details">
            	<img src="image/category_image2.png" />
                <h3 class="category_heading">food & drink tracking</h3>
                <p class="category_para">Lorem Ipsum is passages, and more recently with desktop upon Lorem Ipsum</p>
            </div>
            <div class="col-md-2 col-sm-6 category_details">
            	<img src="image/category_image3.png" />
                <h3 class="category_heading">reports</h3>
                <p class="category_para">Lorem Ipsum is passages, and more recently with desktop upon Lorem Ipsum</p>
            </div>
            <div class="col-md-2 col-sm-6 category_details">
            	<img src="image/category_image4.png" />
                <h3 class="category_heading">progress monitoring</h3>
                <p class="category_para">Lorem Ipsum is passages, and more recently with desktop upon Lorem Ipsum</p>
            </div>
            <div class="col-md-2 col-sm-6 category_last_block category_details">
            	<img src="image/category_image5.png" />
                <h3 class="category_heading">performance analysis</h3>
                <p class="category_para">Lorem Ipsum is passages, and more recently with desktop upon Lorem Ipsum</p>
            </div>
        </div>
        <!-- category ends here -->
        <!-- about part starts here -->
        <?php
			$data_target = 'body_part_nav1';
			$navbar_anchor_name = 'aboutme';
			$heading = 'Why Train with L.Mires';
			include 'v-templates/home_section_header.php';
		?>
        <div class="row about_outline">
        	<div class="col-md-4 col-xs-12">
                <img src="image/about_image1.png" width="100%"/>
                <div class="service_below services_below_1st">
                	<h3 class="services_below_heading">latest tweets</h3>
                    <p class="services_below_para">Lorem Ipsum is passages, and more recently with desktop upon publishing softincluding  of Lorem Ipsum.Lorem Ipsum is passages, and more recently.</p>
                    <p class="services_twitter_para pull-left">4 months ago</p>
                    <img src="image/services_twitter_logo.png" class="pull-right" />
                    <div class="clearfix"></div>
                </div>  	
            </div>
            <div class="col-md-4 col-xs-12">	
                <img src="image/about_image2.png" width="100%"/>
                <div class="service_below services_below_2nd">
                	<h3 class="services_below_heading">Bio</h3>
                    <p class="services_below_para">Age 24 years<br />
                        Level 3 Qualified in Fitness, Health & Nutrition<br />
                        Level 2 Qualified in Fitness, Health & Nutrition<br />
                        Represented North of England in Pole Vaulting<br />
                        Supported NE Linconshire County for Athletics</p>
                </div> 
            </div>
            <div class="col-md-4 col-xs-12">
                <img src="image/about_image3.png" width="100%"/>
                <div class="service_below services_below_3rd">
                	<h3 class="services_below_heading">interests</h3>
                    <p class="services_below_para">Lorem Ipsum is passages, and more recently with desktop upon publishing softincluding  of Lorem Ipsum.Lorem Ipsum is passages, and more recently.Lorem Ipsum is passages, and more recently with desktop upon publishing softincluding.</p>
                </div>
            </div>
        </div>
        <!-- about part ends here -->
        <!-- services part starts here -->
        <?php
			$data_target = 'body_part_nav2';
			$navbar_anchor_name = 'services';
			$heading = 'What can i do for you';
			include 'v-templates/home_section_header.php';
		?>
        <div class="row services_outline">
        	<div class="services_info_bar">
            	<div class="col-md-2 col-xs-12 services_info1 services_info_part">
                	<img src="image/services_image1.png" class="pull-left" />
                    <div class="services_info_part_text pull-left services_info_part_active">Activity Tracking</div>
                </div>
                <div class="col-md-2 col-xs-12 services_info2 services_info_part">
                	<img src="image/services_image2.png" class="pull-left" />
                    <div class="services_info_part_text pull-left">food & drink tracking</div>
                </div>
                <div class="col-md-2 col-xs-12 services_info3 services_info_part">
                	<img src="image/services_image3.png" class="pull-left" />
                    <div class="services_info_part_text pull-left">reports</div>
                </div>
                <div class="col-md-2 col-xs-12 services_info4 services_info_part">
                	<img src="image/services_image4.png" class="pull-left" />
                    <div class="services_info_part_text pull-left">progress monitoring</div>
                </div>
                <div class="col-md-2 col-xs-12 services_info5 services_info_part">
                	<img src="image/services_image5.png" class="pull-left" />
                    <div class="services_info_part_text pull-left">performance analysis</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="services_description">
            	<div class="col-md-7">
                	<p class="services_description_left_1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <p class="services_description_left_2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took text ever since the 1500s, when an unknown printer took a galley.when an unknown printer took text ever since the 1500s, whe.</p>
                    <div class="services_description_left_3_heading">activity tracking</div>
                    <p class="services_description_left_3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passagLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                </div>
                <div class="col-md-4 col-md-offset-1">
                	<div class="services_description_right_1_heading">My advice will depend on the following</div>
                    <div class="services_description_right_2">
                    	<li>Weight</li>
                        <li>BMI & calorie intake</li>
                        <li>blood pressure & heart rate checks</li>
                        <li id="services_description_right_2_last">eating habits & lifestyle</li>
                    </div>
                    <p class="services_description_left_3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
                </div>
            	<div class="clearfix"></div>
            </div>
        </div>
        <!-- services part ends here -->
        <!-- pricing part starts here -->
        <?php
			$data_target = 'body_part_nav3';
			$navbar_anchor_name = 'pricing';
			$heading = 'personal training packages';
			include 'v-templates/home_section_header.php';
		?>
        <div class="row services_outline">
        	<div class="pricing_details_bar">
            	<div class="col-sm-6 col-md-3 col-xs-12 pricing_box_outline">
                	<div class="pricing_box">
                    	<div class="pricing_box_top">
                        	<div class="pricing_box_top_text pull-left">Standard</div>
                            <div class="pricing_box_top_price pull-right">£ 30.00</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pricing_box_bottom">
                        	<p class="pricing_box_bottom_1st">1 session</p>
                            <p>EACH session is 60 minutes</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 pricing_box_outline">
                	<div class="pricing_box">
                    	<div class="pricing_box_top">
                        	<div class="pricing_box_top_text pull-left">Bronze</div>
                            <div class="pricing_box_top_price pull-right">£ 150.00</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pricing_box_bottom">
                        	<p class="pricing_box_bottom_1st">6 session</p>
                            <p>BUY 5 get 1 FREE session</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 pricing_box_outline">
                	<div class="pricing_box">
                    	<div class="pricing_box_top">
                        	<div class="pricing_box_top_text pull-left">Silver</div>
                            <div class="pricing_box_top_price pull-right">£ 300.00</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pricing_box_bottom">
                        	<p class="pricing_box_bottom_1st">12 session</p>
                            <p>BUY 10 get 2 FREE session</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 pricing_box_outline">
                	<div class="pricing_box">
                    	<div class="pricing_box_top">
                        	<div class="pricing_box_top_text pull-left">Gold</div>
                            <div class="pricing_box_top_price pull-right">£ 450.00</div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="pricing_box_bottom">
                        	<p class="pricing_box_bottom_1st">18 session</p>
                            <p>BUY 15 get 3 FREE session</p>
                        </div>
                    </div>
                </div>
                <p class="pricing_part_bottom_text">* Depending on requirements prices may change. Please call 0782 578 8634 for more details.</p>
            	<div class="clearfix"></div>
            </div>
        </div>
        <!-- pricing part ends here -->
        <!-- contact part navbar starts here -->
        <?php
			$data_target = 'body_part_nav4';
			$navbar_anchor_name = 'contact';
			$heading = 'get in touch';
			include 'v-templates/home_section_header.php';
		?>
        <!-- contact part navbar ends here -->
        <!-- body parts ends here -->
    </div>
</div>
<!-- body container ends here --->
<!-- contact details starts here -->
<div class="contact_details">
	<div class="container contact_details_container">
    	<div class="row contact_outline">
        	<div class="col-md-5">
            	<h1 class="contact_1stcolumn_top">Start Your Training Today!</h1>
                <h3 class="contact_1stcolumn_middle">Get fit or it won't zip...</h3>
                <form role="form" class="contact_form">
                	<div class="form-group">
                        <input type="email" class="form-control contact_form_textbox" placeholder="First Name">
                  	</div>
                    <div class="form-group">
                        <input type="email" class="form-control contact_form_textbox" placeholder="Your Email">
                  	</div>
                    <div class="form-group">
                        <input type="email" class="form-control contact_form_textbox" placeholder="Subject">
                  	</div>
                    <div class="form-group">
                        <textarea class="form-control contact_form_textbox" rows="6" placeholder="Message"></textarea>
                  	</div>
                    <div class="form-group">
                        <button type="submit" class="btn contact_form_submit pull-right">Send</button>
                  	</div>	
                </form>
            </div>
            <div class="col-md-4">
            	<div class="contact_2nd_column_outline">
                	<div class="contact_2nd_column_part">
                    	<img src="image/contact_phone_icon.png" class="contact_2nd_column_img pull-left"/>
                        <p class="contact_2nd_column_text pull-left">Call me: 0782 578 8634</p>
                    	<div class="clearfix"></div>
                    </div>
                    <div class="contact_2nd_column_part">
                    	<img src="image/contact_msg_icon.png" class="contact_2nd_column_img pull-left"/>
                        <p class="contact_2nd_column_text pull-left">Email me: hello@l.mires.com</p>
                    	<div class="clearfix"></div>
                    </div>
                    <div class="contact_2nd_column_part">
                    	<img src="image/contact_facebook_icon.png" class="contact_2nd_column_img pull-left"/>
                        <p class="contact_2nd_column_text pull-left">Add me: L.Mires</p>
                    	<div class="clearfix"></div>
                    </div>
                    <div class="contact_2nd_column_part">
                    	<img src="image/contact_twitter_icon.png" class="contact_2nd_column_img pull-left"/>
                        <p class="contact_2nd_column_text pull-left">Follow me: L.Mires</p>
                    	<div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 contact_3rd_column">
            	<img src="image/contact_3rd_column_image1.png">
            </div>
        </div>
    </div>
</div>
<!-- contact details ends here -->
<?php
	include 'v-templates/home_footer.php';
?>

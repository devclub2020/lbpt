<?php
	$page_title = 'MEMBERS';
	include 'v-templates/header.php';
?>
        <?php include 'v-templates/slider.php'; ?>
        <!-- body details starts here -->
        <div class="row body_details_row">
        	<div class="col-md-8 col-md-offset-2">
            	<h3 class="page_heading col-md-offset-1">Sign Up</h3>
                <form class="form-horizontal" role="form">
                	<div class="form-group">
                    	<label for="inputEmail3" class="col-sm-3 control-label signup_form_label">Your Name:</label>
                        <div class="col-sm-5 col-xs-10">
                        	<input type="text" class="form-control signup_form_input_text" placeholder="Your Name">
                        </div>    
                    </div>
                    <div class="form-group">
                    	<label for="inputEmail3" class="col-sm-3 control-label signup_form_label">Email:</label>
                        <div class="col-sm-5 col-xs-10">
                        	<input type="text" class="form-control signup_form_input_text" placeholder="Email Id">
                        </div>    
                    </div>
                    <div class="form-group">
                    	<label for="inputEmail3" class="col-sm-3 control-label signup_form_label">Contact No:</label>
                        <div class="col-sm-5 col-xs-10">
                        	<input type="text" class="form-control signup_form_input_text" placeholder="Contact No">
                        </div>    
                    </div>
                    <div class="form-group">
                    	<label for="inputEmail3" class="col-sm-3 control-label signup_form_label">Username:</label>
                        <div class="col-sm-5 col-xs-10">
                        	<input type="text" class="form-control signup_form_input_text" placeholder="Username">
                        </div>    
                    </div>
                    <div class="form-group">
                    	<label for="inputEmail3" class="col-sm-3 control-label signup_form_label">Password:</label>
                        <div class="col-sm-5 col-xs-10">
                        	<input type="text" class="form-control signup_form_input_text" placeholder="Password">
                        </div>    
                    </div>
                    <div class="form-group">
                    	<label for="inputEmail3" class="col-sm-3 control-label signup_form_label">Confirm Password:</label>
                        <div class="col-sm-5 col-xs-10">
                        	<input type="text" class="form-control signup_form_input_text" placeholder="Retype Password">
                        </div>    
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-3">
                        	<input type="submit" class="btn btn-default signup_form_submit" value="Submit">
                        </div>    
                    </div>
                </form>
            </div>
        </div>
        <!-- body details ends here -->
    </div>
</div>
<!-- body container ends here -->
<?php include 'v-templates/footer.php'; ?>

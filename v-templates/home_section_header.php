<div class="row body_part_headings <?php if($navbar_anchor_name == 'contact'){echo 'contact_navbar';}?>">
    <div class="col-md-12">
        <div class="navbar header_navigation" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#<?php echo $data_target; ?>">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="glyphicon glyphicon-align-justify"></span>
                </button>
                <a class="navbar-brand body_part_heading_brand" name="<?php echo $navbar_anchor_name; ?>">
                    <!--<img src="image/header_logo.png" />-->
                    <h2 class="body_part_heading_text pull-left"><?php echo $heading; ?></h2>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="<?php echo $data_target; ?>">
                <ul class="nav navbar-nav">
                    <li class="header_nav_text">
                        <p class="header_nav_1st_text">Top</p>
                        <p class="header_nav_2nd_text body_part_heading_arrow mynav"><a href="#top"><img src="image/body_part_top_arrow.png" /></a></p>
                    </li>
                <li class="header_nav_text">
                    <p class="header_nav_1st_text">Why Train With L.Mires</p>
                    <p class="header_nav_2nd_text mynav"><a href="#aboutme">ABOUT L.MIRES</a></p>
                </li>
                <li class="header_nav_text">
                    <p class="header_nav_1st_text">how can i help you</p>
                    <p class="header_nav_2nd_text mynav"><a href="#services">SERVICES</a></p>
                </li>
                <li class="header_nav_text">
                    <p class="header_nav_1st_text">packages</p>
                    <p class="header_nav_2nd_text mynav"><a href="#"><a href="#pricing">PRICING</a></p>
                </li>
                <li class="header_nav_text">
                    <p class="header_nav_1st_text">get in touch</p>
                    <p class="header_nav_2nd_text mynav"><a href="#contact">CONTACT</a></p>
                </li>
                </ul>
            </div>
        </div>
    </div>
</div>
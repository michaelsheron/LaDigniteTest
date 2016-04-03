<!DOCTYPE html>
<?php
include_once('../php/analytics.php');
?>

<html lang="en">
	<head>
		<?php include_once('../php/head.php');?>
        <title>La Dignite - Home</title>
    </head>
	<body>
	<div class="container-fluid">
		<div>
			<?php include_once('../php/header.php');?>
		</div>
		<hr/>
	</div>	
	
	<div class="container" id="landing_support">
		<div class="centertext">
	        <h1>Help support community <br/> centered projects</h1>
	        <p>Your donation will bring capacity-building in tech for <br/> youth in NYC and South Africa. <a href="#">Learn How.</a></p>
        </div>
	</div>
	

	<div class="hero" id="hero_image_1">
        <ul class=" container">
            <li class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="press.php"><img class="circle_link" src="../img/logos/logo_team_.png"/></a>
                <p>
                    Our mission is to enhance 
                    the quality of life of 
                    individuals and communities.
                </p>
            </li>
            <li class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                <a href="programs.php"><img class="circle_link" src="../img/logos/logo_contribution_.png"/></a>
                <p>
                    Learn about our programs for 
                    marginalized communites.
                </p>
            </li>
            <li class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <a href="volunteer.php"><img class="circle_link" src="../img/logos/logo_volunteer_.png"/></a>
                <p>
                    We're seeking skilled volunteers 
                    to join our organization.
                </p>
            </li>
        </ul>
	</div>

	
	<div class="container" id="landing_about">
		<?php include_once('../php/text_about.php');?>
	</div>
	
	<div class="container hero">
			<div id="hero_image_2" class="row-fluid">
				<div class="container">
					<h1>Our Service in Haiti</h1>
					<p>
						With your donation we will provide much needed support and 
						assistance to numerour community-centered projects that
						address the more pressing issues experienced by the  neglected
						populations of society - poverty, low self-esteem, and lack
						of education - both nationally and internationally.
					</p>
				</div>
				<div class="youtube-video-wrap">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/D98m0GT46X8" 
                            frameborder="0" allowfullscreen>
                        </iframe> 
                    </div>
                </div>        
			</div>
	</div>
	
	<div class="container-fluid" id="footer">
		<?php include_once('../php/footer.php');?>
	</div>

		<?php include_once('../php/scripts.php');?>
        <script src="../js/active.js"></script>
	</body>
</html>
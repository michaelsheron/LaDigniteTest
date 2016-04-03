<!DOCTYPE html>
<?php
include_once('../php/analytics.php');
?>

<html lang="en">
	<head>
		<?php include_once('../php/head.php');?>
        <title>La Dignite - Contact</title>
    </head>
	<body>
	<div class="container-fluid">
		<div>
			<?php include_once('../php/header.php');?>
		</div>
		<hr/>
	</div>	
	
    <div class="container centertext" id="contact_container">
        <p>
            We are always in need of volunteers to 
            assist with our programs and special initiatives. 
            If you are interested in working with us as a volunteer 
            please call us at (718) 838-4925, e-mail, or fill out our form.
        </p>
	   <?php include("../php/volunteerform.php");?>
    </div>
	
	<div class="container-fluid inner_space " id="footer">
		<?php include_once('../php/footer.php');?>
	</div>

		<?php include_once('../php/scripts.php');?>
        <script src="../js/active.js"></script>
	</body>
</html>
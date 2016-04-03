<!DOCTYPE html>
<?php
include_once('../php/analytics.php');
?>

<html lang="en">
	<head>
		<?php include_once('../php/head.php');?>
        <title>La Dignite - Donate</title>
    </head>
	<body>
	<div class="container-fluid">
		<div>
			<?php include_once('../php/header.php');?>
		</div>
		<hr/>
	</div>	
	
    <div class="container" id="donate_container">
        <blockquote class="centertext">
            <h1>
                <q>No one has ever become poor by giving.</q>
            </h1>
            <footer><cite>Anne Frank</cite></footer>
        </blockquote>
        <br/>
        <br/>
	   <p>
            La Dignite is a non-profit organization promoting dignity to individuals of disadvantaged and marginalized communities worldwide. We strive to empower individuals to overcome their own obstacles using the powerful tool of education to enable them to develop their own life path.We are thankful for your continued support that allows us to expand our programs to these communities on a global scale.
        <br/>
            Please, click <a href="contact.php">here</a> to contact us or click on the button below for online donations. 
        <br/>
            We thank you in advance for your support.
        </p>
        <br/>
        <p class="lefttext">
            Sincerely, <br/>
            <em><strong>Blossom A. Burton, Ed.D.</strong> <br/>
            Chair, La Dignite</em> <br/>
       </p>
       
        <hr/>
        
        <div id="html1">
        <form action="https://www.paypal.com/cgi-bin/webscr"  method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="T7SHE6D8ATNFJ">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
	</div>
	<div class="container-fluid inner_space " id="footer">
		<?php include_once('../php/footer.php');?>
	</div>

		<?php include_once('../php/scripts.php');?>
        <script src="../js/active.js"></script>
	</body>
</html>
<?php
    $username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$birthday = $_POST["birthday"];
	$birthmonth = $_POST["birthmonth"];
	$birthyear = $_POST["birthyear"];
	
	$chaction = $_POST["chaction"];
	$chcomedy = $_POST["chcomedy"];
	$chmotor = $_POST["chmotor"];
	$chdocumentary = $_POST["chdocumentary"];
	$chgameshow = $_POST["chgameshow"];
	$chsports = $_POST["chsports"];
	$chnews = $_POST["chnews"];
	$chkids = $_POST["chkids"];
	
	$maillist = $_POST["maillist"];
	
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <body>
        <?php echo $username ?>
        <?php echo $password ?>
        <?php echo $email ?>
        <?php echo $name ?>
        <?php echo $birthday ?>
        <?php echo $birthmonth ?>
        <?php echo $birthyear ?>
        <?php echo $chaction ?>
        <?php echo $chcomedy ?>
        <?php echo $chmotor ?>
        <?php echo $chdocumentary ?>
        <?php echo $chgameshow ?>
        <?php echo $chsports ?>
        <?php echo $chnews ?>
        <?php echo $chkids ?>
        <?php echo $maillist ?>
    </body>
</html>
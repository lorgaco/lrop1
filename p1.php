<?php
    $browser = $_POST["navegador"];
    $time = $_POST["hora"];
    
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
	$terms = $_POST["terms"];
    
    $channels = "";
    if($chaction==on) $channels = $channels." "."action";
    if($chcomedy==on) $channels = $channels." "."comedy";
    if($chmotor==on) $channels = $channels." "."motor";
    if($chdocumentary==on) $channels = $channels." "."documentary";
    if($chgameshow==on) $channels = $channels." "."gameshow";
    if($chsports==on) $channels = $channels." "."sports";
    if($chnews==on) $channels = $channels." "."news";
    if($chkids==on) $channels = $channels." "."kids";
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="p1.css" media="screen" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>LRO</title>
    </head>
    <body>
        <div class="tableline">
            <div class="lineleft">Username:</div>
            <div class="lineright"><?php echo $username ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Password:</div>
            <div class="lineright"><?php echo $password ?></div>  
        </div>
        <div class="tableline">
            <div class="lineleft">Email:</div>
            <div class="lineright"><?php echo $email ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Name:</div>
            <div class="lineright"><?php echo $name ?></div>
            </div>
        <div class="tableline">
            <div class="lineleft">Lastname:</div>
            <div class="lineright"><?php echo $lastname ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">birthdate:</div>
            <div class="lineright"><?php echo $birthday ?><?php echo $birthmonth ?><?php echo $birthyear ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Categories subscribed:</div>
            <div class="lineright"><?php echo $channels ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Maillist subscribed:</div>
            <div class="lineright"><?php echo $maillist ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Terms acepted:</div>
            <div class="lineright"><?php echo $terms ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Browser:</div>
            <div class="lineright"><?php echo $browser ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">time:</div>
            <div class="lineright"><?php echo $time ?></div>
        </div>
        <?php echo $maillist ?>
    </body>
</html>
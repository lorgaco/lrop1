<?php
    $browser_post = $_POST["navegador"];
    $browser_get = $_REQUEST["navegador"];
    if($browser_get==null || $browser_get==""){
        $browser = $browser_post;
        $time = $_POST["hora"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["mail"];
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $birthday = $_POST["birthday"];
        $birthmonth = $_POST["birthmonth"];
        $birthyear = $_POST["birthyear"];
        $gender = $_POST["gender"];
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
    }
    else if($browser_post==null || $browser_post==""){
        $browser = $browser_get;
        $time = $_REQUEST["hora"];
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $email = $_REQUEST["mail"];
        $name = $_REQUEST["name"];
        $lastname = $_REQUEST["lastname"];
        $birthday = $_REQUEST["birthday"];
        $birthmonth = $_REQUEST["birthmonth"];
        $birthyear = $_REQUEST["birthyear"];
        $gender = $_REQUEST["gender"];
        $chaction = $_REQUEST["chaction"];
        $chcomedy = $_REQUEST["chcomedy"];
        $chmotor = $_REQUEST["chmotor"];
        $chdocumentary = $_REQUEST["chdocumentary"];
        $chgameshow = $_REQUEST["chgameshow"];
        $chsports = $_REQUEST["chsports"];
        $chnews = $_REQUEST["chnews"];
        $chkids = $_REQUEST["chkids"];
        $maillist = $_REQUEST["maillist"];
        $terms = $_REQUEST["terms"];
    }
    
    if($maillist==on) $maillist = "yes";
    else $maillist = "no";
        if($terms==on) $terms = "yes";
    else $terms = "no";
    
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
    <?php echo $browser_get ?>
    <?php echo $browser_post ?>
    <?php echo $browser ?>
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
            <div class="lineleft">Birthdate:</div>
            <div class="lineright"><?php echo $birthday ?> <?php echo $birthmonth ?> <?php echo $birthyear ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Gender:</div>
            <div class="lineright"><?php echo $gender ?></div>
        </div>
        <div cl
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
            <div class="lineleft">Time:</div>
            <div class="lineright"><?php echo $time ?></div>
        </div>
        <?php echo $maillist ?>
    </body>
</html>
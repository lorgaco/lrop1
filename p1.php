<?php
    $browser = $_POST["navegador"];
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
    
    //other values
    $server = $_SERVER["HTTP_HOST"];
    $referer = $_SERVER["HTTP_REFERER"];
    $software = $_SERVER["SERVER_SOFTWARE"];
    $remote = $_SERVER["REMOTE_ADDR"];
    $method = $_SERVER["REQUEST_METHOD"];
    $request_uri = $_SERVER["REQUEST_URI"];
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
	
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
        <br />
        <div class="tableline">
            <div class="lineleft">Server values</div>
        </div>
        <div class="tableline">
            <div class="lineleft">Server:</div>
            <div class="lineright"><?php echo $server ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Referer:</div>
            <div class="lineright"><?php echo $referer ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Software:</div>
            <div class="lineright"><?php echo $software ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Remote:</div>
            <div class="lineright"><?php echo $remote ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Method:</div>
            <div class="lineright"><?php echo $method ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">Request URI:</div>
            <div class="lineright"><?php echo $request_uri ?></div>
        </div>
        <div class="tableline">
            <div class="lineleft">User agent:</div>
            <div class="lineright"><?php echo $user_agent ?></div>
        </div>
    </body>
</html>
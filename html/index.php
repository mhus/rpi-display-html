<html>
  <header>
    <meta http-equiv="refresh" content="10">
  </header>
<body style="background-color:black;color:white">
  <center>
    <a href="#">Refresh</a><br><br>  
    <font style="font-size: 150px">
<?php 
date_default_timezone_set("Europe/Paris");
echo date("H:i"); 
?>
    </font></center>

    <iframe width="100%" height="300" src="http://default@localhost:81/nagios/cgi-bin/status.cgi?host=all&servicestatustypes=28"></iframe>
  </body>
</html>
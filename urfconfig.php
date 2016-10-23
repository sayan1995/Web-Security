<?php
 $url=$_GET['rd'];
 $hash=$GET['hd'];
 if(sha1($url)==$hash)
	 header("location:http://pesitcns-capturetheflag.rhcloud.com/urfchallenge1.php");
 ?>
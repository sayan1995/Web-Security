<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <style>
        .side-nav {
            width: 30%;
        }

        .test {
            position: absolute;
            left: 30%;
            width: 70%;
        }

        nav {
            height: 240px;
            line-height: 240px;
        }

        nav i, nav [class^="mdi-"], nav [class*="mdi-"], nav i.material-icons {
            height: 240px;
            line-height: 240px;
        }

        nav .button-collapse i {
            height: 240px;
            line-height: 240px;
        }

        nav .brand-logo {
            font-size: 4rem;
        }

        @media only screen and (min-width: 601px) {
            nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
                height: 240px;
                line-height: 240px;
            }
        }
    </style>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(".button-collapse").sideNav();
    </script>
</head>
<body>
<header>
    <div class="container"><a href="#" data-activates="nav-mobile"
                              class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i
            class="material-icons">menu</i></a></div>
    <ul id="nav-mobile" class="side-nav fixed">
        <div align="center">
            <li class="logo"><img src="websec.png" width="120px" height="150px"></li>
        </div>
        <li class="bold active"><a href="about.html" class="waves-effect waves-teal">About</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Tutorials</a>

                    <div class="collapsible-body">
                        <ul>
                            <li><a href="sqltutorial.html">SQL Injection</a></li>
                            <li><a href="csstutorial.html">Cross Site Scripting</a></li>
                            <li><a href="bsmtutorial.html">Broken Session Management</a></li>
                            <li><a href="idortutorial.html">Insecure Direct Object References</a></li>
                            <li><a href="uraftutorial.html">Unvalidated Redirects And Forwards</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Challenges</a>

                    <div class="collapsible-body">
                        <ul>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect waves-teal">SQL Injection</a>

                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="sqlchallenge1.php" class="teal-text">Challenge 1</a></li>
                                                <li><a href="sqlchallenge2.php" class="teal-text">Challenge 2</a></li>
                                                <li><a href="sqlchallenge3.php" class="teal-text">Challenge 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect waves-teal">Cross Site Scripting</a>

                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="csschallenge1.php" class="teal-text">Challenge 1</a></li>
                                                <li><a href="csschallenge2.php" class="teal-text">Challenge 2</a></li>
                                                <li><a href="csschallenge3.php" class="teal-text">Challenge 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect waves-teal">Broken Session
                                            Management</a>

                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="bsmchallenge1.php" class="teal-text">Challenge 1</a></li>
                                                <li><a href="bsmchallenge2.php" class="teal-text">Challenge 2</a></li>
                                                <li><a href="bsmchallenge3.php" class="teal-text">Challenge 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect waves-teal">Insecure Direct Object
                                            References</a>

                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="idorchallenge1.php" class="teal-text">Challenge 1</a></li>
                                                <li><a href="idorchallenge2.php" class="teal-text">Challenge 2</a></li>
                                                <li><a href="idorchallenge3.php" class="teal-text">Challenge 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-padding">
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold">
                                        <a class="collapsible-header waves-effect waves-teal">Unvalidated Redirects And
                                            Forwards</a>

                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="urafchallenge1.php" class="teal-text">Challenge 1</a></li>
                                                <li><a href="urafchallenge2.php" class="teal-text">Challenge 2</a></li>
                                                <li><a href="urafchallenge3.php" class="teal-text">Challenge 3</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</header>
<div class="test">
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">Indirect Object References 1</a>
        </div>
    </nav>
    <br>
    <h5 class="teal-text" style="position :relative">Assuming you are already logged in as Akshay, Clicking on the profile button below will let you see your account details i.e.,Akshay's details. Your objective is to be able to see the Account details of every user in the database(Only possible for an admin and Aksay is not an admin)</h5>
    <br>

    <div style="position: relative; left: 35%; width: 330px ">
        <form method="GET" action = "<?php $_PHP_SELF ?>">
            <div class="input-field col s6">
              <input id="admin_level" type="hidden" class="validate" name="admin_level" value=0>
            </div>
            <div class="input-field">
                <button class="waves-effect waves-light btn blue" type="submit" style="position: relative; left: 15%">Account Details</button>
                <a class="btn tooltipped red" data-position="bottom" data-delay="50" style="position: relative; left: 15%" data-tooltip="URL Tampering will help.">Hint</a>
            </div>
        </form>


    </div>
    <?php
    

		 if(isset( $_GET["admin_level"]) )     {
		 	if($_GET["admin_level"]==0){

    		echo"<br> User Name: akshay<br>";
    		echo"<br> Email ID: akshay@gmail.com<br>";
    		echo"<br> Password: 12345<br>";
    		echo"<br> Credit Card Number: 3213-3231-4534-2321 ";
    	}
    	   if($_GET["admin_level"]==1){
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "cnsproject";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
        //$userid=$_GET["userid"];
        $sql = "select * from user_data";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                echo"<br> User Name:". $row["username"]. "<br>";
    			echo"<br> Email ID:" .$row["emailid"]. "<br>";
    			echo"<br> Password:". $row["password"]. "<br>";
    			echo"<br> Credit Card Number:". $row["crCardNo"]. "<br>";
    			echo"<br></br>";
    			//echo"<br> Email ID:" .$row["emailid"]. "<br>";
             }
        } else {
             //echo "0 results";
        } 
        if($result->num_rows == 4){
            $message = "successfully passed challenge";
            echo "<script type='text/javascript'>Materialize.toast('$message', 6000);</script>";
        }
    	}
	}	
    ?>

</div>
</body>
</html>
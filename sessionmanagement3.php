<?php
	@ob_start();
	session_start();
?>
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
            font-size: 3.2rem;
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
                                                <li><a href="#!" class="teal-text">Challenge 1</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 2</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 3</a></li>
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
                                                <li><a href="#!" class="teal-text">Challenge 1</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 2</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 3</a></li>
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
                                                <li><a href="#!" class="teal-text">Challenge 1</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 2</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 3</a></li>
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
                                                <li><a href="#!" class="teal-text">Challenge 1</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 2</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 3</a></li>
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
                                                <li><a href="#!" class="teal-text">Challenge 1</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 2</a></li>
                                                <li><a href="#!" class="teal-text">Challenge 3</a></li>
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
            <a href="#" class="brand-logo center">Broken Session Management Challenge 3</a>
        </div>
    </nav>
    <br>
    <h5 class="teal-text" style="position :relative; left: 20px;">Retrieve the Session ID of the session in order to gain unauthorised access to another user profile</h5>
	<h5 class="teal-text" style="position :relative; left: 20px;">Username is 'akshaycns' and password is '123'</h5>
    <br>

    <div style="position: relative; left: 35%; width: 330px ">
        <form method="POST" action = "<?php $_PHP_SELF ?>">
            <div class="input-field col s6">
              <input id="userid" type="text" class="validate" name="userid">
              <label for="userid">Enter your Username</label>
            </div>
			<div class="input-field col s6">
				<input id="pwd" type="password" class="validate" name="pwd">
				<label for="pwd">Enter your password</label>
			  </div>
            <div class="input-field">
                <button class="waves-effect waves-light btn blue" type="submit" action="profile.php" style="position: relative; left: 15%">Submit</button>              
            </div>
        </form>


    </div>
<?php
		if(isset( $_POST["userid"]) )     {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cns";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
		// Define $username and $password
		$username=$_POST['userid'];
		$password=$_POST['pwd'];
		$sql = "select * from challenge_users where password='$password' AND userid='$username'";
		$result = $conn->query($sql);        
        if ($result->num_rows == 1) {
		//$_SESSION['login_user']=$username;
		echo("<script>location.href = 'profile.php';</script>"); // Redirecting To Other Page
		} else {
		$message="Invalid username or password";
		echo "<script type='text/javascript'>Materialize.toast('$message', 4000);</script>";
		}
		}
?>
</div>
</body>
</html>
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
                                                <li><a href="urfchallenge1.php" class="teal-text">Challenge 1</a></li>
                                                <li><a href="urfchallenge2.php" class="teal-text">Challenge 2</a></li>
                                                <li><a href="urfchallenge3.php" class="teal-text">Challenge 3</a></li>
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
            <a href="#" class="brand-logo center">Unvalidated Redirects and Forwards</a>
        </div>
    </nav>
    <br>
    <h5 class="teal-text" style="position :relative; left: 20px;">Given Below is the url for directing back to page 1</h5>
    <h5 class="teal-text" style="position :relative; left: 20px;">Notice the hd parameter,it is encrypted.</h5>
    <h5 class="red-text" style="position :relative; left: 20px;">Task:Find out what kind of mechanism used for hashing the hd paramter and replace it with the corresponding encrypt parameter for www.google.com</h5>
	<h5 class="red-text" style="position :relative; left: 20px;"><a onclick="f();" href="http://pesitcns-capturetheflag.rhcloud.com/urfconfig.php?rd=http://pesitcns-capturetheflag.rhcloud.com/urfchallenge1.php&hd=67f42293cf5f219eaa5c0bae01f4f34ac994949a">Redirect to page 1</a><h5>
    <br>
    <div style="position: relative; left: 35%; width: 330px ">
        <form method="GET" action = "<?php $_PHP_SELF ?>">
            <div class="input-field col s6">
              <input id="url" type="text" class="validate" name="url">
              <label for="last_name">Enter here</label>
            </div>
            <div class="input-field">
			      <button class="waves-effect waves-light btn blue" type="submit" style="position: relative; left: 15%">Submit</button>
                <a class="btn tooltipped red" data-position="bottom" data-delay="50" style="position: relative; left: 15%" data-tooltip="Find out the type of hashing by checking the values!">Hint</a>
            </div>
        </form>


    </div>
    <?php
        if(isset( $_GET["url"]) )     {

        //echo "Connected successfully";
        $userid=$_GET["url"];
		//echo $userid;
		if($userid=="http://pesitcns-capturetheflag.rhcloud.com/urfchallenge1.php?rd=http://www.google.com&hd=d8b99f68b208b5453b391cb0c6c3d6a9824f3c3a") 
        {
            $message = "successfully passed challenge";
            echo "<script type='text/javascript'>Materialize.toast('$message', 4000);</script>";
			
        }
		
    }
    ?>
</div>
</body>
</html>
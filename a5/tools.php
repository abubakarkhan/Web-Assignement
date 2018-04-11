<?php
function footer(){
    ?>
    <footer>
            <div class="footerBlock">
                <h4>&nbsp;&nbsp;Find Us</h4>
                <ul>
                    <li>Address: 4140 JVL Industrial Park Dr. #102, <br>Marietta, GA 30066 (Just off I-575)</li>
                    <li>Phone: 678-494-2996  </li>
                    <li>Email: Bob@Bobs-Garage.com</li>
                    <li>Fax: 678-494-1076</li>
                </ul>
            </div>
            <div class="footerBlock">
                <h4>&nbsp;&nbsp;Navigate to</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gas Pumps</a></li>
                    <li><a href="#">Soda Machines</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footerBlock">
                <img style="height:150px;"src="resources/gasboy_200.gif">
            </div>
            <div id="social" class="footerBlock">
                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            </div>
            <!--aside tage used for highlighting the copyright-->
            <aside style="text-align:center;">Copyright &copy 2016 Bob's Garage, LLC</aside>
        </footer>
    <?php
}

function topPart($pageNmae){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Bob's Garage</title>
        <link rel="stylesheet" type="text/css" href="wireframe.css">
        <!--My Stylesheet-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Fontdiner+Swanky|Graduate|Lobster+Two|Oregano" rel="stylesheet">
        <!--Font Awsome Glyphicons - Free to use resource-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
    <header><h1>Bob's Garage</h1></header>
        <nav class="textCenter">
            <a href="index.php">Home</a>
            <a href="pumps.php">Gas Pumps</a>
            <a href="#">Soda Machines</a>
            <a href="#">About Us</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </nav>
    <main>
        <div id=btt onclick='window.scrollTo(0,0)'>&uarr; Back To Top</div>
    <?php
}

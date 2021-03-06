<?php 

class Shared {

    static function header($title = "Unknown Title", $extraLink = ""){ ?>

        <!doctype html>
            <html lang="en">
            <head>
                <!--Let browser know website is optimized for mobile-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

                <!-- Compiled and minified CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

                <!-- Import Google Font --> 
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
                <!--Import Google Icon Font-->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <!-- Font Awesome -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">


                <!-- CSS -->
                <link rel="stylesheet" href="css/shared.css">
                <!-- For Extra CSS -->
                <link rel="stylesheet" href="<?php echo $extraLink?>">

                <title><?php echo $title ?></title>
            </head>
            <body class="color-change-2x">

    <?php }


    static function footer() { ?>
        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <script src="js/shared.js"></script>
    
        </body>
        </html>

    <?php }

    static function navbar($msg="Stay with us feel like home.", $msgClassStr="cyan lighten-1 grey-text text-darken-3") { ?>

        <nav class="z-depth-1">
        <div class="container row">

        <div class="col">
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
        <span class="bold" style="font-size:1.6em">Good Day, Rahim</span>
        </div>

        <div class="col right">
        <ul class="hide-on-small-only">
            <li>
            <a href="#"><i class="fas fa-headset"></i></a>
            </li>
            <li>
            <a href="index.php"><i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
        </div>

        </div>  
        </nav>

        <div class="<?php echo $msgClassStr?> center" style="border-radius:3%">
        <div class="clearfix"style="height:0px"></div>
        <p class="bold NavberSubMsg" ><?php echo $msg?></p>
        </div>

        <!-- <div class="" style="height:80px"></div> -->

        <ul id="slide-out" class="sidenav">
        <div class="user-view center">
            <img src="assets/hotelLogo.png" alt="" width="250">
            <span style="font-size:1.5em">Rahim</span><br>
            <span>rahimisthebest@gmail.com</span>
            <hr>
        </div>
        
        <li>
            <a href="#"><i class="fas fa-headset"></i> Live Chat With Us</a>
        </li>
        
        
        <li>
            <a href="index.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
        </li>

        </ul>

        
    <?php }




}


?>
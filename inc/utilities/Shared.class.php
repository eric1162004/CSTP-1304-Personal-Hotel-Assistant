<?php 

class Shared {

    static function header($title = "Unknown Title", $extraLink = ""){ ?>

        <!doctype html>
            <html lang="en">
            <head>
                <!-- Compiled and minified CSS -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
                <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

                <!-- Import Google Font -->
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;900&display=swap" rel="stylesheet">
                <!--Import Google Icon Font-->
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

                <!--Let browser know website is optimized for mobile-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

                <!-- CSS -->
                <link rel="stylesheet" href="css/shared.css">
                <!-- For Extra CSS -->
                <link rel="stylesheet" href="<?php echo $extraLink?>">

                <title><?php echo $title ?></title>
            </head>
            <body>

    <?php }


    static function footer() { ?>
    
          <!--JavaScript at end of body for optimized loading-->
          <script type="text/javascript" src="js/materialize.min.js"></script>

        </body>
        </html>

    <?php }

    static function navbar() { ?>



    <?php }




}


?>
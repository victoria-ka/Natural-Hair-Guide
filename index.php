<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Natural Hair Guide</title>
        <meta name="description" content="A site educating users on hair types and hair care.">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <!-- Navigation.php -->
        <!-- About Hair Types, How to Take Care of Hair, Resources, Contact -->
        <?php include('nav.php'); ?>
        
        <!-- Header Graphic and description -->

        <div class="row homehead">
            <div class="col s12">
                <!-- Insert Graphic Here -->
                <h1 class="center-align">Learn about your hair.</h1>
            </div>
        </div>
        
        <!-- Why Knowing Hair Type is Important -->
        <div class="mycontainer">
            <div class="row">
                <div class="col s12 m12 l6 xl6">
                    <img class="responsive-img" src="img/kamaricurls.jpg" alt="curly hair boy">
                </div>
                <div class="col s12 m12 l6 sl6">
                    <h2>"Why should I know my hair type?"</h2>
                    <br>
                    <p>Understanding your hair type will help you better take care of your hair. Hair types can range in pattern, texture, ferosity, and other characteristics. The curly or wavy pattern in your hair is caused by the number of disulside bonds between the proteins in the hair shaft. The more bonds, the curlier the hair. When you get to know how hair acts and why, you can take better care of it by finding the appropriate products and routines that work for you. You can also learn to identify others who might have the same hair texture as you, in order to find other ways to keep your hair growing and healthy. </p>
                </div>
            </div>
        </div>
        
        <div class="footer-copyright teal lighten-2 white-text footerspacing">
            <div class="container center-align">
            © Victoria K Studio 2017 
            </div>
        </div>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $(document).ready( function() {
                $(".button-collapse").sideNav();
            });
        </script>
        
    </body>
</html>


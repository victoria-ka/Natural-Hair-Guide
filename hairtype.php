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

        <?php include('nav.php'); ?>
        
        <div class="mycontainer">
            <div class="row">
                <div class="col s12">
                    <h1 class="center-align">Find Your Hair Type</h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3 xl3">
                    <!---->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/type1.jpg" alt="type 1 hair">
                        </div>
                        <div class="card-content">
                            <h3 class="center-align">Type 1</h3>
                            <p>This type of hair is typically straight, and because it is straight, it does not damage very easily. It is the finest of all the hair types, and oil from the scalp travels down the shaft much faster than curly hair textures. Type 1 hair is much more difficult to curl as well.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 xl3">
                    <!---->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/type2.jpg" alt="type 2 hair">
                        </div>
                        <div class="card-content">
                            <h3 class="center-align">Type 2</h3>
                            <p>Type 2 hair is naturally wavy, and often thicker than type 1 hair. This hair type has the potential to be frizzy, and can be either fine or coarse. However, the hair is not as curly as type 3 or 4.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 xl3">
                    <!---->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/type3_2.jpg" alt="type 3 hair">
                        </div>
                        <div class="card-content">
                            <h3 class="center-align">Type 3</h3>
                            <p>This hair type is naturally curly, being straight when the hair is wet and curling up when left to dry. The curls are typically springy, with shrinkage being common. The hair can potentially get frizzy, and can have a combination of textures.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3 xl3">
                    <!---->
                    <div class="card">
                        <div class="card-image">
                            <img src="img/type4.jpeg" alt="type 4 hair">
                        </div>
                        <div class="card-content">
                            <h3 class="center-align">Type 4</h3>
                            <p>Type 4 hair is classified as kinky/curly. The hair is more fragile and delicate, often with a coarser texture. The curls are tight, so they are in many cases well defined. In other cases, such as extreme shrinkage, the curls might not be as recognizable due to the texture of the hair and the amount of curl. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mycontainer">
              
            <div class="row">
               
               <div class="col s12 m12 l6 xl6">
                    
                    <div class="row">

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="0" class="center-align">2A</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="1" class="center-align">2B</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="2" class="center-align">2C</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="3" class="center-align">3A</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="4" class="center-align">3B</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="5" class="center-align">3C</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="6" class="center-align">4A</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="7" class="center-align">4B</h2>
                        </div>

                        <div class="typebutton col s3 m3 l3 xl3">
                            <h2 id="8" class="center-align">4C</h2>
                        </div>
                        
                    </div>

                </div>
               
                <div class="col s12 m12 l6 xl6">
                   
                    <div class="row">
                       
                        <div class="col s12 m12 l4 xl4">
                             <h1 id="letter_number" class="fade">2A</h1>
                             <p id="description" class="fade">2As have a fine, barely-there tousled texture that’s very easy to straighten. People with this texture have to be wary of using heavy styling products that can easily weigh their strands down, rendering them limp and lifeless.</p>
                        </div>
                        
                        <div class="col s12 m12 l8 xl8">
                            <img src="img/2a.jpg" alt="hair type" class="responsive-img fade" id="hairtype">
                        </div>
                        
                    </div>

                </div>
            
            </div>
            
        </div>
        
        <div class="footer-copyright teal lighten-2 white-text footerspacing">
            <div class="container center-align">
            © Victoria K Studio 2017 
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                            
                var types = ["2A","2B","2C","3A","3B","3C","4A","4B","4C"];
                var images = ["img/2a.jpg", "img/2b.jpg", "img/2c.jpg", "img/3a.jpg", "img/3b.jpg", "img/3c_type.jpg", "img/4a.jpg", "img/4b.jpg", "img/4c.jpg"];
                var descriptions = ["2As have a fine, barely-there tousled texture that’s very easy to straighten. People with this texture have to be wary of using heavy styling products that can easily weigh their strands down, rendering them limp and lifeless.",
                   "2Bs are flatter at the crown with defined S-shaped waves starting from the midlength, like Salma Hayek's here. Strands are thicker in diameter than a 2A, and you’ll have to put in a bit of elbow grease into getting it straight.",
                   "2C waves are thick, coarse, and more susceptible to frizzing. The S-bends are well-defined and begin at the roots.",
                   "3A strands, like Zendaya’s pictured here, tend to be shiny with large, loose curls that are about the size of a piece of sidewalk chalk.",
                   "3Bs have coarse, springy ringlets with a circumference similar to a Sharpie marker. This hair texture can get dry, so look for styling gels that have humectants in them to attract moisture to strands.",
                   "3C curls are tight corkscrews that range in circumference from a straw to a pencil. Yara Shahidi is a great example for 3Cs. Strands are densely packed together, giving way to lots of natural volume. Frizziness can be an issue with this type.",
                   "4As have dense springy, S-patterned coils that are the circumference of a crochet needle. Look to Skai Jackson if you have this texture type. If you're a fan of wash and gos, styling should be done more frequently to keep this coily texture popping with soft, pliable strands.",
                   "4B strands are densely packed and can bend in sharp angles like the letter Z.",
                   "4C hair is similar to 4B textures, but the tightly coiled strands are more fragile and have a very tight zig-zag pattern that is sometimes indiscernible to the eye. This hair type experiences the greatest amount of shrinkage — about 75 percent or more — than the other textures."];

                $("h2").click(function() {
                    var number = $(this).attr('id');
                    
                    $('#hairtype').fadeOut(100, function() {
                        $(this).attr('src',images[number]).fadeIn(600);
                    });
                    
                    $('#letter_number').fadeOut(100, function() {
                        $(this).text(types[number]).fadeIn(600);
                    });
                    
                    $('#description').fadeOut(100, function() {
                        $(this).text(descriptions[number]).fadeIn(600);
                    });

                });
                
                $(".button-collapse").sideNav();


            });
        </script>
        
    </body>
    
</html>
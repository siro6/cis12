<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/elements/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Blogger</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nice-select.css">			
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!-- Start banner Area -->
        <section class="generic-banner relative">
            <!-- Start Header Area -->
            <?php
            require_once 'header.php';
            require_once 'dbconfig.php';
            ?>
            <!-- End Header Area -->				

        </section>		
        <!-- End banner Area -->

        <!-- About Generic Start -->
        <div class="main-wrapper">

            <!-- Start fashion Area -->
            <section class="fashion-area section-gap" id="fashion">
                <div class="container">					
                    <div class="row" style="margin:25px">
                        <div class="col-lg-8 col-md-8">
                            <h3 class="mb-30">Add New Author</h3>
                            <form method="POST" action="handle_addauthor.php">
                                <div class="mt-10">
                                    <input type="text" name="first_name" placeholder="First Name" 
                                           required class="single-input"/>
                                </div>
                                
                                <div class="mt-10">
                                    <input type="text" name="last_name" placeholder="Last Name" 
                                           required class="single-input"/>
                                </div>
                                <div class="mt-10">
                                    <input type="submit"></input>
                                </div>
                            </form>
                        </div>
                    </div>						

                </div>	
            </section>
            <!-- End fashion Area -->			



            <!-- start footer Area -->		
            <?php
            require_once 'footer.php';
            ?>
            <!-- End footer Area -->		

        </div>
        
    </body>
</html>
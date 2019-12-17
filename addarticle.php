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
            require_once 'dbconfig.php'
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
                            <h3 class="mb-30">Add New Article</h3>
                            <form method="POST" action="handle_addarticle.php">
                                <div class="mt-10">
                                    <input type="text" name="title" placeholder="Title" 
                                           required class="single-input"/>
                                </div>

                                <div class="mt-10">
                                    <select name="authorid">
                                        <?php
                                        $conn = new mysqli($hn, $un, $pw, $db);

// Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }

                                        $result = $conn->query("SELECT * FROM Author");

                                        while ($row = $result->fetch_array(MYSQL_ASSOC)) {
                                            echo "<option value='" . $row['id'] . "'>" . $row['firstname'] . " " . $row['lastname'] . "</option>";
                                        }
                                        ?>
                                    </select>		
                                </div>
                                <br/>
                                <br/>
                                <div class="mt-10">

                                    <textarea placeholder="Add article here" name="text" rows="4" cols="50">

                                    </textarea>
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
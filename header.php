<html>
    <body>
        <?php //
                    session_start();
        ?>
<header class="default-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="lnr lnr-menu"></span>
                        </button>
                    <?php 
                    if (isset($_SESSION['user']))
                    {
                        $user = $_SESSION['user'];
                        $loggedin  = TRUE;
                        $userstr   = "Logged in as: $user";
                      
                    }
                    
                        else $loggedin = FALSE;
                    ?>
                        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav scrollable-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="articles.php">Articles</a></li>
                                <?php
                                if ($loggedin)
                                {
                                echo '<li><a href="addauthor.php">Add Author</a></li>';
                                echo '<li><a href="addarticle.php">Add Article</a></li>';
                                echo '<li><a href="logout.php">Logout</a></li>';
                                }        
                                
                                else 
                                {
                                    echo '<li><a href="register.php">Register</a></li>';
                                    echo '<li><a href="login.php">Login</a></li>';
                                }
                                ?>
                                
                                
                                
                                
                                
                              								
                            </ul>
                        </div>						
                    </div>
                </nav>
            </header>

    </body>                            
</html>
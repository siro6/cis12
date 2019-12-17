<html>
    <body>
        <?php
        session_start();

        function destroySession() {
            $_SESSION = array();

            if (session_id() != "" || isset($_COOKIE[session_name()])) {
                setcookie(session_name(), '', time() - 2592000, '/');
            }
            session_destroy();
        }

        if (isset($_SESSION['user'])) 
        {
            destroySession();
            header('Location:index.php');
        } else
        {
            echo "<div class='center'>You cannot log out because you are not logged in</div>";
        }
        ?>
    </div>
</body>
</html>
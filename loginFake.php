<?php

?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/710855d3d8.js" crossorigin="anonymous"></script>
    </head>

    <body>
        
    <!-- header -->

        <header>
            <div class="titolo">
                <a href="index.php"><script src = "javascript/main.js"></script></a>
            </div>

            <div class="login" >
                <div class="scritta" style = "color: rgb(15, 15, 15); cursor: default;">
                    Login | Iscriviti 
                </div>
                <div class="user" style = "color: rgb(15, 15, 15); cursor: default;"><i class="fas fa-user"></i></div>
                    
            </div>
        </header>

        <!-- main --> 
        <div class="container-log">  
            <div class="login-box">
                <h1>
                    Login
                </h1>
                <div class="textbox">
                    <i class="fas fa-user" aria-hidde="true"></i>
                    <input type="text" placeholder="Username" name="" value="">
                </div>

                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="" value="">
                </div>

                <input class="btn" type="button" name="" value="Sign up">
            </div>
        </div>

        <div class="iscriviti">
            Non sei ancora iscritto? <a href="iscrivitiFake.php">Iscriviti</a>
        </div>
         <!-- footer -->

        <div class="fixed">
            <footer>
                <div class="footer">
                    <div class="social">
                        <div class="pallino"><i class="fab fa-facebook-f"></i></div>
                        <div class="pallino"><i class="fab fa-twitter"></i></div>
                        <div class="pallino"><i class="fab fa-google-plus-g"></i></div>
                        <div class="pallino"><i class="fab fa-linkedin-in"></i> </div>
                    </div>
    
                </div>

                <div class="copyright">
                    Created by: alcolisti unanimi
                </div>
            </footer>
        </div>

    </body>
</html>
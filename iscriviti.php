<?php

?>

<html>
<head>
    <title>Iscriviti</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/710855d3d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <!-- header -->

    <header>
        <div class="titolo">
            <a href="index.php"><script src = "javascript/main.js"></script></a>
        </div>

        <div class="login" >
            <div class="scritta" style = "color: rgb(15, 15, 15);">
                Login | Iscriviti 
            </div>
            <div class="user" style = "color: rgb(15, 15, 15);"><i class="fas fa-user"></i></div>
                
        </div>
    </header>

    <div class="container-log-iscriviti">  
        <div class="login-box">
            <h1 style="padding: 12.5px 0">
                Iscriviti
            </h1>

            <div class="textbox-iscriviti">
                <input type="text" placeholder="Nome" name="" value="">
            </div>

            <div class="textbox-iscriviti">
                <input type="text" placeholder="Cognome" name="" value="">
            </div>

            <div class="textbox-iscriviti">
                <input type="text" placeholder="Data di nascita" id="datepicker" name="" value="">
            </div>

            <div class="textbox-iscriviti">
                <input type="text" placeholder="Username" name="" value="">
            </div>

            <div class="textbox-iscriviti">
                <input type="password" placeholder="Password" name="" value="">
            </div>

            <form action="" class="radio">
                <input type="radio" name="" value=""> Creatore
                <input type="radio" name="" value=""> quellaltro
            </form>
           

            <input class="btn" type="button" name="" value="Sign in">

        </div>
    </div>

     <!-- footer -->

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

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>

</body>
</html>
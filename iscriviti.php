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
            <div class="scritta" style = "color: black;">
                Login | Iscriviti 
            </div>
            <div class="user" style = "color: black;"><i class="fas fa-user"></i></div>
                
        </div>
    </header>

    <div class="container-log">  
        <div class="login-box">
            <h1>
                Iscriviti
            </h1>

        <div class="textbox">
            <label for="">Nome</label>
            <input type="text" placeholder="Nome" name="" value="">
        </div>

        <div class="textbox">
            <input type="password" placeholder="Cognome" name="" value="">
        </div>

        <div class="textbox">
            <input type="text" id="datepicker">
        </div>

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
<!doctype html>

<html>

    <head>
        <title>Dat Do</title>
        <link rel="icon" href="images/header.jpg">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript">
            $(window).on('scroll', function(){
                if($(window).scrollTop()){
                    $('nav').addClass('black');
                }
                else
                {
                    $('nav').removeClass('black');
                }
            })
        </script>
    </head>

    <body>
        <nav id="contact-nav">        
            <ul>
                <li class="active"><a href="index.php" target="_blank"><strong>Dat Do</strong></a></li>
                <li><a href="index.php#portfolioo" target="_blank"><strong>Portfolio</strong></a></li>
                <li><a href="resume/Dat Do - Resume.pdf" target="_blank"><strong>Resume</strong></a></li>
                <li><a href="contact.php"><strong>Contact</strong></a></li>
            </ul>
        </nav>

        <section class="pathfind">
            <div class="container">
                <h1>Let's PathFind!</h1>
                <div id="instructions">&#8618; Choose your START!</div>
                <div id="tableContainer"></div>
                <div id="okClear"></div>
            </div>
        </section>

        <section class="connect">
            <h1>Connect With Me</h1>
            <center>
            <a href="https://www.linkedin.com/in/dddat/" target="_blank" class="fa fa-linkedin-square" style="font-size:48px;color:#007dbb;padding:0.2em"></a>
            <a href="https://github.com/dddat1017" target="_blank" class="fa fa-github" style="font-size:48px;color:#171515;padding:0.2em"></a>
            <a href="https://www.facebook.com/datdo1017" target="_blank" class="fa fa-facebook-square" style="font-size:48px;color:#345392;padding:0.2em"></a>
            </center>
        </section>

        <footer class="container-fluid">
            &copy; 2019 Dat Do - All Rights Reserved.        
        </footer>

        <script type = "text/javascript" src="scripts/bfs.js"></script>
    </body>
    
</html>
<!doctype html>

<html>

    <head>
        <title>Dat's World</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        <script type="text/javascript">
            $(document).ready(function(){
                $('a[href^="#"]').on('click',function (e) {
                    e.preventDefault();
                    var target = this.hash;
                    var $target = $(target);

                    $('html, body').animate({
                        'scrollTop': $target.offset().top
                    }, 1000, 'swing', function () {
                        window.location.hash = target;
                    });
                });
            });
        </script>

    </head>

    <body>
        <nav>        
            <ul>
                <li class="active"><a href="#home-hero"><strong>Dat Do</strong></a></li>
                <li><a href="#portfolioo"><strong>Portfolio</strong></a></li>
                <li><a href="resume/Dat Do - Resume.pdf" target="_blank"><strong>Resume</strong></a></li>
                <li><a href="contact.php" target="_blank"><strong>Contact</strong></a></li>
            </ul>
        </nav>

        <section class="home-hero" id="home-hero">
            <img src="images/DatDo.png" style="height:280px; width:250px">
            <h1 class="title">Dat Do</h1>
            <div class="container">
                <h1 class="intro">Self-learning & navigating software engineering through research and development.</h1>
                <a href="#about" class="button button-accent">Read More</a>
            </div>
        </section>

        <section class="home-about" id="about">
            <div class="container">
                <div class="home-about-textbox">
                    <h1>About</h1>
                    <p>Hi! My name is Dat. I'm a student at Bellevue College who is super curious in the fields of computer science and mathematics. The summer of 2018 I interned at the Port of Seattle where I worked on some pretty cool Machine Learning projects. From facial recognition to natural language processing, the whole experience was one to remember. I look forward to learning and building more software as I'm eager to make an impact in this world of technology. My goal is to spend a lot more time researching and developing the ideas and theories that interest me, and share everything that I learn onto this site.</p>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolioo">
            <h1>Some of my work</h1>
            <div class="container">
                <button class="accordion">Scraping Youtube Comments</button>
                <div class="panel">
                    <p>Project Insight: Scrape data (comments) from any Youtube video. Uses a browser automator to work with the dynamics of Youtube web pages. Note, only the <em>comments</em> will be extracted, not any of the replies that may be under a comment. Tech stack: Python, Selenium, etc. <a href="https://github.com/dddat1017/Scraping-Youtube-Comments" target="_blank"><strong><em>Learn more!</em></strong></a></p>
					<img src="https://user-images.githubusercontent.com/40379856/53034446-05abeb80-3428-11e9-91c3-1025143846b0.gif" width="45%" style="max-width:100%;">
					<img src="https://user-images.githubusercontent.com/40379856/53034445-05135500-3428-11e9-8e37-ed3830272d68.gif" width="45%" style="max-width:100%;">
                </div>
                <button class="accordion">Facial Detection and Recognition</button>
                <div class="panel">
                    <p>Project Insight: Computer vision model that detects and recognizes real-life human faces. A neat implementation to this is that it collects and trains data almost instantaneously. Tech stack: Python, OpenCV, etc. <a href="https://github.com/dddat1017/Facial-Detection-Recognition" target="_blank"><strong><em>Learn more!</em></strong></a></p>
                    <img src="images/Face.gif" alt="portfolio item" style="width:311px;height:200px;"/>
                </div>
                <button class="accordion">Handwritten Digits Classification</button>
                <div class="panel">
                    <p>Project Insight: Convolutional neural network (CNN) model that recognizes handwritten digits from the MNIST Dataset. Tech stack: Python, Pytorch, Numpy, Matplotlib, etc. <a href="https://github.com/dddat1017/Handwritten-Digits-Classification" target="_blank"><strong><em>Learn more!</em></strong></a></li></h4></p>
                    <img src="images/Numbers.gif" alt="portfolio item" style="width:311px;height:200px;"/>
                </div>
                <button class="accordion">Wizard Top Down Shooting Game</button>
                <div class="panel">
                    <p>Project Insight: Simple Wizard Top Down Shooter Game to become familiarized with writing code for a game. Interesting, easy way to get started. Tech stack: Java, Java Swing, Object Oriented Programming, etc. <a href="https://github.com/dddat1017/Wizard-Top-Down-Shooting-Game" target="_blank"><strong><em>Learn more!</em></strong></a></p>
                    <img src="images/Wiz4rdGame.gif" alt="portfolio item" style="width:311px;height:200px;"/>
                </div>
                <button class="accordion">Research Paper</button>
                <div class="panel">
                    <p>Paper Insight: "The Debates on the Development and Research of AI: How Much Limitation, if any". Final Research Paper for English 201 (Bellevue College) on the debates behind the research and development of AI. Note: This is NOT an official scholarly document.</p>
                    <a href="https://www.academia.edu/36855782/The_Debates_on_the_Development_and_Research_of_AI_How_much_Limitation_if_any" target="_blank"><strong><em>View Publication</em></strong></a></h4>
                </div>
            </div>
        </section>

        <section class="future">
            <h1>Looking Forward</h1>
            <h2>(Teach Myself 2019)</h2>
            <ul>
                <li>Full Stack Web Development (applying a structured stack to this website)</li>
                <li>More Machine Learning/AI - Natural Language Processing | Reinforcement Learning</li>
                <li>Deeper understanding of Data Structures and Algorithms</li>
                <li>Game Development (getting familiar with Unity)</li>
                <li>IOS & Android Software Development</li>
                <li>Blockchain</li>
                <li>And MORE to come</li>
            </ul>
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

        <script type = "text/javascript" src="portfolio_buttons.js"></script>
    </body>

</html>
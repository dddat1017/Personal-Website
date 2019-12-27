<!doctype html>

<html>

    <head>
        <title>Dat Do</title>
		<meta property="og:title" content="Dat Do"/>
        <link rel="icon" href="images/header.jpg" alt="">
		<meta property="og:image" content="images/header.jpg" alt=""/>
		<meta property="og:description" content="Self-learning & navigating the field of computer science through research, exploration, 
				and development"/>
		<meta property="og:url" content="https://datddo.com"/>
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
                <li><a href="resume/DatDo-Resume.pdf" target="_blank"><strong>Resume</strong></a></li>
                <li><a href="contact.php" target="_blank"><strong>Contact</strong></a></li>
            </ul>
        </nav>

        <section class="home-hero" id="home-hero">
            <img src="images/DatDo.png" style="height:280px; width:250px">
            <h1 class="title">Dat Do</h1>
            <div class="container">
                <h1 class="intro">Self-learning & navigating the field of computer science through research, exploration, 
				and development</h1>
                <a href="#about" class="button button-accent">Read More</a>
            </div>
        </section>

        <section class="home-about" id="about">
            <div class="container">
                <h1>About</h1>
                <div class="home-about-textbox">
                    <p>Hi! My name is Dat, I'm a freshman at the University of Washington - Paul G. Allen School of Computer 
					Science & Engineering! To give a brief overview of who I am, this past summer I interned at Microsoft on the 
                    Data + AI team within Visual Studio Dev Tools. While there, I had a fantastic opportunity to contribute to the 
                    launch of a machine learning contest. The summer of 2018, I interned at the Port of Seattle where I also worked 
                    on some pretty cool ML projects. From facial recognition to natural language processing, the whole experience 
                    was one to remember. In my free time, I'm an advent Candy Crusher and frisbee slinger! I look forward to learning 
                    and gaining more hands-on experience as I'm eager to make an impact in this world of technology. 
                    My goal is to spend a lot more time researching and developing the ideas and theories that interest me the most, 
                    and share everything that I learn onto this site.</p>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolioo">
            <h1>Some of my work</h1>
            <div class="container">
                <button class="accordion">PathFinding Visualization</button>
                <div class="panel">
                    <p>Project Insight: Find the shortest path from a 'starting' cell to an 'exit' cell using the Breadth-First Search 
                    (BFS) algorithm. This implementation utlized a queue to traverse through all the possible "nodes", or cells, 
                    from the start to the exit. The goal is to find a path with the <strong>LEAST number of STEPS</strong> 
                    (a step being a cell in any direction N,S,W,E,NW,NE,SW,SE), not the "shortest distance". 
                    Tech stack: JavaScript, JQuery, Queue, etc. <a href="https://github.com/dddat1017/PathFinding-Visualization" 
                    target="_blank">Learn more!</a></p>
                    <a href="pathfind.php" target="_blank">Check it out!</a><br>
                    <img src="images/path.gif" width="50%" style="max-width:100%; margin:15px;"/>
                </div>
                <button class="accordion">Scraping Youtube Comments</button>
                <div class="panel">
                    <p>Project Insight: Scrape data (comments) from any Youtube video. Uses a browser automator to work with the 
                    dynamics of Youtube web pages. Note, only the <em>comments</em> will be extracted, not any of the replies 
                    that may be under a comment. Tech stack: Python, Selenium, etc. 
                    <a href="https://github.com/dddat1017/Scraping-Youtube-Comments" target="_blank">Learn more!</a></p>
					<img src="images/YTcomments.gif" width="45%" style="max-width:100%;max-height:70%;">
					<img src="images/scraping.gif" width="45%" style="max-width:100%;">
                </div>
                <button class="accordion">Facial Detection and Recognition</button>
                <div class="panel">
                    <p>Project Insight: Computer vision model that detects and recognizes real-life human faces. A neat implementation 
                    to this is that it collects and trains data almost instantaneously. Tech stack: Python, OpenCV, etc. 
                    <a href="https://github.com/dddat1017/Facial-Detection-Recognition" target="_blank">Learn more!</a></p>
                    <img src="images/Face.gif" width="50%" style="max-width:100%;"/>
                </div>
                <button class="accordion">Handwritten Digits Classification</button>
                <div class="panel">
                    <p>Project Insight: Convolutional neural network (CNN) model that recognizes handwritten digits from the MNIST Dataset. 
                    Tech stack: Python, Pytorch, Numpy, Matplotlib, etc. 
                    <a href="https://github.com/dddat1017/Handwritten-Digits-Classification" target="_blank">Learn more!</a></p>
                    <img src="images/Digits.gif" width="50%" style="width:290px;height:300px;"/>
                </div>
                <button class="accordion">Wizard Top Down Shooting Game</button>
                <div class="panel">
                    <p>Project Insight: Simple Wizard Top Down Shooter Game to become familiarized with writing code for a game. 
                    Interesting and easy way that got me started with coding! Tech stack: Java, Java Swing, Object Oriented Programming, etc. 
                    <a href="https://github.com/dddat1017/Wizard-Top-Down-Shooting-Game" target="_blank">Learn more!</a></p>
                    <img src="images/Wiz4rdGame.gif" width="50%" style="max-width:100%;"/>
                </div>
                <button class="accordion">Research Paper</button>
                <div class="panel">
                    <p>Paper Insight: "The Debates on the Development and Research of AI: How Much Limitation, if any". 
                    Final Research Paper for English 201 (Bellevue College) on the debates behind the research and development of AI. 
                    Note: This is NOT an official scholarly document.</p>
                    <a href="https://www.academia.edu/36855782/The_Debates_on_the_Development_and_Research_of_AI_How_much_Limitation_if_any" target="_blank">View Publication</a>
                </div>
            </div>
        </section>

        <section class="future">
            <h1>Looking Forward</h1>
            <h2>(Teach Myself 2019)</h2>
            <div class="container">
                <h3><i class="bullet">&bull;</i>Full Stack Web Development (applying a structured stack to this website)</h3>
                <h3><i class="bullet">&bull;</i>More Machine Learning/AI - Natural Language Processing & Reinforcement Learning</h3>
                <h3><i class="bullet">&bull;</i>Deeper understanding of Data Structures and Algorithms</h3>
                <h3><i class="bullet">&bull;</i>Game Development (getting familiar with Unity)</h3>
                <h3><i class="bullet">&bull;</i>IOS & Android Development</h3>
                <h3><i class="bullet">&bull;</i>Blockchain</h3>
                <h3>And MORE to come!</h3>
            </div>
        </section>

        <section class="connect">
            <h1>Connect With Me</h1>
            <center>
            <a href="https://www.linkedin.com/in/dddat/" target="_blank" class="fa fa-linkedin-square" style="font-size:48px;color:#1778B5;padding:0.2em"></a>
            <a href="https://github.com/dddat1017" target="_blank" class="fa fa-github" style="font-size:48px;color:#171515;padding:0.2em"></a>
            <a href="https://www.facebook.com/datdo1017" target="_blank" class="fa fa-facebook-square" style="font-size:48px;color:#345392;padding:0.2em"></a>
			<a href="mailto:datdo17@uw.edu" target="_top" class="fa fa-envelope" style="font-size:48px;color:#22272F;padding:0.2em"></a>
            </center>
        </section>

        <footer class="container-fluid">
            &copy; 2019 Dat Do - All Rights Reserved.
            <!-- Photos (background images) from Unsplash. -->        
        </footer>

        <script type = "text/javascript" src="scripts/portfolio_buttons.js"></script>
    </body>

</html>
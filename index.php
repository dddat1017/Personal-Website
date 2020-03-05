<!doctype html>

<html lang="en">

    <head>
        <title>Dat Do</title>
		<meta property="og:title" content="Dat Do"/>
        <link rel="icon" href="images/header.jpg">
		<meta property="og:image" content="images/header.jpg"/>
		<meta property="og:description" content="Self-learning & navigating the field of computer science through research, exploration, 
		    and development"/>
		<meta property="og:url" content="https://datddo.com"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type = "text/javascript" src="scripts/index.js"></script>
    </head>

    <body>
        <nav>        
            <ul>
                <li><a href="#intro"><strong>Dat Do</strong></a></li>
                <li><a href="#portfolio"><strong>Experiences + Projects</strong></a></li>
                <li><a href="#education"><strong>Education</strong></a></li>
                <li><a href="resume/DatDo-Resume.pdf" target="_blank"><strong>Resume</strong></a></li>
                <li><a href="contact.php" target="_blank"><strong>Contact</strong></a></li>
            </ul>
        </nav>

        <section class="home-hero" id="intro">
            <img src="images/DatDo.png" style="height:280px; width:250px" alt="">
            <h1 class="title">Dat Do</h1>
            <div class="container">
                <h1 class="intro">Self-learning & navigating the field of computing through research, exploration, 
				and development</h1>
                <a href="#about" class="button button-accent">Read More</a>
            </div>
        </section>

        <section class="home-about" id="about">
            <div class="container">
                <h1>About</h1>
                <div class="home-about-textbox">
                    <p>Hey! My name is Dat, I'm currently an undergraduate student at the University of Washington studying Computer
                    Science. Previously, I was an intern at Microsoft and Port of Seattle, and I graduated with high distinction from
                    Bellevue College where I earned my Associate of Arts and Sciences. Before coming to UW, I held positions as a Peer
                    Advisor, Student Government Treasurer, and even as an IT Service Desk Agent. In my free time, I'm an advent Candy 
                    Crusher, frisbee slinger, and occasional hiker. I look forward to learning and gaining more hands-on experience as 
                    I'm eager to make an impact in this world of technology. My goal is to spend a lot more time researching and 
                    developing the ideas and theories that interest me the most, and share everything that I learn onto this site.</p>
                </div>
            </div>
        </section>

        <section class="portfolio" id="portfolio">
            <h1>Internships & More</h1>
            <div class="container">
                <button class="accordion">Microsoft</button>
                <div class="panel">
                    <img src="images/microsoft.png" style="width:50px; height:50px; display: inline; vertical-align: middle; 
                    margin-top: 0em;" alt=""/><br>
                    <br><strong>High School Software Engineering Intern</strong><br>
                    June 2019 - September 2019<br>
                    Redmond, WA<br>
                    <br>Worked on the Data + AI Team under Visual Studio Dev Tools. Launched and maintained a machine learning 
                        contest platform, empowering developers and data scientists alike to cooperate and solve problems through 
                        building novel machine learning models. Engineered Continuous Integration/Continuous Delivery to automate 
                        our team’s process of going from new commits in the source code to live production, eliminating much of 
                        the initial manual overhead involving dev environment setup and testing. Built a contest-winning Seq2Seq 
                        Frequency Model to predict Python code based on 2,000 top-starred GitHub repos. Learned to utilize Azure 
                        cloud services (DevOps, Pipelines, Resources, etc.), leverage open-source, and commit quality code.
                </div>
                <button class="accordion">Port of Seattle & SeaTac Airport</button>
                <div class="panel">
                    <img src="images/portofseattle.png" style="width:50px; height:50px; display: inline; vertical-align: middle; 
                    margin-top: 0em;" alt=""/><br>
                    <br><strong>Machine Learning Intern</strong><br>
                    July 2018 - September 2018<br>
                    Seattle, WA<br>
                    <br>Actively contributed to the Air Cargo Computer Vision prototype in implementing a COCO-trained model over 
                        cargo and aircraft images at Sea-Tac Airport. Security cameras are then implemented to accurately detect 
                        the cargo and aircrafts on the airfield, ensuring proper operations. Additionally defined and implemented 
                        a Facial Detection and Recognition system to further enhance skills/knowledge of computer vision, a 
                        Convolutional Neural Network to classify handwritten digits, and an NLTK model to perform text sentiment 
                        analysis on Twitter tweets. Worked closely with the Solution Designs Cohort as a Project Manager to support 
                        the Airport Innovation team in building an Alexa Skills Kit for Sea-Tac Airport passengers; the Skills Kit 
                        could provide information such as flight information, checkpoint wait times, concessions, parking, and more.
                </div>
                <button class="accordion">Bellevue College</button>
                <div class="panel">
                    <img src="images/bellevuecollege.jpg" style="width:50px; height:50px; display: inline; vertical-align: middle; 
                    margin-top: 0em;" alt=""/><br>
                    <br><strong>IT Service Desk Agent</strong><br>
                    March 2019 - June 2019<br>
                    Bellevue, WA<br>
                    <br>Assisted students, faculty, and administrative staff in resolving various technology-related problems including 
                        but not limited to: remote access services, Canvas Learning Management System, and software/hardware 
                        troubleshooting.<br>
                    <br><hr>
                    <br><strong>Treasurer of Associated Student Government</strong><br>
                    September 2018 - January 2019<br>
                    Bellevue, WA<br>
                    <br>Held responsibility for the overall administration of the Associated Student Government budget with over $500,000 
                        from four different budget accounts, enabling clubs/programs to operate and grow in and outside of the college. 
                        Led meetings as Chair of the Services & Activities Fee Committee to review and approve funding requests based on 
                        needs and available budget. Reported on a weekly basis to the Executive Committee as well as the Associated Students 
                        of Bellevue College.<br>
                    <br><hr>
                    <br><strong>Peer Advisor / Student Ambassador</strong><br>
                    September 2017 - June 2018<br>
                    Bellevue, WA<br>
                    <br>Provided crucial knowledge of the admissions process to over 200 students per academic quarter through giving Tours, 
                        Information Sessions, and New Student Orientations. Assisted with various services and systems within the Student 
                        Central department including but not limited to: handling Official Transcripts and documentation, managing Client 
                        Relationship Management (CRM) tool, and filing Financial Aid data. FERPA trained to deal with various confidential 
                        documents and information.
                </div>
                <button class="accordion">Kumon</button>
                <div class="panel">
                    <img src="images/kumon.jpg" style="width:50px; height:50px; display: inline; vertical-align: middle; 
                    margin-top: 0em;" alt=""/><br>
                    <br><strong>Center Assistant</strong><br>
                    January 2017 - August 2017<br>
                    Renton, WA<br>
                    <br>Assisted and tutored ~35 students in basic Math and Reading/Writing skills. Graded bi-weekly assignments and homework.
                </div>
            </div>
            <br><br><hr>
            <h1>Some of my work</h1>
            <div class="container">
                <button class="accordion">Predicting Python Code</button>
                <div class="panel">
                    <p>Project Insight: Sequence-to-Sequence Frequency model used to predict Python code. Dataset given consisted of tokenized Python 
                        code with method headers and invocators identified to eliminate the process of parsing on the participants' end. 
                        The goal is to give the top 5 suggestions whenever a "TOKEN_TO_PREDICT" is encountered in the tokenized files.
                        Approach was initially to use a Compact Prediction Tree but later optimized to eliminate the use of a tree in 
                        favor of a list. This is because any sequence is guaranteed to be 2 elements long with the first being the 
                        method header and the second being the method invocator. It was unncessary to traverse through a tree with 
                        every retrieval of a method invocator. Using a list allows for constant retrievals, and thus, faster when 
                        there are over hundreds of thousands of sequences (even millions). The tokenized Python code was extracted 
                        from roughly 2000 starred Github repos. Tech Stack: Python, Tree/List/Dictionary Data Structures, CPT, etc.
                    <a href="https://github.com/dddat1017/Compact-Prediction-Tree" target="_blank">Learn more!</a></p>
                </div>
                <button class="accordion">PathFinding Visualization</button>
                <div class="panel">
                    <p>Project Insight: Find the shortest path from a 'starting' cell to an 'exit' cell using the Breadth-First Search 
                    (BFS) algorithm. This implementation utlized a queue to traverse through all the possible "nodes", or cells, 
                    from the start to the exit. 
                    Tech stack: JavaScript, JQuery, Queue, etc. <a href="https://github.com/dddat1017/PathFinding-Visualization" 
                    target="_blank">Learn more!</a></p>
                    <a href="pathfind.php" target="_blank">Check it out!</a><br>
                    <img src="images/path.gif" style="width:500px; max-width:100%; margin:15px;" alt=""/>
                </div>
                <button class="accordion">Scraping Youtube Comments</button>
                <div class="panel">
                    <p>Project Insight: Scrape data (comments) from any Youtube video. Uses a browser automator to work with the 
                    dynamics of Youtube web pages. Note, only the <em>comments</em> will be extracted, not any of the replies 
                    that may be under a comment. Tech stack: Python, Selenium, etc. 
                    <a href="https://github.com/dddat1017/Scraping-Youtube-Comments" target="_blank">Learn more!</a></p>
					<img src="images/YTcomments.gif" style="width:450px; max-width:100%; max-height:70%;" alt=""/>
					<img src="images/scraping.gif" style="width:450px; max-width:100%;" alt=""/>
                </div>
                <button class="accordion">Facial Detection and Recognition</button>
                <div class="panel">
                    <p>Project Insight: Computer vision model that detects and recognizes real-life human faces. A neat implementation 
                    to this is that it collects and trains data almost instantaneously. Tech stack: Python, OpenCV, etc. 
                    <a href="https://github.com/dddat1017/Facial-Detection-Recognition" target="_blank">Learn more!</a></p>
                    <img src="images/Face.gif" style="width:500px; max-width:100%;" alt=""/>
                </div>
                <button class="accordion">Handwritten Digits Classification</button>
                <div class="panel">
                    <p>Project Insight: Convolutional neural network (CNN) model that recognizes handwritten digits from the MNIST Dataset. 
                    Tech stack: Python, Pytorch, Numpy, Matplotlib, etc. 
                    <a href="https://github.com/dddat1017/Handwritten-Digits-Classification" target="_blank">Learn more!</a></p>
                    <img src="images/Digits.gif" style="width:290px; height:300px;" alt=""/>
                </div>
                <button class="accordion">Wizard Top Down Shooting Game</button>
                <div class="panel">
                    <p>Project Insight: Simple Wizard Top Down Shooter Game to become familiarized with writing code for a game. 
                    Interesting and easy way that got me started with coding! Tech stack: Java, Java Swing, Object Oriented Programming, etc. 
                    <a href="https://github.com/dddat1017/Wizard-Top-Down-Shooting-Game" target="_blank">Learn more!</a></p>
                    <img src="images/Wiz4rdGame.gif" style="width:500px; max-width:100%;" alt=""/>
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

        <section class="education" id="education">
            <h1>Undergraduate Coursework</h1>
            <div class="container">
                <h3><img src="images/uw.jpg" style="width:50px; height:50px; display: inline; vertical-align: middle; 
                    margin-top: 0em;" alt=""/>    University of Washington | 2019 - Present</h3>
                <hr>
                <p style="text-align:left"><b>CSE 332 - Data Structures and Parallelism (WI 2020, K. Lin):</b> Covers abstract data types and 
                    structures including dictionaries, balanced trees, hash tables, priority queues, and graphs; sorting; asymptotic 
                    analysis; fundamental graph algorithms including graph search, shortest path, and minimum spanning trees; concurrency 
                    and synchronization; and parallelism.</p>
                <p style="text-align:left"><b>CSE 333 - Systems Programming (WI 2020, J. Hsia):</b> Includes substantial programming experience 
                    in languages that expose machine characteristics and low-level data representation (e.g., C and C++); explicit memory 
                    management; interacting with operating-system services; and cache-aware programming.</p>
                <p style="text-align:left"><b>CSE 351 - The Hardware/Software Interface (AU 2019, J. Hsia):</b> Examines key computational 
                    abstraction levels below modern high-level languages; number representation, assembly language, introduction to C, 
                    memory management, the operating-system process model, high-level machine architecture including the memory hierarchy, 
                    and how high-level languages are implemented.</p>
                <p style="text-align:left"><b>CSE 311 - Foundations of Computing I (AU 2019, K. Zatloukal):</b> Examines fundamentals of logic, 
                    set theory, induction, and algebraic structures with applications to computing; finite state machines; and limits of 
                    computability.</p>
                <br>
                <h3><img src="images/bellevuecollege.jpg" style="width:50px; height:50px; display: inline; vertical-align: middle; 
                    margin-top: 0em;" alt=""/>    Bellevue College | 2017 - 2019</h3>
                <hr>
                <p style="text-align:left"><b>PHYS 121 - General Engineering Physics I (SP 2019, T. Gamble):</b> Examines fundamental 
                    principles of mechanics, including motion, Newton's laws, work, energy, momentum, rotation, and gravity. Conceptual 
                    development and problem solving have equal emphasis. Laboratory work presents methods of experimental and analysis 
                    (modeling, errors, graphical analysis, etc.) and prepares students for upper-division research.</p>
                <p style="text-align:left"><b>ECON& 202 - Macroeconomics (SP 2019, L. Lawrence):</b> Presents major theories of business cycles and 
                    economic growth. Students examine economic policies aimed "at price stability" and unemployment in an industrialized 
                    capitalist nation as well as factors in international trade and monetary flows. Also covers the development policies 
                    of underdeveloped countries.</p>
                <p style="text-align:left"><b>MATH 208 - Linear Algebra (WI 2019, R. Bauer):</b> Introduces the vocabulary, algebra, and geometry of 
                    vector spaces in "R" and function spaces. Students use matrix methods and vectors to explore systems of linear equations 
                    and transformations. Also presents elementary theory of eigenvalues.</p>
                <p style="text-align:left"><b>MATH& 254 - Calculus IV (AU 2018, L. Rawlings):</b> Extends the concepts of calculus to vector-valued 
                    functions and functions of several variables. Partial derivatives are included.</p>
                <p style="text-align:left"><b>MATH& 153 - Calculus III (SP 2018, T. Akhlaghi):</b> Emphasizes the study of infinite sequences and series 
                    including power series. Topics include plane analytic geometry, graphing in polar coordinates, and an introduction to 
                    vectors.</p>
                <p style="text-align:left"><b>CS 211 - Fundamentals of Computer Science II (SP 2018, J. Livingston):</b> Continues with data structures 
                    algorithm analysis and inheritance. Students learn to create collections, lists, binary trees, and sets. Other topics 
                    include sets, generic data types, sorting, recursion, run-time complexity, and graphical user interfaces.</p>
                <p style="text-align:left"><b>MATH& 152 - Calculus II (WI 2018, T. Akhlaghi):</b> Continues the study of integration, emphasizing 
                    applications and special techniques. Students work with algebraic and transcendental functions.</p>
                <p style="text-align:left"><b>CS 210 - Fundamentals of Computer Science I (WI 2018, S. Farag):</b> Introduces computer science and 
                    programming for CS majors. Students learn design and implementation of algorithms and programming in a structured, 
                    modular language, with emphasis on problem solving, program design, and style.</p>
                <p style="text-align:left"><b>MATH& 151 - Calculus I (AU 2017, T. Akhlaghi):</b> Introduces the concepts of limits, derivatives, and 
                    integrals. Topics include techniques and applications of derivatives of algebraic and transcendental functions. Students 
                    begin working with antiderivatives.</p>
            </div>
        </section>

        <section class="connect">
            <h1>Let's Connect</h1>
            <a href="https://www.linkedin.com/in/dddat/" target="_blank" class="fa fa-linkedin-square" style="font-size:48px;color:#1778B5;padding:0.2em"></a>
            <a href="https://github.com/dddat1017" target="_blank" class="fa fa-github" style="font-size:48px;color:#171515;padding:0.2em"></a>
            <a href="https://www.facebook.com/datdo1017" target="_blank" class="fa fa-facebook-square" style="font-size:48px;color:#345392;padding:0.2em"></a>
			<a href="mailto:datdo17@uw.edu" target="_top" class="fa fa-envelope" style="font-size:48px;color:#22272F;padding:0.2em"></a>
        </section>

        <footer class="container-fluid">
            &copy; 2020 Dat Do - All Rights Reserved | Last Updated: March 4, 2020
            <!-- Photos (background images) from Unsplash. -->        
        </footer>

        <script type="text/javascript" src="scripts/portfolio_buttons.js"></script>
    </body>

</html>
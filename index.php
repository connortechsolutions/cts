<?php
session_start();

date_default_timezone_set('America/New_York');
$today = date('l F jS Y');
$visitorIp = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connor Technology Solutions - <?php echo $today?></title>
	<link rel="icon" type="image/png" href="img/ctsLogo.png" />	
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #navbar {
            background-color: rgba(0, 0, 0, 0.7);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            display: flex;
            justify-content: center;
        }

        #navbar a {
            color: white;
            text-align: center;
            padding: 16px 18px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            font-size: 18px;
            font-weight: bold;
        }

        #navbar a:hover {
            background-color: #444;
            color: #C0C0C0;
        }

        section {
            min-height: 100vh;
            display: flex;
            flex-direction: column; /* Added to stack content vertically */
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            text-align: center; /* Center text within sections */
        }

        /* Add styles for each section */
        #section1 {
            background-image: url('img/CTS_Wallpaper.jpg');
            background-size: cover;
            background-position: center;
        }

        /* Adjusted paragraph width to 80% */
        section p {
            width: 80%;
			text-align: left;
        }

        /* Centered bold title style */
        .section-title {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px; /* Adjust the spacing between title and paragraphs */
        }

        #section2 { background-color: #FFFFFF; }
        #section3 { background-color: #FFFFFF; }
        #section4 { background-color: #FFFFFF; }
        #section5 { background-color: #FFFFFF; }
    </style>
</head>
<body>
    <div id="navbar">
        <a href="#section1">Home</a>
        <a href="#section2">Application Development</a>
        <a href="#section3">Cloud Architecture</a>
        <a href="#section4">Cyber Security</a>
        <a href="#section5">Domain Hosting</a>
    </div>

    <section id="section1">
    </section>
    
    <section id="section2">
        <h1 class="section-title">Application Development</h1>
    	<p>&nbsp;&nbsp;&nbsp;&nbsp;Performing complex calculations or displaying data in an intuitive, easy to understand layout; with over a decade of development experience, we can help you design the App that will keep you and your team at the top of the game no matter where you are in the World. Call us today and we can begin developing the application that will keep the information you need at your finger tips.</p>
    </section>
    
    <section id="section3">
        <h1 class="section-title">Cloud Architecture</h1>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;An experienced Cloud Architect; well versed in setting up and maintaining Web and Database servers that meet and exceede your requirements. Connor Technology Solutions is uniquely experienced in Migrating websites along with their required data to the various hosting providers available on the Internet. For a more robust solution we can create a more advanced architecture using Load Balancers and multiple, redundant servers while keeping costs at their most reasonable levels. Call today and we can discuss your options.</p>
    </section>
    
    <section id="section4">
        <h1 class="section-title">Cyber Security</h1>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;An information security professional who penetrates a computer system, network, application, or other computing resources on behalf of its owners — and with their authorization. We perform the same Penetration Tests on your Website or Application that the Black Hat Hackers will use should they become interested in you. Our Technicians are constantly training and studying the latest techniques right along with the Hackers. But We Work For You!</p>
    </section>
    
    <section id="section5">
        <h1 class="section-title">Domain Hosting</h1>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Using Responsive Design techniques your message can be displayed for the World to see as you intend it to be seen, no matter the device used to view your website. If your goal is to have a website that you can easily update with specials or current news, your very own WordPress Website can be ready for you to take over the controls today. If you need assistance with your design, we are here to help. Call us today and we can discuss your options.</p>
    </section>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>


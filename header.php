<html>
	<head>

        <title><?php echo $page_title; ?></title>
        <meta name="description" content="<?php echo $pgDesc ?>"></meta>
        <meta name="keywords" content="<?php echo $keyWords ?>"></meta>
        <meta name="revisit-after" content="3 month" />
        <meta name="language" content="nederlands" />
        <meta name="copyright" content="Anke Boersma" />
        <meta name="web_author" content="Anke Boersma" />
        
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!--<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,900' rel='stylesheet' type='text/css'> -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        
        <!-- Crunchify's Scroll to Top Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>            
            jQuery(document).ready(function() {
                var offset = 220;
                var duration = 500;
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.crunchify-top').fadeIn(duration);
                    } else {
                        jQuery('.crunchify-top').fadeOut(duration);
                    }
                });
        
                jQuery('.crunchify-top').click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                })
            });
        </script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<a href="/"><img id="logo" src="images/logo.png" title="VerstappenBouw" alt="" /></a>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><?php $url = $_SERVER['REQUEST_URI'];
                            if ($url != '/') { ?><a href="/">Home</a>
                            <?php } ?></li>
                            <li><?php $url = $_SERVER['REQUEST_URI'];
                            if ($url == '/') { ?><a href="#one">Info</a>
                            <?php } ?></li>
                            <li><?php $url = $_SERVER['REQUEST_URI'];
                            if ($url == '/') { ?><a href="#work">Portofolio</a>
                            <?php } ?></li>
                            <li><?php $url = $_SERVER['REQUEST_URI'];
                            if ($url == '/') { ?><a href="#five">Kaart</a>
                            <?php } ?></li>
                            <li><a href="project.php">Project</a></li>
							<li><?php $url = $_SERVER['REQUEST_URI'];;
                            if (($url == '/') || ($url =='/project.php')) { ?><a href="#contact">Contact</a>
                            <?php } ?></li>
						</ul>
					</nav>
                <!-- Icons -->
					<ul class="actions" id="social">
						<!--<li><a href="https://twitter.com/" class="icon fa-twitter" target="blank"><span class="label">Twitter</span></a></li> -->
						<li><a href="https://www.facebook.com/Verstappenbouw/" class="icon fa-facebook" target="blank"><span class="label">Facebook</span></a></li> 
						<li><a href="https://www.linkedin.com/in/" class="icon fa-linkedin" target="blank"><span class="label">LinkedIn</span></a></li> 
						<!--<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li> -->
					</ul>
					<ul class="actions" id="phone">
                        <li><a href="tel:0475495404" class="icon fa-phone"><span class="label">Phone</span>&nbsp;&nbsp;&nbsp;0475 495404</a></li>
                    </ul>

			</header>

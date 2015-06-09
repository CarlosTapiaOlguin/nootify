
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Your Basic Site Informations -->
	<title>Newstick - Responsive News Template</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Newstick is a responsive site template that has clean and elegant design for blog template." />
    <meta name="keywords" content="Site Template, News, Magazine, Portfolio, PSD, HTML5, CSS3, jQuery, Clean, Responsive, Marketing" />
    <meta name="author" content="Dots Theme" />
    
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet" type="text/css">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap-responsive.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/font-awesome.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/flexslider.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/prettyPhoto.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("public/css/style.css"); ?>">
    
    <!-- Custom Colors -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("public/css/colors/blue/color.css"); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("public/css/colors/green/color.css"); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("public/css/colors/lightblue/color.css"); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("public/css/colors/purple/color.css"); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url("public/css/colors/yellow/color.css"); ?>"> -->
    
    <!--[if IE 7]>
    	<link rel="stylesheet" href="<?php echo base_url("public/css/font-awesome-ie7.min.css"); ?>">
    <![endif]-->
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <noscript><link rel="stylesheet" href="<?php echo base_url("public/css/no-js.css"); ?>"></noscript>
    
    <!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url("public/images/favicon.ico"); ?>">
	<link rel="apple-touch-icon" href="<?php echo base_url("public/images/apple-touch-icon.png"); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url("public/images/apple-touch-icon-72x72.png"); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url("public/images/apple-touch-icon-114x114.png"); ?>">
    
</head>

<body>

	<!-- #header -->
    <header id="header">
    	
        <!-- .nav-menu-top -->
    	<nav class="nav-menu-top">
        	<div class="container">
            
            	<ul>
                	<li class="current"><a href="index.html">Home</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Como funciona</a></li>
                    <li><a href="<?php echo base_url("login/registro"); ?>">Registrate</a></li>
                    <li><a href="<?php echo base_url("login/ingresar"); ?>">Ingresa</a></li>
                    <li><a href="#">Info<i class="icon-chevron-down"></i></a>
                    	<ul>
                        	<li><a href="single_page.html">Terminos y condiciones</a></li>
                            <li><a href="page_author.html">Politica de privacidad</a></li>
                            <li><a href="page_author.html">Preguntas frecuentes</a></li>
                        </ul>
                    </li>
                </ul>
                
                <form method="get" action="page_search.html">
                	<input type="text" name="search" placeholder="Que buscas?" />
                    <input type="submit" name="submit" value="Ir" />
                </form>
                
            </div>
        </nav>
        <!-- .nav-menu-top end -->
        
        <!-- .header-content -->
        <section class="header-content">
        	<div class="container">
            
                <div class="logo">
                	<a href="index.html"><img src="<?php echo base_url("public/images/logo.png"); ?>" alt="Logo" /></a> <!-- site logo -->
                </div>
                
                <p>Aenean dictum pharetra nibh, sodales luctus felis aliquet.<br>Duis tempor rhoncus quam, at blandit nulla egestas vitae risus dictum tempor luctus.</p>
                
                <ul class="social">
                	<li><a href="http://facebook.com" title="Facebook"><i class="icon-facebook"></i></a></li>
                    <li><a href="http://linkedin.com" title="LinkedIn"><i class="icon-linkedin"></i></a></li>
                    <li><a href="http://twitter.com" title="Twitter"><i class="icon-twitter"></i></a></li>
                    <li><a href="http://skype.com" title="Skype"><i class="icon-skype"></i></a></li>
                    <li><a href="http://plus.google.com" title="Google Plus"><i class="icon-google-plus"></i></a></li>
                    <li><a href="http://instagram.com" title="Instagram"><i class="icon-instagram"></i></a></li>
                    <li><a href="http://dribbble.com" title="Dribbble"><i class="icon-dribbble"></i></a></li>
                </ul>
                
            </div>
        </section>
        <!-- .header-content end -->
        
        <!-- .nav-menu-main -->
        <nav class="nav-menu-main" id="nav-menu-main">
        	<div class="container">
            
                <ul>
                	<li><a href="archives.html">Lo mas visto</a></li>
                    <li><a href="archives.html">Politica</a></li>
                    <li><a href="archives.html">Deportes</a></li>
                    <li><a href="archives.html">Entretenimiento</a></li>
                    <li><a href="archives.html">Actualidad</a></li>
                    <li><a href="archives.html">Tecnologia<i class="icon-chevron-down"></i></a>
                    	<ul>
                        	<li><a href="archives.html">Computing</a></li>
                            <li><a href="archives.html">Mobile</a></li>
                            <li><a href="archives.html">Software</a></li>
                            <li><a href="archives.html">Gaming</a></li>
                            <li><a href="archives.html">Internet</a></li>
                            <li><a href="archives.html">Hardware</a></li>
                        </ul>
                    </li>
                    <li><a href="archives.html">Cazanoticias</a></li>
                </ul>
                
            </div>
        </nav>
         <!-- .nav-menu-main end -->
        
    </header>
    <!-- #header end -->
    
   
























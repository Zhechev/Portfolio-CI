<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Wesley HTML 5 Template</title>

<!-- STYLES -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/plugins.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body>

<!-- WRAPPER ALL -->
<div class="wesley_tm_wrapper_all">

    <!-- PRELOADER -->
    <div class="wesley_tm_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /PRELOADER -->

    <div id="wesley_tm_popup_blog">
        <div class="container">
            <div class="inner_popup scrollable"></div>
        </div>
        <span class="close"><a href="#"></a></span>
    </div>

    <!-- HEADER -->
    <header class="wesley_tm_header">
        <div class="wesley_tm_navigation_wrap">
            <div class="container">
                <div class="navigation_inner">
                    <div class="logo">
                        <a class="light_logo" href="index.html"><img src="" alt="" /></a>
                    </div>
                    <div class="nav_list_wrap">
                        <div class="menu">
                            <ul class="anchor_nav">
                                <li><a href="#home">Начало</a></li>
                                <li><a href="#about">За мен</a></li>
                                <li><a href="#services">Умения</a></li>
                                <li><a href="#portfolio">Проекти</a></li>
                                <li><a href="#testimonials">Цитати</a></li>
                                <li><a href="#news">Новини</a></li>
                                <li><a href="#contact">Контакти</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="wesley_tm_trigger">
                        <div class="hamburger hamburger--collapse-r">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   		<div class="wesley_tm_mobile_menu_wrap">
   			<div class="mob_menu">
                <ul class="anchor_nav">
                    <li><a href="#home">Начало</a></li>
                    <li><a href="#about">За мен</a></li>
                    <li><a href="#services">Умения</a></li>
                    <li><a href="#portfolio">Проекти</a></li>
                    <li><a href="#testimonials">Цитати</a></li>
                    <li><a href="#news">Новини</a></li>
                    <li><a href="#contact">Контакти</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!-- /HEADER -->

    <!-- CONTENT -->
    <div class="wesley_tm_content">

        <!-- HERO -->
        <div class="wesley_tm_section" id="home">
            <div class="wesley_tm_hero_header_particle jarallax" data-speed="0">
                <div class="overlay"></div>
                <div id="particles-js"></div>
                <div class="content hero">
                    <div class="container hero">
                        <div class="wesley_tm_hero_title">
                            <h5>PHP Developer and Dreamer</h5>
                            <p class="name">МИТКО <span>ЖЕЧЕВ</span></p>
                            <div class="wesley_tm_hero_share">
                                <ul>
                                    <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                    <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                    <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="xcon-instagram"></i></a></li>
                                    <li><a href="#"><i class="xcon-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="wesley_tm_arrow_wrap bounce anchor">
                            <a href="#about"><i class="xcon-angle-double-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /HERO -->

        <!-- ABOUT -->
        <div class="wesley_tm_section" id="about">
            <div class="container">
                <div class="wesley_tm_about_wrap">
                    <div class="author_wrap">
                        <div class="leftbox">
                            <div class="image_wrap">
                                <img src="<?php echo base_url('assets/img/about/22.png'); ?>" alt="" />
                            </div>
                        </div>
                        <div class="rightbox">
                            <div class="wesley_tm_main_title_holder about">
                                <h3>About Me</h3>
                            </div>
                            <div class="subtitle"><p>Graphic Designer &amp; Web Developer</p></div>
                            <div class="definition">
                                <p>Hi! My name is <strong>Wesley Kennedy</strong>. I am a full scale graphic designer. An experienced visual artist, committed to pixel perfect results. I am an expert in full brand development and corporate visual identity; from your logo, through all of your printed materials, up to your full online presence. A web designer, following the latest trends in brand/user communication.</p>
                                <p>I grew up in Speicher, Switzerland, influenced by renowned Swiss design and a lot of fresh mountain air. In 1999, after completing my design studies in Geneva and Munich, I crossed the Atlantic and began designing in New York. Since then, I have worked at several prominent NYC design firms, including Thinkmap, where I served as Design Director and helped design the award-winning Visual Thesaurus. I now run my own studio, swissmiss, with recent clients including the Museum of Modern Art and the Food Network. My aesthetics reveal my Swiss roots – I am a firm believer in white space and clean, elegant design.</p>
                            </div>
                            <div class="about_short_contact_wrap">
                                <ul>
                                    <li>
                                        <span><label>Телефон: </label><?php echo $contacts['phone']; ?></span>
                                    </li>
                                    <li>
                                        <span><label>E-mail: </label> <a href="index.html"><?php echo $contacts['email']; ?></a></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="buttons_wrap">
                                <ul>
                                    <li>
                                        <a class="download" href="index.html"><span>Изтегли CV</span></a>
                                    </li>
                                    <li class="anchor">
                                        <a href="#contact"><span>Изпрати съобщение</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /ABOUT -->

        <!-- SERVICES -->
        <div class="wesley_tm_section" id="services">
            <div class="wesley_tm_service_wrapper_all" data-bg="white" data-style="second" data-animation="bottom">
                <div class="wesley_tm_first_style">
                    <div class="wesley_tm_main_title_holder">
                        <h3>Amazing Services</h3>
                        <span>Look out our services</span>
                    </div>
                    <div class="container">
                        <div class="wesley_tm_services_wrap">
                            <ul class="wesley_tm_miniboxes">
                                <li class="wow fadeInUp wesley_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                    <div class="inner">
                                        <div class="detail_wrap">
                                            <div class="image">
                                                <img class="svg" src="<?php echo base_url('assets/img/svg/instagram.svg'); ?>" alt="" >
                                            </div>
                                            <span>Photography</span>
                                            <p>Web design is a similar process of creation, with the intention of presenting the content on electronic pages</p>
                                        </div>
                                        <div class="overlay_color"></div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp wesley_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                    <div class="inner">
                                        <div class="detail_wrap">
                                            <div class="image">
                                                <img class="svg" src="<?php echo base_url('assets/img/svg/share.svg'); ?>" alt="" >
                                            </div>
                                            <span>Social Media</span>
                                            <p>Web design is a similar process of creation, with the intention of presenting the content on electronic pages</p>
                                        </div>
                                        <div class="overlay_color"></div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp wesley_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                    <div class="inner">
                                        <div class="detail_wrap">
                                            <div class="image">
                                                <img class="svg" src="<?php echo base_url('assets/img/svg/new-tab.svg'); ?>" alt="" >
                                            </div>
                                            <span>Web Design</span>
                                            <p>Web design is a similar process of creation, with the intention of presenting the content on electronic pages</p>
                                        </div>
                                        <div class="overlay_color"></div>
                                    </div>
                                </li>
                                <li class="wow fadeInUp wesley_tm_minibox" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                    <div class="inner">
                                        <div class="detail_wrap">
                                            <div class="image">
                                                <img class="svg" src="<?php echo base_url('assets/img/svg/adobe-illustrator.svg'); ?>" alt="" >
                                            </div>
                                            <span>Adobe Illustrator</span>
                                            <p>Web design is a similar process of creation, with the intention of presenting the content on electronic pages</p>
                                        </div>
                                        <div class="overlay_color"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- SERVICE 2 -->
                <div class="wesley_tm_services_wrap_second">
                    <div class="wesley_tm_main_title_holder">
                        <h3>Amazing Services</h3>
                        <span>Look out our services</span>
                    </div>
                    <div class="container">
                        <div class="wesley_tm_list_wrap" data-column="3" data-space="70">
                            <ul class="total wesley_tm_miniboxes">
                                <li class="wow fadeIn" data-wow-duration="1.2s">
                                    <div class="inner_list wesley_tm_minibox">
                                        <div class="service_icon">
                                            <img class="svg" src="<?php echo base_url('assets/img/svg/camera-diaphragm.svg'); ?>" alt="" />
                                        </div>
                                        <div class="service_title">
                                            <h3>Photography</h3>
                                        </div>
                                        <div class="service_definition">
                                            <p>Photography is a kind of virtual reality, and it helps if you can create the illusion of being in an interesting world...</p>
                                        </div>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                    <div class="inner_list wesley_tm_minibox">
                                        <div class="service_icon">
                                            <img class="svg" src="<?php echo base_url('assets/img/svg/new-tab.svg'); ?>" alt="" />
                                        </div>
                                        <div class="service_title">
                                            <h3>Web Design</h3>
                                        </div>
                                        <div class="service_definition">
                                            <p>Web design is a similar process of creation, with the intention of presenting the content on electronic web pages...</p>
                                        </div>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                    <div class="inner_list wesley_tm_minibox">
                                        <div class="service_icon">
                                            <img class="svg" src="<?php echo base_url('assets/img/svg/layers.svg'); ?>" alt="" />
                                        </div>
                                        <div class="service_title">
                                            <h3>Branding</h3>
                                        </div>
                                        <div class="service_definition">
                                            <p>If your are starting a new company one of the most important things you can do is make sure to get the correct branding.</p>
                                        </div>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                    <div class="inner_list wesley_tm_minibox">
                                        <div class="service_icon">
                                            <img class="svg" src="<?php echo base_url('assets/img/svg/share.svg'); ?>" alt="" />
                                        </div>
                                        <div class="service_title">
                                            <h3>Social Media</h3>
                                        </div>
                                        <div class="service_definition">
                                            <p>Social media is the collective of online communications channels dedicated to content-sharing and collaboration.</p>
                                        </div>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                    <div class="inner_list wesley_tm_minibox">
                                        <div class="service_icon">
                                            <img class="svg" src="<?php echo base_url('assets/img/svg/adobe-illustrator.svg'); ?>" alt="" />
                                        </div>
                                        <div class="service_title">
                                            <h3>Illustrator</h3>
                                        </div>
                                        <div class="service_definition">
                                            <p>Illustration is the art of making images that work with something and add to it without needing direct attention.</p>
                                        </div>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="1s">
                                    <div class="inner_list wesley_tm_minibox">
                                        <div class="service_icon">
                                            <img class="svg" src="<?php echo base_url('assets/img/svg/seo-performance-marketing-graphic.svg'); ?>" alt="" />
                                        </div>
                                        <div class="service_title">
                                            <h3>Marketing</h3>
                                        </div>
                                        <div class="service_definition">
                                            <p>Marketing is the study and management of exchange relationships. Marketing is used to create, keep and satisfy the customer.</p>
                                        </div>
                                        <span class="first"></span>
                                        <span class="second"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /SERVICE 2 -->

            </div>
        </div>
        <!-- /SERVICES -->

        <!-- PORTFOLIO -->
        <div class="wesley_tm_section" id="portfolio">
            <div class="wesley_tm_portfolio_wrapper_all" data-portfolio-style="filterable">
                <div class="wesley_tm_first_portfolio">
                    <div class="wesley_tm_main_title_holder portfolio">
                        <h3>Awesome Works</h3>
                        <span>Meet our awesome works</span>
                    </div>
                    <div class="wesley_tm_portfolio_home_wrap masonry gallery_zoom">
                        <div class="item masonry_item wow slideInUp" data-wow-duration="0.8s">
                            <div class="inner">
                                <div class="image"></div>
                                <div class="image_overlay"></div>
                                <div class="image_definition">
                                    <div class="title">
                                        <a class="#" href="#">AOC Productions</a>
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="zoom" href="img/portfolio/1.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item masonry_item tall wow slideInUp" data-wow-duration="0.8s">
                            <div class="inner">
                                <div class="image"></div>
                                <div class="image_overlay"></div>
                                <div class="image_definition">
                                    <div class="title">
                                        <a href="#">Ind Hed</a>
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="zoom" href="img/portfolio/2.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item masonry_item wow slideInUp" data-wow-duration="0.8s" >
                            <div class="inner">
                                <div class="image"></div>
                                <div class="image_overlay"></div>
                                <div class="image_definition">
                                    <div class="title">
                                        <a href="#">Paper Bag</a>
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="zoom" href="img/portfolio/3.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item m_tall masonry_item wow slideInUp" data-wow-duration="0.8s" >
                            <div class="inner">
                                <div class="image"></div>
                                <div class="image_overlay"></div>
                                <div class="image_definition">
                                    <div class="title">
                                        <a href="#">The Nordic</a>
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="zoom" href="img/portfolio/4.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item m_simple masonry_item tall wow slideInUp" data-wow-duration="0.8s" >
                            <div class="inner">
                                <div class="image"></div>
                                <div class="image_overlay"></div>
                                <div class="image_definition">
                                    <div class="title">
                                        <a href="#">Vinyl Record</a>
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="zoom" href="img/portfolio/5.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item m_simple masonry_item wide wow slideInUp" data-wow-duration="0.8s">
                            <div class="inner">
                                <div class="image"></div>
                                <div class="image_overlay"></div>
                                <div class="image_definition">
                                    <div class="title">
                                        <a href="#">White Bag</a>
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="zoom" href="img/portfolio/6.jpg"></a>
                                </div>
                            </div>
                        </div>
                        <div class="item m_wide masonry_item wow slideInUp" data-wow-duration="0.8s" >
                            <div class="inner">
                                <div class="image"></div>
                                <div class="image_overlay"></div>
                                <div class="image_definition">
                                    <div class="title">
                                        <a href="#">Memphis Design</a>
                                    </div>
                                </div>
                                <div class="link">
                                    <a class="zoom" href="img/portfolio/7.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wesley_tm_button">
                        <a href="index.html"><span>Load More</span></a>
                    </div>
                </div>

                <!-- PORTFOLIO FILTER -->
                <div class="wesley_tm_second_portfolio">
                <div class="container">
                    <div class="wesley_tm_portfolio_wrap">
                        <div class="wesley_tm_main_title_holder portfolio">
                            <h3>Awesome Works</h3>
                            <span>Meet our awesome works</span>
                        </div>
                        <div class="wesley_tm_portfolio_titles"></div>
                        <ul class="wesley_tm_portfolio_filter">
                            <li><a href="#" class="current" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".design">Design</a></li>
                            <li><a href="#" data-filter=".photography">Photography</a></li>
                            <li><a href="#" data-filter=".development">Development</a></li>
                        </ul>
                        <ul class="wesley_tm_portfolio_list gallery_zoom">
                            <li class="design">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Aoc Productions" data-category="Design">
                                    <a class="zoom" href="img/portfolio/1.jpg#">
                                        <img src="<?php echo base_url('assets/img/portfolio/600x600.jpg'); ?>" alt="" />
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="photography">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Ind Hed" data-category="Photography">
                                    <a class="zoom" href="img/portfolio/2.jpg#">
                                        <img src="<?php echo base_url('assets/img/portfolio/600x600.jpg'); ?>" alt="" />
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="development">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Paper Mockup" data-category="Development">
                                    <a class="zoom" href="img/portfolio/3.jpg#">
                                        <img src="<?php echo base_url('assets/img/portfolio/600x600.jpg'); ?>" alt="" />
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="photography">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="The Nordic" data-category="Photography">
                                    <a class="zoom" href="img/portfolio/4.jpg#">
                                        <img src="<?php echo base_url('assets/img/portfolio/600x600.jpg'); ?>" alt="" />
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="design">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="Creatives Castle" data-category="Design">
                                    <a class="zoom" href="img/portfolio/5.jpg#">
                                        <img src="<?php echo base_url('assets/img/portfolio/600x600.jpg'); ?>" alt="" />
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                            <li class="photography">
                                <div class="entry wesley_tm_portfolio_animation_wrap" data-title="White Bag" data-category="Photography">
                                    <a class="zoom" href="img/portfolio/6.jpg#">
                                        <img src="<?php echo base_url('assets/img/portfolio/600x600.jpg'); ?>" alt="" />
                                        <div class="wesley_tm_portfolio_image_main"></div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /PORTFOLIO FILTER -->

            </div>
        </div>
        <!-- /PORTFOLIO -->

        <!-- TESTIMONIALS -->
        <div class="wesley_tm_section" id="testimonials">
            <div class="wesley_tm_testimonials_wrapper_all">
                <div class="wesley_tm_universal_box_wrap">
                    <div class="bg_wrap">
                        <div class="overlay_image testimonial jarallax" data-speed="0"></div>
                        <div class="overlay_color testimonial"></div>
                    </div>
                    <div class="content testimonial">
                        <div class="wesley_tm_testimonial_wrap">
                            <div class="container">
                                <div class="carousel_wrap">
                                    <ul class="owl-carousel">
                                        <li class="item">
                                            <div class="inner">
                                                <div class="quotebox_wrap">
                                                    <i class="xcon-quote-left"></i>
                                                </div>
                                                <div class="definitions_wrap">
                                                    <p>“Wesley team are easy to work with and helped me make amazing websites in a short amount of time. Thanks guys for works.”</p>
                                                </div>
                                                <div class="name_holder">
                                                    <p>Antonio Baraley, CEO Founder</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="inner">
                                                <div class="quotebox_wrap">
                                                    <i class="xcon-quote-left"></i>
                                                </div>
                                                <div class="definitions_wrap">
                                                    <p>“We were looking for a logo with a touch of modernism. Wesley grasped our needs and produced a stunning design.”</p>
                                                </div>
                                                <div class="name_holder">
                                                    <p>Calena Gomez, AOC Designer</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item">
                                            <div class="inner">
                                                <div class="quotebox_wrap">
                                                    <i class="xcon-quote-left"></i>
                                                </div>
                                                <div class="definitions_wrap">
                                                    <p>“Awesome to work with Wesley. Good organized, easy to communicate with, responsive with next iterations.”</p>
                                                </div>
                                                <div class="name_holder">
                                                    <p>Torren Winston, Photographer.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /TESTIMONIALS -->

        <!-- NEWS -->
        <div class="wesley_tm_section" id="news">
            <div class="wesley_tm_news_wrap">
                <div class="container">
                    <div class="wesley_tm_main_title_holder news">
                        <h3>Latest News</h3>
                        <span>Check out our latest news</span>
                    </div>
                    <div class="wesley_tm_list_wrap blog_list" data-column="3" data-space="30">
                        <ul class="total">
                            <?php foreach ($posts as $post) { ?>
                            <li class="wow fadeInUp" data-wow-duration="1.2s">
                                <div class="inner_list">
                                    <div class="image_wrap">
                                        <img class="small" src="<?php echo $post['image'] ?>" alt=""/>
                                        <img class="big" src="<?php echo $post['image'] ?>" alt="" />
                                        <div class="news_image" data-url="img/blog/1.jpg"></div>
                                        <a class="link_news" href="index.html"></a>
                                    </div>
                                    <div class="definitions_wrap">
                                        <div class="date_wrap">
                                            <p>January 22, 2018 <a href="index.html">Logos</a></p>
                                        </div>
                                        <div class="title_holder">
                                            <h3><a href="index.html"><?php echo $post['title']; ?></a></h3>
                                        </div>
                                        <div class="definition">
                                            <p>If you are reading this, you probably plan to start a small business or a side hustle very soon. And you probably have a couple ...</p>
                                        </div>
                                        <div class="full_def">
                                            <p>If you are reading this, you probably plan to start a small business or a side hustle very soon. And you probably have a couple of questions running through your mind like: Do I really need that logo? Or Yep, I really need one. But how can I get it on a budget? This post was created to help you bring system out of confusion so you can get the best out of your business and enter the market full force. First of all, yes, you do need a logo, and it does not really matter how big or small your business is. Even if you  making a craft soap and sell it to your relatives and friends, you still need a logo. If you plan to monetize an idea, you need a logo for it. Otherwise your work, your efforts, your image and your future brand belong to everyone, like grapes at a grocery store. But most importantly, the final design you come up with should be effective enough to promote your business and get you that place in the sun. Here are a few tips that will make the whole process easier and more fun. The first step to a killer logo is an idea. So start feeding your brain with new impressions and experiences. Use anything that works for you. Try hiking and gain inspiration from nature. Or visit an art gallery. Meditation, photography, action sports In a nutshell, any kind of activity that fills you up with energy and joy may help you get that revolutionary idea. It is always useful to browse the websites (or social media profiles) of your potential rivals to not only judge their logos but to practice analysis. Do you find your competitor logo effective or attractive? Try to think of the ways it helps the rival company to be profitable. Is there something you would change? Why? All of these questions can really help you to improve your own perception of your brand as well as the future marketing strategy. Find out what the strengths and weaknesses of your rivals are and benefit from that knowledge. When it comes to logo design, there are and always will be several safe choices like bold and elegant black and white logos or serif font wordmarks. But if you are striving to get that killer logo, do not be afraid to cross the line and try something rebellious. Go out there and get to know the latest design trends. For example, you may experiment with the bold colors like Ultra Violet, which is the Pantone color of the year, by the way. Or play with the typography and color gradients.</p>
                                        </div>
                                        <div class="wesley_tm_popup_share_wrap">
                                            <ul>
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Linkedin</a></li>
                                                <li><a href="#">Behance</a></li>
                                            </ul>
                                        </div>
                                        <div class="read_more">
                                            <a href="#"><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /NEWS -->

        <!-- CONTACT -->
        <div class="wesley_tm_section" id="contact">
            <div class="wesley_tm_contact_wrap_all">
                <div class="wesley_tm_main_title_holder contact">
                    <h3>Свържете се с мен</h3>
                    <span>Изпратете съобщение и аз ще се свържа с вас възможно най-скоро!</span>
                </div>
                <div class="wesley_tm_contact_wrap">
                    <div class="main_input_wrap">
                        <form action="/" method="post" class="contact_form" id="contact_form">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                <input id="name" type="text" placeholder="Вашето име">
                            </div>
                            <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                <input id="email" type="text" placeholder="Вашият e-mail">
                            </div>
                            <div class="wrap wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                <textarea id="message" placeholder="Съобщение"></textarea>
                            </div>
                            <div class="wesley_tm_button wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                <a id="send_message" href="#"><span>Изпрати</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /CONTACT -->

        <!-- FOOTER -->
        <div class="wesley_tm_footer_total_wrap">
            <div class="wesley_tm_address_holder_wrap">
                <div class="container">
                    <div class="inner_wrap">
                        <ul>
                            <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s">
                                <div class="image_holder logo">
                                    <img src="<?php echo base_url('assets/img/logo/logo.png'); ?>" alt="" />
                                </div>
                                <p>Creative portfolio studio</p>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.4s">
                                <div class="image_holder">
                                    <img class="svg" src="<?php echo base_url('assets/img/svg/telephone.svg'); ?>" alt="" />
                                </div>
                                <p><?php echo $contacts['phone']; ?></p>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.6s">
                                <div class="image_holder">
                                    <img class="svg" src="<?php echo base_url('assets/img/svg/envelope.svg'); ?>" alt="" />
                                </div>
                                <p><a href="#"><?php echo $contacts['email']; ?></a></p>
                            </li>
                            <li class="wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.8s">
                                <div class="image_holder">
                                    <img class="svg" src="<?php echo base_url('assets/img/svg/location2.svg'); ?>" alt="" />
                                </div>
                                <p><?php echo $contacts['address']; ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wesley_tm_footer_wrap">
                <p class="wow fadeIn"  data-wow-duration="1.2s">Powered by Codeigniter 3</p>
            </div>
        </div>
        <!-- /FOOTER -->

    </div>
    <!-- /CONTENT -->

 	 <a class="wesley_tm_totop" href="#"><i class="xcon-angle-up"></i></a>

</div>
<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/init.js'); ?>"></script>
<!-- /SCRIPTS -->

</body>
</html>
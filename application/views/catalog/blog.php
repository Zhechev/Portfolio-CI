
<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Wesley HTML 5 Template</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/animate.css'); ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/icomoon.css'); ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/bootstrap.css'); ?>">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/magnific-popup.css'); ?>">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/flexslider.css'); ?>">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/owl.theme.default.min.css'); ?>">



    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/blog/css/style.css'); ?>">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url('assets/blog/js/modernizr-2.6.2.min.js'); ?>"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/blog/js/respond.min.js'); ?>"></script>
    <![endif]-->

    </head>
    <body>
    <div class="colorlib-loader"></div>

    <div id="page">

        <aside id="colorlib-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 breadcrumbs text-center">
                        <h2>Read our blog</h2>
                        <p><span><a href="index.html">Home</a></span> / <span>Blog</span></p>
                    </div>
                </div>
            </div>
        </aside>

        <div id="colorlib-container">
            <div class="container">
                <div class="row row-pb-md">
                    <?php foreach ($posts as $post) { ?>
                    <div class="col-md-4">
                        <div class="blog-entry">
                            <div class="blog-img">
                                <a href="blog.html"><img src="<?php echo base_url('assets/img/blog/' . $post['image']); ?>" class="img-responsive" alt="html5 bootstrap template"></a>
                            </div>
                            <div class="desc">
                                <p class="meta">
                                    <span class="cat"><a href="#">Read</a></span>
                                    <span class="date">20 March 2018</span>
                                    <span class="pos">By <a href="#">Rich</a></span>
                                </p>
                                <h2><a href="blog.html"><?php echo $post['title']; ?></a></h2>
                                <p><?php echo $post['content']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/blog/js/jquery.min.js'); ?>"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo base_url('assets/blog/js/jquery.easing.1.3.js'); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/blog/js/bootstrap.min.js'); ?>"></script>
    <!-- Waypoints -->
    <script src="<?php echo base_url('assets/blog/js/jquery.waypoints.min.js'); ?>"></script>
    <!-- Flexslider -->
    <script src="<?php echo base_url('assets/blog/js/jquery.flexslider-min.js'); ?>"></script>
    <!-- Owl carousel -->
    <script src="<?php echo base_url('assets/blog/js/owl.carousel.min.js'); ?>"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo base_url('assets/blog/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/blog/js/magnific-popup-options.js'); ?>"></script>
    <!-- Main -->
    <script src="<?php echo base_url('assets/blog/js/main.js'); ?>"></script>


    </body>
</html>


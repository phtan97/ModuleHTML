<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-16.less', 'css/type-16.css');
        ?>
        <link href="css/type-16.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-16">
            <div class="reviews-section">
                <div class="container text-center">
                    <div id="reviews-carousel" class="reviews-carousel carousel slide">
                        <!--//wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <h3 class="review-title">
                                    <i class="fa fa-quote-left"></i>Really amazing and well structured courses!
                                </h3>
                                <blockquote class="review center-block">
                                    <p>Testimonial 1 goes here. You can add up to 6 testimonials.
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                                        Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>                        
                                </blockquote><!--//review-->
                                <div class="source">
                                    <div class="name">James Chapman</div>
                                    <div class="meta">London, UK</div>
                                </div><!--//source-->    
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="review-title">
                                    <i class="fa fa-quote-left"></i>Complete and concise!
                                </h3>
                                <blockquote class="review center-block">
                                    <p>Testimonial 2 goes here. You can add up to 6 testimonials. 
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                                        Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>                        
                                </blockquote><!--//review-->
                                <div class="source">
                                    <div class="name">Olivia Castro</div>
                                    <div class="meta">San Francisco, US</div>
                                </div><!--//source-->    
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="review-title">
                                    <i class="fa fa-quote-left"></i>Informative and practical courses!
                                </h3>
                                <blockquote class="review center-block">
                                    <p>Testimonial 3 goes here. You can add up to 6 testimonials. 
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit. 
                                        Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.
                                    </p>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>                        
                                </blockquote><!--//review-->
                                <div class="source">
                                    <div class="name">Jason Wang</div>
                                    <div class="meta">Berlin, Germany</div>
                                </div><!--//source-->   
                            </div><!--//item-->
                        </div><!--//carousel-inner-->
                        <!--//Indicators-->
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#reviews-carousel" data-slide-to="0">
                                <img class="img-rounded img-circle" src="images/people-1.png"> 
                            </li>
                            <li data-target="#reviews-carousel" data-slide-to="1" >
                                <img class="img-rounded img-circle" src="images/people-2.png"> 
                            </li>
                            <li data-target="#reviews-carousel" data-slide-to="2" >
                                <img class="img-rounded img-circle" src="images/people-3.png"> 
                            </li>
                        </ol><!--//carousel-indicators-->
                    </div>
                </div><!--//container-->
            </div>
        </div>
    </body>

</html>
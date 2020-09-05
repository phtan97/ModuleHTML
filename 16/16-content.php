<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-16">
            <div class="container">
                <div class="row">                                      
                    <div id="owl-demo" class="owl-carousel" data-ride="carousel">
                                 
                        <div class="col-md-12">
                            <div class="header">
                                <i class="fas fa-quote-left"></i>Really amazing and well structured courses!
                            </div>
                            <blockquote class="review center-block">
                                <p>
                                    Testimonial 1 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.
                                </p>
                            </blockquote>
                            <div class="rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <div class="source">
                                <div class="name">James Chapman</div>
                                <div class="meta">London, UK</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="header">
                                <i class="fas fa-quote-left"></i>Really amazing and well structured courses!
                            </div>
                            <blockquote class="review center-block">
                                <p>
                                    Testimonial 1 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.
                                </p>
                            </blockquote>
                            <div class="rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <div class="source">
                                <div class="name">James Chapman</div>
                                <div class="meta">London, UK</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="header">
                                <i class="fas fa-quote-left"></i>Really amazing and well structured courses!
                            </div>
                            <blockquote class="review center-block">
                                <p>
                                    Testimonial 1 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.
                                </p>
                            </blockquote>
                            <div class="rating">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                            </div>
                            <div class="source">
                                <div class="name">James Chapman</div>
                                <div class="meta">London, UK</div>
                            </div>
                        </div>                            
                    </div>
                    <div class="owl-dots">
                        <button class="owl-dot active" id="click">
                            <img src="images/people-1.png" alt="img1">
                        </button>
                        <button class="owl-dot" id="click1">
                            <img src="images/people-2.png" alt="img2">
                        </button>
                        <button class="owl-dot" id="click2">
                            <img src="images/people-3.png" alt="img3">
                        </button>
                    </div>          
                </div>
            </div>
        </div>         


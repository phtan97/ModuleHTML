<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <div class="top-title">
            <div class="title">
                <h2>Cameras & Videos</h2>
            </div>
            <ul class="list-category">
                <li>
                    <a href="#">Sony</a>
                </li>
                <li>
                    <a href="#">LG</a>
                </li>
                <li>
                    <a href="#">Nikon</a>
                </li>
                <li>
                    <a href="#">Accessories</a>
                </li>
            </ul>
        </div>
        <hr class="line">
        <div class="row">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="new-sign-up">
                    <a href="#">
                        
                        <img src="./images/22a.jpg" class="img-responsive" alt="Fujifilm Instax Mini Neo Instant Film Camera">
                        <h3>Fujifilm Instax Mini Neo Instant Film Camera</h3>
                        <p><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>                    
                    </a>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        
                        <img src="./images/24a.jpg" class="img-responsive" alt="DJI Phantom 4 Quadcopter Camera">
                        <h3>DJI Phantom 4 Quadcopter Camera</h3>
                        <p><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    </a>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        
                        <img src="./images/38a.jpg" class="img-responsive" alt="Gopro Quick Sliver Hero4 24K HD Camera">
                        <h3>Gopro Quick Sliver Hero4 24K HD Camera</h3>
                        <p><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    </a>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        
                        <img src="./images/46a.jpg" class="img-responsive" alt="Nikon Coolpix 24 MP Camera">
                        <h3>Nikon Coolpix 24 MP Camera</h3>
                        <p><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    </a>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        
                        <img src="./images/48a.jpg" class="img-responsive" alt="Sony HD 1080p, 13.5MP White Version">
                        <h3>Sony HD 1080p, 13.5MP White Version</h3>
                        <p><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    </a>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        
                        <img src="./images/49a.jpg" class="img-responsive" alt="Amcrest Security Camera">
                        <h3>Amcrest Security Camera</h3>
                        <p><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    </a>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-sign-up">
                    <a href="#">
                        
                        <img src="./images/50a.jpg" class="img-responsive" alt="DBPOWER T20 1500 Lumens LCD Projector">
                        <h3>DBPOWER T20 1500 Lumens LCD Projector</h3>
                        <p><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                    </a>
                    <div class="product-btn row">
                        <div class="product-list">
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Cart"><i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Qick view"><i class="far fa-eye"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" data-toggle="tooltip" title="Add to Compare"><i class="far fa-chart-bar"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

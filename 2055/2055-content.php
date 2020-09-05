<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-2055">
            <div class="container">
                <div class="row">                                      
                    <div class="col-md-6">
                        <div class="content-header">
                            <h3>Upcoming <span>Events</span></h3>
                        </div>
                        <div id="owl-demo" class="owl-carousel">
                                <div class="items">
                                    <img src="images/bg1.jpg">
                                    <div class="text-content">
                                        <div class="content-title">
                                            <a href="#">Spring Picnic</a>
                                        </div>
                                        <div class="time">
                                            <i class="far fa-clock"></i> 
                                            10:00 am - 8:00 pm
                                        </div>
                                        <p>
                                            Who’s that then? Shh! Knights, I bid you welcome to your new home.
                                        </p>
                                    </div>                                    
                                </div>                           
                            <div>
                                <div class="items">
                                    <img src="images/bg2.jpg">
                                    <div class="text-content">
                                        <div class="content-title">
                                            <a href="#">Spring Picnic</a>
                                        </div>
                                        <div class="time">
                                            <i class="far fa-clock"></i> 
                                            8:00 pm - 11:30 pm
                                        </div>
                                        <p>
                                            Who’s that then? Shh! Knights, I bid you welcome to your new home.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div>
                                <div class="items">
                                    <img src="images/bg3.jpg">
                                    <div class="text-content">
                                        <div class="content-title">
                                            <a href="#">Spring Picnic</a>
                                        </div>
                                        <div class="time">
                                            <i class="far fa-clock"></i> 
                                            12:00 am - 11:59 pm
                                        </div>
                                        <p>
                                            Who’s that then? Shh! Knights, I bid you welcome to your new home.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="content-header">
                            <h3>Project <span>Video</span></h3>
                        </div>
                           <div class="video-testimonial-block">
                                <div class="video-thumbnail"><img src="images/bg1.jpg" alt="" class="img-fluid"></div>
                                <div class="video">
                                    <iframe src="videos/movie.mp4">
                                    </iframe>
                                </div>
                                <a href="#" class="video-play"></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>         


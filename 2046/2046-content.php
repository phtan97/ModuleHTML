<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-331">
            <div class="container">
                <div class="header">
                    <h3>
                        <img src="images/sep-icon.png">
                        LASTEST NEWS AND TIPS
                    </h3>
                </div>
                <div class="row">                                      
                    <div id="owl-demo" class="owl-carousel">
                        <div class="col-md-6 col-sm-6">
                            <div class="blog-box">
                                <div class="blog-box-inner">
                                    <div class="entry-header">
                                        <h3>
                                            <a href="#">12 TIPS TO CLEAN YOUR OFFICE <br>WINDOW CLEARLY</a>
                                        </h3>
                                    </div>
                                    <div class="byline">
                                        BY <a href="#">MAKECLEAN,</a>
                                        <a href="#"><i class="far fa-heart"></i></a> 93
                                    </div>
                                    
                                    <div class="entry-content">
                                          Eaque ipsa quae ab illo inventore <br>veritatis et quasi architecto...
                                    </div>
                                    <button type="submit" class="btn btn-default">READ MORE...</button>
                                    <div class="entry-cover pull-right">
                                        <a href="#"><img src="images/img1.jpg"></a>
                                        <div class="post-on">
                                            <div class="like">
                                                <a href="#">93</a>
                                            </div>
                                            <div class="date">
                                                12 DEC
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-box">
                                <div class="blog-box-inner">
                                    <div class="entry-header">
                                        <h3>
                                            <a href="#">WE ARE READY TO CLEAN YOUR <br>WORLD</a>
                                        </h3>
                                    </div>
                                    <div class="byline">
                                        BY <a href="#">MAKECLEAN,</a>
                                        <a href="#"><i class="far fa-heart"></i></a> 77
                                    </div>
                                    
                                    <div class="entry-content">
                                          Eaque ipsa quae ab illo inventore <br>veritatis et quasi architecto...
                                    </div>
                                    <button type="submit" class="btn btn-default">READ MORE...</button>
                                    <div class="entry-cover pull-right">
                                        <a href="#"><img src="images/img2.jpg"></a>
                                        <div class="post-on">
                                            <div class="like">
                                                <a href="#">77</a>
                                            </div>
                                            <div class="date">
                                                12 DEC
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         


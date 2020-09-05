<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-101">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h1>Poppular Courses</h1>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/1.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Medical Chemistry: The Molecular Basis...</h3>
                                        <a href="#">March 8,2015</a> by <a href="#">Mike Newton</a> <i class="fas fa-star"></i> 60.5
                                    </div>                               
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/2.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Video Training for Microsoft products and technologies</h3>
                                        <a href="#">March 1,2015</a> by <a href="#">Mike Newton</a> <i class="fas fa-star"></i> 54.5
                                    </div>                               
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/3.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Entrepreneurship 101: Who your customer?</h3>
                                        <a href="#">February 27,2017</a> by <a href="#">Mike Newton</a> <i class="fas fa-star"></i> 54.3
                                    </div>                               
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/4.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Principles of Written English, Part 2</h3>
                                        <a href="#">February 10,2017</a> by <a href="#">Mike Newton</a> <i class="fas fa-star"></i> 52
                                    </div>                               
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h1>Poppular Courses</h1>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/3.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Principles of Written English, Part 2</h3>
                                        <a href="#">February 10,2017</a> by <a href="#">Mike Newton</a> <i class="far fa-eye"></i> 8469
                                    </div>                               
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/4.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Entrepreneurship 101: Who your customer?</h3>
                                        <a href="#">February 27,2017</a> by <a href="#">Mike Newton</a> <i class="far fa-eye"></i> 7618
                                    </div>                               
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/5.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Evaluating Social Programs</h3>
                                        <a href="#">January 1,2015</a> by <a href="#">Mike Newton</a> <i class="far fa-eye"></i> 12348
                                    </div>                               
                                </div> 
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 pg">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="imagis">
                                        <img src="images/6.jpg">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="contents">
                                        <h3>Principles of Written English, Part 1</h3>
                                        <a href="#">December 24,2014</a> by <a href="#">Mike Newton</a> <i class="far fa-eye"></i> 2952
                                    </div>                               
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
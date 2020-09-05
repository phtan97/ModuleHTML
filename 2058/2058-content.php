<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-2058">
            <div class="wide-heading">
               <div class="container">
                    <div class="row">                                      
                        <div id="owl-demo" class="owl-carousel">
                            <div>
                                <div class="news-post standart-post">
                                    <div class="post-img">
                                        <a href="#"><img src="images/s1.jpg"></a>
                                    </div>
                                    <div class="content-post">
                                        <h2>
                                            <a href="#">New alternatives are more productive</a>
                                        </h2>
                                        <p>
                                            Eight candidates are seeking to oust Zeman, whose inclination toward far-right groups and cosy relations with
                                        </p>
                                        <a class="category" href="#">fruits</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="news-post standart-post">
                                    <div class="post-img">
                                        <a href="#"><img src="images/s2.jpg"></a>
                                    </div>
                                    <div class="content-post">
                                        <h2>
                                            <a href="#">New alternatives are more productive</a>
                                        </h2>
                                        <p>
                                            Eight candidates are seeking to oust Zeman, whose inclination toward far-right groups and cosy relations with
                                        </p>
                                        <a class="category" href="#">vegetables</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="news-post standart-post">
                                    <div class="post-img">
                                        <a href="#"><img src="images/s3.jpg"></a>
                                    </div>
                                    <div class="content-post">
                                        <h2>
                                            <a href="#">New alternatives are more productive</a>
                                        </h2>
                                        <p>
                                            Eight candidates are seeking to oust Zeman, whose inclination toward far-right groups and cosy relations with
                                        </p>
                                        <a class="category" href="#">traditional</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>            
        </div>         


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
                <div class="title">
                    <h2>
                        ARTISTS
                    </h2>
                </div>
                <div class="row">                                      
                    <div id="owl-demo" class="owl-carousel">
                        <div class="img-cnt thumb">
                            <a class="thumbnail" data-toggle="modal" data-target="#image-gallery" href="#">
                                <img src="images/bazooka-joe.jpg">
                            </a>
                        </div>
                        <div class="img-cnt thumb">
                            <a class="thumbnail" data-image-id="" data-toggle="modal" data-title="this is my title" data-caption="..." data-image="images/gil-goren.jpg" data-target="#image-gallery" href="#">
                                <img src="images/gil-goren.jpg">
                            </a>                           
                        </div>
                        <div class="img-cnt thumb">
                            <a class="thumbnail" data-image-id="" data-toggle="modal" data-title="this is my title" data-caption="..." data-image="images/jon-micheal.jpg" data-target="#image-gallery" href="#">
                                <img src="images/jon-micheal.jpg">
                            </a>
                            
                        </div>
                        <div class="img-cnt thumb">
                            <a class="thumbnail" data-image-id="" data-toggle="modal" data-title="this is my title" data-caption="..." data-image="images/koko.jpg" data-target="#image-gallery" href="#">
                                <img src="images/koko.jpg">
                            </a>
                            
                        </div>
                        <div class="img-cnt thumb">
                            <a class="thumbnail" data-image-id="" data-toggle="modal" data-title="this is my title" data-caption="..." data-image="images/leoray.jpg" data-target="#image-gallery" href="#">
                                <img src="images/leoray.jpg">
                            </a>
                            
                        </div>
                        <div class="img-cnt thumb">
                            <a class="thumbnail" data-image-id="" data-toggle="modal" data-title="this is my title" data-caption="..." data-image="images/nissim-ae.jpg" data-target="#image-gallery" href="#">
                                <img src="images/nissim-ae.jpg">
                            </a>
                            
                        </div>                       
                    </div>
                </div>
            </div>
        </div>         


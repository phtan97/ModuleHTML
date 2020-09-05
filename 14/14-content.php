<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-14">
            <div class="container">
                <div class="row">                                      
                    <div id="owl-demo" class="owl-carousel">
                        <div class="logos">
                            <img src="images/award1.jpg" alt="award1">
                        </div>
                        <div class="logos">
                            <img src="images/award2.jpg" alt="award2">
                        </div>
                        <div class="logos">
                            <img src="images/award3.jpg" alt="award3">
                        </div>
                        <div class="logos">
                            <img src="images/award4.jpg" alt="award4">
                        </div>
                        <div class="logos">
                            <img src="images/award5.jpg" alt="award5">
                        </div>
                        <div class="logos">
                            <img src="images/award7.jpg" alt="award6">
                        </div>
                    </div>
                </div>
            </div>
        </div>         


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
                <div class="row">                                      

                    <div id="owl-demo" class="owl-carousel">
                        <img src="images/computer-336628.jpg">
                        <img src="images/moonshine-960797_1920.jpg">
                    </div>
                    <span class="paginatecircle" data-moveby="1"></span>
                </div>
            </div>
        </div>         


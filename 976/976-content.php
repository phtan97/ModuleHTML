<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div id="topbar" class="container">
    <div class="row">
        <div class="twelvecol">
            <!--<a class="goback" href="#">MarkTyrrell.com</a>-->
        </div>
    </div>
</div>
<div id="header" class="container">
    <div class="row">
        <div class="fourcol">
            <a class="logo" href="#"><h1>Blueberry</h1></a>

            <p class="blurb">Introducing a jQuery image slider written specifically for responsive web design.
                <br><br>
                Resize this page to see it in action!</p>
        </div>

        <div class="eightcol last">
            <div class="blueberry">
                <ul class="slides" style="height: 320px;">
                    <li class="active" style="display: list-item;"><img src="images/slide1.jpg"></li>
                    <li class="" style="display: none;"><img src="images/slide2.jpg"></li>
                    <li class="" style="display: none;"><img src="images/slide3.jpg"></li>
                    <li class="" style="display: none;"><img src="images/slide4.jpg"></li>
                </ul>
                <ul class="pager">
                    <li class="active"><a href="#"><span></span></a></li>
                    <li class=""><a href="#"><span></span></a></li>
                    <li class=""><a href="#"><span></span></a></li>
                    <li class=""><a href="#"><span></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

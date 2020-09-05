  <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-i-22">
            <div class="swiper-container">
            	<div class="swiper-wrapper">
            		<div class="swiper-slide">
            			<img src="images/computer-336628.jpg">
            		</div>
            		<div class="swiper-slide">
            			<img src="images/moonshine-960797_1920.jpg">
            		</div>
            	</div>
            	
            </div>
        </div>
    

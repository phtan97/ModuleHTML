  <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-i-22">
        	<div class="footer">
            	<div class="row">           	
            		<div class="col-md-4">
            			<div class="logo">
            				<a href="#"><img src="images/logo-dark"></a>
            				<p>
            					Tart bear claw cake tiramisu chocolate bar gummies drage lemon drops brownie.
            				</p>
            				<div class="logo-footer">
            					<a href="#"><i class="fab fa-facebook-f"></i></a>
            					<a href="#"><i class="fab fa-twitter"></i></a>
            					<a href="#"><i class="fab fa-pinterest-p"></i></a>
            				</div>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<h2 style="color: white">Get news & offer</h2>
            			<div class="input-group">
            				<input type="text" class="form-control" placeholder="Your email...">
            				<button class="input-group-addon">Subscribe</button>
            			</div>
            			<p>
            				* Don't worry, we never spam
            			</p>
            			<div class="contact">
            				<h2>Contact with me</h2>
            				<div class="address">
            					<p>
            						PO Box 16122 Collins Street West,Victoria 8007 Australia
            					</p>
            					
            					<p>
            						(+84 ) 7534 9773, (+84 ) 874 548
            					</p>
            				</div>
            			</div>
            			
            		</div>
            		<div class="col-md-4">
            			<h2>Time to Open</h2>
            			<div class="date-time">
            				<ul>
            					<li>Monday - Friday:</li>
            					<li>08:00 am - 08:30 pm</li>
            					<li>Saturday - Sunday:</li>
            					<li>10:00 am - 16:30 pm</li>
            				</ul>
            			</div>
            			<div class="logo-cards">
            				<a href="#"><img src="images/visa.png"></a>
            				<a href="#"><img src="images/master-card.png"></a>
            				<a href="#"><img src="images/paypal.png"></a>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    

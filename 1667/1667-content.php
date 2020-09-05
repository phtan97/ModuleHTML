  <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-i-22">
            <div class="container">
            	<h2>
            		$200.00
            	</h2>
            	<div class="stock">
            		In stock
            	</div>
            	<div class="content-product">
            		Curabitur at lacus ac velit ornare lobortis. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Ut varius tincidunt libero.
            	</div>
            	<hr>
            	<div class="row">
            		<div class="col-md-2">
            			<div>
            				Quantity:
            			</div>
            			<div class="quantity pr">
                  <div class="qty tc">
                     <a class="minus dib" href="javascript:void(0);">
                    <i class="fa fa-minus"></i>
                     </a>
                     <input type="number" class="input-text tc" id="quantity_5cc577f043db9" step="1" min="1" max="" name="quantity" value="1" size="4">
                     <a class="plus dib" href="javascript:void(0);">
                     <i class="fa fa-plus"></i>
                     </a>
                  </div>
               </div>
            		</div>
            		<div class="col-md-2">
            			<a href="#">
            				<div class="add-cart">
            					<h2>
            						Add To Cart
            					</h2>
            				</div>
            			</a>
            		</div>
            		<div class="col-md-8">
            			<div class="wl">
            				<a href="#" datatoggle="tooltip" title="Add to Wish List">
            					<i class="far fa-heart"></i>
            				</a>
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    

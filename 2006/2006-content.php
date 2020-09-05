  <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-i-22">
        	<div class="titile">
        		<h1>
        			Deal of the day
        		</h1>
        		<p>
        			BREADS EVERY DAY
        		</p>
                <img src="images/floral.png">
        	</div>
            <div class="row">
            	<div class="col-md-6">
            		<div class="products">
                        <div class="product">
                            <div class="product-img">
                                <img src="images/1.png">
                                <div class="product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#" data-toggle="tooltip" title=""><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="product-title">
                                <div class="product-content">
                                    <h2>
                                        <a href="#">Pie topping jelly</a>
                                    </h2>
                                    <p>
                                        <a href="#">CUPCAKE</a>-<a href="#">ORGANIC</a>
                                    </p>
                                    <p>
                                        <div class="stars starrr" data-rating="0"></div>
                                    </p>
                                </div>
                            </div>
                        </div>
            			<div class="product">
                            <div class="product-img">
                                <img src="images/2.png">
                                <div class="product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-title">
                                <div class="product-content">
                                    <h2>
                                        <a href="#">Pie topping jelly</a>
                                    </h2>
                                    <p>
                                        <a href="#">CUPCAKE</a>-<a href="#">ORGANIC</a>
                                    </p>
                                    <p>
                                        <div class="stars starrr" data-rating="0"></div>
                                    </p>
                                </div>
                            </div>
                        </div>
            			<div class="product">
                            <div class="product-img">
                                <img src="images/3.png">
                                <div class="product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-title">
                                <div class="product-content">
                                    <h2>
                                        <a href="#">Pie topping jelly</a>
                                    </h2>
                                    <p>
                                        <a href="#">CUPCAKE</a>-<a href="#">ORGANIC</a>
                                    </p>
                                    <p>
                                        <div class="stars starrr" data-rating="0"></div>
                                    </p>
                                </div>
                            </div>
                        </div>
            		</div>
            	</div>
            	<div class="col-md-6">
            		<div class="product">
                            <div class="product-img">
                                <img src="images/4.png">
                                <div class="product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-title">
                                <div class="product-content">
                                    <h2>
                                        <a href="#">Pie topping jelly</a>
                                    </h2>
                                    <p>
                                        <a href="#">CUPCAKE</a>-<a href="#">ORGANIC</a>
                                    </p>
                                    <p>
                                        <div class="stars starrr" data-rating="0"></div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <div class="product">
                            <div class="product-img">
                                <img src="images/5.png">
                                <div class="product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-title">
                                <div class="product-content">
                                    <h2>
                                        <a href="#">Pie topping jelly</a>
                                    </h2>
                                    <p>
                                        <a href="#">CUPCAKE</a>-<a href="#">ORGANIC</a>
                                    </p>
                                    <p>
                                        <div class="stars starrr" data-rating="0"></div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <div class="product">
                            <div class="product-img">
                                <img src="images/6.png">
                                <div class="product-list">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="far fa-heart"></i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#"><i class="fas fa-shopping-bag"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-title">
                                <div class="product-content">
                                    <h2>
                                        <a href="#">Pie topping jelly</a>
                                    </h2>
                                    <p>
                                        <a href="#">CUPCAKE</a>-<a href="#">ORGANIC</a>
                                    </p>
                                    <p>
                                        <div class="stars starrr" data-rating="0"></div>
                                    </p>
                                </div>
                            </div>
                        </div>
            	</div>
            </div>
        </div>
    

<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-728">
            <div class="container">
                <div class="header">
                    <div class="wing"></div>
                    <h3>FEATURED PRODUCTS</h3>
                    <div class="wing"></div>
                </div>
                <div class="row">                                      
                   <div id="owl-demo" class="owl-carousel">
                        <div class="col-md-6">
                            <div>
                                <div class="col-md 6">
                                    <div class="image">
                                        <img src="images/2-wide.jpg">
                                        <div class="blog-infor">
                                            <div class="grayshadow blog-date">
                                                <div>9</div>
                                                <p>MAR</p>
                                            </div>
                                            <div class="blog-like grayshadow">
                                                <i class="fas fa-heart"></i>
                                                <p>
                                                    72
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-content">
                                        <a href="#">Lorem ipsumhuwf uhuw jijio dolor sit amet</a>
                                        <div class="infor">
                                            <i class="fas fa-user"></i> Makred <i class="fas fa-comment"></i> tag02, tag03 <i class="fas fa-eye"></i> 1711
                                        </div>
                                        <div class="infor-content">
                                            Donec feugiat justo id volutpat fermentum. Curabitur faucibus lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque lobortis, rutrum purus sit amet, sodales ...
                                        </div>
                                        <button type="submit" class="btn btn-default">Read more</button>
                                    </div>
                                </div>
                            </div>                                                        
                        </div>
                        <div class="col-md-6">
                            <div>
                                <div class="col-md 6">
                                    <div class="image">
                                        <img src="images/4-wide.jpg">
                                        <div class="blog-infor">
                                            <div class="grayshadow blog-date">
                                                <div>9</div>
                                                <p>MAR</p>
                                            </div>
                                            <div class="blog-like grayshadow">
                                                <i class="fas fa-heart"></i>
                                                <p>
                                                    72
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-content">
                                        <a href="#">Lorem ipsumhuwf uhuw jijio dolor sit amet</a>
                                        <div class="infor">
                                            <i class="fas fa-user"></i> Makred <i class="fas fa-comment"></i> tag02, tag03 <i class="fas fa-eye"></i> 1711
                                        </div>
                                        <div class="infor-content">
                                            Donec feugiat justo id volutpat fermentum. Curabitur faucibus lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque lobortis, rutrum purus sit amet, sodales ...
                                        </div>
                                        <button type="submit" class="btn btn-default">Read more</button>
                                    </div>
                                </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>         


<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="zaro">
            <div id="pattent" class="slidelip white-background">  
                <div class="container container-modify margin-auto header">
                    <!--SLIDE SHOW TUYEN-->  
                    <div id="john-carousel" >
                        <table class="title-table">
                            <tbody>
                                <tr>
                                    <td class="col-md-6 col-sm-6">
                                        <span class="title-wing"></span>
                                    </td>
                                    <td class="carousel-title">
                                        <h3> Featured Products </h3>
                                        <div class=" smooth02 zaro-controls carousel-control" href="#myCarousel2" data-slide="prev">
                                            <i class="fa fa-angle-left"></i>
                                        </div>
                                        <div class="zaro-next smooth02 zaro-controls carousel-control" href="#myCarousel2" data-slide="next">
                                            <i class="fa fa-angle-right"></i>
                                        </div>
                                    </td>
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>   
                                    <td class="col-md-6 col-sm-6  ">
                                        <span class="title-wing"></span>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                        <div class="carousel slide" data-ride="carousel" data-type="a" data-interval="3000" id="myCarousel2">
                            <div class="carousel-inner"> 
                                <div class="item active"> 
                                    <div class="col-md-6 col-sm-6 col-xs-12 item-hover margin-padding"> 
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-carousel">
                                            <figure> 
                                                <div class="blog-info">
                                                    <div class="blog-date main_bg grayshadow">
                                                        <div> 9 <span>Mar</span></div>
                                                    </div>
                                                    <div class="bookmarkRibbon"><span style="color:white;position: relative;top: -9px;text-align: center;right: -10px;">20% OFF</span></div>
                                                    <div class="blog-post-likes grayshadow likes_4" onclick="addRating(4);">
                                                        <i class="fa fa-heart"></i>
                                                        <div class="lmromandemi">72</div>
                                                    </div>
                                                </div>
                                            </figure>
                                            <a class="box-img-carousel" style="background: url(images/slide3/4-wide.jpg) no-repeat ;"></a>  
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-content-carousel">
                                            <h2>
                                                <a>Lorem ipsumhuwf uhuw jijio dolor sit amet</a>
                                            </h2>
                                            <div class="additional-info">
                                                <span class="post-author">
                                                    <i class="fa fa-user"></i>
                                                    <p>Makred</p>
                                                </span>
                                                <span class="post-comment">
                                                    <i class="fa fa-comment"></i>
                                                    <p>tag02, tag03 </p>
                                                </span>
                                                <span class="post-view">
                                                    <i class="fa fa-eye"></i>
                                                    <p> 1711</p>
                                                </span> 
                                            </div>
                                            <div class="post-details">
                                                <p>Donec feugiat justo id volutpat fermentum. Curabitur faucibus lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque lobortis, rutrum purus sit amet, sodales ...</p>
                                            </div>
                                            <div class="post-read">
                                                <a href="#" class="read-more">Read more</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> 
                                    <div class="col-md-6 col-sm-6 col-xs-12 item-hover margin-padding"> 
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-carousel">
                                            <figure> 
                                                <div class="blog-info">
                                                    <div class="blog-date main_bg grayshadow">
                                                        <div> 9 <span>Mar</span></div>
                                                    </div>
                                                    <div class="bookmarkRibbon"><span style="color:white;position: relative;top: -9px;text-align: center;right: -10px;">20% OFF</span></div>
                                                    <div class="blog-post-likes grayshadow likes_4" onclick="addRating(4);">
                                                        <i class="fa fa-heart"></i>
                                                        <div class="lmromandemi">72</div>
                                                    </div>
                                                </div>
                                            </figure>
                                            <a class="box-img-carousel" style="background: url(images/slide3/2-wide.jpg) no-repeat ;"></a>  
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 box-content-carousel">
                                            <h2>
                                                <a>Lorem ipsumhuwf uhuw jijio dolor sit amet</a>
                                            </h2>
                                            <div class="additional-info">
                                                <span class="post-author">
                                                    <i class="fa fa-user"></i>
                                                    <p>Makred</p>
                                                </span>
                                                <span class="post-comment">
                                                    <i class="fa fa-comment"></i>
                                                    <p>tag02, tag03 </p>
                                                </span>
                                                <span class="post-view">
                                                    <i class="fa fa-eye"></i>
                                                    <p> 1711</p>
                                                </span> 
                                            </div>
                                            <div class="post-details">
                                                <p>Donec feugiat justo id volutpat fermentum. Curabitur faucibus lacinia turpis, eu consectetur urna vehicula sit amet. Duis ut neque lobortis, rutrum purus sit amet, sodales ...</p>
                                            </div>
                                            <div class="post-read">
                                                <a href="#" class="read-more">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                //SLIDE TUYEN
                $('.carousel[data-type="a"] .item', this).each(function () {
                    var next = $(this).next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    if ($(window).width() > 768) {
                        for (var i = 0; i < 1; i++) {
                            next = next.next();
                            if (!next.length) {
                                next = $(this).siblings(':first');
                            }
                            next.children(':first-child').clone().appendTo($(this));
                        }
                    } else {
                        for (var i = 0; i < 0; i++) {
                            next = next.next();
                            if (!next.length) {
                                next = $(this).siblings(':first');
                            }
                            next.children(':first-child').clone().appendTo($(this));
                        }
                    }
                    window.onresize = function (event)
                    {
                        document.location.reload(true);
                    };
                });
            });
        </script>
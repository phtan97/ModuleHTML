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
                <div class="findhome-team findhome-classic-team">
                    <ul class="row">                                      
                        <div id="owl-demo" class="owl-carousel">
                            <li>
                                <div class="findhome-classic-team-text">
                                    <figure>
                                        <a href="#"><img src="images/team-img1.jpg  "></a>
                                    </figure>
                                    <h5><a href="#">Eva Rodriges</a></h5>
                                    <span>Fusce id</span>
                                    <p>Lorem ipsum dolor sit at, con ctetur adipiscing elit. Nc congue diam sit amet </p>
                                    <ul class="findhome-team-social">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="findhome-classic-team-text">
                                    <figure>
                                        <a href="#"><img src="images/team-img2.jpg  "></a>
                                    </figure>
                                    <h5><a href="#">Eva Rodriges</a></h5>
                                    <span>Fusce id</span>
                                    <p>Lorem ipsum dolor sit at, con ctetur adipiscing elit. Nc congue diam sit amet </p>
                                    <ul class="findhome-team-social">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="findhome-classic-team-text">
                                    <figure>
                                        <a href="#"><img src="images/team-img3.jpg  "></a>
                                    </figure>
                                    <h5><a href="#">Eva Rodriges</a></h5>
                                    <span>Fusce id</span>
                                    <p>Lorem ipsum dolor sit at, con ctetur adipiscing elit. Nc congue diam sit amet </p>
                                    <ul class="findhome-team-social">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="findhome-classic-team-text">
                                    <figure>
                                        <a href="#"><img src="images/team-img4.jpg  "></a>
                                    </figure>
                                    <h5><a href="#">Eva Rodriges</a></h5>
                                    <span>Fusce id</span>
                                    <p>Lorem ipsum dolor sit at, con ctetur adipiscing elit. Nc congue diam sit amet </p>
                                    <ul class="findhome-team-social">
                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                            

                        </div>
                    </ul>
                </div>
                
            </div>
        </div>         


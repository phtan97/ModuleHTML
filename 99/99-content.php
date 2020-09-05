<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-99">
            <div class="container">
                <div class="pull-right list-view-change">
                    <div id="btn-grid">
                        <button class="btn"><i class="fa fa-th-large"></i> Grid view </button>
                    </div>
                    <div id="btn-list">
                        <button class="btn"><i class="fa fa-bars"></i> List view </button>
                    </div>
                </div>
                <div class="filters" id="btn-bars">
                    <a class="btn navbar-btn btn-orange" href="#" onclick="myFunction()">
                        Analytics                            </a>
                    <a class="btn navbar-btn btn-lightblue" href="#">
                        Beats                            </a>
                    <a class="btn navbar-btn btn-lightblue" href="#">
                        Books                            </a>
                    <a class="btn navbar-btn btn-lightblue" href="#">
                        Fashion                            </a>
                    <a class="btn navbar-btn btn-lightblue" href="#">
                        Photo                            </a>
                    <a class="btn navbar-btn btn-lightblue" href="#">
                        Websites                            </a>
                </div>

                <hr class="invisible">
                <div class="row">
                    <div class="colum col-md-6 col-sm-6 col-xs-6" style="width: 100%">
                        <article class="row video-item">
                            <div class="col-md-4 col-sm-4 col-xs-12" id="chg">
                                <a href="#" class="video-prev video-prev-small"><i class="fa fa-play"></i><span class="overlay"></span></a>
                                <p class="button-full">
                                    <a href="#" class="btn btn-theme btn-green">
                                        <i class="fa fa-play"></i> Watch the video <small>11 <i class="fa fa-heart"></i></small>
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <h3 class="video-title"><a href="#">HOW TO DRAW A PAINTING</a></h3>
                                <div class="video-description">
                                    <p>handler has just finished his Graphic Design degree and enjoys continuing to learn from Monica and building his experience. Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently and both also have qualifications in project management to ensure that the projects run smoothly from [...]</p>
                                </div>
                                <div class="row video-params">
                                    <div class="col-md-4">
                                        Author : <b>kl-webmedia</b>
                                    </div>
                                    <div class="col-md-3">
                                        Date: <b>July 12, 2015</b>
                                    </div>
                                    <div class="col-md-3">
                                        Category: <b>Analytics</b>
                                    </div>
                                    <div class="col-md-2">
                                        Views: <b>2606</b>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="colum col-md-6 col-sm-6 col-xs-6" style="width: 100%">
                        <article class="row video-item">
                            <div class="col-md-4 col-sm-4 col-xs-12" id="chg1">
                                <a href="#" class="video-prev video-prev-small"><i class="fa fa-play"></i><span class="overlay"></span></a>
                                <p class="button-full">
                                    <a href="#" class="btn btn-theme btn-green">
                                        <i class="fa fa-play"></i> Watch the video
                                        <small>23 <i class="fa fa-heart"></i></small>
                                    </a>
                                </p>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <h3 class="video-title"><a href="#">HOW TO DRAW A PAINTING</a></h3>
                                <div class="video-description">
                                    <p>handler has just finished his Graphic Design degree and enjoys continuing to learn from Monica and building his experience. Joey and Phoebe focus on bringing new business to the company. They have won a number of big clients recently and both also have qualifications in project management to ensure that the projects run smoothly from [...]</p>
                                </div>
                                <div class="row video-params">
                                    <div class="col-md-4">
                                        Author : <b>kl-webmedia</b>
                                    </div>
                                    <div class="col-md-3">
                                        Date: <b>July 12, 2015</b>
                                    </div>
                                    <div class="col-md-3">
                                        Category: <b>Analytics</b>
                                    </div>
                                    <div class="col-md-2">
                                        Views: <b>533</b>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>                
            </div>
        </div>

<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-2001">
    <section id="tabs">
    <div class="container">
        <div class="title-head">
            <h1 class="heading">Tour Schedule</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Portfolio Filter -->
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">MARCH</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">APRIL</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">MAY</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="box-event">
                        <div class="event-item">
                            <span class="event-dot"></span>
                            <p class="event-time">March 13, 2019</p>
                            <div class="event-inner">
                                <div class="event-modern">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4 class="title">
                                                <a href="#">Encore Beach Club, Las Vegas</a>
                                            </h4>
                                            <div class="text">
                                                DJ Angerone will visit one of the most famous night clubs in Las Vegas in March to play his latest tracks and the greatest Trance hits as a part of his US tour.
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event-modern-btn">
                                                <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                        
                            </div>
                        </div>
                        <div class="event-item">
                            <span class="event-dots"></span>
                            <p class="event-time">March 21, 2019</p>
                            <div class="event-inner">
                                <div class="event-modern">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4 class="title">
                                                <a href="#">Soundscape Weekender Festival, Coventry</a>
                                            </h4>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event-modern-btn">
                                                <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                        
                            </div>
                        </div>
                        <div class="event-item">
                            <span class="event-dots"></span>
                            <p class="event-time">March 25, 2019</p>
                            <div class="event-inner">
                                <div class="event-modern">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4 class="title">
                                                <a href="#">Barcelona Beach Festival, Barcelona</a>
                                            </h4>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event-modern-btn">
                                                <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                        
                            </div>
                        </div>
                        <div class="event-item">
                            <span class="event-dots"></span>
                            <p class="event-time">March 29, 2019</p>
                            <div class="event-inner">
                                <div class="event-modern">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4 class="title">
                                                <a href="#">Barclaycard Arena, Hamburg</a>
                                            </h4>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event-modern-btn">
                                                <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="box-event">
                        <div class="event-item">
                            <span class="event-dot"></span>
                            <p class="event-time">April 21, 2019</p>
                            <div class="event-inner">
                                <div class="event-modern">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4 class="title">
                                                <a href="#">Soundscape Weekender Festival, Coventry</a>
                                            </h4>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event-modern-btn">
                                                <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                        
                            </div>
                        </div>
                        <div class="event-item">
                            <span class="event-dots"></span>
                            <p class="event-time">April 25, 2019</p>
                            <div class="event-inner">
                                <div class="event-modern">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4 class="title">
                                                <a href="#">Barcelona Beach Festival, Barcelona</a>
                                            </h4>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event-modern-btn">
                                                <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                        
                            </div>
                        </div>
                        <div class="event-item">
                            <span class="event-dots"></span>
                            <p class="event-time">April 29, 2019</p>
                            <div class="event-inner">
                                <div class="event-modern">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h4 class="title">
                                                <a href="#">Barclaycard Arena, Hamburg</a>
                                            </h4>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <div class="event-modern-btn">
                                                <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="box-event">
                            <div class="event-item">
                                <span class="event-dot"></span>
                                <p class="event-time">May 25, 2019</p>
                                <div class="event-inner">
                                    <div class="event-modern">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <h4 class="title">
                                                    <a href="#">Barcelona Beach Festival, Barcelona</a>
                                                </h4>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="event-modern-btn">
                                                    <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
                                                </div>
                                            </div>
                                        </div>                               
                                    </div>                                                        
                                </div>
                            </div>
                            <div class="event-item">
                                <span class="event-dots"></span>
                                <p class="event-time">May 29, 2019</p>
                                <div class="event-inner">
                                    <div class="event-modern">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <h4 class="title">
                                                    <a href="#">Barclaycard Arena, Hamburg</a>
                                                </h4>
                                                
                                            </div>
                                            <div class="col-md-5">
                                                <div class="event-modern-btn">
                                                    <a href="#">BUY TICKETS <i class="fas fa-angle-double-right"></i></a>
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
        </div>
    </div>
        
    </section>
</div>
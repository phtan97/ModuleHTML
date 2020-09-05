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
                <div class="row">                                      

                    <div id="owl-demo" class="owl-carousel">
                        <div class="bg">
                            <div class="item">
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna
                                    mollis euismod.
                                </p>
                                <span class="nick-name">John Dow</span>,Head Chef

                            </div>
                            <div class="image">
                                <img src="<?php echo $url_path ?>/images/testimonial-32-150x150.jpg" alt=""/>
                                 
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">Paul Smith</span>,Doctor
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/doctor.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                       <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">John Dow</span>,Head Chef
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/cheft.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">Ricardo goff</span>,Layers
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/testimonial-32-150x150.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <p>
                                    Cum sociis natoque penatus et maed pognis dis parturient montes,
                                    scettur aieo ridiculus mus. Etiam portaem maleyo io suada magna mollis euismod.
                                </p>
                                <span class="nick-name">Joan Coal</span>,Managers
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/manager.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         


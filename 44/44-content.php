<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-44">
    <nav class="wrap t3-navhelper">
        <div class="container">
            <div class="row">

                <div class="col-md-10 col-sm-10 col-xs-10">

                    <ul class="breadcrumb ">
                        <li class="active">You are here: &nbsp;</li>
                        <li>
                            <span>Home</span>
                        </li>
                    </ul>

                </div>

                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div id="back-to-top" class="backtotop">
                        Top
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <footer id="t3-footer" class="wrap t3-footer">
        <div class="container">
            <div class="row">
                <!-- col-1 -->
                <div class="t3-copyright col-md-3 col-sm-12 col-xs-12">
                    <div class="footer-left">
                        <div class="logo">
                            <a href="/" title="JoomlArt Demo Site">JoomlArt Demo Site</a>
                        </div>
                        <div class="copyright">
                            <small>Copyright © 2016 JoomlArt Demo Site. All Rights Reserved. Powered by <a href="http://www.joomlart.com/joomla/templates/ja-fubix" title="JA Fubix" rel="nofollow">JA Fubix</a> - Designed by JoomlArt.com.</small>
                            <br>
                            <small><a href="http://www.joomla.org">Joomla!</a> is Free Software released under the <a href="http://www.gnu.org/licenses/gpl-2.0.html">GNU General Public License.</a></small>
                        </div>
                        <div class="poweredby">
                            <a class="t3-logo t3-logo-light" target="_blank" title="Powered By T3 Framework" href="http://t3-framework.org">Powered by<strong>T3 Framework</strong></a>
                        </div>
                    </div>
                </div>
                <!-- col-2 -->
                <div class="col-md-7 col-sm-10 col-xs-12">
                    <div class="t3-footnav row footer_menu ">
                        <!-- item-1 -->
                        <div class="col-md-3 col-sm-3 col-xs-12 borderL">		
                            <div class="t3-module module " id="Mod26">
                                <div>
                                    <h3 class="module-title ">
                                        <span>This Site</span>
                                    </h3>
                                    <div class="module-ct">
                                        <ul class="nav ">
                                            <li>	
                                                <a href="#">Premier League</a>
                                            </li>
                                            <li>	
                                                <a href="#">La Liga</a>
                                            </li>
                                            <li>	
                                                <a href="#">Serie A</a>
                                            </li>
                                            <li>	
                                                <a href="#">Bundes Liga</a>
                                            </li>
                                            <li>	
                                                <a href="#">Europa League</a>
                                            </li>
                                            <li>	
                                                <a href="#">Champion League</a>
                                            </li>
                                            <li>
                                                <a href="#">Top Players</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>	
                        </div>
                        <!-- item-2 -->
                        <div class="col-md-3 col-sm-3 col-xs-12 borderL">			
                            <div>
                                <h3 class="module-title ">
                                    <span>This Site</span>
                                </h3>
                                <div class="module-ct">
                                    <ul class="nav ">
                                        <li>	
                                            <a href="#">Premier League</a>
                                        </li>
                                        <li>	
                                            <a href="#">La Liga</a>
                                        </li>
                                        <li>	
                                            <a href="#">Serie A</a>
                                        </li>
                                        <li>	
                                            <a href="#">Bundes Liga</a>
                                        </li>
                                        <li>	
                                            <a href="#">Europa League</a>
                                        </li>
                                        <li>	
                                            <a href="#">Champion League</a>
                                        </li>
                                        <li>
                                            <a href="#">Top Players</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>		
                        </div>
                        <!-- item-3 -->
                        <div class="col-md-3 col-sm-3 col-xs-12 borderL">
                            <div>
                                <h3 class="module-title ">
                                    <span>This Site</span>
                                </h3>
                                <div class="module-ct">
                                    <ul class="nav ">
                                        <li>	
                                            <a href="#">Premier League</a>
                                        </li>
                                        <li>	
                                            <a href="#">La Liga</a>
                                        </li>
                                        <li>	
                                            <a href="#">Serie A</a>
                                        </li>
                                        <li>	
                                            <a href="#">Bundes Liga</a>
                                        </li>
                                        <li>	
                                            <a href="#">Europa League</a>
                                        </li>
                                        <li>	
                                            <a href="#">Champion League</a>
                                        </li>
                                        <li>
                                            <a href="#">Top Players</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- item-4 -->
                        <div  class="col-md-3 col-sm-3 col-xs-12 borderL">
                            <div>
                                <h3 class="module-title ">
                                    <span>This Site</span>
                                </h3>
                                <div class="module-ct">
                                    <ul class="nav ">
                                        <li>	
                                            <a href="#">Premier League</a>
                                        </li>
                                        <li>	
                                            <a href="#">La Liga</a>
                                        </li>
                                        <li>	
                                            <a href="#">Serie A</a>
                                        </li>
                                        <li>	
                                            <a href="#">Bundes Liga</a>
                                        </li>
                                        <li>	
                                            <a href="#">Europa League</a>
                                        </li>
                                        <li>	
                                            <a href="#">Champion League</a>
                                        </li>
                                        <li>
                                            <a href="#">Top Players</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-3 social -->
                
                <div class="footer-social col-md-2 col-sm-2 col-xs-12">
                    <div class="t3-module module " id="Mod153">
                        <div>
                            <h3 class="module-title ">
                                <span>Follow</span>
                            </h3>
                            <div class="module-ct">
                                <div>
                                    <div>
                                        <ul>
                                            <li class="facebook"><a title="Facebook" href="#"><span class="icon">&nbsp;</span>Facebook</a></li>
                                            <li class="twitter"><a title="Twitter" href="#"><span class="icon">&nbsp;</span>Twitter</a></li>
                                            <li class="flicker"><a title="Flicker" href="#"><span class="icon">&nbsp;</span>Flicker</a></li>
                                            <li class="feed"><a title="Feed" href="#"><span class="icon">&nbsp;</span>Feed</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>
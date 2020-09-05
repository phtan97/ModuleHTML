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
                <div class="row">
                    <div class="col-sm-3">
                        <div>
                            <div class="hh">
                                <span class="layered_subtitle">Categories</span>
                                <a href="#"><i class="glyphicon "></i></a>
                            </div>
                            <div class="bb">
                                <div class="well" style="max-height: 300px;overflow: auto;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            HandBags (1)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Totes (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Clutches (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Cross Body (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Satchels (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Shoulder (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Accessories (1)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Bags and Purces (14)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Belts (6)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Scarves (5)
                                        </label>
                                        
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Gloves (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Jewellery (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Sunglasses (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Tops (3)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Long Sleeved (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Short Sleeved (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Sleeveless (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Tanks (5)
                                        </label>
                                        <label>
                                            <input type="checkbox">
                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                            Tunics (5)
                                        </label>

                                    </div>
                                </div> 
                            </div>
                            <div class="hh">
                                <span class="layered_subtitle">Manufacturer</span>
                                <a href="#"><i class="glyphicon glyphicon-minus"></i></a>
                            </div>
                            <div class="bb">
                                <div class="well" style="max-height: 300px;overflow: auto;">
                                    <ul class="nav nav-tabs list-group checked-list-box">                              
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Anna Sui (3)</a>
                                            </div> 
                                        </li>                                   
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#"> Dona Carol (1)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Elie Tahari (1)</a>
                                            </div> 
                                        </li> 
                                        <li class="nomargin list-group-item"> 
                                            <div class="checker navfix" idata-toggle="tab" href="#">
                                                <input type="checkbox" class="checkbox"value="35">
                                                <a class="list" href="#">Nicole Miller (1)</a>
                                            </div> 
                                        </li> 
                                    </ul>
                                </div> 
                            </div>
                            <div class="hh">
                                <span class="layered_subtitle">Pricev</span>
                                <a href="#"><i class="glyphicon glyphicon-minus"></i></a>
                                <ul> <label for="price">Range:</label>
                                    <span>$0.00 - $288.00</span>
                                    <form method="post" action="/action_page_post.php">
                                    <div data-role="rangeslider">
                                        <input type="range" min="0" max="288" value="100" class="slider" id="myRange">
                                        <p>Value: $<span id="price"></span></p>
                                    </div>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var slider = document.getElementById("myRange");
                var output = document.getElementById("price");
                output.innerHTML = slider.value;

                slider.oninput = function() {
                 output.innerHTML = this.value;
                }
            </script>

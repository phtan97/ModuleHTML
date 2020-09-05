<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    <div class="type-54">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 pag">
                            <div class="col-md-4 col-sm-4">
                                <div class="img-content">
                                    <img src="images/1.jpg">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="content">
                                    <div class="content-header">
                                        <a href="#">Three Oaks Apartment 3</a>
                                    </div>
                                    <span>
                                        5 view district 4
                                    </span>
                                    <p>
                                         - if service is what you're looking for, come to Three Oaks Apartments and see what you've been missing. Close to city life, yet set in a quite community. Free individully kitchen. Balcony (in some), hot water and cooking system, Free state-of-art community hall and recreation facility. Ideally accessible to distric 1, airport, close shopping, dinning, premier bussiness districts and entertaiment. We welcome you daily to visit! Very secure with floor access card, a perfect space for family and children.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pag">
                            <div class="col-md-4 col-sm-4">
                                <div class="img-content">
                                    <img src="images/1.jpg">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="content">
                                    <div class="content-header">
                                        <a href="#">Three Oaks Apartment 3</a>
                                    </div>
                                    <span>
                                        5 view district 4
                                    </span>
                                    <p>
                                         - The Monthly Rent is inclusive of: - 10% VAT - Internet access (Wifi & LAN) Cable TV with international channels - Daily housekeeping (exept Sundays and Public holidays and excluding dishwashing) - Change of bed lien and bathroom towels twice a week - Use of our 24-hour in house health club with gym, sauna, steam room, jacuzzi/hot tub and swimming pool - Mothly electricity allowance of VND22,500 per square meter per month - General ultilities water consumption (excluding bottled drinking water) - In house maintance service - 1 motorbike parking lot per registered tenant over 18 years
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pag">
                            <div class="col-md-4 col-sm-4">
                                <div class="img-content">
                                    <img src="images/1.jpg">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="content">
                                    <div class="content-header">
                                        <a href="#">Three Oaks Apartment 3</a>
                                    </div>
                                    <span>
                                        5 view district 4
                                    </span>
                                    <p>
                                         - Sunrise Riverside offers Studio, one - two & three bedroom apartment homes with exceptional features such as washer, floor access card in every home - gourmet kitchens - AC and ample closet space. Aside from the modern feature within the apartment homes, Sunrise Riverside also offers a great amenity package including swimming pools - Gymnasium - Tenis Court - ATM and more! Conveniently situated in district 7, silent and secure neighbourhood and just 30 minutes away from district 1 is perfect for commuters.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="title">
                        <h3>Top 10 Projects</h3>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/1.jpg">
                                <div class="sites">
                                    Sai Gon Pearl
                                </div>
                                <div class="num">
                                    1
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/2.jpg">
                                <div class="sites">
                                    Tropic Garden
                                </div>
                                <div class="num">
                                    2
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/3.jpg">
                                <div class="sites">
                                    Sunrise City
                                </div>
                                <div class="num">
                                    3
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/4.jpg">
                                <div class="sites">
                                    RiverPark Residence
                                </div>
                                <div class="num">
                                    4
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/5.jpg">
                                <div class="sites">
                                    Starhill
                                </div>
                                <div class="num">
                                    5
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/6.jpg">
                                <div class="sites">
                                    RiverSide Residence
                                </div>
                                <div class="num">
                                    6
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/7.jpg">
                                <div class="sites">
                                    Petroland
                                </div>
                                <div class="num">
                                    7
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/8.jpg">
                                <div class="sites">
                                    Riviera Point
                                </div>
                                <div class="num">
                                    8
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/9.jpg">
                                <div class="sites">
                                    Umbrella
                                </div>
                                <div class="num">
                                    9
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/10.jpg">
                                <div class="sites">
                                    WonderLand
                                </div>
                                <div class="num">
                                    10
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/11.jpg">
                                <div class="sites">
                                    Thap Eiffel
                                </div>
                                <div class="num">
                                    11
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
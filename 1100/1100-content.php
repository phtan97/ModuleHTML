<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1100">
    <div class="blog">
            Blog
        </div>
    <div class="container">
        
        <div class="main">
            <div class="main-blog-post col-md-9 col-sm-12 co-xs-12">
                <div class="post">
                    <div class="col-md-2 col-sm-2 col-xs-12 post-time">
                        <div class="arrow"></div>
                        <br>
                        <div class="author">
                            By
                            <div> Owner</div>
                        </div>
                        <div class="date">
                            <a href="#">
                                <span class="day">09</span>
                                <span class="month">May</span>
                                <span class="year">16</span>
                            </a>
                        </div>
                        <div class="comment-count text-center">
                            <div>1</div>
                            comment
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12 post-content">
                        <h2 class="node-title">
                            <a href="#">Secure strong revenue growth</a>
                        </h2>
                        <div class="pic">
                            <img src="http://<?php echo $url_path ?>/images/post-4-880x350.jpg">
                        </div>
                        <div class="text-secondary">
                            <p>
                                Sed odio orci, fringilla nec dolor et, euismod auctor mauris. Curabitur semper dui diam, nec accumsan mauris consequat sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam nunc dui, scelerisque at purus at, mollis mattis tellus. Aliquam tellus quam, vehicula id cursus ut, euismod id massa. The global economic recovery, alongside strong development in emerging markets, is…
                            </p>
                        </div>
                        <div class="read-more-btn">
                            READ MORE
                            <i class="fa fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!--SIDEBAR-->
            <div class="sidebar col-md-3 col-sm-12 co-xs-8">

                <!--SECTION-->
                <section>
                    <div class="search-form">
                        <form method="post" action="#">
                            <div class="input-d">
                                <input type="text" name="tk" class="input-text" placeholder="Search...">
                            </div>
                            <button type="submit" class="s-btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </section>

                <!--SECTION-->
                <section>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <h2 class="block-title">Recent Posts</h2>
                    <ul>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                    </ul>
                    </div>
                    
                </section>
                <section>

                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <h2 class="block-title">Recent Comments</h2>
                    <ul>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                        <li>
                            <i class="fa fa-caret-right"></i>
                            <a href="#">Secure strong revenue growth</a>
                        </li>
                    </ul>
                    </div>
                </section>

            </div>
    </div>
</div>
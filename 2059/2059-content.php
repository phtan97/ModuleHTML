<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="modun-2059">
   <div class="container">
      <div class="header">
         <h2>
            OUR
            <span>BLOGS</span>
         </h2>
      </div>
      <div class="findhome-blog findhome-blog-grid">
         <ul class="row">
            <li class="bd-item col-sm-6 col-xs-12 col-md-4" >
               <figure>
                  <a href="#">
                     <img src="images/img1.jpg">
                     <span class="img-trans"></span>
                     <i class="fas fa-link"></i>
                  </a>
               </figure>
               <div class="findhome-blog-grid-text">
                  <div class="time">
                     01 Aug
                  </div>
                  <h5>
                     <a href="#">Large Playground Hotel Ro</a>
                  </h5>
                  <ul class="findhome-blog-option">
                     <li>
                        <a href="#"><i class="fa fa-user"></i>  Posted By</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-commenting"></i> 35 Comments</a>
                     </li>
                  </ul>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing el Vestibulum vitae dolor facilisis quam sollicitudin au or vel sed magna.
                  </p>
                  <div class="findhome-plane-btn">
                     <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </li>
         
      
            <li class="bd-item col-sm-6 col-xs-12 col-md-4" >
               <figure>
                  <a href="#">
                     <img src="images/img2.jpg">
                     <span class="img-trans"></span>
                     <i class="fas fa-link"></i>
                  </a>
               </figure>
               <div class="findhome-blog-grid-text">
                  <div class="time">
                     01 Aug
                  </div>
                  <h5>
                     <a href="#">Large Playground Hotel Ro</a>
                  </h5>
                  <ul class="findhome-blog-option">
                     <li>
                        <a href="#"><i class="fa fa-user"></i>  Posted By</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-commenting"></i> 35 Comments</a>
                     </li>
                  </ul>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing el Vestibulum vitae dolor facilisis quam sollicitudin au or vel sed magna.
                  </p>
                  <div class="findhome-plane-btn">
                     <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </li>
            <li class="bd-item col-sm-6 col-xs-12 col-md-4" >
               <figure>
                  <a href="#">
                     <img src="images/img3.jpg">
                     <span class="img-trans"></span>
                     <i class="fas fa-link"></i>
                  </a>
               </figure>
               <div class="findhome-blog-grid-text">
                  <div class="time">
                     01 Aug
                  </div>
                  <h5>
                     <a href="#">Large Playground Hotel Ro</a>
                  </h5>
                  <ul class="findhome-blog-option">
                     <li>
                        <a href="#"><i class="fa fa-user"></i>  Posted By</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-commenting"></i> 35 Comments</a>
                     </li>
                  </ul>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing el Vestibulum vitae dolor facilisis quam sollicitudin au or vel sed magna.
                  </p>
                  <div class="findhome-plane-btn">
                     <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </li>
            <li class="bd-item col-sm-6 col-xs-12 col-md-4" >
               <figure>
                  <a href="#">
                     <img src="images/img4.jpg">
                     <span class="img-trans"></span>
                     <i class="fas fa-link"></i>
                  </a>
               </figure>
               <div class="findhome-blog-grid-text">
                  <div class="time">
                     01 Aug
                  </div>
                  <h5>
                     <a href="#">Large Playground Hotel Ro</a>
                  </h5>
                  <ul class="findhome-blog-option">
                     <li>
                        <a href="#"><i class="fa fa-user"></i>  Posted By</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-commenting"></i> 35 Comments</a>
                     </li>
                  </ul>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing el Vestibulum vitae dolor facilisis quam sollicitudin au or vel sed magna.
                  </p>
                  <div class="findhome-plane-btn">
                     <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </li>
            <li class="bd-item col-sm-6 col-xs-12 col-md-4" >
               <figure>
                  <a href="#">
                     <img src="images/img5.jpg">
                     <span class="img-trans"></span>
                     <i class="fas fa-link"></i>
                  </a>
               </figure>
               <div class="findhome-blog-grid-text">
                  <div class="time">
                     01 Aug
                  </div>
                  <h5>
                     <a href="#">Large Playground Hotel Ro</a>
                  </h5>
                  <ul class="findhome-blog-option">
                     <li>
                        <a href="#"><i class="fa fa-user"></i>  Posted By</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-commenting"></i> 35 Comments</a>
                     </li>
                  </ul>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing el Vestibulum vitae dolor facilisis quam sollicitudin au or vel sed magna.
                  </p>
                  <div class="findhome-plane-btn">
                     <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </li>
            <li class="bd-item col-sm-6 col-xs-12 col-md-4" >
               <figure>
                  <a href="#">
                     <img src="images/img6.jpg">
                     <span class="img-trans"></span>
                     <i class="fas fa-link"></i>
                  </a>
               </figure>
               <div class="findhome-blog-grid-text">
                  <div class="time">
                     01 Aug
                  </div>
                  <h5>
                     <a href="#">Large Playground Hotel Ro</a>
                  </h5>
                  <ul class="findhome-blog-option">
                     <li>
                        <a href="#"><i class="fa fa-user"></i>  Posted By</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa fa-commenting"></i> 35 Comments</a>
                     </li>
                  </ul>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing el Vestibulum vitae dolor facilisis quam sollicitudin au or vel sed magna.
                  </p>
                  <div class="findhome-plane-btn">
                     <a href="#">Read More <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </li>
         </ul>
      </div>
   </div>
</div>
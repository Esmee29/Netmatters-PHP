<?php
// carousel
include 'php/view/components/homepage/carousel.php';

//Services area 
include 'php/view/components/homepage/services.php';
    
//partner-slideshow
include 'php/view/components/homepage/partner_slideshow.php';    

//  Welcome to Netmatters section
include 'php/view/components/homepage/welcome.php'; ?>
<div class="latest-articles container center">
            <div class="container">
                        <div class="latest-articles">
                        <div class="headings-bar">
                        <h2 class="h1 float-left">
                            <strong>Latest News</strong>
                        </h2>
                        <h3 class="view-all view-all-top hidden-sm">
                            <a href="#">View All <span class="icon-arrow-right"></span></a>
                            <span class="icon-arrow-right2"></span>
                        </h3> 
                    </div>
                        </div>
                        <div class="flex grid-news">                            <!-- News Grid -->
                                <?php include("php/view/components/homepage/news.php"); ?>
                        </div>
                        
                            <h3 class="view-all view-all-mobile ">
                                <a href="#">View All <span class="icon-arrow-right"></span></a>
                                <span class="icon-arrow-right2"></span>
                            </h3> 
                            </div>
                            
                        
                    </div>
            </div>
         </div>
         <?php
       
//Client slideshow section 
include 'php/view/components/homepage/client_slideshow.php';

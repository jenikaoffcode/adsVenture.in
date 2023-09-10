<?php
session_start();
include_once("NewsNav.php");
include_once("dbConnection.php");
?>
<style>
#data{
    width:50%;
    float:right;
}
    </style>
    <!-- banner section -->
   <!-- blog section --><br><br><br><br>
   <div class="w3l-grids-block-5 py-5">
        <section id="grids5-block" class="pt-md-4 pb-md-5 py-4 mb-5">
            <div class="container">
                <div class="title-main text-center mx-auto mb-4">
                    <h3 class="title-big">Our Latest Articles</h3>
                    <p class="sub-title mt-2">  </div>
                <div class="row mt-sm-5 pt-lg-2">
                    <div class="col-lg-4 col-sm-6">
                        <div class=" grids5-info">
                            <a href="#blog"><img src="assets/images/set.png" alt="" /></a>
                            <div class="blog-info">
                                <p>News is information about current events. This may be provided through many different media: word of mouth, pri
                                    nting, postal systems, broadcasting, electronic communication</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                        <div class=" grids5-info">
                            <a href="#blog"><img src="assets/images/get.png" alt="" /></a>
                            <div class="blog-info">
                                <p>Common topics for news reports include war, government, politics, education, health, the environment, economy, business, fashion, entertainment, and sport, as well as quirky or unusual events. Government proclamations, concerning royal ceremonies, laws, taxes, public health, and criminals,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6  mt-lg-0 mt-4">
                        <div class=" grids5-info">
                            <a href="#blog"><img src="assets/images/void.png" alt="" /></a>
                            <div class="blog-info">
                                <p>Technological and social developments, often driven by government communication and espionage networks, have increased the speed with which news can spread, as well as influenced its content. The genre of news as we know it today is closely associated with the newspaper.</p>
           </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- //blog section -->

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>
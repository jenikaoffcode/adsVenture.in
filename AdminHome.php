<?php
session_start();
include_once("AdminNav.php");
include_once("dbConnection.php");
?>
<style>
#data{
    width:50%;
    float:right;
}
    </style>
    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container pt-5 pb-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 banner-left pt-md-0 pt-5">
                    <h3 class="mb-sm-4 mb-3 title"><br>  <span class="type-js"><span
                    class="text-js">“The newspaper is a greater treasure to the people than uncounted millions of gold.”
 </span></span></h3>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                      
                    </div>
                </div>
                <div class="col-md-6 banner-right mt-md-0 mt-4">
                    <img class="img-fluid" src="assets/images/b1.png" alt=" ">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <!-- <h3 id="data">
<li>“If you don't read the newspaper, you're uninformed. If you read the newspaper, you're mis-informed.”
    <b>― Mark Twain</b>

</li>
<li>“If you were born with the ability to change someone’s perspective or emotions, never waste that gift. It is one of the most powerful gifts God can give—the ability to influence.”
― Shannon L. Alder</li>
</h3> -->

    <!-- footer -->       
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>
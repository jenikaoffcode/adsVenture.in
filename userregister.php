<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ads Venture</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<style>
    #userf {
        margin-top: 100px;
        margin-left: 100px;
        float: right;
        margin-right: 300px;
    }
    #newsf {
        margin-right: 100px;
        float: left;
        margin-left: 300px;
        margin-top: 100px;
    }
    .myblog {
        height: 400px;
        width: 100%;
    }
</style>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand" href="index.html">
                    <img class="img-fluid" src="assets/images/stats3.png" alt=" "> Ads Venture
                    </a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="siginup.html">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        </li>
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <br><br><br><br><br>
    <div class="col-lg-8 content-form-right p-0">
        <div class="form-w3ls p-md-5 p-4">
            <h2>User Sign Up</h2>
            <br><br><br>
            <form>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="w3lSender" placeholder="name" required="">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email" id="w3lSender" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="phone" id="w3lSender" placeholder="Phone number" required="" maxlength="10" minlength="10">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="address" id="w3lMessage" placeholder="Address"
                        required=""> </textarea>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="pass" id="w3lName" placeholder="Password" required="">
                </div>
                <div class="input-group1 text-right">
                    <button class="btn button-style" type="submit" name="usersubmit">SiginUp
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <?php
            include('dbConnection.php');
                        if (isset($_REQUEST['usersubmit'])) {
                            $nam= $_REQUEST['name'];
                            $em = $_REQUEST['email']; 
                            $num=$_REQUEST['phone'];
                            $add=$_REQUEST['address'];
                            $pa=$_REQUEST['pass'];
                            echo '$nam';
                            $qryReg="insert into  user_reg(name,email,phone,address,password)values('$nam','$em','$num','$add','$pa')";    
       $qryLog = "INSERT INTO login(reg_id,email,password,type,status)values((select max(uid)from user_reg),'$em','$pa','USER','yes')";
                         //   echo $qryy."\n";
                            if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {
                                echo "<script>alert('Customer Register Sucessfully');window.location='login.html'</script>";
                            } else {
                                echo "<script>alert('Sending has error! Try Again');</script>";
                            }
                        }
                        ?>
        </div>
    </div>

    <!-- footer -->
    <footer class="w3l-footer-22 position-relative mt-5 pt-5">
        <div class="footer-sub">
            <div class="container">
                <div class="text-txt">

                    <div class="row sub-columns">
                        <div class="col-lg-4 col-md-6 col-sm-8 sub-one-left">
                            <h6>About </h6>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                            <div class="columns-2">
                                <ul class="social">
                                    <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                                    </li>
                                    <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-4 mt-sm-0 mt-5 sub-two-right">
                            <h6>Quick links</h6>
                            <ul>
                                <li><a href="index.html"><span class="fa fa-angle-double-right mr-2"></span>Home</a>
                                </li>
                                <li><a href="about.html"><span class="fa fa-angle-double-right mr-2"></span>About</a>
                                </li>
                                <li><a href="courses.html"><span
                                            class="fa fa-angle-double-right mr-2"></span>Courses</a></li>
                                <li><a href="contact.html"><span
                                            class="fa fa-angle-double-right mr-2"></span>Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
                            <h6>Help & Support</h6>
                            <ul>
                                <li><a href="#live"><span class="fa fa-angle-double-right mr-2"></span>Live
                                        Chart</a></li>
                                <li><a href="#faq"><span class="fa fa-angle-double-right mr-2"></span>Faq</a>
                                </li>
                                <li><a href="#support"><span class="fa fa-angle-double-right mr-2"></span>Support</a>
                                </li>
                                <li><a href="#terms"><span class="fa fa-angle-double-right mr-2"></span>Terms
                                        of Services</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-sm-6 sub-one-left mt-lg-0 mt-sm-5 mt-4">
                            <h6>Contact </h6>
                            <div class="column2">
                                <div class="href1"><span class="fa fa-envelope-o" aria-hidden="true"></span><a
                                        href="mailto:info@example.com">info@example.com</a>
                                </div>
                                <div class="href2"><span class="fa fa-phone" aria-hidden="true"></span><a
                                        href="tel:+44-000-888-999">+44-000-888-999</a>
                                </div>
                                <div>
                                    <p class="contact-para"><span class="fa fa-map-marker"
                                            aria-hidden="true"></span>London, 235 Terry, 10001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <div class="copyright-footer text-center">
            <div class="container">
                <div class="columns">
                    <p>@2020 Online Study. All rights reserved. Design by <a href="https://w3layouts.com/"
                            target="_blank"> W3Layouts</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- //copyright -->
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->
    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- for testimonials carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: true,
                        loop: true
                    }
                }
            })
        })
    </script>
    <!-- //for testimonials carousel -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- counter for stats -->
    <script src="assets/js/counter.js"></script>
    <!-- //counter for stats -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->
</body>

</html>
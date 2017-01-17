<?php
if (isset($_GET["theme"])) {
    $theme = $_GET["theme"];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Flatrok</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>

    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css"/>

    <!--Default Theme-->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <!--Theme Selection-->
    <?php
        if (isset($theme)) {
            echo "<link rel=\"stylesheet\" href=\"css/theme-" . $theme . ".css\"/>";
        }
    ?>
    <!--<link rel="stylesheet" href="css/theme-dark.css"/>-->

    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->

    <!--Favicon-->
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <!--Javascript-->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.gmap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.smoothScroll.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/custom.js"></script>

</head>
<body>

<!--Theme Changer-->
<script type="text/javascript">
    $(document).ready(function() {
        $("#theme-changer").click(function() {
            if ($(this).hasClass('closed'))
            {
                $(this).animate({'right': 0});
                $(this).removeClass('closed');
                $(this).addClass('open');
            } else {
                $(this).animate({'right': "-185px"});
                $(this).removeClass('open');
                $(this).addClass('closed');
            }
        });
    });
</script>
<style type="text/css">
    #theme-changer {
        position: fixed;
        background: #E2E2E2;
        top: 200px;
        right: -185px;
        width: 185px;
        height: 165px;
        padding: 5px 15px;
        z-index: 1002;
    }
    #theme-gear {
        position: absolute;
        top: 0;
        left: -35px;
        width: 35px;
        height: 35px;
        background: #868686;
        font-size: 22px;
        color: #ffffff;
        padding: 1px 8px;
        cursor: pointer;
    }
    #theme-changer a {
        display: inline-block;
        margin-right: 10px;
    }
    #theme-changer a.default {
        margin-bottom: 10px;
        margin-right: 25px;
    }
    .theme-item-bg {
        width: 20px;
        height: 20px;
        background: #F6F6F6;
    }
    .theme-item-bg.default {
        width: 40px;
        height: 40px;
    }
    .theme-item-bg.darkbg {
        background: #282828;
    }
    .theme-item {
        margin-left: 5px;
        margin-top: -15px;
        width: 20px;
        height: 20px;
        background: #00aaff;
    }
    .theme-item.default {
        margin-left: 10px;
        margin-top: -30px;
        width: 40px;
        height: 40px;
    }
    .theme-item.default-light {
        background: #878787;
    }
    .theme-item.default-dark {
        background: #878787;
    }
    .theme-item.light-blue {
        background: #00aaff;
    }
    .theme-item.light-green {
        background: #4ae2b1;
    }
    .theme-item.green {
        background: #23a31d;
    }
    .theme-item.purple {
        background: #9018C5;
    }
    .theme-item.red {
        background: #E32B1D;
    }
</style>
<div id="theme-changer" class="closed">
    <div id="theme-gear">
        <i class="fa fa-gear"></i>
    </div>
    <p>Theme Switcher</p>
    <a href="." class="default"><div class="theme-item-bg default"></div><div class="theme-item default default-light"></div></a>
    <a href="?theme=dark" class="default"><div class="theme-item-bg default darkbg"></div><div class="theme-item default default-dark"></div></a>
    <!--Light-->
    <a href="?theme=light-blue"><div class="theme-item-bg"></div><div class="theme-item light-blue"></div></a>
    <a href="?theme=light-green"><div class="theme-item-bg"></div><div class="theme-item light-green"></div></a>
    <a href="?theme=light-purple"><div class="theme-item-bg"></div><div class="theme-item purple"></div></a>
    <a href="?theme=light-red"><div class="theme-item-bg"></div><div class="theme-item red"></div></a>
    <!--Dark-->
    <a href="?theme=dark-blue"><div class="theme-item-bg darkbg"></div><div class="theme-item"></div></a>
    <a href="?theme=dark-green"><div class="theme-item-bg darkbg"></div><div class="theme-item green"></div></a>
    <a href="?theme=dark-purple"><div class="theme-item-bg darkbg"></div><div class="theme-item purple"></div></a>
    <a href="?theme=dark-red"><div class="theme-item-bg darkbg"></div><div class="theme-item red"></div></a>
</div>
<!--End Theme Changer-->

<!--Wrapper-->
<div id="wrapper">
<!--Social Links-->
<div class="container social-links hidden-xs">
    <ul>
        <li><a href="#contact"><i class="fa fa-rss"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fa fa-github"></i></a></li>

    </ul>
</div>
<div class="clearfix"></div>
<!--Container-->
<div class="container page-body">
<!--Page Header-->
<div class="row page-head">
    <div class="col-sm-12 col-md-12">
        <div class="profile-pic">
            <img src="images/profile.png" width="181" height="181" alt="Profile picture."/>
        </div>
        <div class="tagline">Joe Smith<span>Going forward, one line at a time.</span></div>
        <div class="clearfix"></div>
        <div class="jobtag">
            <span>Developer</span>
        </div>
    </div>
    <!--Navigation-->
    <div class="nav-wrapper">
        <div class="nav-bar">
            <ul>
                <li class="nav-item profile-bg">
                    <a href="#profile">
                        <div class="oval"><i class="fa fa-home"></i><span>Profile</span></div>
                    </a>
                </li>
                <li class="nav-item resume-bg">
                    <a href="#resume">
                        <div class="oval"><i class="fa fa-file-text"></i><span>Resume</span></div>
                    </a>
                </li>
                <li class="nav-item portfolio-bg">
                    <a href="#portfolio">
                        <div class="oval"><i class="fa fa-video-camera"></i><span>Portfolio</span></div>
                    </a>
                </li>
                <li class="nav-item contact-bg">
                    <a href="#contact">
                        <div class="oval"><i class="fa fa-envelope"></i><span>Contact</span></div>
                    </a>
                </li>
            </ul>
        </div>
    </div><!--End Navigation -->
</div> <!--End Page Header -->


<!--Profile-->
<div id="profile" class="nav-target">
    <div class="row">
        <div class="col-sm-12 col-md-offset-1 col-md-10">
            <div class="info">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea <a href="#contact">commodo consequat</a>.
            </div>
        </div>
    </div>
    <div class="row">
        <!--Profile Information-->
        <div class="col-xs-12 col-sm-3 col-md-offset-1 col-md-3">
            <h2>Profile</h2>

            <h3>Information</h3>

            <div class="profile-information">
                <div class="item">Name: <span>Joe Smith</span></div>
                <div class="item">Age: <span>27</span></div>
                <div class="item">From: <span>USA</span></div>
                <div class="item">Lives In: <span>New York, NY</span></div>
                <div class="item">Likes:
                    <ul class="tag-area">
                        <li>Programming</li>
                        <li>Running</li>
                        <li>Sports</li>
                        <li>Design</li>
                        <li>Cars</li>
                    </ul>
                </div>
            </div>
        </div> <!--End Profile Information -->
        <div class="col-xs-12 col-sm-4 col-md-offset-1 col-md-3">
            <!--Profile Skills Section 1-->
            <div class="profile-skills">
                <h2>&nbsp;</h2>

                <h3>Skills</h3>

                <div class="skill-item">
                    <h5>C# / ASP.NET</h5>
                    <ul class="progress-bubbles color-bg-profile" data-fill-level="2"></ul>
                    <p>Tamquam apeirian argumentum vim id. Cu reque quaeque vis, id quo sumo vero.</p>
                </div>
                <div class="skill-item">
                    <h5>HTML / CSS</h5>
                    <ul class="progress-bubbles color-bg-profile" data-fill-level="7"></ul>
                    <p></p>
                </div>
                <div class="skill-item">
                    <h5>Java</h5>
                    <ul class="progress-bubbles color-bg-profile" data-fill-level="5"></ul>
                    <p></p>
                </div>
            </div> <!--End Profile Skills Section 1 -->
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <!--Profile Skills Section 2 -->
            <div class="profile-skills">
                <h2 class="hidden-xs">&nbsp;</h2>
                <h3 class="hidden-xs">&nbsp;</h3>

                <div class="skill-item">
                    <h5>MySQL</h5>
                    <ul class="progress-bubbles color-bg-profile" data-fill-level="9"></ul>
                    <p></p>
                </div>
                <div class="skill-item">
                    <h5>SQL Server</h5>
                    <ul class="progress-bubbles color-bg-profile" data-fill-level="5"></ul>
                    <p></p>
                </div>
            </div> <!--End Profile Skills Section 2 -->
        </div>
    </div>
</div>
<!--End Profile-->

<!--Resume-->
<div id="resume" class="nav-target">
    <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-offset-1 col-md-5">
            <h2>Resume</h2>

            <!--Education-->
            <div class="resume-edu">
                <h5>Education</h5>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Jan 2004 - Dec 2006</span>
                    </div>
                    <h5 class="timeline-title">Yell University</h5>

                    <p>Donec blandit aliquam enim ac adipiscing. Quisque tempus lacus quis volutpat mattis. Quisque vel
                        gravida massa, et pharetra lacus. Nulla facilisi.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Feb 2001 - Nov 2003</span>
                    </div>
                    <h5 class="timeline-title">Technical School</h5>

                    <p>Donec blandit aliquam enim ac adipiscing. Quisque tempus lacus quis volutpat mattis. Quisque vel
                        gravida massa, et pharetra lacus. Nulla facilisi. Duis nisi dui, dapibus non facilisis eu,
                        laoreet nec sapien. Fusce in tellus luctus, adipiscing est ac, molestie dui.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Oct 1996 - Dec 2000</span>
                    </div>
                    <h5 class="timeline-title">Great School</h5>

                    <p>Sed accumsan euismod velit et adipiscing. Vivamus pretium velit in metus accumsan, sed rhoncus
                        odio porttitor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        Curae; Pellentesque ac enim nisi. Proin laoreet tortor sit amet nibh tristique malesuada.
                        Quisque euismod dictum imperdiet. Cras et bibendum nibh.</p>
                </div>
            </div> <!--End Education -->
        </div>

        <!--Work-->
        <div class="col-md-5 col-md-offset-0 col-sm-offset-1 col-xs-12 col-sm-5">
            <div class="resume-work">
                <h5>Work</h5>

                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Feb 2001 - Nov 2003</span>
                    </div>
                    <h5 class="timeline-title">Great Company</h5>
                    <span class="job-title">iOS Developer</span>

                    <p>Donec blandit aliquam enim ac adipiscing. Quisque tempus lacus quis volutpat mattis. Quisque vel
                        gravida massa, et pharetra lacus. Nulla facilisi.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Apr 2010 - Jun 2012</span>
                    </div>
                    <h5 class="timeline-title">Web Company</h5>
                    <span class="job-title">Python Developer</span>

                    <p>Donec blandit aliquam enim ac adipiscing. Quisque tempus lacus quis volutpat mattis. Quisque vel
                        gravida massa, et pharetra lacus. Nulla facilisi. Duis nisi dui, dapibus non facilisis eu,
                        laoreet nec sapien. Fusce in tellus luctus, adipiscing est ac, molestie dui.</p>
                </div>
                <div class="timeline-item">
                    <div class="date">
                        <div class="dot"></div>
                        <span>Oct 2007 - Mar 2010</span>
                    </div>
                    <h5 class="timeline-title">Game Company</h5>
                    <span class="job-title">Java Developer</span>

                    <p>Sed accumsan euismod velit et adipiscing. Vivamus pretium velit in metus accumsan, sed rhoncus
                        odio porttitor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                        Curae; Pellentesque ac enim nisi. Proin laoreet tortor sit amet nibh tristique malesuada.
                        Quisque euismod dictum imperdiet. Cras et bibendum nibh.</p>
                </div>
            </div> <!--End Work -->
        </div>
    </div>

    <!--Experience-->
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="resume-experience">
                <h2>Experience</h2>

                <!--Experience Item-->
                <div class="experience-item">
                    <p>PHP</p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-experience" role="progressbar" data-value="70"
                             aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">70% Complete (success)</span>
                        </div>
                    </div>
                </div> <!-- End Experience Item -->

                <div class="experience-item">
                    <p>MySQL</p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-experience" role="progressbar" data-value="45"
                             aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">45% Complete (success)</span>
                        </div>
                    </div>
                </div>
                <div class="experience-item">
                    <p>PHP</p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-experience" role="progressbar" data-value="85"
                             aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">85% Complete (success)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Experience -->

    <!--Other Experience-->
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="other-experience">
                <h5>Other Experience</h5>
                <ul class="tag-area">
                    <li>Django</li>
                    <li>Visual Studio</li>
                    <li>Adobe Illustrator</li>
                    <li>Adobe Photoshop</li>
                    <li>Ruby</li>
                    <li>Rails</li>
                    <li>Linux</li>
                    <li>Windows</li>
                    <li>Mac OSX</li>
                    <li>MongoDB</li>
                </ul>
            </div>
        </div>
    </div> <!-- End Other Experience -->
</div> <!-- End Resume -->

<!--Portfolio-->
<div id="portfolio" class="nav-target">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h2>Portfolio</h2>

            <!--Portfolio Menu -->
            <ul class="portfolio-menu">
                <li class="active"><a href="#" data-filter="*">Everything</a></li>
                <li><a href="#" data-filter=".photos">Photos</a></li>
                <li><a href="#" data-filter=".videos">Videos</a></li>
                <li><a href="#" data-filter=".sites">Sites</a></li>
            </ul><!-- End Portfolio Menu -->
            <ul id="portfolio-container">
                <li class="portfolio-item photos">
                    <a href="images/img1.jpg" class="popbox">
                        <img src="images/img1_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
                <li class="portfolio-item sites">
                    <a href="images/img2.jpg" class="popbox">
                        <img src="images/img2_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
                <li class="portfolio-item sites videos">
                    <a href="images/img3.jpg" class="popbox">
                        <img src="images/img3_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
                <li class="portfolio-item sites">
                    <a href="images/img4.jpg" class="popbox">
                        <img src="images/img4_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
                <li class="portfolio-item sites videos">
                    <a href="images/img5.jpg" class="popbox">
                        <img src="images/img5_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
                <li class="portfolio-item sites photos">
                    <a href="images/img6.jpg" class="popbox">
                        <img src="images/img6_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
                <li class="portfolio-item photos">
                    <a href="images/img7.jpg" class="popbox">
                        <img src="images/img7_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
                <li class="portfolio-item photos">
                    <a href="images/img8.jpg" class="popbox">
                        <img src="images/img8_preview.jpg" alt="Portfolio Image"/>
                    </a>
                </li>
            </ul> 
        </div>
    </div>
</div> <!-- End Portfolio -->

<!--Contact-->
<div id="contact" class="nav-target">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h2>Contact</h2>

            <!--Google Map plugin-->
            <div id="gMap"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-5 col-md-offset-1 col-md-4 contact-info">
            <h3>Contact Information</h3>

            <div class="contact-address">
                <i class="fa fa-user"></i>

                <!-- Contact Map Address -->
                <p>
                    <span>Joe Smith</span>
                    123 Main St. <br/>
                    New York, NY 10013
                </p>
                <!-- End Contact Map Address -->
            </div>
            <div class="contact-phone">
                <i class="fa fa-phone"></i>

                <p>
                    +1 555-555-5555
                </p>
            </div>
            <div class="contact-email">
                <i class="fa fa-envelope"></i>

                <p>
                    joesmith@company.com <br/>
                    http://www.joesmith.com
                </p>
            </div>
        </div>

        <!--Contact Form-->
        <div class="col-sm-7 col-md-6 contact-form">
            <h3>Send feedback</h3>

            <form id="contact-form" action="." class="" method="POST">
                <div class="form-group">
                    <label class="sr-only" for="contact-name">Your Name</label>
                    <input id="contact-name" class="form-control" placeholder="Name" name="contact-name" type="text"/>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="contact-email">Email address</label>
                    <input id="contact-email" class="form-control" placeholder="Email" name="contact-email"
                           type="text"/>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="contact-website">Email address</label>
                    <input id="contact-website" class="form-control" placeholder="Website" name="contact-website"
                           type="text"/>
                </div>
                <div class="form-group form-textarea">
                    <textarea class="form-control" rows="4" name="contact-message"></textarea>
                </div>
                <div class="clearfix"></div>
                <div class="pull-right">
                    <button class="btn contact-btn" type="submit">Send Message</button>
                </div>

            </form>
        </div> <!--End Contact Form -->
    </div>
</div> <!-- End Contact -->
</div><!--End Container-->

<!--Footer Container-->
<div class="container footer">
    <p class="col-xs-12">&copy;2013 All Rights Reserved. Profile Picture by David Spinks. Portfolio Pictures by <a href="http://photodune.net/user/ollyi">ollyi</a> </p>
</div> <!--End Footer Container -->
</div> <!--End Wrapper -->

</body>
</html>

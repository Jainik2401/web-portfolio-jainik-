<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from zonar.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jun 2021 10:46:15 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>JAINIK - Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!-- loader   -->
        <div class="loader">
            <div class="loading-text-container "><span class="loading-text">Load<strong>ing</strong></span> <span class="loader_count">0</span></div>
            <div class="loader-anim"></div>
            <div class="loader-anim2 color-bg"></div>
        </div>
        <!-- loader  end-->
        <!-- main start  -->
        <div id="main">
            <!-- header-->
            <header class="main-header">
                <!-- logo  -->
                <a href="index.html" class="ajax logo-holder"><img src="images/1.png" width="583" height="300"alt=""></a>
                <!-- logo end -->
                <!-- nav-button-wrap-->
                <div class="nav-button but-hol">
                    <span  class="ncs"></span>
                    <span class="nos"></span>
                    <span class="nbs"></span>
                    <div class="menu-button-text">Menu</div>
                </div>
                <!-- nav-button-wrap end-->
                <!-- header-contacts-->
                <div class="header-contacts">
                    <ul>
                        <li><span> Call </span> <a href="tel:+4(897)56412322">+91 7600884473</a></li>
                        <li><span> Mail </span> <a href="mailto:theside@domain.com">j.kaneriya2401@gmail.com</a></li>
                    </ul>
                    <a href="contacts.php" class="ajax contacts-btn">Get in touch</a>
                </div>
                <!-- header-contacts end-->
            </header>
            <!-- header end-->
            <!-- left-header-->
            <aside class="left-header">
                <span class="lh_dec color-bg"></span>
                <div class="left-header_social">
                    <ul >
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
            </aside>
            <!-- left-header end-->
            <!-- share button-->
            <div class="share-btn showshare color-bg"><span>Share <i class="fal fa-plus"></i></span></div>
            <!-- share button end-->
            <!-- right header-->
            <div class="hc_dec_color">
                <div class="page-subtitle"><span>JAINIK</span></div>
            </div>
            <!-- right header end-->
            <!-- wrapper  -->
            <div id="wrapper">
                <!-- navigation menu-->
                <div class="nav-holder">
                    <div class="nav-holder-wrap but-hol">
                        <div class="nav-container fl-wrap">
                            <!-- nav -->
                            <nav class="nav-inner" id="menu">
                                <center>
                                <ul>
                                    <li>
                                        <a href="index.php" >Home</a>    
                                    </li>
                                    <li>
                                        <a href="about_us.php" >About</a>
                                    </li>
                                    <li>
                                        <a href="portfolio.php">Portfolio</a>  
                                    </li>
                                    <li>
                                        <a href="contacts_us.php" >Contacts</a>
                                    </li> 
                                </ul>
                                </center>
                            </nav>
                            <!-- nav end-->
                        </div>
                        <!-- <div class="nav-footer"><span>&#169; JAINIK 2001  /  All rights reserved. </span></div> -->
                        <!-- <div class="nav-holder-wrap_line"></div> -->
                        <div class="nav-holder-wrap_dec"></div>
                    </div>
                </div>
                <div class="nav-overlay"></div>
                <!-- navigation menu end  -->
                <!-- content-->
                <div class="content full-height no-mob-hidden2" data-pagetitle="Contacts">
               <div class="content-inner">
                  <div class="content-front">
                     <div class="cf-inner">
                        <div class="contact-details-title fl-wrap">
                           <h2>Contact Detais</h2>
                        </div>
                        <div class="contact-details fl-wrap">
                           <ul>
                              <li><span> Mail :</span><a href="#" target="_blank">j.kaneriya2401@gmail.com</a></li>
                              <li><span> Adress :</span><a href="#" target="_blank">Surat,Gujarat,India</a></li>
                              <li><span> Phone :</span><a href="#">+91 7600884473</a></li>
                           </ul>
                        </div>
                        <a href="#" class="btn fl-btn color-bg show_contact-form"><span>Say Hello</span></a> 
                        <div class="aside-show_cf show_contact-form"><i class="fal fa-envelope"></i></div>
                     </div>
                  </div>
                  <div class="content-back">
                     <div class="hidden-contact_form-wrap_inner">
                        <div class="close-contact_form cnt-anim"><i class="fal fa-times"></i></div>
                        <div class="contact-details-title fl-wrap">
                           <h2>Get in Touch</h2>
                        </div>
                        <div id="contact-form" class="fl-wrap">
                           <div id="message"></div>
                           <form  class="custom-form" method="post" action="contacts_us.php" name="contactform" id="contactform">
                              <fieldset>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                    </div>
                                    <div class="col-sm-6">
                                       <input type="text"  name="email" id="email" placeholder="Email Address *" value=""/>
                                    </div>
                                 </div>
                                 <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:" class="cnt-anim"></textarea>
                                 <button class="btn fl-btn color-bg" id="submit"><span>Send Message</span> </button>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="map-container">
                  <div id="map-single" class="map" data-latlog="[21.19174 , 72.86320]" data-popuptext="My Location."></div>
               </div>
               <div class="main_social">
                  <span class="main-social-title">Find on:</span>
                  <ul>
                     
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                  </ul>
               </div>
            </div>
                <!-- content end -->
                <!-- share-wrapper-->
                <div class="share-wrapper">
                    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
                    <div class="share-container fl-wrap  isShare"></div>
                </div>
                <!-- share-wrapper  end -->
            </div>
            <!-- wrapper end -->
            <!-- cursor-->
            <div class="element">
                <div class="element-item"></div>
            </div>
            <!-- cursor end-->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script   src="js/jquery.min.js"></script>
        <script   src="js/plugins.js"></script>
        <script   src="js/scripts.js"></script>
    </body>

<!-- Mirrored from zonar.kwst.net/site/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jun 2021 10:46:23 GMT -->
</html>
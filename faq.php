<?php include_once("includes/config.php"); ?>
<?php include_once("includes/header.php");?>
<section class="int-hero-image hero-img-two">
        <div class="container">
            <h3>Patient Care & Resources</h3>
        </div>
    </section>
    <!-- Start Main Page Content-->
    <div id="root" class="pageWrapper int-page-wrapper">
        <section class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 left-nav-section">
                    <div class="left-nav">
                        <ul>
                            <li><a href="#">First Visit</a></li>
                            <li><a href="#">Payment Plans</a></li>
                            <li><a href="#">Insurance Options</a></li>
                            <li><a href="#">General Patient Care</a></li>
                            <li><a href="#">Orthodontic Emergencies</a></li>
                            <li><a href="#">For Kids</a></li>
                            <li><a href="#">For Teens</a></li>
                            <li><a href="#">For Adults</a></li>
                            <li><a href="#">For Parents</a></li>
                            <li><a href="#">Braces FAQs</a></li>
                            <li><a href="#">Invisalign FAQs</a></li>
                            <li><a href="#">Patient Rewards</a></li>
                            <li><a href="#">Invisalign FAQ</a></li>
                        </ul>
                    </div>
                    <?php include_once("includes/sidebar-left-address.php");?>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 main-page-content">
                    <article id="faq-content">
                        <!-- intro goes here -->
                    <div class="row">
                        <div class="col-xs-12">
                           <h1 class="page-title">Learning About Braces </h1>
                           <p>The questions below are designed to help you learn about what you can expect when having braces. If you do not find an answer to your question here, please feel free to <a href="#">contact us</a> with your inquiry.</p>
                       </div>
                    </div>    
                       <!-- intro ends here -->
                       <script src="<?php echo SITE_URL?>_resources/js/vendor/jquery.accordion.js"></script>
                       <script src="<?php echo SITE_URL?>_resources/js/vendor/jquery.easing.1.3.js"></script>
                       <script type="text/javascript">
                          $(function() {
                        $('#st-accordion').accordion({
                        open            :0,
                        oneOpenedItem   : true
                         
                           });
                        });
                        </script>
                       <!-- faq section-->
                       <div id="st-accordion" class="st-accordion">
                        <ul>
                            <li>
                            <a href="#">Do I need to see my General Dentist while in braces?<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p>Yes, regular checkups and cleaning appointments are very important.  We will instruct you as to how often this will be necessary.  We will be happy to coordinate  your appointments with your dental office in order to have arch wires removed.  This helps your hygienist to  be able to do a thorough cleaning.  Normally, you will need to have  your teeth cleaned every 
                                6 months.</p>
                            </div>
                            </li>
                            <li>
                            <a href="#">Are retainers necessary and how long will I have to wear them?<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                            </li>
                            <li>
                            <a href="#">Can I have all my appointments after school?<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                            </li>
                            <li>
                            <a href="#">At what age should I schedule an appointment for an orthodontic screening?<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                                <p>She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                            </div>
                            </li>
                        </ul>
                       </div>
                       <!-- faq section -->
                    </article>
                </div>
            </div>
        </section>
    </div><!-- End Main Page Content-->
       
        <!-- Push for Sticky Footer-->
        <div id="root_footer"></div>
    </div>
    <?php include_once("includes/footer.php");?>
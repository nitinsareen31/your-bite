<?php include_once("includes/config.php"); ?>
<?php include_once("includes/header.php");?>
<section class="int-hero-image hero-img-two">
        <div class="container">
            <h3>FREE EVALUATION</h3>
        </div>
    </section>
    <!-- Start Main Page Content-->
     <!-- Start Main Page Content-->
    <div id="root" class="pageWrapper int-page-wrapper">
        <section class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 left-nav-section">
                    <div class="left-nav">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Locations</a></li>
                            <li><a href="#">Request an Appointment</a></li>
                            <li><a href="#">Refer a Friend</a></li>
                            <li><a href="#">Employment Opportunities</a></li>
                        </ul>
                    </div>
                    <?php include_once("includes/sidebar-left-address.php");?>
                    <div class="download-pdf">
                        <!-- title -->
                        <div class="head-title">
                            Download Patient Forms
                        </div>
                        <!-- title-->
                        <ul>
                            <li><a href="" class="button"><span>New Patient Form <br>(Under 18)</span></a></li>
                            <li><a href="" class="button"><span>New Patient Form <br>(Over 18)</span></a></li>
                            <li><a href="" class="button"><span>Dential Insurance Form <br>(Over 18)</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 main-page-content">
                <article id="request-form">
                        <!-- intro goes here -->
                    <div class="row">
                        <div class="col-xs-12">
                           <h1 class="page-title">Request an Appointment </h1>
                           <p>To request your <b>FREE</b> evaluation, please fill out the form below.  Someone from our office will contact you within one business day to schedule.  If, for any reason, this fails to occur, please be kind enough to call us directly and we will definitely handle your request.  Thank you! </p>
                       </div>
                    </div>
                    <!-- request appointment form -->
                    <div class="cen-align">
                        <h2>Send Your Request for a Complimentary Exam</h2>
                        <form>
                            <!-- first row-->
                            <div class="row marg-top">
                                <div class="col-sm-6">
                                    <label>*First Name</label>
                                    <input name="" class="input" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label>*Last Name</label>
                                    <input name="" class="input" type="text">
                                </div>
                            </div>
                            <!--second row -->
                            <div class="row marg-top">
                                <div class="col-sm-6">
                                    <label>*Email Address</label>
                                    <input name="" class="input" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label>*Phone Number</label>
                                    <input name="" class="input" type="text">
                                </div>
                            </div>
                            <!--second row -->
                            <div class="row marg-top">
                                <!-- custom checkboxes-->
                                <div class="col-sm-6">
                                  <label>*Preferred Office</label>
                                  <div class="">
                                  <input type="radio" name="option" id="option1" />
                                  <label class="label1" for="option1">North Tampa (Fletcher)</label>
                                  </div>
                                  <div class="">
                                  <input type="radio" name="option" id="option2" />
                                  <label class="label1" for="option2">South Tampa (Neptune)</label>
                                  </div>
                                </div>
                                <!-- time -->
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>*Ideal Date</label>
                                            <div><input name="" class="input" style="float:left; width:70%; margin-right:10px;" type="text"> 
                                            <img src="images/site-structure/date-picker.png" style="float:left;" /></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>*Ideal Time</label>
                                            <div class="styled">
                                            <select>
                                                <option>Explorer</option>
                                                <option>Firefox</option>
                                                <option>Webkit</option>
                                            </select></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- services-->
                            <div class="row marg-top">
                                <div class="col-sm-6">
                                    <label>*Services Interested In</label>
                                    <ul class="check-box">
                                        <li>
                                            <input type="checkbox" id="male" />
                                            <label class="label1" for="male" style="color:#313131;">Braces</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="male" />
                                            <label class="label1" for="male" style="color:#313131;">Invisalign</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="male" />
                                            <label class="label1" for="male" style="color:#313131;">Other</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <label>*Treatment For</label>
                                    <ul class="check-box">
                                        <li>
                                            <input type="checkbox" id="male" />
                                            <label class="label1" for="male" style="color:#313131;">Adult</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="male" />
                                            <label class="label1" for="male" style="color:#313131;">Child</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--services-->
                            <!-- here about us -->
                            <div class="row marg-top">
                                <div class="col-sm-6">
                                    <label>How Did You Hear About Us?</label>
                                    <div class="styled">
                                            <select>
                                                <option>Explorer</option>
                                                <option>Firefox</option>
                                                <option>Webkit</option>
                                            </select></div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Promo Code</label>
                                    <input name="" class="input" type="text">
                                </div>
                            </div>
                            <!-- here about us -->
                            <!-- Comments -->
                            <div class="row marg-top">
                                <div class="col-xs-12">
                                    <label>Message / Comments</label>
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                            <!-- submit-->
                            <div class="row marg-top">
                                <div class="col-xs-12">
                                    <input name="" class="submit" value="Submit" type="button">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- request appointment form ends -->
                </article>
                </div>
            </div>
        </section>
        
        
    </div><!-- End Main Page Content-->
       
        <!-- Push for Sticky Footer-->
        <div id="root_footer"></div>
    </div>

    <?php include_once("includes/footer.php");?>
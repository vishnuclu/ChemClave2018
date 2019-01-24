CREATE TABLE `fb_users` (
 `id` int(20) NOT NULL AUTO_INCREMENT,
 `oauth_uid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
 `access_token` varchar(128) COLLATE utf8_unicode_ci,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
 `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `college` varchar(255) COLLATE utf8_unicode_ci,
 `phnum` varchar(16) COLLATE utf8_unicode_ci,
 `pf_filled` tinyint(1) DEFAULT 0,
 `acm_status` varchar(16) COLLATE utf8_unicode_ci,
 `evreg_status` varchar(16) COLLATE utf8_unicode_ci,
 `acm_refnum` varchar(20) COLLATE utf8_unicode_ci,
 `ev_refnum` varchar(20) COLLATE utf8_unicode_ci,
 `ev_reg` varchar(255) COLLATE utf8_unicode_ci,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `workshops` (
 `ws_id` int(4) NOT NULL AUTO_INCREMENT,
 `ws_name` varchar(100) COLLATE utf8_unicode_ci,
 `ws_content` varchar(5000) COLLATE utf8_unicode_ci,
 `ws_venue` varchar(255) COLLATE utf8_unicode_ci,
 `ws_time` varchar(255) COLLATE utf8_unicode_ci,
 `ws_coords` varchar(255) COLLATE utf8_unicode_ci,
 PRIMARY KEY (`ws_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `events` (
 `ev_id` int(4) NOT NULL AUTO_INCREMENT,
 `ev_name` varchar(100) COLLATE utf8_unicode_ci,
 `ev_content` varchar(5000) COLLATE utf8_unicode_ci,
 `ev_venue` varchar(255) COLLATE utf8_unicode_ci,
 `ev_time` varchar(255) COLLATE utf8_unicode_ci,
 `ev_prize` varchar(255) COLLATE utf8_unicode_ci,
 `ev_coords` varchar(255) COLLATE utf8_unicode_ci,
 PRIMARY KEY (`ev_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `coords` (
 `id` int(7) NOT NULL AUTO_INCREMENT,
 `access_token` varchar(128) COLLATE utf8_unicode_ci,
 `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
 `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `evlist` varchar(255) COLLATE utf8_unicode_ci,
 `wslist` varchar(255) COLLATE utf8_unicode_ci,
 `acm` varchar(255) COLLATE utf8_unicode_ci,	//contains list of event id's
 `is_approved` tinyint(1) DEFAULT 0,
 `logged_in` tinyint(4) DEFAULT 0, 
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;









<section id="wacws" style="height:auto;padding-bottom: 5%;margin-bottom: 2%;">
      <h1 style="text-align: center;color:white;font-family: 'Merienda', cursive;">WAC Workshops</h1>
      <section id="wcrow1"></section>
      <div class="row visible-lg visible-md lapi">
        <div class="col-lg-3 col-md-3 opacitye">
          <nav>
              <a href="#wcrow1">
                <div style="background-color: #1d2a3a;width: 100%;height: auto;border-radius: 50%;"></div>
              </a>
          </nav>
        </div>
        <div class="col-lg-3 col-md-3 opacitye">
          <nav>
            <a href="#wcrow1">
              <img src="images/Rprogram.png" class="wc2" width="50%" style="display: block;">
            </a>
          </nav>
        </div>
        <div class="col-lg-3 col-md-3 opacitye">
          <nav>
            <a href="#wcrow1">
              <img src="images/matlab.png" class="wc3" width="50%" style="display: block;">
            </a>
          </nav>
        </div>
        <div class="col-lg-3 col-md-3 opacitye">
          <nav>
            <a href="#wcrow1">
              <img src="images/Latex.png" class="wc4" width="50%" style="display: block;">
            </a>
          </nav>
        </div>
      </div>
      <div class="wcdata visible-md visible-lg wcrow1data lapi">
        <div class="wc1data">
            <span style="font-size: 36px;">Ethical Hacking</span><br><span class="wc1content wccontent"><img src="images/Hacking.jpg" alt="Hacking.jpg" width="50%" height="auto">
            </span><br><br><b>Venue : </b><span class="wc1venue wcvenue">Will be Updated soon</span><br><b>Time : </b><span class="wc1time wctime">Will be updated soon</span><br>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wac1')">FAQs</button>
        </div>
        <div class="wc2data ">
          <span style="font-size: 36px;">Robotics &amp; IOT</span><br><span class="wc2content wccontent">R is a powerful language for statistical computing. A prolific user community backs R with with an extensive library of packages. If you can think of it, somebody has already written a library for it. R also has a superb IDE, R Studio, facilitating reproducible research.
          This workshop is for beginners to R programming. This is true whether a student is a veteran programmer just getting started with R, or someone with little programming experience.
          </span><br><br><b>Venue : </b><span class="wc2venue wcvenue">Will be Updated soon</span><br><b>Time : </b><span class="wc2time wctime">Will be updated soon</span><br>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wc2')">FAQs</button>
        </div>
        <div class="wc3data ">
          <span style="font-size: 36px;">Automobile and IC Engine</span><br><span class="wc3content wccontent">Whether you’re analyzing data, developing algorithms, or creating models, MATLAB is designed for the way you think and the work you do. It can be used for a range of applications including signal processing and communications, image and video processing, control systems, test and measurement, computational finance, and computational biology. This workshop aims to help participants understand the fundamentals of programming concepts and the skills and techniques needed for basic problem solving using Matlab with hands on sessions. To provide an opportunity to get hands on experience on fundamentals of MATLAB.
          </span><br><br><b>Venue : </b><span class="wc3venue wcvenue">Will be Updated soon</span><br><b>Time : </b><span class="wc3time wctime">Will be updated soon</span><br>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wc3')">FAQs</button>
        </div>
        <div class="wc4data ">
          <span style="font-size: 36px;">Android App Development</span><br><span class="wc4content wccontent">LaTeX is an Open source typesetting tool, which is used for the communication and publication of scientific documents in many fields. It is widely used in academia and can also be used as a standalone document preparation system. LaTeX also has a prominent role in the preparation and publication of books and articles that contain complex multilingual content or mathematical formulae or both.</span><br><br><b>Venue : </b><span class="wc4venue wcvenue">Will be Updated soon</span><br><b>Time : </b><span class="wc4time wctime">Will be updated soon</span><br>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wc4')">FAQs</button>
        </div>
      </div>
      <!--mobile row1 -->
      <div class="row visible-xs mobile">
        <div class="col-xs-6 col-sm-6">
          <nav>
            <a href="#wsrow1">
              <img src="images/aspenplus.png" class="ws1" width="50%" style="display: block;margin: 3% 25% 3% 25%;">
            </a>
          </nav>
        </div>
        <div class="col-xs-6 col-sm-6">
          <nav>
            <a href="#wsrow1">
              <img src="images/Rprogram.png" class="ws2" width="50%" style="display: block;margin: 3% 25% 3% 25%;">
            </a>
          </nav>
        </div>
      </div>
      <div class="wacdata visible-xs wacrow1data mobile">
        <div class="wac1data">
            <span class="mob-header">Ethical Hacking</span><br><span class="wac1content waccontent"><p>Aspen Plus is the market-leading chemical process optimization software used by the bulk, fine, specialty, &amp; biochemical industries.This workshop, however, will introduce ASPEN as a handy tool for simulating reaction engineering scenarios, such as designing and sizing reactors, predicting reaction conversions, and understanding reaction equilibrium behaviour.<br>This workshop will provide participants the opportunity of getting a working knowledge of ASPEN</p>
            </span><br><br><p><b>Venue : </b><span class="wac1venue wacvenue">Will be Updated soon</span><br><b>Time : </b><span class="wac1time wactime">Will be updated soon</span></p><br>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wac1')">FAQs</button>
        </div>
        <div class="wac2data ">
          <span class="mob-header">Robotics &ap; IoT</span><br><span class="wac2content waccontent"><p>R is a powerful language for statistical computing. A prolific user community backs R with with an extensive library of packages. If you can think of it, somebody has already written a library for it. R also has a superb IDE, R Studio, facilitating reproducible research.This workshop is for beginners to R programming. This is true whether a student is a veteran programmer just getting started with R, or someone with little programming experience.</p>
          </span><br><br><p><b>Venue : </b><span class="wac2venue wacvenue">Will be Updated soon</span><br><b>Time : </b><span class="wac2time wactime">Will be updated soon</span></p><br>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wac2')">FAQs</button>
        </div>
      </div>
      <!-- lapi row2-->
      <section id="wacrow2"></section>
      
      <!-- mobile row2-->
      <div class="row visible-xs mobile">
        <div class="col-xs-6 col-sm-6">
          <nav>
            <a href="#wacrow2">
              <img src="images/matlab.png" class="wac3" width="50%" style="display: block;margin: 3% 25% 3% 25%;">
            </a>
          </nav>
        </div>
        <div class="col-xs-6 col-sm-6">
          <nav>
            <a href="#wacrow2">
              <img src="images/Latex.png" class="wac4" width="50%" style="display: block;margin: 3% 25% 3% 25%;">
            </a>
          </nav>
        </div>
      </div>
      <div class="wacdata visible-xs wacrow2data mobile">
        <div class="wac3data ">
          <span class="mob-header">Automobile &amp; IC Engine</span><br><span class="wac3content waccontent"><p>Whether you’re analyzing data, developing algorithms, or creating models, MATLAB is designed for the way you think and the work you do. It can be used for a range of applications including signal processing and communications, image and video processing, control systems, computational finance, and computational biology. This workshop aims to help participants understand the fundamentals of programming concepts and the skills needed for basic problem solving using Matlab with hands on sessions.</p>
          </span><br><br><p><b>Venue : </b><span class="wac3venue wacvenue">Will be Updated soon</span><br><b>Time : </b><span class="wac3time wactime">Will be updated soon</span></p><br>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wac3')">FAQs</button>
        </div>
        <div class="wac4data ">
          <span class="mob-header">Android App Development</span><br><span class="wac4content waccontent"><p>LaTeX is an Open source typesetting tool, which is used for the communication and publication of scientific documents in many fields. It is widely used in academia and can also be used as a standalone document preparation system. LaTeX also has a prominent role in the preparation and publication of books and articles that contain complex multilingual content or mathematical formulae or both.</p></span><br><br><p><b>Venue : </b><span class="wac4venue wacvenue">Will be Updated soon</span><br><b>Time : </b><span class="wac4time wactime">Will be updated soon</span></p><br>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="faqs('wac4')">FAQs</button>
        </div>
      </div>
    </section>

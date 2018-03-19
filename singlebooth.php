<?php
include("../classes/Session.php");
include("../classes/Employee.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("../common/head.php"); ?>
      <style>
         /* Style the tab */
         div.tab {
         overflow: hidden;
         border: 1px solid #ccc;
         background-color: #0e273c;
         }
         /* Style the buttons inside the tab */
         div.tab button {
         background-color: inherit;
         float: left;
         border: none;
         outline: none;
         cursor: pointer;
         padding: 14px 16px;
         transition: 0.3s;
         font-size: 17px;
         color:#fff;
         border-right: 0.5px solid #fff;
         }
         /* Create an active/current tablink class */
         div.tab button.active {
         background-color: #29aafe;
         }
         /* Style the tab content */
         .tabcontent {
         display: none;
         padding: 0px 12px 0px 40px;
         border: 1px solid #fff;
         border-top: none;
         background:#fff;
         overflow-y: scroll;
         height:337px;
         width:99%;
         }
         .pjob {
         background-color: #29aafe !important;
         color: #FFF !important;
         font-weight: 600;
         padding: 8px 45px 10px 52px;
         }
         .PrevFloorBtn1 {
         background: #505D71 url(//vepimg.b8cdn.com/uploads/vjf/common/arw-left.png) no-repeat center 5px;
         background-size: 18px 18px;
         height: 10%;
         color: #fff;
         font-size: 11px;
         padding: 30px 18px 8px;
         border-radius: 0;
         width: 6%;
         margin: 0;
         line-height: 12px;
         cursor:pointer;
         }
         .NextFloorBtn1 {
         background: #505D71 url(//vepimg.b8cdn.com/uploads/vjf/common/arw-right.png) no-repeat center 7px;
         background-size: 18px 18px;
         height: 10%;
         color: #fff;
         font-size: 11px;
         padding: 30px 18px 3px;
         border-radius: 0;
         width: 6%;
         margin-top: -58px;
         line-height: 12px;
         float:right;
         cursor:pointer;
         }
         .boxed{
         width: 87%;
         padding: 0px;
         margin-top: -55px;
         padding-bottom:7px;
         }
         ul.social-network {
         list-style: none;
         display: inline;
         margin-left:0 !important;
         padding: 0;
         }
         ul.social-network li {
         display: inline;
         margin: 0 5px;
         }
         /* boxed social icons */
         .social-network a.icoFacebook:hover {
         background-color:#3B5998;
         }
         .social-network a.icoTwitter:hover {
         background-color:#33ccff;
         }
         .social-network a.icoGoogle:hover {
         background-color:#BD3518;
         }
         .social-network a.icoVimeo:hover {
         background-color:#0590B8;
         }
         .social-network a.icoLinkedin:hover {
         background-color:#007bb7;
         }
         .social-network a.icoFacebook:hover i, .social-network a.icoTwitter:hover i,
         .social-network a.icoGoogle:hover i, .social-network a.icoVimeo:hover i, .social-network a.icoLinkedin:hover i {
         color:#fff;
         }
         a.socialIcon:hover, .socialHoverClass {
         color:#44BCDD;
         }
         .social-circle li a {
         display:inline-block;
         position:relative;
         margin:0 auto 6 auto;
         -moz-border-radius:50%;
         -webkit-border-radius:50%;
         border-radius:50%;
         text-align:center;
         width: 44px;
         height: 44px;
         font-size:18px;
         }
         .social-circle li i {
         margin:0;
         line-height:50px;
         text-align: center;
         }
         .social-circle li a:hover i, .triggeredHover {
         -moz-transform: rotate(360deg);
         -webkit-transform: rotate(360deg);
         -ms--transform: rotate(360deg);
         transform: rotate(360deg);
         -webkit-transition: all 0.2s;
         -moz-transition: all 0.2s;
         -o-transition: all 0.2s;
         -ms-transition: all 0.2s;
         transition: all 0.2s;
         }
         .social-circle i {
         color: #fff;
         -webkit-transition: all 0.8s;
         -moz-transition: all 0.8s;
         -o-transition: all 0.8s;
         -ms-transition: all 0.8s;
         transition: all 0.8s;
         }
         .job-box
         {
         padding:1px!important;
         }
         .line1
         {
         width: 127%; 
         margin-left: -141px;
         margin-top: 3px;
         margin-bottom: 26px;
         }
         .index5-main-section p {
         margin: 0;
         color: #000!important;
         position: relative;
         }
         .jb
         {
         width: 101%;
         margin-left: 0%;
         }
         .filter{
         background: #29aafe;
         border: #29aafe;
         color: #fff;
         width: 50%;
         height: 42px;
         }
		<!--  .jobbg{
		 background-color: #242424;
	color:#fff;
    } -->
      </style>
   </head>
   <body>
      <div class="page">
         <nav id="menu-1" class="mega-menu fa-change-black" data-color="" >
            <ul class="menu-logo" style="margin-left:17px;bottom:-5px;">
               <li><img src="images/back.png" alt="back">&nbsp;Back</li>
            </ul>
            <ul class="menu-links pull-right" style="margin-top:10px;">
               <li> <a href="javascript:void(0)"><img src="images/company.png" alt="company">Company Index</a></li>
               <li>
                  <a href="javascript:void(0)"><img src="images/user.png" alt="Avatar">User<i class="fa fa-angle-down fa-indicator"></i></a>
                  <ul class="drop-down-multilevel">
                     <li><a href=""><span class="fa fa-file"></span>&nbsp;Login</a></li>
                     <li><a href=""><span class="fa fa-sign-out"></span>&nbsp;Logout</a></li>
                  </ul>
               </li>
            </ul>
         </nav>
		 
		 <!---Division section--->
         <div class="clearfix"></div>
         <section class="index5-main-section">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                     <div class="employer-main-section">
                        <img src="images/booth1.png" alt="" style="width:98%; height:100%;">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 nopadding">
                     <div class="employee-main-section" style="padding-top: 10px!important;">
                        <div class="panel panel-default" style="width: 138%;
                           margin-left: -87px;margin-top: -9px;">
                           <div class="panel-heading">
                              <div class="row">
                                 <div class="col-md-6">
                                    <!--button class="btn btn-info btn-custom" style=" width: 50%;">All Jobs</button-->
                                 </div>
                                 <div class="col-md-6">
                                    <button class="btn btn-info btn-custom pull-right filter"  data-toggle="modal" data-target="#srch">Filter</button>
                                 </div>
                              </div>
                           </div>
                           <div class="panel-body" style="overflow-y:scroll;height:473px;">
                              <div class="heading-inner first-heading">
                                 <p class="title">Found 78 Jobs</p>
                              </div>
                              <div class="all-jobs-list-box2">
                                 <div class="job-box job-box-2 jb" >
                                    <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">
                                       <div class="comp-logo">
                                          <a href="#"><img src="https://www.jobmindz.com/bigjobdays/rec/upload_images/company_logo/medium/4571507201104.jpg" class="img-responsive img-circle" alt="UI Designer" style="width: 60%;"> </a>
                                       </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                       <div class="job-title-box">
                                          <a href="#">
                                             <div class="job-title"> Technical Documentation Specialist</div>
                                          </a>
                                          <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States </span></a>
                                          <a href="#" class="job-type jt-full-time-color">
                                          <i class="fa fa-clock-o"></i> Full time
                                          </a>
                                       </div>
                                       <hr class="line1">
                                       <div class="col-md-12" style="margin-left: 15px;margin-top: -27px;">
                                          <p>Skills:</p>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i>
                                                0 - 5 Years 
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-inr" aria-hidden="true"></i>
                                                200000 - 500000 P.A. 
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="job-salary">
                                       <a href="postedjoblisting.html"><button class="btn btn-info btn-custom">View</button></a>
                                    </div>
                                    <hr class="line1">
                                 </div>
                                 <div class="job-box job-box-2 jb" >
                                    <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">
                                       <div class="comp-logo">
                                          <a href="#"><img src="https://www.jobmindz.com/bigjobdays/rec/upload_images/company_logo/medium/4571507201104.jpg" class="img-responsive img-circle" alt="UI Designer" style="width: 60%;"></a>
                                       </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                       <div class="job-title-box">
                                          <a href="#">
                                             <div class="job-title"> Technical Documentation Specialist</div>
                                          </a>
                                          <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States </span></a>
                                          <a href="#" class="job-type jt-full-time-color">
                                          <i class="fa fa-clock-o"></i> Full time
                                          </a>
                                       </div>
                                       <hr class="line1">
                                       <div class="col-md-12" style="margin-left: 15px;margin-top: -27px;">
                                          <p>Skills:</p>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i>
                                                0 - 5 Years 
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-inr" aria-hidden="true"></i>
                                                200000 - 500000 P.A. 
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="job-salary">
                                       <a href="postedjoblisting.html"><button class="btn btn-info btn-custom">View</button></a>
                                    </div>
                                    <hr class="line1">
                                 </div>
                                 <div class="job-box job-box-2 jb" >
                                    <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">
                                       <div class="comp-logo">
                                          <a href="#"><img src="https://www.jobmindz.com/bigjobdays/rec/upload_images/company_logo/medium/4571507201104.jpg" class="img-responsive img-circle" alt="UI Designer" style="width: 60%;"> </a>
                                       </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                       <div class="job-title-box">
                                          <a href="#">
                                             <div class="job-title"> Technical Documentation Specialist</div>
                                          </a>
                                          <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States </span></a>
                                          <a href="#" class="job-type jt-full-time-color">
                                          <i class="fa fa-clock-o"></i> Full time
                                          </a>
                                       </div>
                                       <hr class="line1">
                                       <div class="col-md-12" style="margin-left: 15px;margin-top: -27px;">
                                          <p>Skills:</p>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i>
                                                0 - 5 Years 
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-inr" aria-hidden="true"></i>
                                                200000 - 500000 P.A. 
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="job-salary">
                                       <a href="joblisting.html"><button class="btn btn-info btn-custom">View</button></a>
                                    </div>
                                    <hr class="line1">
                                 </div>
                                 <div class="job-box job-box-2 jb" >
                                    <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">
                                       <div class="comp-logo">
                                          <a href="#"><img src="https://www.jobmindz.com/bigjobdays/rec/upload_images/company_logo/medium/4571507201104.jpg" class="img-responsive img-circle" alt="UI Designer" style="width: 60%;"></a>
                                       </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                       <div class="job-title-box">
                                          <a href="#">
                                             <div class="job-title"> Technical Documentation Specialist</div>
                                          </a>
                                          <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States </span></a>
                                          <a href="#" class="job-type jt-full-time-color">
                                          <i class="fa fa-clock-o"></i> Full time
                                          </a>
                                       </div>
                                       <hr class="line1">
                                       <div class="col-md-12" style="margin-left: 15px;margin-top: -27px;">
                                          <p>Skills:</p>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i>
                                                0 - 5 Years 
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-inr" aria-hidden="true"></i>
                                                200000 - 500000 P.A. 
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="job-salary">
                                       <a href="postedjoblisting.html"><button class="btn btn-info btn-custom">View</button></a>
                                    </div>
                                    <hr class="line1">
                                 </div>
                                 <div class="job-box job-box-2 jb">
                                    <div class="col-md-2 col-sm-2 col-xs-12  hidden-xs hidden-sm">
                                       <div class="comp-logo">
                                          <a href="#"><img src="https://www.jobmindz.com/bigjobdays/rec/upload_images/company_logo/medium/4571507201104.jpg" class="img-responsive img-circle" alt="UI Designer" style="width: 60%;"></a>
                                       </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                       <div class="job-title-box">
                                          <a href="#">
                                             <div class="job-title"> Technical Network Director (IT/Networks)</div>
                                          </a>
                                          <a href="#"><span class="comp-name">conversi Pvt. Ltd. United States</span></a>
                                          <a href="#" class="job-type jt-remote-color">
                                          <i class="fa fa-clock-o"></i> Remote
                                          </a>
                                       </div>
                                       <hr class="line1">
                                       <div class="col-md-12" style="margin-left: 15px;margin-top: -27px;">
                                          <p>Skills:</p>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i>
                                                0 - 5 Years 
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p>
                                                <i class="fa fa-fw fa-inr" aria-hidden="true"></i>
                                                200000 - 500000 P.A.
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="job-salary">
                                       <button class="btn btn-info btn-custom">View</button>
                                    </div>
                                    <hr class="line1">
                                 </div>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12 nopadding pull-right">
                                 <div class="pagination-box clearfix">
                                    <ul class="pagination">
                                       <li>
                                          <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a>
                                       </li>
                                       <li class="active"><a href="#">1</a></li>
                                       <li><a href="#">2</a></li>
                                       <li><a href="#">3</a></li>
                                       <li><a href="#">4</a></li>
                                       <li><a href="#">5</a></li>
                                       <li><a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
		 <!--Booth section--->
         <div class="row">
            <div class="PrevFloorBtn1" >Previous Booth</div>
            <center>
               <div class="boxed">
                  <ul class="social-network social-circle">
                     <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                     <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </center>
            <div class="NextFloorBtn1">Next Booth</div>
         </div>
		 <!---Tab section--->
         <div class="row">
            <div class="tab">
               <button class="tablinks active" onclick="openCity(event, 'London')">London</button>
               <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
               <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
            </div>
            <div id="London" class="tabcontent" style="display:block;">
               <h3>London</h3>
               <p>Tigers once ranged widely across eastern Eurasia, from the Black Sea in the west,
                  to the Indian Ocean in the south, and from Kolyma to Sumatra in the east. Over the past 100 years, 
                  they have lost 93% of their historic range, and have been extirpated from Western and Central Asia,
                  from the islands of Java and Bali, and from large areas of Southeast, Southern, and Eastern Asia. Today,
                  they range from the Siberian taiga to open grasslands and tropical mangrove swamps. The remaining six 
                  tiger subspecies have been classified as endangered by the International Union for Conservation of Nature 
                  (IUCN). The global population in the wild is estimated to number between 3,062 and 3,948 individuals, down 
                  from around 100,000 at the start of the 20th century, with most remaining populations occurring in small 
                  pockets isolated from each other, of which about 2,000 exist on the Indian subcontinent.[4] A 2016 global 
                  census estimated the population of wild tigers at approximately 3,890 individuals.[5][6] Major reasons for 
                  population decline include habitat destruction, habitat fragmentation and poaching. The extent of area occupied
                  by tigers is estimated at less than 1,184,911 km2 (457,497 sq mi), a 41% decline from the area estimated in the
                  mid-1990s. In 2016, the WWF declared that the world's count of wild tigers has risen for the first time in a century.[7]
               </p>
            </div>
            <div id="Paris" class="tabcontent">
               <h3>Paris</h3>
               <p>Tigers once ranged widely across eastern Eurasia, from the Black Sea in the west, to 
                  the Indian Ocean in the south, and from Kolyma to Sumatra in the east. Over the past 100 
                  years, they have lost 93% of their historic range, and have been extirpated from Western 
                  and Central Asia, from the islands of Java and Bali, and from large areas of Southeast, 
                  Southern, and Eastern Asia. Today, they range from the Siberian taiga to open grasslands and
                  tropical mangrove swamps. The remaining six tiger subspecies have been classified as endangered 
                  by the International Union for Conservation of Nature (IUCN). The global population in the wild is
                  estimated to number between 3,062 and 3,948 individuals, down from around 100,000 at the start of 
                  the 20th century, with most remaining populations occurring in small pockets isolated from each other,
                  of which about 2,000 exist on the Indian subcontinent.[4] A 2016 global census estimated the population 
                  of wild tigers at approximately 3,890 individuals.[5][6] Major reasons for population decline include
                  habitat destruction, habitat fragmentation and poaching. The extent of area occupied by tigers is estimated at less than 1,184,911 km2 (457,497 sq mi), a 41% decline from the area estimated in the mid-1990s. 
                  In 2016, the WWF declared that the world's count of wild tigers
                  has risen for the first time in a century.[7]
               </p>
            </div>
            <div id="Tokyo" class="tabcontent">
               <h3>Tokyo</h3>
               <p>Tigers once ranged widely across eastern Eurasia, from the Black Sea in the west, to the Indian
                  Ocean in the south, and from Kolyma to Sumatra in the east. Over the past 100 years, they have lost 
                  93% of their historic range, and have been extirpated from Western and Central Asia, from the islands 
                  of Java and Bali, and from large areas of Southeast, Southern, and Eastern Asia. Today, they range from
                  the Siberian taiga to open grasslands and tropical mangrove swamps. The remaining six tiger subspecies 
                  have been classified as endangered by the International Union for Conservation of Nature (IUCN). 
                  The global population in the wild is estimated to number between 3,062 and 3,948 individuals, down from around 
                  100,000 at the start of the 20th century, with most remaining populations occurring in small pockets isolated from each other, of which about 2,000 exist on the Indian subcontinent.[4] A 2016 global census estimated the population of wild tigers at approximately 3,890 individuals.[5][6] Major reasons for population decline include habitat destruction, habitat fragmentation and poaching. The extent of area occupied by tigers is estimated at less than 1,184,911 km2 (457,497 sq mi), a 41% decline from the area estimated in the mid-1990s.
                  In 2016, the WWF declared that the world's count of wild tigers has risen for the first time in a century.[7]
               </p>
            </div>
         </div>
      </div>
      <!---Filter Modal---->
      <div class="modal fade" id="srch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header" style="background:#29aafe;;
                  color: #fff;">
                  <i  class="fa fa-times-circle-o fa-2x pull-right"  data-dismiss="modal" aria-hidden="true" style="margin: -11px -13px 0 0;
                     opacity: 5;"></i>
                  <h4 class="modal-title" id="myModalLabel">Smart Search</h4>
               </div>
               <div class="modal-body">
                  <form role="form" action='#' method="post">
                     <input type="text" class="form-control" placeholder="Enter Location"><br>
                     <input type="text" class="form-control" placeholder="Enter Skills">
                     <center style="padding-bottom: 19px;
                        /* top: 19px; */
                        margin-top: 8px;">
                        <button class="btn btn-info btn-custom " style="background: #29aafe;
                           border: #29aafe;
                           color: #fff;
                           margin-left: -7%;
                           height: 42px;
                           margin-top: 3px;" data-toggle="modal" data-target="#srch">Submit</button>
                     </center>
               </div>
               </form>
            </div>
         </div>
      </div>
	  <!---Filter Modal end---->
      <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
      <!-- JAVASCRIPT JS  -->
      <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <!-- JAVASCRIPT JS  --> 
      <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
      <!-- BOOTSTRAP CORE JS -->
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <!-- JQUERY SELECT -->
      <script type="text/javascript" src="js/select2.min.js"></script>
      <!-- MEGA MENU -->
      <script type="text/javascript" src="js/mega_menu.min.js"></script>
      <!-- JQUERY COUNTERUP -->
      <script type="text/javascript" src="js/counterup.js"></script>
      <!-- JQUERY WAYPOINT -->
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <!-- JQUERY REVEAL -->
      <script type="text/javascript" src="js/footer-reveal.min.js"></script>
      <!-- Owl Carousel -->
      <script type="text/javascript" src="js/owl-carousel.js"></script>
      <!-- CORE JS -->
      <script type="text/javascript" src="js/custom.js"></script>
      <script>
         function openCity(evt, cityName) {
             var i, tabcontent, tablinks;
             tabcontent = document.getElementsByClassName("tabcontent");
             for (i = 0; i < tabcontent.length; i++) {
                 tabcontent[i].style.display = "none";
             }
             tablinks = document.getElementsByClassName("tablinks");
             for (i = 0; i < tablinks.length; i++) {
                 tablinks[i].className = tablinks[i].className.replace(" active", "");
             }
             document.getElementById(cityName).style.display = "block";
             evt.currentTarget.className += " active";
         }
      </script>
      </div>
   </body>
   <!-- Mirrored from templates.scriptsbundle.com/opportunities-v3/demo/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Sep 2017 06:34:49 GMT -->
</html>
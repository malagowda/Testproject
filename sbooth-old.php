<?php   include('../classes/Session.php');
        include("../classes/Employee.php");
        include("../classes/JobFair.php");
        
        $url = explode("/",($_SERVER["REQUEST_URI"]));
        $url_count = count($url);
        $rec_id_en = $url[$url_count-2];
        $rec_id = $funObj->en_de('de',$rec_id_en);
        
        
        // $data = file_get_contents('https://jobmindz.com/controller/mr/RecruiterDetails.php?id='.$rec_id);
        
        // $recruiterDetails = json_decode($data,true);
        
        // $postedJobs = file_get_contents('https://jobmindz.com/controller/mr/RecruiterPostedJobs.php?id='.$rec_id);
        
        // $recruiterVideos = json_decode(file_get_contents('https://jobmindz.com/controller/mr/EmployerVideos.php?id='.$rec_id.'&t=Video'),true);
        
        // $recruiterDocuments = json_decode(file_get_contents('https://jobmindz.com/controller/mr/EmployerVideos.php?id='.$rec_id.'&t=Document'),true);
        
        // $recruiterImages = json_decode(file_get_contents('https://jobmindz.com/controller/mr/EmployerVideos.php?id='.$rec_id.'&t=Picture'),true);
        
        // $previousId = json_decode(file_get_contents('https://jobmindz.com/controller/mr/RecruitersPreviousNextIds.php?id='.$rec_id),true);
        
        // $postedJobs = json_decode($postedJobs,true);
        // echo $rec_id;
        $recruiterDetails       =  $JobFair->getRecruitersDetail($rec_id);
        $recruiterPostedJobs    =  $JobFair->recruiterPostedJobs($rec_id); 
        $recruiterVideos        =  $JobFair->getRecruitersFiles($rec_id,'Video'); 
        $recruiterDocuments     =  $JobFair->getRecruitersFiles($rec_id,'Document');
        $recruiterImages        =  $JobFair->getRecruitersFiles($rec_id,'Picture');
        // print_r($recruiterPostedJobs);
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
         /*line-height:50px;*/
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
            /*Video Gallery*/
        .video-list-thumbs{}
        .video-list-thumbs > li{
            margin-bottom:12px;
        }
        .video-list-thumbs > li:last-child{}
        .video-list-thumbs > li > a{
        	display:block;
        	position:relative;
        	background-color: #111;
        	color: #fff;
        	padding: 8px;
        	border-radius:3px
            transition:all 500ms ease-in-out;
            border-radius:4px
        }
        .video-list-thumbs > li > a:hover{
        	box-shadow:0 2px 5px rgba(0,0,0,.3);
        	text-decoration:none
        }
        .video-list-thumbs h2{
        	bottom: 0;
        	font-size: 14px;
        	height: 33px;
        	margin: 8px 0 0;
        }
        .video-list-thumbs .glyphicon-play-circle{
            font-size: 60px;
            opacity: 0.6;
            position: absolute;
            right: 39%;
            top: 31%;
            text-shadow: 0 1px 3px rgba(0,0,0,.5);
            transition:all 500ms ease-in-out;
        }
        .video-list-thumbs > li > a:hover .glyphicon-play-circle{
        	color:#fff;
        	opacity:1;
        	text-shadow:0 1px 3px rgba(0,0,0,.8);
        }
        .video-list-thumbs .duration{
        	background-color: rgba(0, 0, 0, 0.4);
        	border-radius: 2px;
        	color: #fff;
        	font-size: 11px;
        	font-weight: bold;
        	left: 12px;
        	line-height: 13px;
        	padding: 2px 3px 1px;
        	position: absolute;
        	top: 12px;
            transition:all 500ms ease;
        }
        .video-list-thumbs > li > a:hover .duration{
        	background-color:#000;
        }
        .gallery
        {
            display: inline-block;
            margin-top: 20px;
        }
        
        .op{
            opacity: 1 !important;
            border:1px solid green;
        }
        .thumbnail{
            min-height:150px;
        }
        .tl {
            position: absolute;
            top: -35px;
            left:0;
            color:#000;
        }
        @media (min-width:320px) and (max-width: 480px) { 
        	.video-list-thumbs .glyphicon-play-circle{
            font-size: 35px;
            right: 36%;
            top: 27%;
        	}
        	.video-list-thumbs h2{
        		bottom: 0;
        		font-size: 12px;
        		height: 22px;
        		margin: 8px 0 0;
        	}
        }
    </style>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <div class="page">
         <nav id="menu-1" class="mega-menu fa-change-black" data-color="" >
            <ul class="menu-logo" style="margin-left:17px;bottom:-5px;">
               <li><a onclick="window.history.back();"><img src="images/back.png" alt="back">&nbsp;Back</a></li>
            </ul>
            <ul class="menu-links pull-right" style="margin-top:10px;">
               <li>
                  <a href="javascript:void(0)"><img src="images/user.png" alt="Avatar"><?php echo $e_name; ?><i class="fa fa-angle-down fa-indicator"></i></a>
                  <ul class="drop-down-multilevel">
                     <li><a href="<?php echo 'https://www.bigjobdays.jobmindz.com/common/logout'; ?>"><span class="fa fa-sign-out"></span>Logout</a></li>
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
                        <img src="<?php $boothImage = "https://jobmindz.com/images/booth_images/1.png"; if($recruiterDetails['company_booth'] != ''){ $boothImage = $recruiterDetails['company_booth']; } echo $boothImage; ?>" alt="<?php echo $recruiterDetails['employer_name']; ?>" style="width:98%; height:100%;">
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
                                    <!--<button onClick="window.open('recommended-jobs')" class="btn btn-info btn-custom pull-right filter"  data-toggle="modal" data-target="#srch">Filter</button>-->
                                    <button onClick="window.open('recommended-jobs')" class="btn btn-info btn-custom pull-right filter"  >Filter</button>
                                 </div>
                              </div>
                           </div>
                           <div class="panel-body" style="overflow-y:scroll;height:473px;">
                              <div class="heading-inner first-heading">
                                 <p class="title">Found <?php echo count($recruiterPostedJobs); ?> Jobs from <?php echo $recruiterDetails['employer_name'];  ?></p>
                              </div>
                              <div class="all-jobs-list-box2">
                                <?php foreach($recruiterPostedJobs as $v){ 
                                    $companyImage = "https://www.jobmindz.com/images/office.png";
                                    if($recruiterDetails['company_img'] != '')
                                    {
                                        $companyImage = $base_data.$recruiterDetails['company_img'];
                                    }
                                 ?> 
                                
                                 <div class="job-box job-box-2 jb" >
                                    <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs hidden-sm">
                                       <div class="comp-logo">
                                          <a href="#"><img src="<?php echo $companyImage; ?>" class="img-responsive img-circle" alt="UI Designer" style="width: 60%;"> </a>
                                       </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                       <div class="job-title-box">
                                          <a href="#">
                                             <div class="job-title"> <?php echo $v['job_title']; ?></div>
                                          </a>
                                          <a href="#"><span class="comp-name"><?php echo $recruiterDetails['employer_name']; ?></span></a>
                                          <a href="#" class="job-type jt-full-time-color">
                                          <i class="fa fa-clock-o"></i> <?php echo $v['job_type']; ?>
                                          </a>
                                       </div>
                                       <hr class="line1">
                                       <div class="col-md-12" style="margin-left: 15px;margin-top: -27px;">
                                          <p>Skills: <span><?php echo $v['skills']; ?></span></p>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-briefcase" aria-hidden="true"></i>
                                                <?php echo $v['exp'].' Years'; ?>
                                             </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p><i class="fa fa-fw fa-inr" aria-hidden="true"></i>
                                                <?php echo $v['salary_min'].' P.A - '.$v['salary_max']; ?> P.A.
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="job-salary">
                                       <a onclick="window.open('job-desc/<?php echo $funObj->en_de('en', $v['id']); ?>/')"><button class="btn btn-info btn-custom">View</button></a>
                                    </div>
                                    <hr class="line1">
                                 </div>
                                <?php } ?>
                              </div>
                              <div class="col-md-12 col-sm-12 col-xs-12 nopadding pull-right hide">
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
            <div class="PrevFloorBtn1" style="background:none">Previous Booth</div>
            <center>
               <div class="boxed">
                  <ul class="social-network social-circle">
                     <?php if($recruiterDetails['company_facebook']) { ?><li><a href="<?php echo $recruiterDetails['company_facebook']; ?>" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li><?php }else { echo '<li><a></a></li>';} ?>
                     <?php if($recruiterDetails['company_twitter']) { ?><li><a href="<?php echo $recruiterDetails['company_twitter']; ?>" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li><?php }else { echo '<li><a></a></li>';} ?>
                     <?php if($recruiterDetails['company_linkedin']) { ?><li><a href="<?php echo $recruiterDetails['company_linkedin']; ?>" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li><?php }else { echo '<li><a></a></li>';} ?>
                  </ul>
               </div>
            </center>
            <div class="NextFloorBtn1" style="background:none">Next Booth</div>
         </div>
		 <!---Tab section--->
         <div class="row">
            <div class="tab">
               <?php if($recruiterDetails['about_me']) { ?> <button class="tablinks active" onclick="openCity(event, 'aboutus')">About Us</button><?php } ?>
               <?php if($recruiterDetails['company_careers']) { ?> <button class="tablinks" onclick="openCity(event, 'career')">Career Page</button><?php } ?>
               <?php if($recruiterDetails['company_contact']) { ?> <button class="tablinks" onclick="openCity(event, 'contactus')">Contact Us</button><?php } ?>
               <?php if($recruiterVideos) { ?> <button class="tablinks" onclick="openCity(event, 'videos')">Videos (<?php echo count($recruiterVideos); ?>)</button><?php } ?>
               <?php if($recruiterImages) { ?> <button class="tablinks" onclick="openCity(event, 'images')">Images (<?php echo count($recruiterImages); ?>)</button><?php } ?>
               <?php if($recruiterDocuments) {  ?> <button class="tablinks" onclick="openCity(event, 'documents')">Documents (<?php echo count($recruiterDocuments); ?>)</button><?php } ?>
            </div>
            <?php if($recruiterDetails['about_me']) { ?> 
            <div id="aboutus" class="tabcontent" style="display:block;">
               <h3>About Us</h3>
               <p><?php echo ucfirst($recruiterDetails['about_me']); ?>
               </p>
            </div>
            <?php } ?>
            <div id="career" class="tabcontent">
               <iframe src="<?php echo $recruiterDetails['company_careers']; ?>" style="border:none; width:100%; min-height:100vh;"></iframe>
            </div>
            <div id="contactus" class="tabcontent">
               <iframe src="<?php echo $recruiterDetails['company_contact']; ?>" style="border:none; width:100%; min-height:100vh;"></iframe>
            </div>
            <?php if($recruiterVideos) { ?>
            <div id="videos" class="tabcontent">
               <h3>Videos</h3>
        		    <div>
        		        <ul class="list-unstyled video-list-thumbs row">
        		            <?php foreach($recruiterVideos as $rv){ ?>
                        	<li class="col-lg-3 col-sm-4 col-xs-6">
                                <iframe src="<?php preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $rv['data_path'], $matches);
                                   $id = $matches[1]; echo 'https://www.youtube.com/embed/'.$id; ?>" ></iframe>
                        	</li>
                        	<?php } ?>
                        </ul>
        		    </div>
            </div>
            <?php } ?>
            <?php if($recruiterImages) { ?>
            <div id="images" class="tabcontent">
            	<div class="row">
            		<div class='list-group gallery'>
            		    <?php foreach($recruiterImages as $ri){ ?>
                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 mt10'>
                                <a class="thumbnail fancybox"  rel="ligthbox" href="<?php echo $base_data.$ri['data_path'];?>">
                                    <img class="img-responsive" width="320px" height="300px" alt="" src="<?php echo $base_data.$ri['data_path'];?>" />
                                    <div class='text-right'>
                                        <small class='text-muted hide'>Image Title</small>
                                    </div> <!-- text-right / end -->
                                </a>
                            </div> <!-- col-6 / end -->
                        <?php }?>
                    </div> <!-- list-group / end -->
            	</div>
            </div>
            <?php } ?>
            <?php if($recruiterDocuments) { ?>
            <div id="documents" class="tabcontent">
                <div class="row">
                    <h2>List</h2>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12" style="">
                            <div class="panel panel-default list-group-panel">
                                <div class="panel-body">
                                    <ul class="list-group list-group-header">
                                        <li class="list-group-item list-group-body">
                                            <div class="row">
                                                <div class="col-xs-6 text-left">Name</div>
                                                <div class="col-xs-3">Size</div>
                                                <div class="col-xs-3">Modified</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-group list-group-body" style="">
                                        <?php foreach($recruiterDocuments as $rd) { ?>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-xs-6 text-left" style=""> <a onClick="window.open('https://www.jobmindz.com/bigjobdays/rec/uploaded_documents/web-architecture.ppt.pptx')" target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><?php echo $rd['data_path']; ?> web-architecture.ppt.pptx </a> </div>
                                                <div class="col-xs-3" style="">...</div>
                                                <div class="col-xs-3" style="">...</div>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
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
      <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
        $(document).ready(function(){
        //FANCYBOX
        //https://github.com/fancyapps/fancyBox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
        });
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
</html>

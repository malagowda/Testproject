<?php   include('../classes/Session.php'); 
        include('../classes/JobFair.php'); 
        // $recruiterVideos = file_get_contents('https://jobmindz.com/controller/mr/AllCompanyVideo.php');
        // $recruiterVideos = json_decode($recruiterVideos,true);
        // foreach($recruiterVideos as $key=>$values){ echo $key.'<br>'; echo count($values).'<br>'; foreach($values as $links){ echo $links['video_link'].'<br>'; echo $links['video_title'].'<br>'; }}
        $allBooths          = $JobFair->getAllBooths();
        // print_r($allBooths);
        $allCompanyVideos   = $JobFair->getAllCompanyVideos();
        //print_r($allBooths);
        //foreach($allBooths as $b){ echo $b['rec_uniqueid']; }
?>
<html>
<head>
    <title>Big Job Day's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <link rel="icon" href="https://www.jobmindz.com/images/job.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/button.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link id="Style-Main" href="css/style.css" rel="stylesheet" type="text/css">
    <link id="Style-Banner-Gallery" href="css/banner-gallery.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery.mThumbnailScroller.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/global.css?v=1505985704" media="screen">
    <link rel="stylesheet" type="text/css" href="css/vjf_136_inner.css?v=737333">
    <?php include("common/test-style.php"); ?>
    <style>
        .comInd {
            overflow: auto !important;
            max-height: 285px !important;
        }
        .comInd > li {
            margin-bottom: 5px !important;
            cursor: pointer !important;
            font-size: 16px !important;
        }
        #myInput {
          width: 100%;
          font-size: 16px;
          padding: 12px 20px 12px 15px;
          border: 1px solid #ddd;
          margin-bottom: 12px;
        }
        
.swingimage{cursor: pointer;}
	
.imgtag {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; 
	
}


.row1:after {
    content: "";
    display: table;
    clear: both;
}
.swingimage
{
	cursor: pointer;
	-webkit-transform-origin: 50% 0;
    transform-origin: 50% 0;
    -webkit-animation: swinging 3.5s ease-in-out forwards infinite;
    animation: swinging 3.5s ease-in-out forwards infinite;
    width:40%;
	}
.fa-times-circle-o{cursor: pointer;}
    @media (max-width: 576px) {
    .swingimage{
        width:50%;
        margin-left: -32px;
    }
}

#livechat-eye-catcher {
    display:none;
}
</style>
</head>
<body>
    <div class="main">
        <!--/////////////////////////////////////////////////////////////////////////////////////////////-->
        <div class="first text-center fadeIn" style="display:block;">
            <center>
                <h2 class="b" style="text-transform:uppercase;"><!--India's First Virtual Job Fair--></h2>
                <br>
                <!--button id="Button1" type="button" class="btn btn-primary btn-lg b" onclick="Button1();">Enter Hall</button-->
                <div class="flex-1">
                    <button class="button button-mat btn--5 b" id="Button1" onclick="Button1();">
                        <div class="psuedo-text">Enter Hall</div>
                    </button>
                </div>
            </center>
        </div>
        <!--/////////////////////////////////////////////////////////////////////////////////////////////-->
        <div class="second" style="display:none;">
            <video id="bgvid">
                <source src="video/intro.mp4" type="video/mp4">
            </video>
        </div>
        <!--/////////////////////////////////////////////////////////////////////////////////////////////-->
        <div class="third" style="display:none;">
			  <div class="row1" style="margin-left: 15%;position: fixed;transform: translateY(40%);">
    			  <div class="imgtag">
    				<img src="images/au.png" class="img-responsive swingimage" id="auditorium" >
    			  </div>
    			  <div class="imgtag">
    			       <img src="images/he.png" class="swingimage" onclick="LC_API.open_chat_window({source:'eye catcher'});return false">
                       <img src="images/he.png" class="swingimage" id="talktous" style="display:none">
    			  </div>
    			  <div class="imgtag">
    			        <img src="images/re.png" class="img-responsive swingimage" id="recruitment">
    			  </div>
			</div>
        </div>
  
  
                    
                    
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!----auditorium with video modals------------------------------------------->
        <div class="fourth" style="display:none;">
            <center><img src="http://ammomasters.com/wp-content/uploads/2015/01/back_button_orange_13582411991.png" id="Backtosecond" class="pull-left" style="position: relative;top: 12px;width:11%;cursor: pointer;">
            </center>
            <center>
                <i class="fa fa-play-circle fa-5x" id="ig" data-toggle="modal" data-target="#acc"></i>
                <h3 style="position: absolute;left: 50%;top: 50%;margin: -58px 0 0 -51px;font-weight:700;">Click Here</h3>
            </center>
            <div class="modal fade" id="acc" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true" style="width:100%;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="background:darkgrey;width: 100%;border: 10px solid #fff;">
                            <i class="fa fa-times-circle-o fa-2x pull-right" data-dismiss="modal" aria-hidden="true" style="margin: -14px -13px 0 0;opacity: 8;cursor:pointer"></i>
                            <ul id="accordion" class="accordion">
                                <?php //foreach($recruiterVideos as $key=>$values) { ?>
                                <?php foreach($allCompanyVideos as $key=>$values) { ?>
                                <li class="open">
                                    <div class="link"><i class="fa fa-building "></i><?php echo ucwords($key).' ('.count($values).' Videos)'; ?><i class="fa fa-chevron-down"></i></div>
                                    <ul class="submenu">
                                        <?php foreach($values as $links) { ?>
                                            <li><a href="<?php  echo $links['video_link'] ?>" data-toggle="modal" data-theVideo="<?php preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $links['video_link'], $matches);
                                   $id = $matches[1]; echo 'https://www.youtube.com/embed/'.$id; ?>" data-target="#md1" class="fa fa-play-circle ">&nbsp;&nbsp;<?php echo $links['video_title']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <?php } ?>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----video modals begin-------------------------------------------->
        <div class="modal fade" id="md1" tabindex="-1" role="dialog" aria-labelledby="md1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" id="md11">
                        <i class="fa fa-times-circle-o fa-2x pull-right" data-dismiss="modal" aria-hidden="true" style="margin: -14px -13px 0 0;opacity: 8;"></i>
                        <div>
                            <iframe width="100%" height="350" src="https://youtu.be/yxviTLVjvDQ"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------video modals end------------------------------------------->
        <div class="fifth" style="display:none; background-color: rgba(23, 20, 22, 0.18);">
            <center> <img src="https://cdn3.iconfinder.com/data/icons/line/36/arrow_left-512.png" class=" pull-left" aria-hidden="true" id="Backtoseconds" style="cursor:pointer;position:relative;top:10px;color:#403434; width:3%;">
            </center>
            <div class="col-md-row menu-top">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="https://am.jpmorgan.com/baurl-gim/image/default-user-image-female.jpg" class="user-dp" alt="Avatar" style="width:30px;">&nbsp; <?php echo $e_name; ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/common/logout" title="log out"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-row menu-top">
                <ul class="nav nav-tabs">
                    
                    <li role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-backdrop="false" data-target="#companyInde">
                        <a onClick="window.location='../recommended-jobs/'" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <span style="color:#333 !important;"><i class="fa fa-id-badge fa-2x"></i></span>&nbsp; Company Index<span class=""></span>
                        
                    </li>                    
                    <li role="presentation" class="dropdown">
                        <a onClick="window.location='../recommended-jobs/'" role="button" aria-haspopup="true" aria-expanded="false">
                            <span style="color:#333 !important;"><i class="fa fa-user fa-2x"></i></span>&nbsp; Recommended Jobs <span class=""></span>
                        </a>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>

            <?php include"common/boothm.php"; ?>
        </div>
    </div>
    <!-- Modal Company Index -->
    <div class="modal fade" id="companyInde" role="dialog">
        <div class="modal-dialog" style="width: 400px;">

            <!-- Modal content-->
            <div class="modal-content" style="width: 111%;">
                <div class="modal-header" style="background: gainsboro;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Company Index</h4>
                </div>
                <div class="modal-body">
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search a Company..">
                    <div class="xyz">
                    <div class="list-group comInd" id="myUL1">
                    <?php
                        foreach($allBooths as $key=>$val) { ?>
                            <div class="list-group-item">
                                <a onClick="view('<?php echo $base.'job-fair/sbooth/'.$funObj->en_de('en',$val['rec_uniqueid']); ?>/')" style="color: #333;"><?php echo $val["employer_name"] ?></a>
                            </div>
                     <?php  } ?>
                    </div>    
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="width: 111%;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="video-container-custom">
                        <iframe src="https://www.youtube.com/embed/SyiwWRMoXXA" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.mThumbnailScroller.js?v=1505985704"></script>
    
    <!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9240450;
    (function() {
      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>
    <!-- End of LiveChat code -->
    
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i;
            
            input = document.getElementById("myInput");
            
            filter = input.value.toUpperCase();
            
            ul = document.getElementById("myUL1");
            
            li = ul.getElementsByTagName("div");
            
            for (i = 0; i < li.length; i++) 
            {
                a = li[i].getElementsByTagName("a")[0];
                
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) 
                {
                    li[i].style.display = "";
                } 
                else 
                {
                    li[i].style.display = "none";
                }
            }
        }
    </script>


    <script>
        function view(path)
        {
            window.open(path)
        }
        $(document).ready(function() {
            $(" .second, .third, .fourth").hide();
            $('#Button1').click(function(e) {
                e.preventDefault();
                $('.second').show();
                $('.first').hide();
                $('.third').hide();
                $('.fourth').hide();
                $('.fifth').hide();
                timer = setTimeout(function() {
                    $('.third').fadeIn();
                    $('.second').hide();
                    $('.fourth').hide();
                    $('.fifth').hide();
                    $('.first').hide();
                }, 3700);
            });

            $('#auditorium').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .third").hide();
                $('.fourth').fadeIn();
            });

            $('#recruitment').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .third ,.fourth").hide();
                $('.fifth').fadeIn();
            });

            $('#Backtosecond').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .fourth").hide();
                $('.third').show();
            });

            $('#Backtoseconds').click(function(e) {
                e.preventDefault();
                $(" .first, .second, .fourth ,.fifth").hide();
                $('.third').show();
            });

        });
    </script>
    <script>
        var vid = document.getElementById("bgvid");

        function Button1() {
            vid.play();
        }

        $(document).ready(function() {
            $("#myModal").on("hidden.bs.modal", function() {
                $("#iframeYoutube").attr("src", "#");
            })
        })

        function changeVideo(vId) {
            var iframe = document.getElementById("iframeYoutube");
            iframe.src = "https://www.youtube.com/embed/" + vId;

            $("#myModal").modal("show");
        }
    </script>
    <script>
        autoPlayYouTubeModal();

        //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
        function autoPlayYouTubeModal() {
            var trigger = $("body").find('[data-toggle="modal"]');
            trigger.click(function() {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-theVideo"),
                    videoSRCauto = videoSRC + "?autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function() {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });
        }
    </script>
    <script>
        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                // Variables privadas
                var links = this.el.find('.link');
                // Evento
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');

                if (!e.data.multiple) {
                    $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
                };
            }

            var accordion = new Accordion($('#accordion'), false);
        });
        
        
    </script>
</body>
</html>
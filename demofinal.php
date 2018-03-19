<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
        * {
            padding: 0;
            margin: 0;
        }
        
        .first {
            background-image: url('images/bg.jpg');
            background-position: initial;
            position: absolute;
            /* min-height: 100%; */
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
        }
        
        video {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -64;
            transform: translateX(-50%) translateY(-50%);
            transition: 1s opacity;
        }
        
        .b {
            position: relative;
            top: 166px;
            color: #fff;
        }
        
        .ba {
            position: relative;
            top: 100px;
            color: #fff;
        }
        
        .third {
            background-image: url(images/reciepetion.jpg);
            background-position: initial;
            position: absolute;
            /* min-height: 100%; */
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
        }
        
        .fourth {
            background-image: url('images/auditourium1.jpg');
            background-position: initial;
            position: absolute;
            /* min-height: 100%; */
            width: 100%;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            height: 100vh;
        }
        
        @media screen and (max-width: 500px) {
            div {
                width: 70%;
            }
        }
        
        @media screen and (max-device-width:800px) {
            #recruitment {
                margin-left: 239%;
                margin-top: -34px;
            }
            #talktous {
                margin-right: -258%;
                margin-top: -81px;
            }
        }
        
        img {
            width: 100%;
            height: auto;
        }
        
        ul {
            list-style-type: none;
        }
        
        a {
            color: #b63b4d;
            text-decoration: none;
        }
        /** =======================
 * Contenedor Principal
 ===========================*/
        
        h1 {
            color: #FFF;
            font-size: 24px;
            font-weight: 400;
            text-align: center;
            margin-top: 80px;
        }
        
        h1 a {
            color: #c12c42;
            font-size: 16px;
        }
        
        .accordion {
            width: 100%;
            max-width: 541px;
            margin: 7px auto 3px;
            background: #FFF;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        
        .accordion .link {
            cursor: pointer;
            display: block;
            padding: 15px 15px 15px 42px;
            color: #4D4D4D;
            font-size: 14px;
            font-weight: 700;
            border-bottom: 1px solid #CCC;
            position: relative;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        
        .accordion li:last-child .link {
            border-bottom: 0;
        }
        
        .accordion li i {
            position: absolute;
            top: 16px;
            left: 12px;
            font-size: 18px;
            color: #595959;
            -webkit-transition: all 0.4s ease;
            -o-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        
        .accordion li i.fa-chevron-down {
            right: 12px;
            left: auto;
            font-size: 16px;
        }
        
        .accordion li.open .link {
            color: #b63b4d;
        }
        
        .accordion li.open i {
            color: #b63b4d;
        }
        
        .accordion li.open i.fa-chevron-down {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        
        .accordion li.default .submenu {
            display: block;
        }
        /**
 * Submenu
 -----------------------------*/
        
        .submenu {
            display: none;
            background: rgba(0, 0, 0, 0.65);
            font-size: 14px;
        }
        
        .submenu li {
            border-bottom: 1px solid #4b4a5e;
        }
        
        .submenu a {
            display: block;
            text-decoration: none;
            color: #d9d9d9;
            padding: 12px;
            padding-left: 42px;
            -webkit-transition: all 0.25s ease;
            -o-transition: all 0.25s ease;
            transition: all 0.25s ease;
        }
        
        .submenu a:hover {
            background: #b63b4d;
            color: #FFF;
        }
        
        .swingimage {
            position: relative;
            width: 30%;
            height: 11%;
            left: 50px;
            margin-top: 49%;
            -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
            -webkit-animation: swinging 3.5s ease-in-out forwards infinite;
            animation: swinging 3.5s ease-in-out forwards infinite;
        }
        
        @-webkit-keyframes swinging 
		{
            0% 
			{
                -webkit-transform: rotate(6deg);
            }
            50% 
			{
                -webkit-transform: rotate(-3deg)
            }
            100%
			{
                -webkit-transform: rotate(6deg);
            }
        }
        
        @media screen and (max-device-width:800px) {
            .swingimage
			{
                position: relative;
                width: 30%!important;
                height: 11%!important;
                left: 72px;
            }
            #Backtosecond 
			{
                position: relative;
                top: 3px!important;
                width: 25%!important;
            }
            #acc 
			{
                width: 143%!important;
            }
            #md1 
			{
                width: 142%;
            }
            #md11 
			{
                width: 137%;
            }
        }
        
        #ig 
		{
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -114px 0 0 -26px;
            cursor: pointer;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/s.css">
</head>
<body>
    <div class="main">
        <div class="first text-center fadeIn">
            <center>
                <h2 class="b" style="text-transform:uppercase;">India's First Virtual Job Fair</h2>
                <br>
                <!--button id="Button1" type="button" class="btn btn-primary btn-lg b" onclick="Button1();">Enter Hall</button-->
                <div class="flex-1">
                    <button class="button button-mat btn--5 b" id="Button1" onclick="Button1();">
                        <div class="psuedo-text">Enter Hall</div>
                    </button>
                </div>
            </center>
        </div>

        <div class="second">
            <video id="bgvid">
                <source src="video/new1.mp4" type="video/mp4">
            </video>
        </div>

        <div class="third">
            <div class="">
                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <img src="images/au.png" class="swingimage" style="cursor:pointer;" id="auditorium">
                        </center>
                    </div>

                    <div class="col-md-4">
                        <center>
                            <img src="images/he.png" style="cursor:pointer;" class="swingimage" id="talktous" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/embed/loFtozxZG0s">
                            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <div>
                                                <iframe width="100%" height="350" src=""></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>

                    <div class="col-md-4">
                        <center>
                            <img src="images/re.png" style="cursor:pointer;" class="swingimage" id="recruitment">
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <!----auditorium with video modals------------------------------------------->
        <div class="fourth">
            <center>
                <img src="http://ammomasters.com/wp-content/uploads/2015/01/back_button_orange_13582411991.png" id="Backtosecond" class="pull-left" style="position: relative;top: 12px;width:11%;cursor: pointer;">
            </center>
            <center>
                <i class="fa fa-play-circle fa-5x" id="ig" data-toggle="modal" data-target="#acc"></i>
                <h3 style="position: absolute;left: 50%;top: 50%;margin: -58px 0 0 -51px;font-weight:700;">Click Here</h3>
            </center>

            <div class="modal fade" id="acc" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true" style="width:100%;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" style="background:darkgrey;width: 100%;border: 10px solid #fff;">
                            <i class="fa fa-times-circle-o fa-2x pull-right" data-dismiss="modal" aria-hidden="true" style="margin: -14px -13px 0 0;opacity: 8;"></i>
                            <ul id="accordion" class="accordion">
                                <li>
                                    <div class="link">
                                        <i class="fa fa-building "></i>Accenture<i class="fa fa-chevron-down"></i>
                                    </div>
                                    <ul class="submenu">
                                        <li><a href="" data-toggle="modal" data-theVideo="video/new1.mp4" data-target="#md1" class="fa fa-play-circle ">&nbsp;&nbsp;JobMindz Video</a></li>
                                        <li><a href="#" class="fa fa-play-circle">&nbsp;&nbsp;JobMindz Video</a></li>

                                    </ul>
                                </li>
                                <li class="default open">
                                    <div class="link">
                                        <i class="fa fa-building"></i>Micro Chip<i class="fa fa-chevron-down"></i>
                                    </div>
                                    <ul class="submenu">
                                        <li><a href="#" class="fa fa-play-circle ">&nbsp;&nbsp;JobMindz Video</a></li>
                                        <li><a href="#" class="fa fa-play-circle ">&nbsp;&nbsp;JobMindz Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fifth" style="display:none; background-color: rgba(23, 20, 22, 0.18);">
            <center>
                <img src="https://cdn3.iconfinder.com/data/icons/line/36/arrow_left-512.png" class=" pull-left" aria-hidden="true" id="Backtoseconds" style="position:relative;
						top:10px;color:#403434; width:3%;cursor:pointer;">
            </center>
            <div class="col-md-row menu-top">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="https://am.jpmorgan.com/baurl-gim/image/default-user-image-female.jpg" class="user-dp" alt="Avatar" style="width:30px;">&nbsp; User <span class="caret"></span>
                        </a>
                    </li>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-file"></span>Login</a>
                        </li>
                        <li>
                            <a href="/test-drive/index.php?Logout=1" title="log out"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        </li>
                    </ul>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-row menu-top">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="dropdown">
                        <a href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="http://www.rootscsa.org/wp-content/uploads/2014/06/home_office_icon.png" class="user-dp" alt="Avatar" style="width:30px;font-size:20px;font-weight: 700;">&nbsp; Company Index<span class=""></span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <?php include"header.php";?>
        </div>
    </div>
    <!-- Modal -->

        <!-----video modals begin-------------------------------------------->
        <div class="modal fade" id="md1" tabindex="-1" role="dialog" aria-labelledby="md1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" id="md11">
                        <i class="fa fa-times-circle-o fa-2x pull-right" data-dismiss="modal" aria-hidden="true" style="margin: -14px -13px 0 0;
					opacity: 8;"></i>
                        <div>
                            <iframe width="100%" height="350" src="https://youtu.be/yxviTLVjvDQ"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------video modals end------------------------------------------->
						<!-- Modal content-->

		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">

				<div class="modal-content" style="width: 111%;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
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
				<!----END Modal Content----------------------------->
    <script>
        src = "https://code.jquery.com/jquery-3.2.1.min.js"
        integrity = "sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin = "anonymous" >
    </script>
    <script>
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
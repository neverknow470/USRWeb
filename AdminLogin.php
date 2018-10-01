<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="Author" content="">
    <title>東海大學USR後台</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="elegant_font/style.css" />
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="elegant_font/style.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/adminpage.js"></script>

</head>
<body style="background-color: white;">
<script>
    if (<?php isset($_SESSION["Login"])?>){
        if (<?php $_SESSION["Login"]?>=="Y"){
            document.getElementById('logindiv').style.display = "none";
            document.getElementById('maindiv').style.display = "block";
        }
    }
</script>
    <section>
        <div class="row">
            <div class="col-md-5"><a href="MainPage.html" style="margin-right:0 !important;"><img src="images/logo/mainlogo.png" alt="東海大學" style="margin-top: 0 !important; height:90px;"></a></div>
            <div class="col-md-7">
                <span class="highlight-text" style="font-family:Verdana, Geneva, sans-serif, '微軟正黑體'; font-weight:bold; font-size: 3vh !important;"><br />東海大學USR後台系統</span>
            </div>
        </div>
        <hr style="margin:0;padding:0;border-color:silver;" />
        <div class="container">
            <div id="logindiv" style="vertical-align:middle;text-align:center;font-size:3vh;">
                <div class="row" style="height:200px"></div>
                帳號：<input id="USRID" type="text" /><br /><br /><input id="hUSRID" type="hidden" />
                密碼：<input id="USRPASS" type="password" /><br /><br /><input id="hUSRPASS" type="hidden" />
                <a href="javascript:checkpass()" class="btn btn-primary" style="font-size:3vh;">登入</a>
                <script>getaccountdata();</script>
            </div>
            <div id="maindiv" style="vertical-align:middle;text-align:center;font-size:3vh;display:none;">
                <div id="maingroup">
                    <div class="col-md-2" style="padding-top:100px">
                        <ul>
                            <li>
                                <a data-toggle="collapse" role="button" href="#contactdiv" aria-expanded="false" aria-controls="contactdiv" style="color:dodgerblue">聯絡資料</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" role="button" href="#eventdiv" aria-expanded="false" aria-controls="eventdiv" style="color:dodgerblue">活動管理</a>
                            </li>
                            <li>
                                <a href="javascript:logout()" style="color:dodgerblue">登出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="collapse show" id="contactdiv" data-parent="#maingroup">
                            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown" style="background-color:white;padding-bottom:10px;">
                                <h2><span class="highlight-text" style="font-family:Verdana, Geneva, sans-serif, '微軟正黑體'; font-weight:bold; font-size: 5vh !important;">聯絡資料</span></h2>
                                <div id="contactdatajson" class="col-md-10">
                                </div>
                                <div class="col-md-2" style="text-align:center;">
                                    <a href="javascript:getjsondata()" style="color:dodgerblue">頁面刷新</a>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="eventdiv" data-parent="#maingroup">
                            <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown" style="background-color:white;padding-bottom:10px;">
                                <h2><span class="highlight-text" style="font-family:Verdana, Geneva, sans-serif, '微軟正黑體'; font-weight:bold; font-size: 5vh !important;">活動管理</span></h2>
                                <div class="col-md-10">
                                    <div class="row" style="border:solid;text-align:center;font-size:3vh;">
                                        <a href="https://docs.google.com/forms/u/1/">Step 1 點此至GOOGLE新增活動</a><br /><br />
                                        Step 2 將新增好的活動輸入並點新增<br />
                                        活動名稱：<input id="eventname" /><br /><br />
                                        活動網址：<input id="eventurl" /><br /><br />
                                        <a class="btn btn-primary" href="javascript:eventadd()">新增</a>
                                    </div>
                                    <br /><br /><br />
                                    <div class="row" style="text-align:center;font-size:3vh;">
                                        現有活動<hr /><br /><br />
                                        <div id="eventdatajson" class="col-md-12" style="text-align:center;"></div>
                                        <br /><br /><br /><br /><br /><br />
                                    </div>
                                </div>
                                <div class="col-md-2" style="text-align:center;">
                                    <a href="javascript:geteventdata()" style="color:dodgerblue">頁面刷新</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="contact/jqBootstrapValidation.js"></script>
    <script src="contact/contact_me.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/ShowDetail.js"></script>
</body>
</html>
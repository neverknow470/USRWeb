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
<section>
    <div class="row">
        <div class="col-md-5"><a href="MainPage.html" style="margin-right:0 !important;"><img src="images/logo/mainlogo.png" alt="東海大學" style="margin-top: 0 !important; height:90px;"></a></div>
        <div class="col-md-7">
            <span class="highlight-text" style="font-family:Verdana, Geneva, sans-serif, '微軟正黑體'; font-weight:bold; font-size: 3vh !important;"><br />東海大學USR後台系統</span>
        </div>
    </div>
    <hr style="margin:0;padding:0;border-color:silver;" />
    <div class="container">
        <div style="vertical-align:middle;text-align:center;font-size:3vh;">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                檔案名稱:<input type="file" name="file" id="file" />
                <input class="btn btn-default" type="submit" name="submit" value="上傳檔案" />
            </form>
            <?php
            if (isset($_FILES["file"])){
                if ($_FILES["file"]["error"] > 0){
                    echo 'Error:'.$_FILES["file"]["error"];
                }else{
                    echo '檔案名稱'.$_FILES["file"]["name"].'<br/>';
                    echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
                    echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
                    echo "暫存名稱: " . $_FILES["file"]["tmp_name"];
                    if (file_exists("upload/" . $_FILES["file"]["name"]."123")){
                        echo "檔案已經存在，請勿重覆上傳相同檔案";
                    }else{
                        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]."123");
                    }
                }
            }
            ?>
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
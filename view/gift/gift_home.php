<?php
include ("../base/check.php");
include("../../model/connect.php");
?>

<!DOCTYPE HTML>
<!--
    Read Only by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Read Only by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

        <link rel="stylesheet" href="../../jquery-mobile-css/main.css">
        <link rel="stylesheet" href="../../jquery-mobile-css/member1.css">
        <link rel="stylesheet" href="../../jquery-mobile-css/jquery.mobile-1.4.5.min.css">
        <script src="../../jquery-mobile-js/jssor.js"></script>
        <script src="../../jquery-mobile-js/jssor.slider.js"></script>
        <script src="./js/gift.js"></script>
        <script src="../../jquery-mobile-js/jquery-2.1.4.min.js"></script>
        <script src="../../jquery-mobile-js/jquery.qrcode.min.js"></script>
        <script src="../../jquery-mobile-js/jquery.mobile-1.4.5.min.js"></script>
<!--計算所需點數-->
<script type="text/javascript">
    var point;
    var sum;
    var giftid;
    var memid;
    var total;
    var giftQantity;
    function cul(){
        point = document.getElementById("point").value;
        pt = document.getElementById("pt").value;
        giftid= document.getElementById("gift_id").value;
        giftname= document.getElementById("gift_name").value;
        total= document.getElementById("total").value;
        gift_Quantity= document.getElementById("gift_Quantity").value;
        sum = point*pt;
        $("#qr").empty();   //清空qr
        console.log(sum);
        if (sum>total) {
            document.getElementById("msgX").innerHTML = "餘額不足";
            console.log("MSG ");
            window.location ="#openmodel1";
        }else if (point<=0){
            document.getElementById("msgX").innerHTML = "請重新選取欲兌換贈品，並輸入份數!";
            console.log("MSG ");
            window.location ="#openmodel1";
        }else if (point==""){
            document.getElementById("msgX").innerHTML = "請重新選取欲兌換贈品，並輸入份數!";
            console.log("MSG ");
            window.location ="#openmodel1";
        }
        else if(gift_Quantity<point)
        {
            document.getElementById("msgX").innerHTML = "份數太多，請重新輸入份數!";
            console.log("MSG ");
            window.location ="#openmodel1";
        }

        else{
            document.getElementById("msg").innerHTML = point+"份"+giftname+"，總共"+sum+"點!";
            console.log("MSG ");
            window.location ="#openmodel";
        }

    }
            
</script>

<!--計算所需點數 end-->

        <script>
        function goBack() {

            window.history.back();
        }
        </script>
        <script type="text/javascript">
            function go(typ){
                    giftdate.view(typ);
            }
        </script>
        <script >
        function reflash(){
            location.reload();
        }
        </script>


 <script>
        jssor_slider1_starter = function (containerId) {
            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    $Jssor$.$Delay(ScaleSlider, 30);
            }

            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);

            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };

    </script>
    <style>

    .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
    }
    .modalDialog:target {
    opacity:1;
    pointer-events: auto;
    }

    .modalDialog > div {
    top:100px;
    width: 80%;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
    }
    .close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
    }

    .close:hover { background: #00d9ff; }


    .badge{
      display:inline-block;min-width:10px;padding:3px 7px;
      font-size:12px;font-weight:bold;color:#fff;line-height:1;vertical-align:baseline;
      white-space:nowrap;text-align:center;background-color:#999;border-radius:10px;
       }
    .badge:empty{
         display:none
         }
    .pull-left{
      float:left !important}
    .menu{
      margin-left:-16.5px;
    }
  h3{
      text-align:center;
      color:#FFFFFF;
  }
  p{

      color:#FFFFFF;
  }


  .ui-li-static.ui-collapsible > .ui-collapsible-heading {
    margin: 0;
}
.ui-li-static.ui-collapsible {
    padding: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-heading > .ui-btn {
    border-top-width: 0;
}
.ui-li-static.ui-collapsible > .ui-collapsible-heading.ui-collapsible-heading-collapsed > .ui-btn,
.ui-li-static.ui-collapsible > .ui-collapsible-content {
    border-bottom-width: 0;
}
.img {
max-width:200px;
myimg:expression(onload=function(){
this.style.width=(this.offsetWidth > 200)?"200px":"auto"});
}
    </style>
</head>


<body style="background:#3C3C3C">

<!-- Panel -->
<div data-role="page" id="pageone" >
      <div id="right-menu1" data-role="panel" data-position="right" data-theme="b">
          <header>
          <span class="image avatar" style=""><img style="margin-left:20px;margin-top:10px;margin-bottom:10px;width:200px;height:200px;" src="../../../store/StoreManage/picture/member/<?php connect("member","imgtype"); ?>" alt="" /></span>

          <h1 id="logo" style="text-align:center"><a href="../member/member_home.php" target="_self"><?php connect("member","name"); ?></a></h1>
        </header>
    <a href="../point/point_home.php" target="_self" class="ui-btn" data-theme="b">集點</a>
    <a href="../gift/gift_home.php" target="_self" class="ui-btn" data-theme="b">贈品</a>
    <a href="../mission/mission_home.php" target="_self" class="ui-btn" data-theme="b">任務</a>
    <a href="../message/message_home.php" target="_self" class="ui-btn" data-theme="b">訊息</a>
    <a href="../question/question_home.php" target="_self" class="ui-btn" data-theme="b">問卷</a>
    <a href="../mission/mission_home.php" target="_self" class="ui-btn" data-theme="b">活動</a>
    <a href="../member/member_home.php?page=pageSearchStor" target="_self" class="ui-btn" data-theme="b">更換店家</a>
  </div>

<div data-role="header" data-position="fixed" data-theme="a" style="background:#FF2D2D;">
    <h3 style="color:#FFFFFF;">Juika bon</h3>
    <a class="ui-btn ui-icon-arrow-l ui-btn-icon-left " onclick="location.href='../home/home.php'" style="padding:18px; background:none;"></a>
    <a class="ui-btn ui-btn-right ui-btn-icon-left ui-icon-bars" style="padding:18px; background:none;" href="#right-menu1"></a>


 </div>



  <!-- Pageone main -->
  <div data-role="main" class="ui-content" style="background:#3C3C3C;">

      <div id='' class='row' >
          <div id='' class='menu col-lg-12 col-md-12 col-sm-12 col-xs-12'style="width:110%;">
            <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            <?php photo("view"); ?>
        </div>

        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 21 css */
            /*
            .jssorb21 div           (normal)
            .jssorb21 div:hover     (normal mouseover)
            .jssorb21 .av           (active)
            .jssorb21 .av:hover     (active mouseover)
            .jssorb21 .dn           (mousedown)
            */
            .jssorb21 {
                position: absolute;
                left:45% ! important

            }
            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                position: absolute;
                /* size of bullet elment */

                width: 19px;
                height: 19px;
                text-align: center;
                line-height: 19px;
                color: white;
                font-size: 12px;
                background: url(../../img/b21.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb21 div { background-position: -5px -5px; }
            .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
            .jssorb21 .av { background-position: -65px -5px; }
            .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->

        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 21 css */
            /*
            .jssora21l                  (normal)
            .jssora21r                  (normal)
            .jssora21l:hover            (normal mouseover)
            .jssora21r:hover            (normal mouseover)
            .jssora21l.jssora21ldn      (mousedown)
            .jssora21r.jssora21rdn      (mousedown)
            */
            .jssora21l, .jssora21r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(../../img/a21.png) center center no-repeat;
                overflow: hidden;
            }
            .jssora21l { background-position: -3px -33px; }
            .jssora21r { background-position: -63px -33px; }
            .jssora21l:hover { background-position: -123px -33px; }
            .jssora21r:hover { background-position: -183px -33px; }
            .jssora21l.jssora21ldn { background-position: -243px -33px; }
            .jssora21r.jssora21rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
    </div>
    <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
    <!-- Jssor Slider End -->
          </div>
      </div>




<div  style="width:100%;text-align:center; padding-top:10px;background:#FF2D2D;height:50px;color:#FFFFFF;font-size:20px" >贈品</div>


<div data-role="main" class="ui-content"  style=" background:#3C3C3C;height:500px; ">
              <form method="post" id='insert_form' style="padding-top:20px;" >
              <INPUT TYPE=hidden NAME="decide" VALUE="insert">

              <label for="search" class="ui-hidden-accessible">Search</label></br>
              <input  id="myFilter" data-type="search" style="-moz-border-radius: 20px; -webkit-border-radius:20px; border-radius: 20px;" maxLength="16" name="search" id="search" placeholder="Search">
              </form>

                                            <div  style="padding-top:5px; background:#FFFFFF; ">
                                            <ul data-role="listview" data-filter="true" data-input="#myFilter"  data-inset="true" class="primary-menu" style="border:5px" >
                                              <?php connect("gift","list") ?>
                                            </ul>
                                            </div>

                 <!-- data-role="footer"  style="height:200px; background:#3C3C3C; border-color:#3C3C3C;">
                 </div>-->

                </div>
           </div>
        </div>


<!-- 免費贈品 -->
<div data-role="page" id="pagetwo" style=" background:#3C3C3C;" >

<div id="right-menu2" data-role="panel" data-position="right" data-theme="b">
          <header>
          <span class="image avatar" style=""><img style="margin-left:20px;margin-top:10px;margin-bottom:10px;width:200px;height:200px;" src="../../../store/StoreManage/picture/member/<?php connect("member","imgtype"); ?>" alt="" /></span>

  <h1 id="logo" style="text-align:center"><a href="../member/member_home.php" target="_self"><?php connect("member","name"); ?></a></h1>
        </header>
    <a href="../point/point_home.php" target="_self" class="ui-btn" data-theme="b">集點</a>
    <a href="../gift/gift_home.php" target="_self" class="ui-btn" data-theme="b">贈品</a>
    <a href="../mission/mission_home.php" target="_self" class="ui-btn" data-theme="b">任務</a>
    <a href="../message/message_home.php" target="_self" class="ui-btn" data-theme="b">訊息</a>
    <a href="../question/question_home.php" target="_self" class="ui-btn" data-theme="b">問卷</a>
    <a href="../mission/mission_home.php" target="_self" class="ui-btn" data-theme="b">活動</a>
    <a href="../member/member_home.php?page=pageSearchStor" target="_self" class="ui-btn" data-theme="b">更換店家</a>
  </div>

<div data-role="header" data-position="fixed" data-theme="a" style="background:#FF2D2D;">
    <h3 style="color:#FFFFFF;">兌換贈品</h3>
    <a class="ui-btn ui-icon-arrow-l ui-btn-icon-left " onclick="goBack()" style="padding:18px; background:none;"></a>
    <a class="ui-btn ui-btn-right ui-btn-icon-left ui-icon-bars" style="padding:18px; background:none;" href="#right-menu2"></a>

</div>

<div data-role="main" class="ui-content"  style=" background:#3C3C3C;height:688px; ">



<div class="table-wrapper" style="margin-top:20px; background:#3C3C3C;">
    <table class="alt" style=" background:#3C3C3C; ">
        <tbody style=" background:#3C3C3C; ">
            <tr id="abc"; style=" background:#3C3C3C; ">
            </tr>
            <tr style=" background:#3C3C3C; ">
                <td style="border-color:#3C3C3C;color:#FFFFFF;text-align:center;display: table-cell;vertical-align:middle;"><input id="point" type="text" required/>份</td>
            </tr>
            <tr style=" background:#3C3C3C; ">
                <td style="border-color:#3C3C3C;text-align:center;vertical-align:middle;">
                <input type="button" onclick="cul()" value="兌換贈品" style="height:40px;width:280px;background:#33CCFF;border-color:#33CCFF;border-radius:10px;color:#FFFFFF;text-align:center;margin:0 auto;"/></td>
            </tr>
        </tbody>
    </table>

        <div id="openmodel" class="modalDialog">
            <div>
                <h2>Juika bon</h2>
                <p id="msg" style="font-size:20px"></p>
                <a href="#pagetwoQR" target="_self"><input type="button" value="確認兌換" style="background:#606061;font-size:14px" onclick="giftdate.insert(point,giftid,sum);"></a>
                <a href="#pageone"><input type="button" value="取消" style="background:#606061;font-size:14px"></a>
                </div>
        </div>
        <div id="openmodel1" class="modalDialog">
            <div>
                 <a href="#pageone" title="Close" class="close">X</a>
                <h2>Juika bon</h2>
                <p id="msgX" style="font-size:20;" ></p>
            </div>
        </div>

</div>


</div>
</div>

<!--pagetwo END-->

<!-- 免費贈品的QRCODE -->
<div data-role="page" id="pagetwoQR" style=" background:#3C3C3C;" >

    <div id="right-menu3" data-role="panel" data-position="right" data-theme="b">
          <header>
          <span class="image avatar" style=""><img style="margin-left:20px;margin-top:10px;margin-bottom:10px;width:200px;height:200px;" src="../../../store/StoreManage/picture/member/<?php connect("member","imgtype"); ?>" alt="" /></span>

<h1 id="logo" style="text-align:center"><a href="../member/member_home.php" target="_self"><?php connect("member","name"); ?></a></h1>
        </header>
    <a href="../point/point_home.php" target="_self" class="ui-btn" data-theme="b">集點</a>
    <a href="../gift/gift_home.php" target="_self" class="ui-btn" data-theme="b">贈品</a>
    <a href="../mission/mission_home.php" target="_self" class="ui-btn" data-theme="b">任務</a>
    <a href="../message/message_home.php" target="_self" class="ui-btn" data-theme="b">訊息</a>
    <a href="../question/question_home.php" target="_self" class="ui-btn" data-theme="b">問卷</a>
    <a href="../mission/mission_home.php" target="_self" class="ui-btn" data-theme="b">活動</a>
    <a href="../member/member_home.php?page=pageSearchStor" target="_self" class="ui-btn" data-theme="b">更換店家</a>  </div>

<div data-role="header" data-position="fixed" data-theme="a" style="background:#FF2D2D;">
    <h3 style="color:#FFFFFF;">兌換贈品</h3>
    <a class="ui-btn ui-icon-arrow-l ui-btn-icon-left " onclick="goBack()" target="_self" style="padding:18px; background:none;"></a>
    <a class="ui-btn ui-btn-right ui-btn-icon-left ui-icon-bars" style="padding:18px; background:none;" href="#right-menu3"></a>

</div>

<div data-role="main" class="ui-content"  style=" background:#3C3C3C;height:700px; ">


<div style="background:#87F6FF;border-color:#87F6FF;height:60px;width:80%;margin: 0px auto;margin-top:20px;font-size:28px;text-align:center;line-height:60px;color:#888888;border-radius:10px;">恭喜領取成功 </div>

<div style="background:#44FFD2;border-color:#44FFD2;height:120px;width:80%;margin: 0px auto;margin-top:30px;font-size:24px;text-align:center;line-height:60px;color:#888888;border-radius:10px;">兌換成功請至商家兌換<br>若須取消兌換請至商家 </div>


        <div style="background:#3C3C3C;border-color:#3C3C3C;text-align:center;vertical-align:middle;margin-top:30px;width:50%;float:left;"><button style="height:40px;width:60%;background:#DAF5FF;border-color:#DAF5FF;border-radius:10px;color:#888888;margin: 0px auto;"><a href="../home/home.php" style="font-size:14px;" target="_self">回首頁</a></button></div>
        <div style="background:#3C3C3C;border-color:#3C3C3C;text-align:center;vertical-align:middle;margin-top:30px;"><button style="height:40px;width:30%;background:#DAF5FF;border-color:#DAF5FF;border-radius:10px;color:#888888;margin: 0px auto;"><a href="#pageone" target="_self" style="font-size:14px;" onclick="reflash();">兌換更多</a></button></div>

</div>
</div>   <!--pagetwoQR END-->

</body>
</html><?php
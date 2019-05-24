<?php
/**
 * Template Name: Thanks
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
get_header(); 
global $dumketo;
$pageID = get_the_ID();
$page = get_post($pageID);
$title = $page->post_title; 
?>      
    <section class="inner-banner-section">        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">				
                    <div class="inner-banner-sec">
                        <h1>
                            <?php echo get_the_title(); ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>  

        <div class="clear"></div>
        <div class="tnxArea">
            <section class="tnxBanner">
                <div class="container sectnx">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 boxborders">
                        <h2 class="bntextpara1">Thank you for leaving your details. Our friendly service specialist will call you back soon.</2>
                        </h2>
                    </div>    
                </div>
                <div class="container sectnx">
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 thankyouImg">
                        <img class="img-responsive thanks-imgs" src="<?php echo home_url() ?>/wp-content/uploads/2017/09/Thank-you-page.jpg" alt="Thank You BeLocal Today" />
                    </div>
                </div>
            </section>

        </div>
<div class="clear"></div>
<?php get_footer(); ?>



<style>
    /*Thnak you Pages*/
section.tnxBanner {
    background: url(img/tnxbg.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center top;
    padding: 50px 0;
    width: 100%;
}
img.img-responsive.thanks-imgs {
    margin: 0 auto;
}
.thankyouImg {
}
h2.bntextpara1 {
    font-size: 40px;
    text-align: center;
    font-weight: 400;
    color: #11516d;
    padding: 40px 0px 60px 0px;
    margin-top: 0;
    margin-bottom: 50px;
}
.btn-home {
    padding: 0;
    margin: 0;
}
.tnxbtn {
    padding: 6px 0px;
    margin: 0;
    text-align: center;
    position: relative;
    bottom: 50px;
    
}
a.visitwebsite {
    background: url(img/visit.png);
    font-size: 40px;
    color: #FFF;
    font-weight: 600;
    padding: 12px 30px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center top;
}
ul.foottnxUl {
    list-style: none;
}
ul.foottnxUl li {
    float: left;
    padding-right: 15px;
}
ul.foottnxUl li a {
    font-size: 50px;
    color: #252060;
}
section.footer-tnx-area {
    background: #252060;
    color: #FFF;
    padding: 2% 0% 1% 0%;
    text-align: center;
}
p.tnxbelocal {
    font-size: 22px;
}
p.tnxbelocal a{
    font-size: 22px;
    color: #FFF;
}

/**Samsung s4 Portrite media query**/
@media only screen and (min-width:360px) and (max-width:479px) {
ul.foottnxUl {
    list-style: none;
    width: 84%;
    margin: 5px auto;
}
    
}
/**landscape  media query**/
@media (min-width:480px) and (max-width:767px) {
 ul.foottnxUl {
    list-style: none;
    width: 42%;
    margin: 0 auto;
}   
    
}
/**Iphone landscape media query**/
@media (min-width:550px) and (max-width:568px) {
    ul.foottnxUl {
    list-style: none;
    width: 50%;
    margin: 0 auto;
}
    
}

/**Ipad mini portrite media query**/
@media (min-width:768px) and (max-width:1023px) {
    
ul.foottnxUl {
    list-style: none;
    width: 35%;
    margin: 10px auto;
}
section.tnxBanner {
    height: 731px;
}
    
}
/**Portrite media query**/
@media all and (min-width:0px) and (max-width:768px) {
    
    .tnxbtn {
    position: relative;
    bottom: 0px;
    
}

ul.foottnxUl li a {
    font-size: 25px;
    color: #252060;
}
h2.bntextpara1 {
    font-size: 22px;
    text-align: center;
    font-weight: 400;
    padding: 40px 10px;
}   
    
}
@media only screen and (min-width: 2001px) {
section.tnxBanner {
      height: 1200px;
}
}
/*Thnak you Pages*/
</style>

<script>
    var shortNumber = $("#clickToShow").text().substring(0, $("#clickToShow").text().length - 8);
    $("#clickToShow").hide().after('<a id="clickToShowButton" class="show_number" href="javascript:toggle();">' + shortNumber + ' Click<span class="tins"> to Show<span></a>');
    $("#clickToShowButton").click(function () {
        $("#clickToShow").show();
        $("#clickToShowButton").hide();
    });
    var shortNumber = $("#clickToShow2").text().substring(0, $("#clickToShow2").text().length - 8);
    $("#clickToShow2").hide().after('<a id="clickToShowButton2" class="show_number" href="javascript:toggle();">' + shortNumber + ' Click<span class="tins"> to Show<span></a>');
    $("#clickToShowButton2").click(function () {
        $("#clickToShow2").show();
        $("#clickToShowButton2").hide();
    });
        var shortNumber = $("#clickToShow3").text().substring(0, $("#clickToShow3").text().length - 8);
    $("#clickToShow3").hide().after('<a id="clickToShowButton3" class="show_number" href="javascript:toggle();">' + shortNumber + ' Click<span class="tins"> to Show<span></a>');
    $("#clickToShowButton3").click(function () {
        $("#clickToShow3").show();
        $("#clickToShowButton3").hide();
    });
</script>
<!-- SHOW NUMBER SCRIPT -->

        <?php wp_footer(); ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zahid3
 * Template Name: Home
 */

get_header();
?>

<div class="header-bg">
    <div class="container">
        <div class="rev_slider_wrapper">
            <!-- the ID here will be used in the JavaScript below to initialize the slider -->
            <div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">
                <!-- start slides -->
                <ul>
                    <!-- slides item -->
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Slide">
                        <!-- layer no. 1 -->
                        <div class="tp-caption LandingPage-Title tp-resizeme" 
                        id="slide-1-layer-1" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['170','50','70','45']" 
                        data-fontsize="['60','60','45','35']"
                        data-lineheight="['85','85','55','40']"
                        data-letterspacing="4"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','center','center','center']"
                        data-fontweight="400"
                        style="z-index: 5; white-space: nowrap;">The Best Place To <br> Satisfy Your Tummy</div>
                        <!-- layer no. 2 -->
                        <div class="tp-caption LandingPage-SubTitle   tp-resizeme" 
                        id="slide-1-layer-2" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['355','240','215','140']" 
                        data-fontsize="['25','25','17','17']"
                        data-lineheight="['30','30','25','25']"
                        data-width="['450','450','450','450']"
                        data-fontweight="500"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','center','center']"
                        style="z-index: 7;white-space: normal;font-style:normal;">Special Mashroom Fry Pizza Only At
                        </div>
                        <!-- layer no. 3 -->
                        <div class="tp-caption LandingPage-SubTitle tp-resizeme" 
                        id="slide-1-layer-3" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['415','300','270','185']" 
                        data-fontsize="['20','20','17','17']"
                        data-lineheight="['30','30','25','25']"
                        data-width="['380','380','380','380']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','center','center','center']"
                        style="z-index: 7;white-space: normal;font-style:normal; display: flex;align-items: center; max-width: 300px;">
                        <a href="shop-details.html" class="btn">Order Now <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                        <p class="header-product-price color-white">$10.99 <del>$18.99</del></p>
                        </div>
                        <!-- layer no. 4 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-4" 
                        data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['87','380','370','270']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-carousel-1.png" alt="" data-ww="['550px','550px','550px','550px']" data-hh="['520px','520px','520px','520px']" width="650" height="615" data-no-retina> </div>
                        <!-- layer no. 5 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-5" 
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']" data-voffset="['30','30','30','30']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 6 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-6" 
                        data-x="['center','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['50','-10','10','-20']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-2.png" alt="" data-ww="['90px','90px','90px','90px']" data-hh="['81px','81px','81px','81px']" width="90" height="81" data-no-retina> </div>
                        <!-- layer no. 7 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-7" 
                        data-x="['right','right','right','right']" 
                        data-y="['top','top','top','top']" data-voffset="['-45','-45','-45','-75']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>
                        <!-- layer no. 8 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-8" 
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']" data-voffset="['150','150','150','150']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 9 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-9" 
                        data-x="['center','center','center','center']"
                        data-y="['center','center','center','center']" data-voffset="['150','150','150','150']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 10 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-10" 
                        data-x="['left','left','left','left']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>
                        <!-- layer no. 11 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-1-layer-11" 
                        data-x="['right','right','right','right']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-4.png" alt="" data-ww="['318px','318px','318px','318px']" data-hh="['209px','209px','209px','209px']" width="318" height="209" data-no-retina> </div>
                    </li>
                    <!-- slides item -->
                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Slide">
                        <!-- layer no. 1 -->
                        <div class="tp-caption LandingPage-Title tp-resizeme" 
                        id="slide-2-layer-1" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['170','50','70','45']" 
                        data-fontsize="['60','60','45','35']"
                        data-lineheight="['85','85','55','40']"
                        data-letterspacing="4"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','center','center','center']"
                        data-fontweight="400"
                        style="z-index: 5; white-space: nowrap;">We Ensure That You <br> Will Be Satisfied</div>
                        <!-- layer no. 2 -->
                        <div class="tp-caption LandingPage-SubTitle   tp-resizeme" 
                        id="slide-2-layer-2" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['355','240','215','140']" 
                        data-fontsize="['25','25','17','17']"
                        data-lineheight="['30','30','25','25']"
                        data-width="['450','450','450','450']"
                        data-fontweight="500"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','center','center']"
                        style="z-index: 7;white-space: normal;font-style:normal;">Double Layer Garlic Sauce Burger
                        </div>
                        <!-- layer no. 3 -->
                        <div class="tp-caption LandingPage-SubTitle tp-resizeme" 
                        id="slide-2-layer-3" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['415','300','270','185']" 
                        data-fontsize="['20','20','17','17']"
                        data-lineheight="['30','30','25','25']"
                        data-width="['380','380','380','380']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','center','center','center']"
                        style="z-index: 7;white-space: normal;font-style:normal; display: flex;align-items: center; max-width: 300px;">
                        <a href="shop-details.html" class="btn">Order Now <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                        <p class="header-product-price color-white">$9.99 <del>$15.99</del></p>
                        </div>
                        <!-- layer no. 4 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-4" 
                        data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['87','380','370','270']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-carousel-2.png" alt="" data-ww="['550px','550px','550px','550px']" data-hh="['520px','520px','520px','520px']" width="650" height="615" data-no-retina> </div>
                        <!-- layer no. 5 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-5" 
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']" data-voffset="['30','30','30','30']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 6 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-6" 
                        data-x="['center','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['50','-10','10','-20']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-2.png" alt="" data-ww="['90px','90px','90px','90px']" data-hh="['81px','81px','81px','81px']" width="90" height="81" data-no-retina> </div>
                        <!-- layer no. 7 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-7" 
                        data-x="['right','right','right','right']" 
                        data-y="['top','top','top','top']" data-voffset="['-45','-45','-45','-75']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>
                        <!-- layer no. 8 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-8" 
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']" data-voffset="['150','150','150','150']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 9 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-9" 
                        data-x="['center','center','center','center']"
                        data-y="['center','center','center','center']" data-voffset="['150','150','150','150']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 10 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-10" 
                        data-x="['left','left','left','left']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>
                        <!-- layer no. 11 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-2-layer-11" 
                        data-x="['right','right','right','right']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-4.png" alt="" data-ww="['318px','318px','318px','318px']" data-hh="['209px','209px','209px','209px']" width="318" height="209" data-no-retina> </div>
                    </li>
                    <!-- slides item -->
                    <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Slide">
                        <!-- layer no. 1 -->
                        <div class="tp-caption LandingPage-Title tp-resizeme" 
                        id="slide-3-layer-1" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['170','50','70','45']" 
                        data-fontsize="['60','60','45','35']"
                        data-lineheight="['85','85','55','40']"
                        data-letterspacing="4"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','center','center','center']"
                        data-fontweight="400"
                        style="z-index: 5; white-space: nowrap;">Best Combo Offer <br> For Your Satisfiction</div>
                        <!-- layer no. 2 -->
                        <div class="tp-caption LandingPage-SubTitle   tp-resizeme" 
                        id="slide-3-layer-2" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['355','240','215','140']" 
                        data-fontsize="['25','25','17','17']"
                        data-lineheight="['30','30','25','25']"
                        data-width="['450','450','450','450']"
                        data-fontweight="500"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','center','center']"
                        style="z-index: 7;white-space: normal;font-style:normal;">Burger + Chicken + Drinks
                        </div>
                        <!-- layer no. 3 -->
                        <div class="tp-caption LandingPage-SubTitle tp-resizeme" 
                        id="slide-3-layer-3" 
                        data-x="['left','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['415','300','270','185']" 
                        data-fontsize="['20','20','17','17']"
                        data-lineheight="['30','30','25','25']"
                        data-width="['380','380','380','380']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','center','center','center']"
                        style="z-index: 7;white-space: normal;font-style:normal; display: flex;align-items: center; max-width: 300px;">
                        <a href="shop-details.html" class="btn">Order Now <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                        <p class="header-product-price color-white">$20.99 <del>$28.99</del></p>
                        </div>
                        <!-- layer no. 4 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-4" 
                        data-x="['right','center','center','center']" data-hoffset="['0','0','0','0']" 
                        data-y="['top','top','top','top']" data-voffset="['87','380','370','270']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-carousel-3.png" alt="" data-ww="['550px','550px','550px','550px']" data-hh="['520px','520px','520px','520px']" width="650" height="615" data-no-retina> </div>
                        <!-- layer no. 5 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-5" 
                        data-x="['left','left','left','left']"
                        data-y="['top','top','top','top']" data-voffset="['30','30','30','30']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 6 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-6" 
                        data-x="['center','center','center','center']" 
                        data-y="['top','top','top','top']" data-voffset="['50','-10','10','-20']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:-50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-2.png" alt="" data-ww="['90px','90px','90px','90px']" data-hh="['81px','81px','81px','81px']" width="90" height="81" data-no-retina> </div>
                        <!-- layer no. 7 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-7" 
                        data-x="['right','right','right','right']" 
                        data-y="['top','top','top','top']" data-voffset="['-45','-45','-45','-75']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>
                        <!-- layer no. 8 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-8" 
                        data-x="['right','right','right','right']"
                        data-y="['top','top','top','top']" data-voffset="['150','150','150','150']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:-50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 9 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-9" 
                        data-x="['center','center','center','center']"
                        data-y="['center','center','center','center']" data-voffset="['150','150','150','150']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"x:50px;rZ: -120deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-1.png" alt="" data-ww="['42px','42px','42px','42px']" data-hh="['43px','43px','43px','43px']" width="42" height="43" data-no-retina> </div>
                        <!-- layer no. 10 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-10" 
                        data-x="['left','left','left','left']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-3.png" alt="" data-ww="['110px','110px','110px','110px']" data-hh="['143px','143px','143px','143px']" width="110" height="143" data-no-retina> </div>
                        <!-- layer no. 11 -->
                        <div class="tp-caption tp-resizeme" 
                        id="slide-3-layer-11" 
                        data-x="['right','right','right','right']"
                        data-y="['bottom','bottom','bottom','bottom']"
                        data-type="image" 
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power3.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        style="z-index: 8;border-width:0px;"><img src="<?php bloginfo('template_url'); ?>/assets/images/header-shape-4.png" alt="" data-ww="['318px','318px','318px','318px']" data-hh="['209px','209px','209px','209px']" width="318" height="209" data-no-retina> </div>
                    </li>
                </ul><!-- END SLIDES LIST -->
                <!-- .end slides -->
            </div>
        </div>
    </div>
</div>
<section class="welcome-section bg-overlay-1 pt-100 pb-70 bg-black">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-5 col-lg-5 pb-30">
                <div class="section-title section-title-left text-center text-md-left m-0">
                    <small>Welcome To Fafo</small>
                    <h2 class="color-white">We Serve The Best Food Of The Country</h2>
                    <p>We are the country's no.1 Fast food retailer with 15+ years of reputation. Country's best burger and pizza are delivered by us. We gain the satisfaction of our customers with our delicate service and extreme high food quality.</p>
                    <a href="about-us.html" class="btn">
                        More About Us
                        <i class="flaticon-right-arrow-sketch-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-7">
                <div class="about-image-grid">
                    <div class="about-image-grid-item">
                        <div class="about-image-grid-inner mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/welcome-image-1.jpg" alt="welcome">
                        </div>
                        <div class="about-image-grid-inner mb-30">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/welcome-image-2.jpg" alt="welcome">
                        </div>
                    </div>
                    <div class="about-image-grid-item">
                        <div class="about-image-grid-inner fluid-height">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/welcome-image-3.jpg" alt="welcome">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .end welcome-section -->
<!-- menu-section -->
<section class="menu-section menu-section-bg pt-100 pb-70 bg-black">
    <div class="container position-relative">
        <div class="section-title">
            <small>Menu</small>
            <h2 class="color-white">Just Choose From The Best</h2>
        </div>
        <div class="menu-main-carousel-area">
            <div class="menu-main-thumb-nav">
                <div class="menu-main-thumb-item">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-1.png" alt="menu">
                        <p>Burger</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-2.png" alt="menu">
                        <p>Pizza</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-3.png" alt="menu">
                        <p>Sandwitch</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-4.png" alt="menu">
                        <p>Shake</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-5.png" alt="menu">
                        <p>Ice-Cream</p>
                    </div>
                </div>
                <div class="menu-main-thumb-item">
                    <div class="menu-main-thumb-inner">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/menu-6.png" alt="menu">
                        <p>Dessert</p>
                    </div>
                </div>
            </div>
            <div class="menu-main-details-for">
                <div class="menu-main-details-item">
                    <div class="menu-details-carousel">
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Chicken Burger</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$12.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-slider-1.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Mexican Burger</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$10.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-slider-2.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Double Dekar</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-slider-3.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Beefka Burger</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-slider-4.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Avocado Dekar</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/burger-slider-5.png" alt="menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="menu-details-carousel">
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Cheese Pizza</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$12.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-slider-1.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Mexican Pizza</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$10.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-slider-2.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Italiano Pizza</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-slider-3.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Beefka Pizza</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-slider-4.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Chicken Pizza</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/pizza-slider-5.png" alt="menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="menu-details-carousel">
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Italiano Sandwitch</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$12.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-slider-1.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>American Sandwitch</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$10.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-slider-2.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Jam Sandwitch</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-slider-3.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Avocado Sandwitch</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-slider-4.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Egg Sandwitch</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/sandwitch-slider-5.png" alt="menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="menu-details-carousel">
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Cherry Venilla</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$12.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-slider-1.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Strawberry Shake</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$10.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-slider-2.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Fruty Pebble</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-slider-3.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Oreo Shake</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-slider-4.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Banana Shake</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/shake-slider-5.png" alt="menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="menu-details-carousel">
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Creamy Cream</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$12.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-slider-1.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Regular Chocolate</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$10.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-slider-2.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>French Icecream</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-slider-3.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Perfect Pear</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-slider-4.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Light Icecream</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/icecream-slider-5.png" alt="menu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-main-details-item">
                    <div class="menu-details-carousel">
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Decadent</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$12.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-slider-1.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Frozen</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$10.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-slider-2.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Luscious</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-slider-3.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Creamy</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-slider-4.png" alt="menu">
                            </div>
                        </div>
                        <div class="menu-details-carousel-item menu-details-carousel-black">
                            <h3>Zesty</h3>
                            <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper.</p>
                            <h4 class="menu-price">$20.99</h4>
                            <a href="#" class="btn btn-yellow">
                                Add To Cart <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            <div class="menu-details-carousel-image">
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/dessert-slider-5.png" alt="menu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .end menu-section -->
<!-- step-section -->
<section class="step-section p-tb-100 bg-black">
    <div class="container">
        <div class="section-title">
            <h2 class="color-white">3 Easy Steps To Enjoy</h2>
        </div>
        <div class="steps-box">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="steps-item">
                        <h3>1. Choose</h3>
                        <p>Choose Your Best Combos From The Thousands Of Exciting Items.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="steps-item">
                        <h3>2. Pay</h3>
                        <p>Pay Through Online Easily. We Use The Most Safe way In Payment.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                    <div class="steps-item">
                        <h3>3. Enjoy</h3>
                        <p>Enjoy Your Meal From The Core Of Heart & Feel The Taste Inside.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .end step-section -->
<!-- special-section -->
<div class="special-section bg-overlay-2 pt-100 pb-70 bg-black">
    <div class="container">
        <div class="section-title">
            <small>Speciality</small>
            <h2 class="color-white">Our Special Ingridients</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-4 col-lg-4 text-right wow animate__slideInUp" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <div class="info-item info-item-right info-item-white">
                    <h3>Fresh <span>Bun</span></h3>
                    <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper. Served on buns topped with lettuce.</p>
                </div>
                <div class="info-item info-item-right info-item-white">
                    <h3>Slice <span>Onion</span></h3>
                    <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper. Served on buns topped with lettuce.</p>
                </div>
                <div class="info-item info-item-right info-item-white">
                    <h3>Double <span>Chicken</span></h3>
                    <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper. Served on buns topped with lettuce.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 wow animate__zoomIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                <div class="info-image">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/special-food.png" alt="special-food">
                    <div class="info-shape">
                        <div class="info-shape-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-1.png" alt="shape">
                        </div>
                        <div class="info-shape-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-2.png" alt="shape">
                        </div>
                        <div class="info-shape-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-3.png" alt="shape">
                        </div>
                        <div class="info-shape-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-4.png" alt="shape">
                        </div>
                        <div class="info-shape-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-5.png" alt="shape">
                        </div>
                        <div class="info-shape-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/arrow-6.png" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 wow animate__slideInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                <div class="info-item info-item-left info-item-white">
                    <h3>Pure <span>Butter</span></h3>
                    <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper. Served on buns topped with lettuce.</p>
                </div>
                <div class="info-item info-item-left info-item-white">
                    <h3>Fresh <span>Lettuse</span></h3>
                    <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper. Served on buns topped with lettuce.</p>
                </div>
                <div class="info-item info-item-left info-item-white">
                    <h3>Pure <span>Cheese</span></h3>
                    <p>This Mexican Style Burger is pumped out with flavor from chilli powder, cilantro & jalapeno pepper. Served on buns topped with lettuce.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .end special-section -->
<!-- combo-section -->
<section class="combo-section bg-black pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <small>Combos</small>
            <h2 class="color-white">Our Best Combos To Choose</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="combo-box">
                    <div class="combo-box-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/combo-1.jpg" alt="combo">
                    </div>
                    <div class="combo-box-content">
                        <h3>Combo 1</h3>
                        <h4><span>2 Burgers</span> With French Fries</h4>
                        <a href="shop-details.html" class="btn">
                            Order Now
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                    <div class="combo-offer-shape">
                        <div class="combo-shape-inner">
                            <small>Only At</small>
                            <p>$10.91</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="combo-box">
                    <div class="combo-box-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/combo-2.jpg" alt="combo">
                    </div>
                    <div class="combo-box-content">
                        <h3>Combo 2</h3>
                        <h4><span>3 Pizza</span> In 1 Combo Pack</h4>
                        <a href="shop-details.html" class="btn">
                            Order Now
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                    <div class="combo-offer-shape">
                        <div class="combo-shape-inner">
                            <small>Only At</small>
                            <p>$30.91</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="combo-box">
                    <div class="combo-box-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/combo-3.jpg" alt="combo">
                    </div>
                    <div class="combo-box-content">
                        <h3>Combo 3</h3>
                        <h4><span>3 Burgers</span> With Cold Drinks</h4>
                        <a href="shop-details.html" class="btn">
                            Order Now
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                    <div class="combo-offer-shape">
                        <div class="combo-shape-inner">
                            <small>Only At</small>
                            <p>$12.45</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="combo-box">
                    <div class="combo-box-image">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/combo-4.jpg" alt="combo">
                    </div>
                    <div class="combo-box-content">
                        <h3>Combo 4</h3>
                        <h4><span>3 Burgers</span> With Drinks & Salad</h4>
                        <a href="shop-details.html" class="btn">
                            Order Now
                            <i class="flaticon-shopping-cart-black-shape"></i>
                        </a>
                    </div>
                    <div class="combo-offer-shape">
                        <div class="combo-shape-inner">
                            <small>Only At</small>
                            <p>$18.75</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .end combo-section -->
<!-- download-section -->
<section class="download-section building-shape pt-100 pb-70 bg-overlay-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-7 pb-30">
                <div class="download-image-grid">
                    <div class="download-image-mobile wow animate__slideInLeft" data-wow-duration="1.3s" data-wow-delay="0.1s">
                        <div class="download-image-mobile-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/mobile-shape-1.png" alt="mobile">
                        </div>
                        <div class="download-image-mobile-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/mobile-shape-2.png" alt="mobile">
                        </div>
                    </div>
                    <div class="download-image-rider wow animate__slideInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/rider.png" alt="rider">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="about-content section-title text-center text-lg-right m-0">
                    <h2 class="color-white">Download Our App & Order Online To Get Free Delivery</h2>
                    <p>We are the country's no.1 Fast food retailer with 15+ years of reputation. Country's best burger and pizza are delivered by us. We gain the satisfaction of our customers with our delicate service and extreme high food quality.</p>
                    <ul class="button-list justify-content-center justify-content-lg-end">
                        <li>
                            <a href="#" class="btn">
                                Download From
                                <i class="flaticon-playstore"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn">
                                Download From
                                <i class="icofont-brand-appstore"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .end download-section -->
<!-- testimonial-section -->
<section class="testimonial-section p-tb-100 bg-black bg-overlay-1">
    <div class="container">
        <div class="section-title">
            <small>Review</small>
            <h2 class="color-white">Clients Review About Our Food</h2>
        </div>
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-1.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">Angela Carter</h3>
                            <h4 class="carousel-designation">CEO of Rockings</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-2.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">John Karahan</h3>
                            <h4 class="carousel-designation">Food Bloger</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-3.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">Anthony Artan</h3>
                            <h4 class="carousel-designation">Restaurant Owner</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-1.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">Angela Carter</h3>
                            <h4 class="carousel-designation">CEO of Rockings</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-2.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">John Karahan</h3>
                            <h4 class="carousel-designation">Food Bloger</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-3.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">Anthony Artan</h3>
                            <h4 class="carousel-designation">Restaurant Owner</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-1.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">Angela Carter</h3>
                            <h4 class="carousel-designation">CEO of Rockings</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-2.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">John Karahan</h3>
                            <h4 class="carousel-designation">Food Bloger</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-carousel-item bg-main">
                    <p class="carousel-para">The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo.</p>
                    <div class="carousel-info-grid">
                        <div class="carousel-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/client-3.jpg" alt="client">
                        </div>
                        <div class="carousel-info text-right">
                            <div class="review-star">
                                <ul class="justify-content-end">
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                    <li class="full-star"><i class="flaticon-star-1"></i></li>
                                </ul>
                            </div>
                            <h3 class="carousel-name">Anthony Artan</h3>
                            <h4 class="carousel-designation">Restaurant Owner</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .end testimonial-section -->
<!-- video-section -->
<div class="video-section p-tb-100">
    <div class="container">
        <div class="video-button">
            <a href="https://www.youtube.com/watch?v=h_YmYLYi65k" id="video-popup"><i class="flaticon-play-button"></i></a>
        </div>
    </div>
</div>
<!-- .end video-section -->
<!-- blog-section -->
<section class="blog-section p-tb-100 bg-overlay-2">
    <div class="container">
        <div class="section-title">
            <small>Blog</small>
            <h2 class="color-white">Read Our Latest Food News</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                <div class="blog-card blog-card-white">
                    <div class="blog-card-thumb">
                        <a href="blog-details.html">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/blog-1.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="blog-card-content">
                        <ul class="blog-entry">
                            <li><i class="flaticon-calendar-1"></i>20 Oct 2020</li>
                            <li><i class="flaticon-man-user"></i>By Admin</li>
                        </ul>
                        <h3><a href="blog-details.html">Why Burger Made So Tasty In Recent Days</a></h3>
                        <p>This Mexican Style Burger is pumped out with flavor</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-card blog-card-white">
                    <div class="blog-card-thumb">
                        <a href="blog-details.html">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/blog-2.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="blog-card-content">
                        <ul class="blog-entry">
                            <li><i class="flaticon-calendar-1"></i>15 Oct 2020</li>
                            <li><i class="flaticon-man-user"></i>By Admin</li>
                        </ul>
                        <h3><a href="blog-details.html">What Is More Convenient? Dine In Or Take Away?</a></h3>
                        <p>This Mexican Style Burger is pumped out with flavor</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 pb-30 offset-md-3 offset-lg-0 wow animate__slideInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="blog-card blog-card-white">
                    <div class="blog-card-thumb">
                        <a href="blog-details.html">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/blog-1.jpg" alt="blog">
                        </a>
                    </div>
                    <div class="blog-card-content">
                        <ul class="blog-entry">
                            <li><i class="flaticon-calendar-1"></i>12 Oct 2020</li>
                            <li><i class="flaticon-man-user"></i>By Admin</li>
                        </ul>
                        <h3><a href="blog-details.html">What Is The Most Hived Pizza Among The Teen Agers?</a></h3>
                        <p>This Mexican Style Burger is pumped out with flavor</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="blogs-grid-without-sidebar.html" class="btn">Explore Blog <i class="flaticon-right-arrow-2"></i></a>
        </div>
    </div>
</section>
<!-- .end blog-section -->
<!-- subscribe-section -->
<section class="subscribe-section mural-bg pt-100 pb-70 bg-main">
    <div class="container">
        <div class="subscribe-grid">
            <div class="subscribe-item">
                <div class="section-title text-center text-lg-left m-0">
                    <h2 class="color-white">Subscribe Our Newsletter</h2>
                    <p>Don't miss any upcoming event & Get your coupon via email.</p>
                </div>
            </div>
            <div class="subscribe-item">
                <div class="subscribe-form">
                    <form class="newsletter-form newsletter-form-white" data-toggle="validator">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" id="emails" class="form-control" placeholder="Enter Email Address*" name="EMAIL" required autocomplete="off">
                            </div>
                            <button class="btn btn-yellow" type="submit">Subscribe <i class="flaticon-right-arrow-sketch-1"></i></button>
                        </div>
                        <div id="validator-newsletter" class="form-result color-white"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>














<?php

get_footer();

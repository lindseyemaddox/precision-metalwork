<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="/_assets/slider/settings.css">
    <link rel="stylesheet" type="text/css" href="/_assets/slider/navigation.css">

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="/_assets/slider/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/_assets/slider/jquery.themepunch.revolution.min.js"></script>

    <!-- REVOLUTION EXTENSIONS -->
    <script type="text/javascript" src="/_assets/slider/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="/_assets/slider/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="/_assets/slider/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="/_assets/slider/revolution.extension.video.min.js"></script>

    <!-- FLEXSLIDER CAROUSEL -->
    <script type="text/javascript" src="/_assets/js/flexslider.jquery.js"></script>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>


    <!-- SLIDER EXAMPLE -->
    <section id="header">

        <article class="content">


            <div id="rev_slider_210_1_wrapper" class="rev_slider_wrapper fullwidth-container" data-alias="sliding-overlays">

                <div id="rev_slider_210_1" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.1RC">

                    <ul>

                        <li data-index="rs-696" data-transition="slidingoverlayvertical" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Welcome" data-description="">

                            <div class="inner">

                                <div class="tp-caption WebProduct-Title-Light   tp-resizeme" id="slide-227-layer-7" 
                                     data-x="['left','left','left','left']" data-hoffset="['200','30','200','80']" 
                                     data-y="['middle','middle','top','top']" data-voffset="['-80','-80','137','130']" 
                                    data-width="['1000','356','334','277']"
                                    data-height="['none','none','76','68']"
                                    data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                     data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
                                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
                                    data-start="1000" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" >
                                    <h1>Welcome to Precision Metalwork, Inc.</h1>
                                </div>

                                <div class="tp-caption WebProduct-SubTitle-Light   tp-resizeme" id="slide-227-layer-10" 
                                     data-x="['left','left','left','left']" data-hoffset="['200','30','200','80']" 
                                     data-y="['middle','middle','top','top']" data-voffset="['44','44','294','277']" 
                                    data-width="['1000','356','334','277']"
                                    data-height="['none','none','76','68']"
                                    data-whitespace="normal"
                                    data-transform_idle="o:1;"
                                     data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
                                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
                                    data-start="1400" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on" >
                                    <h2>Located just outside <span>Nashville, Tennessee,</span> Precision Metalwork has been manufacturing and customizing quality sheet metal products since 1971.</h2>
                                </div>

                                <div class="tp-caption WebProduct-Content-Light   tp-resizeme" id="slide-227-layer-9" 
                                     data-x="['left','left','left','left']" data-hoffset="['200','30','200','80']" 
                                     data-y="['middle','middle','top','top']" data-voffset="['129','127','345','316']" 
                                    data-width="['1000','356','334','277']"
                                    data-height="['none','none','76','68']"
                                    data-whitespace="normal"
                                    data-transform_idle="o:1;"                         
                                     data-transform_in="x:-50px;opacity:0;s:1000;e:Power2.easeOut;" 
                                     data-transform_out="opacity:0;s:1500;e:Power4.easeIn;s:1500;e:Power4.easeIn;" 
                                    data-start="1800" 
                                    data-splitin="none" 
                                    data-splitout="none" 
                                    data-responsive_offset="on">
                                    <h4>In addition to producing parts, components, assemblies, and finished products, we offer a full range of metal fabrication services—such as shearing, hole punching, laser cutting, bending, welding, assembling, and painting. </h4>
                                </div>

                            </div><!--inner-->

                        </li>

                        <video loop autoplay>
                            <source src="/_assets/slider/precision-metalwork.mp4" type="video/mp4">
                            <source src="/_assets/slider/precision-metalwork.ogv" type="video/ogg">
                            <img src="../../assets/images/dummy.png" alt="" data-lazyload="/_assets/img/video.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        </video> 

                    </ul>
                  
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                
                </div>
            
            </div>
            
            <!-- END REVOLUTION SLIDER -->
            
            <script type="text/javascript">
                var tpj = jQuery;

                var revapi210;
                tpj(document).ready(function() {
                    if (tpj("#rev_slider_210_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_210_1");
                    } else {
                        revapi210 = tpj("#rev_slider_210_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "../../revolution/js/",
                            sliderLayout: "fullwidth",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                onHoverStop: "off",
                                arrows: {
                                    enable: false,
                                }
                            },
                            responsiveLevels:[1240,1024,778,480],
                            gridwidth:[1400,1240,778,480],
                            gridheight:[868,768,960,720],
                            lazyType: "single",
                            spinner: "on",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: 1,
                            shuffle: "off",
                            autoHeight: "on",
                            disableProgressBar: "off",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLimit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }
                }); /*ready*/
            </script>

        </article>
    </section>

    <section class="white">

        <div class="inner">

            <h3>Metal Painting Services</h3>

            <div class="two">

                <article>

                    <span class="icon-wet-paint">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span>
                    </span>

                    <h5>Wet Painting</h5>

                    <p>We prime and wet paint metal—including stainless steel, aluminum, carbon steel, and more.</p>

                </article>

                <article>

                    <span class="icon-dry-paint">
                        <span class="path1"></span><span class="path2"></span>
                    </span>

                    <h5>Powder Coating</h5>

                    <p>Get a durable, weather-resistant solution for your metal products and assemblies.</p>

                </article>

            </div><!--two-->

        </div><!--inner-->

    </section><!--white-->

    <section class="fixed press"></section>

    <section class="white">

        <div class="inner">

            <h3>Metalwork Fabrication &amp; Assembly Services</h3>

            <div class="four">

                <article>

                    <span class="icon-punch">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                    </span>

                    <h5>Punch &amp; Form</h5>

                    <p>We’ll form the perfect solution for your metal fabrication needs.</p>

                </article>

                <article>

                    <span class="icon-laser">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                    </span>

                    <h5>Welding &amp; Laser Cutting</h5>

                    <p>Learn about our custom metal welding and laser cutting services.</p>

                </article>

                <article>

                    <span class="icon-grinding">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                    </span>

                    <h5>Grinding &amp; Polishing</h5>

                    <p>Our metal grinding, polishing, and buffing services ensure a great finish.</p>

                </article>

                <article>

                    <span class="icon-assembly">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span>
                    </span>

                    <h5>Fabrication &amp; Assembly</h5>

                    <p>We manufacture and assemble a wide variety of metal components.</p>

                </article>

            </div><!--four-->

        </div><!--inner-->

    </section><!--white-->

    <section class="fixed line"></section>

    <section class="white slider">

        <div class="inner">
            
            <div class="flexslider carousel">
            
                <ul class="slides">
            
                    <li><img src="/_assets/img/portfolio-stacked.jpg" alt="stacked metal stuff"/></li>

                    <li><img src="/_assets/img/portfolio-grid.jpg" alt="stacked metal stuff"/></li>

                    <li><img src="/_assets/img/portfolio-scrap-plate.jpg" alt="scrap plate"/></li>

                    <li><img src="/_assets/img/portfolio-scraps.jpg" alt="metal scraps"/></li>

                    <li><img src="/_assets/img/portfolio-trimmed.jpg" alt="trimmed metal"/></li>

                </ul>

            </div><!--flexslider-->

        </div><!--inner-->
    
    </section><!--slider-->

    <script type="text/javascript">

        $(document).ready(function() {
          $('.flexslider').flexslider({
            minItems: 1,
            maxItems: 5
          });
        });

    </script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>
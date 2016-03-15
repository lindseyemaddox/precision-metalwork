<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<script type="text/javascript" src="/_assets/js/flexslider.jquery.js"></script>
<script type="text/javascript" src="/_assets/js/fancybox.jquery.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<div id="opacity">

<div id="subHead">

    <div class="inner">

        <h1>Metal Painting Services</h1>

    </div><!--inner-->

</div><!--subHead-->

<section class="white sliderComp">

    <div class="inner">

        <h6>Precision Metalwork has a full-service metal painting department that offers both a certified <a href="/painting/powder-coating">powder coat painting</a> process as well as a standard <a href="/painting/wet-painting">“wet paint” line</a>. We have metal painting solutions for a wide variety of steel and aluminum components as well as small fabrications and assemblies all under one roof. That means we’re able to provide quality results in a timely manner.</h6>

        <p>Our goal is to do a great job the first time, every time. That’s why we take pride in our work, which is reflected not only in the quality of our products and services, but in everything we do. We work hard to meet all of our customers’ specific needs—including design, function, and tolerance—while providing high-quality, affordable metalwork services for both short-term and long-term projects.</p>

        <div class="twoCol">

            <a class="fancybox fancyboxImg" rel="powder" title="Powder Coat Paint Line" href="/_assets/img/lightbox-powder.jpg"><img src="/_assets/img/lightbox-powder.jpg" alt="powder painting line"><span class="icon-plus"></span></a>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/gallery-powder.php'); //image gallery?>

            <div class="text">

                <h2><span class="icon-arrow-double"></span> Powder Coat Paint Line</h2>

                <p>Our <a class="fancybox" href="/_assets/img/lightbox-gema.jpg" rel="powder" title="GEMA Powder Coat Paint Line">GEMA Powder Coat Paint Line</a> has a 75-foot long, five-stage pretreatment (wash) system, automatic guns in the reclaim booth, and a 500-foot long conveyor. That means it operates efficiently and dust free, leaving clean, and excellent coating results. <a href="/painting/powder-coating">Read more about our powder coating line.</a></p>

            </div><!--text-->

        </div><!--twoCol-->

        <div class="twoCol">

            <a class="fancybox fancyboxImg" rel="wet-paint" title="Wet Paint Line" href="/_assets/img/lightbox-wet-paint.jpg"><img src="/_assets/img/lightbox-wet-paint.jpg" alt="wet painting line"><span class="icon-plus"></span></a>

            <?php include($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/gallery-wet-paint.php'); //image gallery?>

            <div class="text">

                <h2><span class="icon-arrow-double"></span> Wet Paint Line</h2>

                <p>Wet paint is ideal for products that require thin coats of paint and/or can’t withstand the high temperates associated with powder coating. <a href="/painting/wet-painting">Read more about our wet painting capabilities.</a></p>

            </div><!--text-->

        </div><!--twoCol-->

    </div><!--inner-->

</section><!--white-->

<section class="dark slider">

    <div class="inner">

        <h3>Our Vendors</h3>

        <div class="flexslider carousel">

            <ul class="slides">

                <li><img src="/_assets/img/customer-airgas.png" alt="Precision Metalwork customer Airgas logo"/></li>

                <li><img src="/_assets/img/customer-ccis.png" alt="Precision Metalwork customer CCIS logo"/></li>

                <li><img src="/_assets/img/customer-essentra.png" alt="Precision Metalwork customer Essentra logo"/></li>

                <li><img src="/_assets/img/customer-phoenix.png" alt="Precision Metalwork customer Phoenix logo"/></li>

                <li><img src="/_assets/img/customer-wsc.png" alt="Precision Metalwork customer WSC logo" /></li>

            </ul>

        </div><!--flexslider-->

    </div><!--inner-->

</section><!--slider-->

<section class="white">

    <div class="inner">

        <h2><span class="icon-arrow-double"></span> How May We Help You?</h2>

        <p>Precision Metalwork has the experience, <a href="/support-equipment">equipment</a>, and commitment you deserve when it comes to your <a href="/metalwork/fabrication-assembly">custom metal fabrication, assembly</a>, and <a href="/painting/">painting</a> needs. We can accommodate both short-term and long-term <a href="/portfolio">projects</a>, ranging from <a href="/metalwork/punch-form">metal punching and forming</a> to <a href="/metalwork/welding-laser-cutting">laser cutting and welding</a>. Get in touch with us by calling <a href="tel:16158594461">(615) 859-4461</a> or <a href="/contact">submitting an online form</a>.</p>

    </div><!--inner-->

</section><!--white-->

<section class="fixed paint"></section>

<section class="cta">

    <div class="inner">

        <h5><span class="icon-i-wet-paint"></span> Next Up</h5>

        <a class="btn" href="/painting/wet-painting">Wet Painting</a>

    </div><!--inner-->

</section><!--cta-->

<script type="text/javascript">

    $(document).ready(function() {
        $('.fancybox').fancybox();
      $('.flexslider').flexslider({
        minItems: 1,
        maxItems: 5
      });
    });

</script>

</div><!--opacity-->

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>
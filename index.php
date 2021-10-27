<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <title>Light DeFi</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="assets/img/favicon-light.png" type="image/x-icon">
      <link rel="icon" href="assets/img/favicon-light.png" type="image/x-icon">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.css">
      <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="assets/css/flaticon-3.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/aos.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/slick-theme.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/dark-version.css">
      <link rel="stylesheet" href="assets/css/custom.css">

      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-T3LHJKT');
      </script>
      <!-- End Google Tag Manager -->


      <style>

      </style>


      <?php
         if($_GET['mode'] == 'l'){
            echo '<link rel="stylesheet" href="assets/css/style-white.css"></head><body class="str-home" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">';
         }else{
            echo '<link rel="stylesheet" href="assets/css/style.css"><body class="str-home dark-version" data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">';
         }
      ?>
   
      <!-- preloader - start -->
      <div id="preloader" class="str-preloader"></div>
      <!-- <div class="up">
         <a href="#" id="scrollup" class="str-scrollup text-center"><i class="fas fa-angle-up"></i></a>
      </div> -->
      <!-- Load font awesome icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- The social media icon bar -->
      <div class="icon-bar">
         <a href="https://www.instagram.com/light_defi/" target="_blank" class="google"><i class="fa fa-instagram"></i></a>
         <a href="https://www.facebook.com/Light.DeFi" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
         <a href="https://t.me/grupolight" target="_blank" class="facebook"><i class="fa fa-telegram"></i></a>
         <a href="https://www.linkedin.com/company/lightdefi/" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
         <a href="https://www.youtube.com/channel/UC4Hsr-EEQ6X2xB7Wf46YaIQ" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a>
         <a href="https://twitter.com/light_defi" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
         <a href="https://www.reddit.com/user/grupolight/" target="_blank" class="google"><i class="fa fa-reddit"></i></a>
      </div>
      <!-- Start HEADER E MENU
         ============================================= -->
      <header id="str-header-main" class="str-main-header">
         <div class="container">
            <div class="str-header-content position-relative">
               <div class="str-main-menu">
                  <div class="row">
                     <div class="col-md-2">
                        <div class="str-brand-logo">
                           <a href="#"><img src="assets/img/new/logo.png" alt="" style="max-width: 100px;"></a>
                        </div>
                     </div>
                     <div class="col-md-10">
                           <!-- desktop-menu -->
                           <div class="topnav" id="myTopnav">
                              <a class="active" href="index.php">Home</a>
                              <a href="#comprarPix">Buy Light Defi</a>
                              <a href="/docs/lightdelfi_whitepaper_english.pdf" target="_blank">WhitePaper</a>
                              <a href="#str_tokenomics">Tokenomics</a>
                              <a href="https://www.lightdefi.org/blog/" target="_blank">Blog</a>
                              <a href="https://www.certik.org/projects/lightdefi" target="_blank">Certik</a>

                              <?php
                                 if($_GET['mode'] == 'l'){
                                    echo '<a href="index.php?mode=d" class="google"><i class="fas fa-moon"></i></a>';
                                 }else{
                                    echo '<a href="index.php?mode=l" class="google"><i class="fas fa-sun"></i></a>';
                                 }
                              ?>

                              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                              <i class="fa fa-bars"></i>
                              </a>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </header>
      <!-- End HEADER E MENU
         ============================================= -->




      <!-- Start BANNER PRINCIPAL
         ============================================= -->
         <div class="str-banner-content str-headline pera-content" style="max-width: 100%;">
            <section id="join" class="section section-token-info">
               <div class="container" style="    max-width: 1140px;">
                  <div class="wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                     <div class="token-info-shadow">Name: Light DeFi</div>
                     <div class="token-info-shadow">Ticker: LIGHT</div>
                     <!-- <div class="token-info">Token info</div> -->
                  </div>
                  <!-- <div class="wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                     <div class="info-value">Total supply</div>
                     <div class="info-label">10.000.000.000</div>
                  </div> -->
                  <div class="wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                     <div class="info-value copy" data-clipboard-text="0x842668e2b9a73240abf6532dedc89c9c3e050c98" data-success="copied to clipboard">
                        <i onclick="copy('0x842668e2b9a73240abf6532dedc89c9c3e050c98')" class="copy-icon"></i>
                        <span class="address-value" id="codHash" onclick="copy('0x842668e2b9a73240abf6532dedc89c9c3e050c98')">
                        0x842668E2B9A73240aBF6532DEdC89c9c3e050C98
                        </span>
                     </div>
                     <div class="info-label">Blockchain network: Binance Smart Chain (BSC)</div>
                  </div>
                  <div class="wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                     <div class="info-value">9</div>
                     <div class="info-label">Decimal's</div>
                  </div>
               </div>
            </section>

            <section class="section section-stats">
               <div class="container">
                   <div class="stats-list">
                       <div class="stats-item">
                           <div class="stats-label">Total Supply</div>
                           <div class="stats-value totalSupply">10,000,000,000</div>
                       </div>
                       <div class="stats-item">
                           <div class="stats-label">Holders</div>
                           <div class="stats-value circulatingSupply">21,956 addresses</div>
                       </div>
                       <div class="stats-item">
                           <div class="stats-label">FULLY DILUTED MARKET CAP</div>
                           <div class="stats-value burnt">$5,439,927.00</div>
                       </div>
                       <div class="stats-item">
                           <div class="stats-label">Transfers</div>
                           <div class="stats-value averageGasPrice">272,314</div>
                       </div>
                   </div>
               </div>
           </section>

            <div class="container">
               <br>
               <h1>Join this crypto revolution.</h1><br>
               <h3>Light DeFi is a crypto asset created on the BSC (Binance SmartChain) to revolutionize the renewable energy sector building photovoltaic plants, gathering the concepts of sustainability and Decentralized Finances (DeFi).
               </h3>
               <br>
               <a class="btn btn-primary btn-lg active" style="border: none; background-image: linear-gradient(125deg, #675021 0%, #a37e33 49%, #c49840 100%);" target="_blank" href="https://pancakeswap.finance/swap?outputCurrency=0x842668E2B9A73240aBF6532DEdC89c9c3e050C98"><i class="flaticon-right-arrow"></i> Buy Light Defi</a><br>
               <br><br>
            </div>
         </div>


         

      <!-- End BANNER PRINCIPAL
         ============================================= -->



      <!-- Start of str-partner  section
         ============================================= -->
      <section id="str-partner" class="str-partner-section" style="display: block !important;">
         <div class="container">
               <div class="row">
                  <div class="col-12 col-sm-6 col-md-3 col-lg-3" style="margin-bottom: 25px;">
                     <a>
                     <img src="assets/img/new/banners_site_lightdefi2LOGOS-1.png" alt="">
                     </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-3 col-lg-3" style="margin-bottom: 25px;">
                     <a>
                     <img src="assets/img/new/banners_site_lightdefi2LOGOS-2.png" alt="">
                     </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-3 col-lg-3" style="margin-bottom: 25px;">
                     <a>
                     <img src="assets/img/new/banners_site_lightdefi2LOGOS-3.png" alt="">
                     </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-3 col-lg-3" style="margin-bottom: 25px;">
                     <a>
                     <img src="assets/img/new/banners_site_lightdefi2LOGOS-4.png" alt="">
                     </a>
                  </div>
               </div>
         </div>
      </section>
      <!-- End of str-partner section
         ============================================= -->  
      <!-- Start of newslatter  section
         ============================================= -->
         <section id="str-newslatter" class="str-newslatter-section" style="padding-bottom: 100px;">
            <div class="str-newslatter-content position-relative" data-background="">
               <h1 style="text-align: center;">CHARTS</h1>
               <div class="str-newslatter-form position-relative">

                  <div class="nws-button text-capitalize" style="text-align: center;">

                     <div class="container">
                        <div class="row">
                           <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="margin-bottom: 25px;">
                              <button class="hover-btn" type="" value="" onclick="window.open('https://www.coinmarketcap.com/currencies/light-defi/')"> CoinMarketCap</button>
                           </div>
                           <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="margin-bottom: 25px;">
                              <button class="hover-btn" type="" value="" onclick="window.open('https://www.coingecko.com/pt/moedas/light-defi')"> CoinGecko</button>
                           </div>
                           <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="margin-bottom: 25px;">
                              <button class="hover-btn" type="" value="" onclick="window.open('https://poocoin.app/tokens/0x842668e2b9a73240abf6532dedc89c9c3e050c98')"> Poocoin</button>
                           </div>
                           <div class="col-12 col-sm-6 col-md-6 col-lg-3" style="margin-bottom: 25px;">
                              <button class="hover-btn" type="" value="" onclick="window.open('https://bscscan.com/token/0x842668E2B9A73240aBF6532DEdC89c9c3e050C98')"> BscScan</button>
                           </div>
                        </div>
                     </div>


                  </div>

               </div>
            </div>
         </section>
      
      
      
      <!-- End of newslatter  section
         ============================================= -->  
      <section id="str-newslatter" class="str-newslatter-section">
         <div class="container">
            <div class="str-newslatter-content position-relative" data-background="">
               <h1 style="text-align: center;">CERTIFICATES</h1>
               <div class="str-newslatter-form position-relative">
                  <div class="nws-button  text-capitalize" style="left: 0px; text-align: center;">
                     <br><a href="https://www.certik.org/projects/lightdefi" target="_blank"><img src="assets/img/certik-logotype-h-w.svg" alt="" style="max-width: 200px;"></a>
                  </div>
               </div>
            </div>
         </div>
         <br><br>
      </section>
      <!-- Start of About Us section
         ============================================= -->
      <section id="str-about" class="str-about-section position-relative">
         <div class="container">
            <div class="str-about-content">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="str-about-text wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="str-section-title text-left str-title-left str-headline">
                           <span class="str-title-tag"></span>
                           <h2>The project
                           </h2>
                        </div>
                        <div class="str-about-details">
                           Light DeFi is a token created on the BSC, Binance Smart Chain, and officially launched on August 8th, 2021, and its supply is 10 billion tokens. <br>
                           In the graphic below, you can find LIGHT's price, market capitalization and trading volume. Light DiFi is listed on the CoinGecko platform.
                        </div>
                        <br>
                        <a class="str-btn d-inline-block" target="_blank" href="https://pancakeswap.finance/swap?outputCurrency=0x842668E2B9A73240aBF6532DEdC89c9c3e050C98">Buy Light Defi <i class="fas fa-arrow-alt-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="str-about-img position-relative wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <!--<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Z6PZi2ccl8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->                                    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End of About Ud section
         ============================================= --> 
      <!-- Start of About Us section
         ============================================= -->
      <section id="str-about" class="str-about-section position-relative">
         <div class="container">
            <div class="str-about-content">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="str-about-text wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="str-section-title text-left str-title-left str-headline">
                           <span class="str-title-tag"></span>
                           <h2>Light DeFi on CoinMarketCap
                           </h2>
                        </div>
                        <div class="str-about-details">
                           Besides CoinGecko, you may find LIGHT important information also on the CoinMarketCap platform, as LIGHT's price and graphics in real-time. 
                        </div>
                        <br>
                        <a class="str-btn d-inline-block" target="_blank" href="https://www.coinmarketcap.com/currencies/light-defi/">View on the CoinMarketCap <i class="fas fa-arrow-alt-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="str-about-text wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="str-section-title text-left str-title-left str-headline">
                           <span class="str-title-tag"></span>
                           <h2>Light DeFi on Poocoin
                           </h2>
                        </div>
                        <div class="str-about-details">
                           Known as one of the most important platforms for DeFi tokens on the BSC Blockchain, at Poocoin platform you also may find the LIGHT token's price and graphics in real-time, as well as its daily trading volume. You can also see it below.
                        </div>
                        <br>
                        <a class="str-btn d-inline-block" target="_blank" href="https://poocoin.app/tokens/0x842668e2b9a73240abf6532dedc89c9c3e050c98">View on the Poocoin<i class="fas fa-arrow-alt-circle-right"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="str-about-img position-relative wow fadeFromLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <!--<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Z6PZi2ccl8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->                                    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End of About Ud section
         ============================================= --> 
      <!-- Start of str-testimonial section
         ============================================= -->
      <!--  <section id="mercado" class="str-testimonial_section">
         <div class="str-tst-vector"> <img src="assets/img/startup/shape/tst-shape.png" alt="" style="opacity: 0.3"></div>
         <div class="container">
             <div  class="str-testimonial_slider">
                 <div id="str-testimonial_slide" class="carousel slide" data-ride="carousel" >
                     <div class="row">
                         <div class="col-lg-6 col-md-12">
                             <div class="str-testimonial_indicator relative-position">
                                 <ol class="carousel-indicators">
                                     <!-- <li data-target="#str-testimonial_slide" data-slide-to="0" class="active">
                                         <img src="assets/img/startup/testimonial/tst1.png" alt="">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="1">
                                         <img src="assets/img/startup/testimonial/tst2.png" alt="">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="2">
                                         <img src="assets/img/startup/testimonial/tst3.png" alt="">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="3">
                                         <img src="assets/img/startup/testimonial/tst4.png" alt="">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="4">
                                         <img src="assets/img/startup/testimonial/tst5.png" alt="">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="5">
                                         <img src="assets/img/startup/testimonial/tst6.png" alt="">
                                     </li> -->
      <!--</ol>
         </div>
         </div>
         <div class="col-lg-6 col-md-12">
         <div class="carousel_preview">
             <div class="str-section-title text-left str-title-left pera-content str-headline">
                 <!--<span class="str-title-tag">Porque investir?</span> -->
      <!--<h2>Join this crypto revolution.
         </h2>
         <p>Light DeFi is a crypto asset created on the BSC (Binance SmartChain) to revolutionize the renewable energy sector building photovoltaic plants, gathering the concepts of sustainability and Decentralized Finances (DeFi).</p>
         </div>
         </div>
         </div>
         </div>
         </div>
         </div>
         </div>
         </section>
         <!-- End of str-testimonial section
         ============================================= -->
      <!-- Start of Portfolio section
         ============================================= -->
      <!--<h1 style="TEXT-ALIGN: CENTER;MARGIN-TOP: 40PX;">ECOSISTEMA</h1>
         <section id="str-portfolio" class="str-portfolio-section position-relative">
             <div class="container">
                 <div id="str-protfolio-slide" class="str-portfolio-area owl-carousel">
                     <div class="str-port-img-text position-relative">
                         <div class="str-port-img">
                             <img src="assets/img/new/banners_site_lightdefiECOSSISTEMA-1.png" alt="">
                         </div>
                          <div class="str-port-text text-center str-headline">
                             <!--<h3>Creative Work</h3>
                             <span>UI/UX</span>-->
      <!--<div class="str-port-popup">
         <a href="#"><i class="fas fa-plus"></i></a>
         </div>
         </div> 
         </div>
         <div class="str-port-img-text">
         <div class="str-port-img">
         <img src="assets/img/new/banners_site_lightdefiECOSSISTEMA-2.png" alt="">
         </div>
         <div class="str-port-text text-center str-headline">
         <!--<h3>Creative Work</h3>
         <span>UI/UX</span>-->
      <!-- <div class="str-port-popup">
         <a href="#"><i class="fas fa-plus"></i></a>
         </div>
         </div>
         </div>
         <div class="str-port-img-text">
         <div class="str-port-img">
         <img src="assets/img/new/banners_site_lightdefiECOSSISTEMA-3.png" alt="">
         </div>
         <div class="str-port-text text-center str-headline">
         <!--<h3>Creative Work</h3>
         <span>UI/UX</span>-->
      <!-- <div class="str-port-popup">
         <a href="#"><i class="fas fa-plus"></i></a>
         </div>
         </div> 
         </div>
         <div class="str-port-img-text">
         <div class="str-port-img">
         <img src="assets/img/new/banners_site_lightdefiECOSSISTEMA-4.png" alt="">
         </div>
         <div class="str-port-text text-center str-headline">
         <h3>Creative Work</h3>
         <span>UI/UX</span>
         <div class="str-port-popup">
         <a href="#"><i class="fas fa-plus"></i></a>
         </div>
         </div>
         </div>
         <div class="str-port-img-text">
         <div class="str-port-img">
         <img src="assets/img/new/banners_site_lightdefiECOSSISTEMA-5.png" alt="">
         </div>
         <div class="str-port-text text-center str-headline">
         <!--<h3>Creative Work</h3>
         <span>UI/UX</span>-->
      <!-- <div class="str-port-popup">
         <a href="#"><i class="fas fa-plus"></i></a>
         </div>
         </div> 
         </div>
         </div>
         </div>
         </section> 
         <!-- End o fPortfolio section
         ============================================= --> 
      <!-- Start of About Us section
         ============================================= -->
      <section id="str-about" class="str-about-section position-relative" style="padding-bottom: 0px;">
         <div class="str-aboutbg1 position-absolute"><img src="assets/img/startup/shape/vs1.png" alt=""></div>
         <div class="str-aboutbg2 position-absolute"><img src="assets/img/startup/shape/vs2.png" alt=""></div>
         <div class="str-aboutbg3 position-absolute"><img src="assets/img/startup/shape/vs3.png" alt=""></div>
         <div class="container">
            <div class="str-about-content">
               <div class="container">
                  <div class="row">
                     <div class="str-section-title text-left str-title-left str-headline" style="text-align: center !important;">
                        <h2 style="text-align: center;">Tokenomics</h2>
                        <p>The <b>LIGH</b> token was officially launched on August 8th of 2021.</p>
                     </div>
                     <div class="col-lg-12">
                        <div class="str-about-text wow fadeFromRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                           <div class="row" id="str_tokenomics">
                              <div class="col-lg-6">
                                 <div class="str-about-img-field">
                                    <div class="str-progress-area str-headline" style="max-width: 90%;">
                                       <h2>PROFIT REDISTRIBUTION (FROM THE PHOTOVOLTAIC PLANT)</h2>
                                       <br>
                                       <h3>to build new features at the photovoltaic plant</h3>
                                       <div id="progress5" class="barfiller" style="height: 35px;">
                                          <div class="tipWrap"><span class="tip" style="margin-top: 4px;"></span></div>
                                          <span class="fill" data-percentage="50"></span>
                                       </div>
                                       <h3>to the token holders</h3>
                                       <div id="progress6" class="barfiller" style="height: 35px;">
                                          <div class="tipWrap"><span class="tip" style="margin-top: 4px;"></span></div>
                                          <span class="fill" data-percentage="30"></span>
                                       </div>
                                       <h3>to the developers</h3>
                                       <div id="progress7" class="barfiller" style="height: 35px;">
                                          <div class="tipWrap"><span class="tip" style="margin-top: 4px;"></span></div>
                                          <span class="fill" data-percentage="20"></span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="str-progress-area str-headline" style="max-width: 100% !important;">
                                    <h2>Transactional purchase and sale fees:
                                    </h2>
                                    <img src="assets/img/new/lightdefiGRAFICO.png" alt="" class="img-fluid">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End of About Ud section
         ============================================= --> 
      <!-- Start of feature section
         ============================================= -->
      <!-- <section id="str-testimonial" class="str-testimonial_section">
         <div class="str-tst-vector"> <img src="assets/img/startup/shape/tst-shape.png" alt=""></div>
         <div class="container">
             <div  class="str-testimonial_slider">
                 <div id="str-testimonial_slide" class="carousel slide" data-ride="carousel" >
                     <div class="row">
                         <div class="col-lg-12 col-md-12">
                             <div class="carousel_preview">
                                 <div class="str-section-title text-left str-title-left pera-content str-headline">
                                     <span class="str-title-tag">Taxas</span>
                                     <h2>Taxas transacionais de compra e venda
                                     </h2>
                                     <img src="assets/img/new/banners_site_lightdefiGRÁFICO.png" alt="">
                                 </div>
                                 
                             </div>
                             <div class="str-testimonial_indicator-dot">
                                 <ol class="carousel-indicators2">
                                     <li data-target="#str-testimonial_slide" data-slide-to="0" class="active">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="1">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="2">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="3">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="4">
                                     </li>
                                     <li data-target="#str-testimonial_slide" data-slide-to="5">
                                     </li>
                                 </ol>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         </section> -->
      <!-- End of banner section
         ============================================= -->  
      <!-- Start of feature section
         ============================================= -->
      <section id="comprarPix" class="str-testimonial_section" style="padding: none;">
         <div class="str-tst-vector"> <img src="assets/img/startup/shape/tst-shape.png" alt="" style="opacity: 0.3"></div>
         <div class="container">
            <div  class="str-testimonial_slider">
               <div id="str-testimonial_slide" class="carousel slide" data-ride="carousel" >
                  <div class="row">
                     <div class="col-sm-12 col-lg-6 col-md-6">
                        <div class="carousel_preview">
                           <div class="str-section-title text-left str-title-left pera-content str-headline">
                              <span class="str-title-tag">Buy Light via Pix.
                              </span>
                              <h2>Fast and easy.
                              </h2>
                              <a class="btn btn-primary btn-lg active" href="https://light.criptopix.io/" target="_blank" role="button" aria-pressed="true" style="background-color: #675021; border: none;" onclick="abrePix();">BUY VIA PIX</a> &nbsp;&nbsp;&nbsp;
                              <a class="btn btn-primary btn-lg active" href="https://pancakeswap.finance/swap?outputCurrency=0x842668E2B9A73240aBF6532DEdC89c9c3e050C98" target="_blank" role="button" aria-pressed="true" style="background-color: #675021; border: none;" onclick="abrePanc();">BUY VIA PANCAKE</a>
                           </div>
                        </div>
                        <br>
                        <!--<div id="videopix">
                           <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ITR8AqFYPf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           </div>-->
                     </div>
                     <div class="col-sm-12 col-lg-6 col-md-6">
                        <img src="assets/img/new/banners_site_lightdefi2PIX.png" class="img-fluid" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End of banner section
         ============================================= -->  
      <!-- Start of feature section
         ============================================= -->
      <!-- <section id="str-feature" class="str-feature-section">
         <div class="container">
             <div class="str-section-title text-center str-title-center str-headline">
                 <h2>GRÁFICO EM TEMPO REAL!
                 </h2>
             </div>
             
             <div class="row">
                 <div class="col-12">
                     <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=3315" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px"></div></div>                        </div>
             </div>
         </div>
         </section> -->
      <!-- End of banner section
         ============================================= -->  
      <!-- Start of member  section
         ============================================= -->
      <section id="str-team" class="str-team-section">
         <div class="container">
            <div class="">
               <div class="str-section-title text-center str-title-center str-headline">
                  <span class="str-title-tag"></span>
                  <h2>Our Team</h2>
               </div>
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
               <div class="container mt-100 mt-60">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-1.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Daniel Medeiros</h4>
                                 <small class="text-muted">DEV | Business relationship</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="https://www.linkedin.com/in/daniel-medeiros-ifran/" target="_blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-2.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Anderson Viliano</h4>
                                 <small class="text-muted">DEV | Project Coordinator</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="https://www.linkedin.com/in/anderson-viliano" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-3.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Ricardo Nogueira</h4>
                                 <small class="text-muted">DEV | IT Department</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="https://www.linkedin.com/in/ricardodelphino/" target="_blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-4.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Matheus Garcia</h4>
                                 <small class="text-muted">DEV | Project Coordinator</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="https://www.linkedin.com/in/matheus-garcia-" target="_blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                              -->
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                  </div>
                  <!--end row-->
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-5.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Leonel Vieira</h4>
                                 <small class="text-muted">DEV | Creative Department</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="https://www.linkedin.com/in/leogrupolight/" target="_blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-6.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Jonatas Pacheco</h4>
                                 <small class="text-muted">DEV | Legal Department</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="www.linkedin.com/in/jonatas-pacheco-3910b3221" target="_blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-7.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Henrique Correa</h4>
                                 <small class="text-muted">DEV</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="https://www.linkedin.com/in/henrique-ozana-61951819a/" target="blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-8.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Germano Sales</h4>
                                 <small class="text-muted">DEV | CEO</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="https://www.linkedin.com/in/germano-sales/" target="_blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                     <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="mt-4 pt-2">
                           <div class="team position-relative d-block text-center">
                              <div class="image position-relative d-block overflow-hidden">
                                 <img src="assets/img/new/banners_site_lightdefi2DEV-91.png" class="img-fluid rounded" alt="">
                                 <div class="overlay rounded bg-dark"></div>
                              </div>
                              <div class="content py-2 member-position bg-white border-bottom overflow-hidden rounded d-inline-block">
                                 <h4 class="title mb-0">Rocelo Lopes</h4>
                                 <small class="text-muted">Advisor</small>
                              </div>
                              <ul class="list-unstyled team-social social-icon social mb-0">
                                 <li class="list-inline-item"><a href="#" target="_blank" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!--end col-->
                  </div>
                  <!--end row-->
               </div>
            </div>
         </div>
      </section>
      <!-- End of member  section
         ============================================= --> 
      <!-- Start of Work process section section
         ============================================= -->
      <section id="pm-feature" class="pm-feature-section">
         <div class="container">
            <div class="pm-section-title pm-headline text-center">
               <h2>Roadmap</h2>
            </div>
            <div class="pm-feature-cpntent">
               <div class="row justify-content-center">
                  <div class="col-lg-3 col-md-6 col-sm-12 wow fadeFromLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeFromLeft;">
                     <div class="pm-feature-innerbox pm-headline pera-content">
                        <div class="pm-feature-top clearfix">
                           <div class="pm-feature-icon float-left">
                              <img src="assets/img/hrm/icon/f1.png" alt="">
                           </div>
                           <div class="pm-feature-text">
                              <h1 style="font-weight: 800; color: #c49840;">Q1 <span style="color: #cccccc; opacity: 0.4; font-size: xx-large;">Done</span></h1>
                              <span>August 8 / November 8</span>
                           </div>
                        </div>
                        <div class="pm-feature-list ul-li-block">
                           <ul>
                              <li>Contract implementation</li>
                              <li>Internet Network</li>
                              <li>Website</li>
                              <li>Social Media</li>
                              <li>Road Map</li>
                              <li>Audit by Certik</li>
                              <li>Listing on CMC</li>
                              <li>Listing on Coingecko</li>
                              <li>Listing on Coinpaprika</li>
                              <li>Start of the feasibility study</li>
                              <li>Conclusion of the feasibility study</li>
                              <li>Start of land's negotiation</li>
                              <li>Purchasing Tools</li>
                              <li>WP</li>
                              <li>Business partnerships</li>
                              <li>Rocelo Lopes (Advisor)</li>
                              <li>Zcore</li>
                              <li>CoinBR</li>
                              <li>Indacoin</li>
                              <li>Own Digital Marketing Agency</li>
                              <li>Global Marketing Actions</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 wow fadeFromLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeFromLeft;">
                     <div class="pm-feature-innerbox pm-headline pera-content">
                        <div class="pm-feature-top clearfix">
                           <div class="pm-feature-icon float-left">
                              <img src="assets/img/hrm/icon/f2.png" alt="">
                           </div>
                           <div class="pm-feature-text">
                              <h1 style="font-weight: 800; color: #c49840;">Q2</h1>
                              <br><br><span>November 9 / February 9</span>
                           </div>
                        </div>
                        <div class="">
                           <ul style="padding-left: 35px;padding-bottom: 15px;opacity: 0.4;">
                              <li>Negotiation of the land concluded</li>
                              <li>Start of bids for the implementation of the plant</li>
                              <li>Deed and registration of the area</li>
                              <li>NFT's deed presentation</li>
                              <li>Plant "foundation stone" opening event</li>
                              <li>Global Purchasing Tools</li>
                              <li>Launch B …… .. (NEW)</li>
                              <li>Launch P …… .. (NEW)</li>
                              <li>OWN WALLET</li>
                              <li>Light products</li>
                              <li>LIGHT token listing on a TOP 10 Exchange</li>
                              <li>Light DeFi APP for Android and IOS</li>
                              <li>Own Dex</li>
                              <li>Extension of the liquidity blocking period for six months</>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 wow fadeFromLeft animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeFromLeft;">
                     <div class="pm-feature-innerbox pm-headline pera-content">
                        <div class="pm-feature-top clearfix">
                           <div class="pm-feature-icon float-left">
                              <img src="assets/img/hrm/icon/f3.png" alt="">
                           </div>
                           <div class="pm-feature-text">
                              <h1 style="font-weight: 800; color: #c49840;">Q3</h1>
                              <br><br><span>February 10 / April 10</span>
                           </div>
                        </div>
                        <div class="">
                           <ul style="padding-left: 35px;padding-bottom: 15px;opacity: 0.4;">
                              <li>Own EXCHANGE Launch</li>
                              <li>Independent audit of the Light Group</li>
                              <li>Validation of completion of project's first plant</li>
                              <li>Beginning of the feasibility study for the second module</li>
                              <li>Project preparation for the second module</li>
                              <li>Survey of new sustainable energy projects</li>
                              <li>Qualification and Training Program (Photovoltaic / Crypto)</li>
                              <li>Support for 2030 agenda's projects
                              <li>Plant finalization</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 wow fadeFromLeft animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeFromLeft;">
                     <div class="pm-feature-innerbox pm-headline pera-content">
                        <div class="pm-feature-top clearfix">
                           <div class="pm-feature-icon float-left">
                              <img src="assets/img/hrm/icon/f3.png" alt="">
                           </div>
                           <div class="pm-feature-text">
                              <h1 style="font-weight: 800; color: #c49840;">Q4</h1>
                              <br><br><span>April 11 / June 11</span>
                           </div>
                        </div>
                        <div class="">
                           <ul style="padding-left: 35px;padding-bottom: 15px;opacity: 0.4;">
                              <li>1st Plant launch event</li>
                              <li>Second module project validation</li>
                              <li>Completion of the second module negotiation</li>
                              <li>Start of bidding the second module</li>
                              <li>Roadmap second stage presentation</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End of Work process  section
         ============================================= --> 
      <!-- Start of Work process section section
         ============================================= -->
      <section id="str-work-process" class="str-work-process-section">
         <div class="container">
            <div class="str-section-title text-center str-title-center str-headline">
               <span class="str-title-tag"></span>
               <h2>F.A.Q
               </h2>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <br>
                  <div class="container">
                     <button class="accordion">What is Light DeFi and how does it work?</button>
                     <div class="accordion-content">
                        <p>
                           LIGHT DEFI was created based on blockchain universe protocols and technological and industrial options to provide consumers with access to quality energy from a clean, reliable and sustainable energy matrix.
                           The token was developed through the Binance Smart Chain (BSC) blockchain network, classified as one (BEP-20). With a deflationary system, the Light DeFi token directly and automatically finances the construction of photovoltaic solar power plants in the world.
                        </p>
                     </div>
                     <button class="accordion">When does Light Defi launch?</button>
                     <div class="accordion-content">
                        <p>
                           International release on August 8, 2021.
                        </p>
                     </div>
                     <button class="accordion">What is Light Defi's supply?</button>
                     <div class="accordion-content">
                        <p>
                           The total supply is 10,000,000,000 (ten billion).
                        </p>
                     </div>
                     <button class="accordion">Is the contract waived?</button>
                     <div class="accordion-content">
                        <p>
                           Our contract is not and will never be waived. Our project is with leadership. We may make changes to future fees.
                        </p>
                     </div>
                     <button class="accordion">When will the first photovoltaic plant be built?</button>
                     <div class="accordion-content">
                        <p>
                           We can’t promise dates as it doesn’t just depend on the devs. It also depends on the community. Let’s start with steps. First, the land acquisition.
                        </p>
                     </div>
                     <button class="accordion">How will be the transparency with the profits obtained by the plant when it is operating?</button>
                     <div class="accordion-content">
                        <p>
                           Everything will be conducted with the utmost transparency and seriousness. The project includes the hiring of an independent audit of the business group that will audit the results and issue public reports.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End of Work process  section
         ============================================= -->
      <!-- Start of newslatter  section
         ============================================= -->
      <section id="str-newslatter" class="str-newslatter-section">
         <div class="container">
            <div class="str-newslatter-content position-relative" data-background="">
               <div class="str-newslatter-text str-headline pera-content text-center">
                  <h2>Sign up for our newsletter</h2>
               </div>
               <div class="str-newslatter-form position-relative">
                  <!-- <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
                     <div style="text-align: center;">
                       <form method="POST" action="https://grupolight.activehosted.com/proc.php" id="form_1" class="_form _form_1 _inline-form _inline-style _dark" novalidate>
                         <input type="hidden" name="u" value="1" />
                         <input type="hidden" name="f" value="1" />
                         <input type="hidden" name="s" />
                         <input type="hidden" name="c" value="0" />
                         <input type="hidden" name="m" value="0" />
                         <input type="hidden" name="act" value="sub" />
                         <input type="hidden" name="v" value="2" />
                         <div class="_form-content">
                           <div class="_form_element _x25564789 _inline-style _clear" >
                             <div class="_form-title">
                               Quer saber as últimas notícias do projeto
                             </div>
                           </div>
                           <div class="_form_element _x75985261 _inline-style" style="width: 80%;" >
                             <div class="_field-wrapper">
                               <input type="email" id="email" name="email" placeholder="Digite seu e-mail..." required/>
                             </div>
                           </div>
                           <div class="_button-wrapper _inline-style nws-button  text-capitalize">
                             <button id="_form_1_submit" class="_submit hover-btn" type="submit" style="background-color: #a37e33 !IMPORTANT;">
                               CADASTRAR
                             </button>
                           </div>
                           <div class="_clear-element">
                           </div>
                         </div>
                         <div class="_form-thank-you" style="display:none;">
                         </div>
                       </form>
                     </div>
                     <br><br><br><br> -->
                  <form method="POST" action="https://grupolight.activehosted.com/proc.php" id="form_1" class="" >
                     <input type="hidden" name="u" value="1" />
                     <input type="hidden" name="f" value="1" />
                     <input type="hidden" name="s" />
                     <input type="hidden" name="c" value="0" />
                     <input type="hidden" name="m" value="0" />
                     <input type="hidden" name="act" value="sub" />
                     <input type="hidden" name="v" value="2" />
                     <input class="email" name="email" type="email" placeholder="Type your email..." required>
                     <div class="nws-button  text-capitalize">
                        <button class="hover-btn" type="submit" value="Submit" id="_form_1_submit"> Send</button> 
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End of newslatter  section
         ============================================= -->  
      <!-- Start of get in touch  section
         ============================================= -->            
      <section id="sa-contact-inner" class="sa-contact-inner-section inner-page-padding">
         <div class="container">
            <div class="saas_two_section_title saas2-headline text-center" style="max-width: 700px;">
               <h3>Contact us
               </h3>
               <!--<p>Preencha o formulário e envie sua mensagem aos desenvolvedores do token</p>-->
            </div>
            <div class="sa-contact-inner-form">
               <form action="#">
                  <div class="row">
                     <div class="col-md-6">
                        <input type="text" name="name" placeholder="Name">
                     </div>
                     <div class="col-md-6">
                        <input type="email" name="email" placeholder="Email">
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="phone" placeholder="WhatsApp // Mobile">
                     </div>
                     <div class="col-md-6">
                        <input type="text" name="subject" placeholder="Subject">
                     </div>
                     <div class="col-md-12">
                        <textarea name="message" placeholder="Message..."></textarea>
                     </div>
                     <div class="sa-contact-inner-btn text-center">
                        <button type="submit">Send</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!-- End of get in touch  section
         ============================================= --> 
      <!-- Start of footer  section
         ============================================= -->  
      <footer id="str-footer" class="str-footer-area">
         <div class="container">
            <div class="footer-content">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="str-footer-widget str-headline pera-content" style="text-align: center;">
                        <div class="str-ft-about-widget">
                           <a  href="#"><img style="max-width: 100px;" src="assets/img/new/logo.png" alt=""></a>
                           <p>
                              BRILLACOM S.A.<br>
                              RUT nº 218780380016<br>
                              <!-- <div class="ft-about-btn">
                                 <a href="#">Saiba mais</a>
                                 </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="str-footer-widget str-headline pera-content">
                        <div class="str-office-widget">
                           <h3 class="str-widget-title" style="text-align: center;">Site map</h3>
                           <ul>
                              <li><a  target="_blank" href="docs/PRIVACYPOLICE.pdf">Privacy Policy</a></li>
                              <li><a  target="_blank" href="docs/INFORMATIONABOUTCOOKIES.pdf">Information about Cookies </a></li>
                              <li><a href="#str-team">Our team</a></li>
                              <li><a href="#str-work-process">FAQ</a></li>
                              <li><a href="#sa-contact-inner">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="str-footer-widget str-headline pera-content">
                        <div class="str-office-widget">
                           <h3 class="str-widget-title" style="text-align: center;">Menu</h3>
                           <ul>
                              <li><a href="#comprarPix">Buy Light Defi</a></li>
                              <li><a href="/docs/lightdelfi_whitepaper_english.pdf" target="_blank">WhitePaper</a></li>
                              <li><a href="#str_tokenomics">Tokenomics</a></li>
                              <li><a href="https://www.lightdefi.org/blog/" target="_blank">Blog</a></li>
                              <li><a href="https://www.certik.org/projects/lightdefi" target="_blank">Certik</a></li>

                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="str-copywright-text text-center">
            2021 © all reserved copyright  <a href="#">Light Defi</a>
         </div>
      </footer>
      <!-- End of footer  section
         ============================================= -->        
      <!-- JS library -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/appear.js"></script>
      <script src="assets/js/aos.js"></script>
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="assets/js/jquery.paroller.min.js"></script>
      <script src="assets/js/jquery.barfiller.js"></script>
      <script src="assets/js/owl.js"></script>
      <script src="assets/js/pagenav.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/parallax-scroll.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/script.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script>
         const accordionBtns = document.querySelectorAll(".accordion");
         
         accordionBtns.forEach((accordion) => {
         accordion.onclick = function () {
             this.classList.toggle("is-open");
         
             let content = this.nextElementSibling;
             console.log(content);
         
             if (content.style.maxHeight) {
             //this is if the accordion is open
             content.style.maxHeight = null;
             } else {
             //if the accordion is currently closed
             content.style.maxHeight = content.scrollHeight + "px";
             console.log(content.style.maxHeight);
             }
         };
         });
         
         
         function copy(text) {
             var input = document.createElement('textarea');
             input.innerHTML = text;
             document.body.appendChild(input);
             input.select();
             var result = document.execCommand('copy');
             document.body.removeChild(input);
             alert('Código copiado com sucesso!');
             return result;
             
         }
         
         function abrePix(){
             document.getElementById("videopix").innerHTML = '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ITR8AqFYPf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
         }
         function abrePanc(){
             document.getElementById("videopix").innerHTML = '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9wx51rhJh24" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
         }

         function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
               x.className += " responsive";
            } else {
               x.className = "topnav";
            }
         }

      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-209074956-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-209074956-1');
      </script>
   </body>
</html>
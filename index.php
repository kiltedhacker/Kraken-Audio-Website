<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Kraken Audio</title>
    <meta name="description" content="">
    <meta name="author" content="ink, cookbook, recipes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Place favicon.ico and apple-touch-icon(s) here  -->

    <link rel="shortcut icon" href="assets/favicon.png">
    <!--link rel="apple-touch-icon" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://cdn.ink.sapo.pt/3.1.10/img/touch-icon-ipad-retina.png">
    <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.1.10/img/splash.320x460.png" media="screen and (min-device-width: 200px) and (max-device-width: 320px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.1.10/img/splash.768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.1.10/img/splash.1024x748.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)"-->

    <!-- load Ink's css from the cdn -->
    <link rel="stylesheet" type="text/css" href="assets/css/ink-flex.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

    <!-- load custom css -->
    <link rel="stylesheet" type="text/css" href="assets/css/kraken.css">

    <!-- load Ink's css for IE8 -->
    <!--[if lt IE 9 ]>
      <link rel="stylesheet" href="https://ink.global.ssl.fastly.net/3.1.10/css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <![endif]-->

    <!-- test browser flexbox support and load legacy grid if unsupported -->
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    <script type="text/javascript">
      Modernizr.load({
        test: Modernizr.flexbox,
        nope : 'http://cdn.ink.sapo.pt/3.1.10/css/ink-legacy.min.css'
      });
    </script>

    <!-- load Ink's javascript files from the cdn -->
    <script type="text/javascript" src="assets/js/holder.js"></script>
    <script type="text/javascript" src="assets/js/ink-all.min.js"></script>
    <script type="text/javascript" src="assets/js/autoload.js"></script>

    <style>
    /*BACKGROUNDS*/
    .bgprod {
      background-image: url("content/uploads/images/booming_bride.jpg");
      background-size: 100%;
      background-position: right center;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    .bgweb {
      background-image: url("content/uploads/images/mixing-table.jpeg");
      background-size: 100%;
      background-position: right bottom;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    </style>
  </head>

    <body>

        <!--[if lte IE 9 ]>
        <div class="ink-grid">
            <div class="ink-alert basic" role="alert">
                <button class="ink-dismiss">&times;</button>
                <p>
                    <strong>You are using an outdated Internet Explorer version.</strong>
                    Please <a href="http://browsehappy.com/">upgrade to a modern browser</a> to improve your web experience.
                </p>
            </div>
        </div>
        -->

        <div class="wrap">
          <div class="top-menu ink-sticky">
              <nav class="ink-navigation ink-grid">
                <ul class="menu horizontal push-right medium-push-center small-push-center tiny-push-center">
                  <li class="hide-all show-tiny show-small show-medium"><button class="fa fa-bars left-drawer-trigger"></button></li>
                </ul>
                <ul class="menu horizontal hide-small hide-tiny hide-medium">
                  <span class="push-right" style="font-size: 75%">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#prod">Production</a></li>
                    <li><a href="#post">Post-Production</a></li>
                    <li><a href="#web">Web Content</a></li>
                    <li><a href="#proj">Projects</a></li>
                    <li><a href="#cont">Contact</a></li>
                  </span>
                </ul>
              </nav>
            </div>

            <div style="background: #f1f0de; color: #0ba15e; padding: 80px 0px 80px 0px;">
              <div class="ink-grid">
                <h1 style="color: #0ba15e;">Kraken Audio</h1>
                <p class="just">Acid Reignfall is now Kraken Audio! Kraken Audio provides audio services for video, film, and web content. We are based out of Tempe, Arizona, and provide on-location services to Arizona, and adjacent states. Post-production audio services are available to productions in any location.</p>
              </div>
            </div>
            <div class="ink-grid">
            <div class="ink-grid vertical-space" style="padding: 80px 0px 80px 0px;">

              <div class="column-group gutters">
                <div class="all-33 small-100 tiny-100">
                  <a href="#prod">
                    <div class="panel-button align-center">
                      <h2>Production</h2>
                      <i class="fa fa-microphone fa-5x" style="color: #0ba15e;"></i><br>
                      <small>Boom Op &amp; Mixing</small>
                    </div>
                  </a>
                </div>
                <div class="all-33 small-100 tiny-100">
                  <a href="#post">
                    <div class="panel-button align-center">
                      <h2>Post Audio</h2>
                      <i class="fa fa-sliders fa-5x fa-rotate-270" style="color: #0ba15e;"></i><br>
                      <small>ADR, Sound Design, &amp; Foley</small>
                    </div>
                  </a>
                </div>
                <div class="all-33 small-100 tiny-100">
                  <a href="#web">
                    <div class="panel-button align-center">
                      <h2>Web Audio</h2>
                      <i class="fa fa-desktop fa-5x" style="color: #0ba15e;"></i><br>
                      <small>Podcasts &amp; Web Videos</small>
                    </div>
                  </a>
                </div>
              </div>
            </div>
             </div>
             <div id="prod" class="bgprod">
               <div style="background: rgba(23, 29, 34, 0.7);">
                 <div class="ink-grid">
                   <div class="ink-grid" style="padding: 80px 0px 80px 0px;">
                     <h1>Production Services</h1>
                     <p class="just">We offer audio production services for short films, feature films, and events. Whether your post-production services are provided by Kraken, or someone else, we can provide the deliverables you need to ensure a smooth post-production process.</p>
                     <p>
                       <ul>
                         <li>Sound mixing/recording</li>
                         <li>Boom operator</li>
                         <li>Audio reports</li>
                         <li>Negotiable deliverables</li>
                       </ul>
                     </p>
                   </div>
                 </div>
               </div>
             </div>
             <div id="post" style="background: #0ba15e;">
               <div class="ink-grid" style="padding: 80px 0px 80px 0px;">
                 <div class="ink-grid">
                 <h1>Post-Production Services</h1>
                 <p class="just">Kraken offers post production sound services for corporate videos, short films, and features. We are able to handle a variety of post services ranging from recording services to audio cleanup and manipulation.
                 </p>
                 <p>
                  <ul>
                    <li>ADR</li>
                    <li>Foley</li>
                    <li>Sound Design</li>
                    <li>Dialogue Editing &amp; Cleanup</li>
                  </ul>
                </p>
               </div>
             </div>
             </div>
             <div id="web" class="bgweb">
               <div style="background: rgba(23, 29, 34, 0.7);">
                 <div class="ink-grid">
                 <div class="ink=grid">
                   <div class="ink-grid" style="padding: 80px 0px 80px 0px;">
                     <h1>Web Content</h1>
                     <p class="just">Let us help you bring your web content to the next level. Sound is one of the most overlooked aspects of web content. Let us clean up your sound to make your podcasts or videos stand out in a sea of unfinished content.</p>
                     <p>
                      <ul>
                        <li>Podcasts</li>
                        <li>YouTube Videos</li>
                        <li>Audio Cleanup</li>
                        <li>Dialogue Editing</li>
                      </ul>
                    </p>
                   </div>
                 </div>
               </div>
               </div>
             </div>

               <div id="proj" class="ink-grid" style="padding: 80px 0px 80px 0px;">
                 <div class="ink-grid">
                 <h1>Projects</h1>
                 <p class="just">Some of the projects we have worked on are listed below. For more information about the projects, feel free to reach out to us, or visit the IMDb links where available.</p>
                 <div class="column-group gutters">
                   <div class="all-50 small-100 tiny-100">
                     <div class="panel-head">
                       Production Mixing &amp; Boom Op
                     </div>
                     <div class="panel-bod" style="padding: 80px 10px 80px 10px;">
                       <p>
                         <strong class="lead">Bride of Violence</strong> <a href="http://www.imdb.com/title/tt3813018/?ref_=nv_sr_2" target="_blank">
                           <i class="fa fa-imdb" aria-hidden="true" style="color: #171d22;"></i>
                         </a>
                         <br>
                         <small>Feature Film</small>
                       </p>
                       <p>
                         <strong class="lead">The Hero's Journey</strong><br>
                         <small>Festival Opener</small>
                       </p>
                       <p>
                         <strong class="lead">He Called Me Angel</strong> <a href="http://www.imdb.com/title/tt6867428/?ref_=nm_flmg_pdsg_1" target="_blank">
                           <i class="fa fa-imdb" aria-hidden="true" style="color: #171d22;"></i>
                         </a>
                         <br>
                         <small>Documentary</small>
                       </p>
                       <p>
                         <strong class="lead">Going Left</strong><br>
                         <small>Documentary</small>
                       </p>
                       <p>
                         <strong class="lead">Our Last Summer</strong> <a href="http://www.imdb.com/title/tt6383102/fullcredits?ref_=tt_ov_st_sm" target="_blank">
                           <i class="fa fa-imdb" aria-hidden="true" style="color: #171d22;"></i>
                         </a>
                         <br>
                         <small>Short Film</small>
                       </p>
                       <p>
                         <strong class="lead">Transfer</strong><br>
                         <small>Short Film</small>
                       </p>
                       <p>
                         <strong class="lead">Byron</strong><br>
                         <small>Short Film</small>
                       </p>
                       <p>
                         <strong class="lead">Katy</strong><br>
                         <small>Short Film</small>
                       </p>
                     </div>
                   </div>
                   <div class="all-50 small-100 tiny-100">
                     <div class="panel-head">
                       Post-Production &amp; Sound Design
                     </div>
                     <div class="panel-bod" style="padding: 80px 10px 80px 10px;">
                       <p>
                         <strong class="lead">Bride of Violence</strong> <a href="http://www.imdb.com/title/tt3813018/?ref_=nv_sr_2" target="_blank">
                           <i class="fa fa-imdb" aria-hidden="true" style="color: #171d22;"></i>
                         </a>
                         <br>
                         <small>Feature Film</small>
                       </p>
                       <p>
                         <strong class="lead">Phoenix Children's Hospital</strong><br>
                         <small>Informational Promo</small>
                       </p>
                       <p>
                         <strong class="lead">He Called Me Angel</strong> <a href="http://www.imdb.com/title/tt6867428/?ref_=nm_flmg_pdsg_1" target="_blank">
                           <i class="fa fa-imdb" aria-hidden="true" style="color: #171d22;"></i>
                         </a>
                         <br>
                         <small>Documentary</small>
                       </p>
                       <p>
                         <strong class="lead">Breath Interrupted</strong> <a href="http://www.imdb.com/title/tt4407988/?ref_=nm_flmg_snd_5" target="_blank">
                           <i class="fa fa-imdb" aria-hidden="true" style="color: #171d22;"></i>
                         </a>
                         <br>
                         <small>Documentary</small>
                       </p>
                       <p>
                         <strong class="lead">Going Left</strong><br>
                         <small>Documentary</small>
                       </p>
                       <p>
                         <strong class="lead">The Hero's Journey</strong><br>
                         <small>Festival Opener</small>
                       </p>
                       <p>
                         <strong class="lead">Last Words</strong><br>
                         <small>Short Film</small>
                       </p>
                       <p>
                         <strong class="lead">Transfer</strong><br>
                         <small>Short Film</small>
                       </p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <div id="cont" style="background: #f1f0de; color: #0ba15e; padding: 80px 0px 80px 0px;">
               <div class="ink-grid">
                 <h1 style="color: #0ba15e;">Contact Us</h1>
                 <p>You can contact us for qestions or quotes through either email or phone.</p>
                 <p>
                 <i class="fa fa-envelope fa-fw" style="color: #0ba15e;"></i> topher@krakenaudio.com<br>
                 <i class="fa fa-phone fa-fw" style="color: #0ba15e;"></i> 480.788.1749
                </p>
               </div>
             </div>

      <div class="push"></div>
        </div>

        <footer class="clearfix">
            <div class="ink-grid">
                <!--ul class="unstyled inline half-vertical-space">
                    <li class="active"><a href="#">About</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul-->
                <p class="note">
                    <a href="https://www.facebook.com/krakenaud/" target="_blank">
                      <i class="fa fa-facebook-official fa-2x" style="color: #f1f0de;"></i>
                    </a>
                    <a href="http://www.imdb.com/name/nm6925606/?ref_=fn_al_nm_1" target="_blank">
                      <i class="fa fa-imdb fa-2x" aria-hidden="true" style="color: #f1f0de;"></i>
                    </a>
                  <span class="push-right" style="font-size: 65%;">
                    &copy; 2017 Kraken Audio
                  </span>
                </p>
            </div>
        </footer>

    </body>

</html>

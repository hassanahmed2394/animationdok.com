
<html lang="en-US"
  itemscope 
  itemtype="http://schema.org/WebSite" 
  prefix="og: http://ogp.me/ns#" >
<head>
    
<title>Packages</title>
<meta name="description"  content="Animation Dok is a digital design agency specializing in animation" />

     
<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include($style); 

$urhere = "homepage";
?>
 

</head>

<body class="home blog pakgespage">

    <div class="app-content">
      <div class="main">

        <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>




<div class="works-wrap">

 <section class="mypackages">
    <div class="container">
        <div class="row">
            <div class="left information">
                <h2 class="title myheading">My Packages</h2>
                    
                <p class="mytext">Animation Dok can help visualize even the craziest ideas converting them into elegant designs, awesome experiences and catchy brands.</p>
            </div>
            <div class="tab-custom">
                <ul class="tabbing-links">
                  <li class="current" data-targetit="tabs-vdpackages">2D Animation </li>
                  <li data-targetit="tabs-3dpackages">3D Animation</li>

                  
                  <li data-targetit="tabs-WhiteboardAnimation">Whiteboard Animation</li>
                  <li data-targetit="tabs-2dillustration">2D Illustration</li>
                </ul>
            
            
                

                <div class="tabs tabs-vdpackages row current">
                <?php
                $packagesanimation = $_SERVER['HTTP_HOST']; 
                $packagesanimation = "includes/packages-animation.php"; 
                include($packagesanimation); 
                ?>
                </div>


                <div class="tabs tabs-3dpackages row">
                <?php
                $packagescombo = $_SERVER['HTTP_HOST']; 
                $packagescombo = "includes/packages-3d.php"; 
                include($packagescombo); 
                ?>
                </div>
                <div class="tabs tabs-2dillustration row">
                <?php
                $packages2dillustration = $_SERVER['HTTP_HOST']; 
                $packages2dillustration = "includes/packages-2d-illustration.php"; 
                include($packages2dillustration); 
                ?>
                </div>
                <div class="tabs tabs-WhiteboardAnimation row">
                <?php
                $packageswhiteboardanimation = $_SERVER['HTTP_HOST']; 
                $packageswhiteboardanimation = "includes/packages-whiteboard-animation.php"; 
                include($packageswhiteboardanimation); 
                ?>
                </div>
             


            </div>

        </div>
    </div>
</section>


<section class="testimonials">
            
                 <h3 class="title d-none d-sm-block">Testimonials</h3> 
                <p> Trusted by thousands of brands from every industry.</p>
                <div class="content">
                  <div style="display: none;" class="dots-url" data-url="Logo"></div>
                  <div style="display: none;" class="dots-url" data-url="Web Design"></div>
                  <div style="display: none;" class="dots-url" data-url="Branding"></div>
                  <div style="display: none;" class="dots-url" data-url="Mobile App"></div>
                  <div style="display: none;" class="dots-url" data-url="Content"></div>
                  <div style="display: none;" class="dots-url" data-url="Video"></div>
                  <div style="display: none;" class="dots-url" data-url="SEO"></div>
                  <div class="phrases">

                    
                        <div class="">
                             <div class="phrase-inner">
                            <div>
                                <figure style="background-image: url(assets/images/testi-3.jpg);"></figure>
                                <p class="phrase">The Animation Dok animation team was very easy to work with and responsive. They went out of his way to ensure I got the video completed in time for an important meeting and did a wonderful job conveying the changes I requested to the art team all along the way!
                                </p>
                            <div class="who">
                                <div class="avatar">
                                                  BG               
                                    </div>
                                <span class="name"> Bella Green </span>
                            </div>
                            </div>
                            <div>
                            <figure style="background-image: url(assets/images/testi-2.jpg);"></figure>
                                <p class="phrase">
                              
I was fortunate enough to find Animation Dok by responding to an email I received. After they successfully completed the first two (2) videos I was so happy with their work. I did 9 more videos for a total of 11. I'm already planning my next 12 projects. These guys are amazing with Mark at the helm. They will have me as a client for as long as they offer the service.

                                </p>
                            <div class="who">
                                <div class="avatar">DA</div>
                                <span class="name">David Agusta</span>
                            </div>
                            </div>
                            <div>
                              <figure style="background-image: url(assets/images/testi-1.jpg);"></figure>
                                <p class="phrase">
                      Animation Dok did impress me by their professionalism, competency and responsiveness. They listened to my needs and took all my comments immediately into consideration. These days I'm almost used to bad client Service but Animation Dok (I dealt with Mark) really made me feel like "Client is King"! I can only recommend Animation Dok and I#m grateful for this experience - well done!!
                                </p>
                            <div class="who">
                                <div class="avatar">RD </div>
                                <span class="name">Robert Dobay </span>
                            </div>
                            </div>
                                </div>
                        </div>
                        

                                        </div>  
                </div>
            </section>


</div>

<section class="contacts">
    <div class="container">
        <div class="contacts-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="content">
                            <h2 class="form-name">Let’s talk business</h2>
                        </div>
                        <h3 class="title">Services</h3>

<?php
$footerform = $_SERVER['HTTP_HOST']; 
$footerform = "includes/footer-form.php"; 
include($footerform); 
?>                           
                    </div>  
                </div>
                <div class="col-lg-6">
                    <div class="social-info-wrap">

                        <div class="social-info">
                            <div class="content">
                                <h2 class="form-name">Contacts</h2>
                            </div>

                            <div class="social-flex-wrap">

                                <div class="hire-wrap">
                                    <h3 class="title">Hire</h3>
                                    <a href="mailto:order@animationdok.com" class="mail">order@animationdok.com</a><a
                                    class="phone" href="tel:+19732657199">+1 973 265 7199</a>
                                </div>
                              
                                <div class="map">
                                  <img src="assets/images/animation_banner.gif">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> 
            </div>     
        </div>
    </div>    
</section> 



<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer-top.php"; 
include($footer); 
?>


   <section class="next-page">
          <div class="next-page-wrap">
              <a href="<?php echo $path;?>how-it-works" class="next-page__link">
                  <div class="next-page__desc">Next stop</div>
                  <div class="next-page__title">How It works</div>
                 
              </a>
          </div>
          <div class="next-page-mask"></div>
          <p class="next-page__copy">
              <span>&copy; 2019 Animation Dok</span>
          </p>
      </section>


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include($footer); 
?>
    

</body>
</html>

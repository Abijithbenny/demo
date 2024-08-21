
<?php 
if(isset($_POST['submit'])){
    $to = "abijithbenny@gmail.com"; // this is your Email address
    $from = $_POST['emailid']; // this is the sender's Email address
    $name = $_POST['name'];
    $emailid = $_POST['emailid'];
    $org = $_POST['org'];
    $work = $_POST['work'];
    $Call = $_POST['Call'];
    $Text = $_POST['Text'];
    $subject = "New Website Inquiry";
    $message = $name . " wrote the following:" . "\n\n" . $emailid . $org . $work . $Call . $Text ;
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
  
    }
?>
<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        
        <title>Carestrides</title>
        <meta name="description" content="Carestrides">  
        <meta charset="utf-8">
        <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Favicon -->
       
        <link rel="icon" href="images/BrandMark.png" type="image/png" sizes="any">    

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/splitting.css">
        <link rel="stylesheet" href="css/YTPlayer.css">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    </head>
    <body class="appear-animate dark-mode">
        
        <!-- Page Loader -->   
        <div class="page-loader dark">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page bg-dark-1" id="top">
            
               <nav class="main-nav dark dark-mode transparent stick-fixed wow-menubar wch-unset">
                <div class="main-nav-sub container">
                    
                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format. 
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap position-static pe-lg-4 me-lg-5 local-scroll">
                        <a href="index.html" class="logo">
                            <img src="images/Dark_logo.png" alt="Your Company Logo" width="225" height="90" />
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist local-scroll justify-content-start">                            
                            <li><a href="patients.html"  data-btn-animate="y">Patients</a></li>
                            <li><a href="clinicians.html" data-btn-animate="y">Clinicians</a></li>
                            <li><a href="systems.html" data-btn-animate="y">Health Systems</a></li>
                            <li><a href="about.html" data-btn-animate="y">About Us</a></li>
                        </ul>
                        
                        <ul class="items-end clearlist local-scroll">
                            
                           
                                                      
                            <li>
                                <a href="#contact" class="opacity-1 no-hover">
                                    <span class="btn btn-mod btn-border-w-light btn-small btn-round"><span data-btn-animate="y">Get in touch</span></span>
                                </a>
                            </li>
                            
                        </ul>                     
                        
                    </div>
                    <!-- End Main Menu -->
                    
                </div>
            </nav>
            
            <main id="main">
           
                <!-- Home Section -->
                <section class="home-section  light-content" id="home">
                    
                    <!-- Background Shape -->
                
                    <!-- End Background Shape -->
                    
                    <!-- Background Shape -->
                    <div class="bg-shape-6"></div>
                    <!-- End Background Shape -->
                    
                    <div class="container position-relative min-height-100vh d-flex align-items-center pt-100 pb-100 pt-md-120 pb-md-120">
                        
                        <!-- Home Section Content -->
                        <div class="home-content text-start">
                            <div class="row">
                                
                                <!-- Home Section Text -->
                                <div class="col-lg-6 d-flex align-items-center mb-md-60 mb-sm-40">
                                    <div class="w-100 text-center text-lg-start">
                                        
                                        <h1 class="hs-title-1 mb-40 mb-sm-20 wow fadeInUp">
                                            Connected Care,<br/>Healthier Lives.
                                        </h1>
                                        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="section-descr mb-50 mb-sm-40 wow fadeInUp" data-wow-delay="0.15s" style="font-size:40px">
                                                    Take Control of Your Health with Advanced Monitoring and Personalized Care
                                                </p>
                                            </div>
                                        </div>
                                    
                                        <div class="local-scroll wow fadeInUp wch-unset" data-wow-delay="0.3s" data-wow-offset="0">
                                            
                                            <a href="#contact" class="btn btn-mod btn-grad btn-large btn-round mb-xs-10" data-btn-animate="y">Get Started Today</a>
                                            
                                           
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Home Section Text -->
                                
                                <!-- Images -->
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="w-100 ps-xl-3">                                        
                                        
                                        <div class="composition-6">
                                            
                                           
                                            <div class="composition-6-image">
                                                <img src="images/logo image.png" alt="Image Description" class="wow scaleOutIn" data-wow-duration="1.2s" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- End Images -->
                                
                            </div>                            
                        </div>
                        <!-- End Home Section Content -->
                        
                        <!-- Scroll Down -->
                        <div class="local-scroll scroll-down-wrap-type-1 wow fadeInUp" data-wow-offset="0">
                            <div class="container text-center">
                                <a href="#about" class="scroll-down-1">
                                    <div class="scroll-down-1-icon">
                                        <i class="mi-arrow-down"></i>
                                    </div>
                                    <div class="scroll-down-1-text"><img src="down-arrow.png" width="30px"></div>
                                </a>
                            </div>                            
                        </div>
                        <!-- End Scroll Down -->
                        
                    </div>
                    
                </section>
                <!-- End Home Section --> 
                 
                
                <!-- About Section -->
                <section class="page-section light-content bg-scroll" id="about">
                    
                    <div class="container position-relative">
                    
                        <div class="row">                            
                            <div class="col-lg-8 offset-lg-2 text-center">
                                
                                <div class=" wow fadeInUp">
                                    
                                   
                                    
                                    <h3 class="section-title mb-40 mb-sm-30">Revolutionize Your Care</h3>
                                
                                </div>
                                
                                <div class="row text-start text-gray mb-80 mb-sm-60">
                                    
                                 
                                    
                                    <div class="col-md-12 wow linesAnimInLong" data-splitting="lines" style="text-align: center;">
                                        Harness the power of advanced remote monitoring to empower individuals, elevate well-being, and strengthen community connections.
                                    </div>
                                    
                                </div>
                                
                            </div>                            
                        </div>
                        
                    </div>
                        
                    <!-- Images Composition -->
                 
                    <!-- End Images Composition -->                    
                    
                </section>
                <!-- End About Section -->
                
                
                <!-- Achievements Section -->
                <section class="container">
                    <div class="position-relative">
                        
                      
                        
                        <div class="page-section  bg-dark-alpha-80 bg-scroll light-content overflow-hidden" >
                           <div class="container position-relative">
                                
                                <div class="row">
                                    
                                    <div class="col-lg-4 mb-md-60 mb-xs-50">
                                        
                                        <h2 class="section-title mb-20 wow fadeInUp">The Impact of Remote Monitoring</h2>
                                        
                                     
                                        
                                    </div>
                                    
                                    <div class="col-lg-7 offset-lg-1">                                    
                                        <div class="row mb-n50 mb-xs-n30">
                                            
                                            <!-- Number Item -->
                                            <div class="col-sm-6 col-lg-5 mb-50 mb-xs-30 wow fadeScaleIn" data-wow-delay="0.1s">
                                                <div class="number-title mb-10">
                                                    76%
                                                </div>
                                                <div class="number-descr">
                                                    reduction in hospital readmissions
                                                </div>
                                            </div>
                                            <!-- End Number Item -->
                                            
                                            <!-- Number Item -->
                                            <div class="col-sm-6 col-lg-5 offset-lg-2 mb-50 mb-xs-30 wow fadeScaleIn" data-wow-delay="0.2s">
                                                <div class="number-title mb-10">
                                                    90%
                                                </div>
                                                <div class="number-descr">
                                                    patient satisfaction rate
                                                </div>
                                            </div>
                                            <!-- End Number Item -->
                                            
                                            <!-- Number Item -->
                                            <div class="col-sm-6 col-lg-5 mb-50 mb-xs-30 wow fadeScaleIn" data-wow-delay="0.3s">
                                                <div class="number-title mb-10">
                                                    86%
                                                </div>
                                                <div class="number-descr">
                                                    of patients hit 16+ days of readings with Carestrides
                                                </div>
                                            </div>
                                            <!-- End Number Item -->
                                            
                                            <!-- Number Item -->
                                            <div class="col-sm-6 col-lg-5 offset-lg-2 mb-50 mb-xs-30 wow fadeScaleIn" data-wow-delay="0.4s">
                                                <div class="number-title mb-10">
                                                    30%
                                                </div>
                                                <div class="number-descr"> improvement in overall quality of life scores
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-lg-5 mb-50 mb-xs-30 wow fadeScaleIn" data-wow-delay="0.4s">
                                                <div class="number-title mb-10">
                                                   40%
                                                </div>
                                                <div class="number-descr">
                                                  
                                                    reduction in average blood glucose levels
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-lg-5 offset-lg-2 mb-50 mb-xs-30 wow fadeScaleIn" data-wow-delay="0.4s">
                                                <div class="number-title mb-10">
                                                    98%
                                                </div>
                                                <div class="number-descr"> of care managed by Carestrides, minimizing provider involvement
                                                </div>
                                            </div>
                                            <!-- End Number Item -->
                                            
                                            <!-- Number Item -->
                                        
                                            <!-- End Number Item -->
                                            
                                        </div>                                    
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div> 
                           
                    </div>
                </section>
                <!-- End Achievements Section -->
           
                <!-- Steps Section -->
                <section class="page-section   light-content">
                    <div class="container position-relative">
                        
                        <div class="row mb-80 mb-sm-60">
                            <div class="col-md-8 col-lg-6">
                                     <h2 class="section-title mb-0"> Empowering Wellness.<br>

                                        Driving Innovation.<br>

                                        Optimizing Patient Health.</h2>
                       </div>
                            <div class="col-lg-6 pt-20 pt-md-30">
                                <p class="text-gray mb-0">
                                    Dedicated to patient well-being, we offer innovative health solutions. Our remote monitoring tech empowers proactive healthcare, putting patients in control. Through continuous innovation, we streamline processes for efficient care.    
                                </p>
                            </div>
                        </div>
                        
                        <!-- Steps Grid -->
                        <div class="row mt-n30">
                            
                            <!-- Gradient Settings for SVG Icons -->
                            <svg class="visually-hidden" aria-hidden="true">
                                <linearGradient id="gradient-horizontal"><stop offset="0%" stop-color="var(--color-primary-4)" /><stop offset="33%" stop-color="var(--color-primary-3)" /><stop offset="67%" stop-color="var(--color-primary-2)" /><stop offset="100%" stop-color="var(--color-primary-1)" /></linearGradient>
                            </svg>
                            <!-- End Gradient Settings for SVG Icons -->
                            
                            <!-- Steps Item -->
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0">
                                <div class="features-2-item pt-sm-40 pb-sm-40">
                                    
                                   
                                    
                                    <div class="features-2-icon">
                                     <img src="images/heart2.svg" width="70px">
                                    </div>
                                    
                                    <h4 class="features-2-title">
                                        Remote Patient Monitoring
                                    </h4>
                                    
                                    <div class="features-2-descr">
                                      <a href="systems.html#remote"> View More...</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- End Steps Items -->
                            
                            <!-- Steps Item -->
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.15s">
                                <div class="features-2-item pt-sm-40 pb-sm-40">
                                    
                                   
                                    
                                    <div class="features-2-icon">
                                        <img src="images/Tools.svg" width="70px">
                                    </div>
                                    
                                    <h4 class="features-2-title">
                                        Care Coordination Tools
                                    </h4>
                                    
                                    <div class="features-2-descr">
                                        <a href="systems.html#care"> View More...</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- End Steps Items -->
                            
                            <!-- Steps Item -->
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay="0.3s">
                                <div class="features-2-item pt-sm-40 pb-sm-40">
                                    
                                   
                                    
                                    <div class="features-2-icon">
                                          <img src="images/local_convenience_store_50dp_E8EAED_FILL0_wght400_GRAD0_opsz48.svg" width="70px">
                                    </div>
                                    
                                    <h4 class="features-2-title">
                                        Patient Engagement Solutions
                                    </h4>
                                    
                                    <div class="features-2-descr">
                                        <a href="systems.html#patient"> View More...</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- End Steps Items -->
                            
                        </div>
                        <!-- End Steps Grid -->
                        
                    </div>
                </section>
                <!-- End Steps Section -->
			<section class="page-section  light-content desk" id="services">                    
                    <div class="container position-relative">
                    
                        <div class="row">                            
                            <div class="col-lg-8 offset-lg-2 text-center">
                                
                                
                                <h3 class="section-title mb-40 mb-sm-30">Why Carestrides?</h3>
                                
                               <br/>
                                
                            </div>                            
                        </div>
                        
                        <div class="row wow fadeInUp animated " style="visibility: visible; animation-name: fadeInUp;">
                            
                            <!-- Services Tabs -->
                            <div class="col-lg-5 col-xl-4 mb-md-50 mb-sm-30">
                                <ul class="nav nav-tabs services-7-tabs" role="tablist">
                                    <li>
                                        <a href="#services-item-1a" class="active" aria-controls="services-item-1a" role="tab" aria-selected="true" data-bs-toggle="tab">
                                            <h4 class="services-7-title">Patient-Centered</h4>
                                            
                                            <div class="services-7-arrow"><div class="owl-next" role="button" tabindex="0"><span class="visually-hidden">Next Slide</span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M31.078,12.939 L31.078,12.939 L20.115,24.010 L19.200,23.077 L29.518,12.665 L-0.006,12.665 L-0.006,11.344 L29.517,11.344 L19.200,0.933 L20.115,-0.001 L31.992,12.005 L31.078,12.939 Z"></path></svg></div></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#services-item-2a" aria-controls="services-item-2a" role="tab" aria-selected="false" data-bs-toggle="tab">
                                            <h4 class="services-7-title">Cutting-Edge Tech</h4>
                                           
                                             <div class="services-7-arrow"><div class="owl-next" role="button" tabindex="0"><span class="visually-hidden">Next Slide</span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M31.078,12.939 L31.078,12.939 L20.115,24.010 L19.200,23.077 L29.518,12.665 L-0.006,12.665 L-0.006,11.344 L29.517,11.344 L19.200,0.933 L20.115,-0.001 L31.992,12.005 L31.078,12.939 Z"></path></svg></div></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#services-item-3a" aria-controls="services-item-3a" role="tab" aria-selected="false" data-bs-toggle="tab">
                                            <h4 class="services-7-title">Clinical Expertise: </h4>
                                            
                                            <div class="services-7-arrow"><div class="owl-next" role="button" tabindex="0"><span class="visually-hidden">Next Slide</span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M31.078,12.939 L31.078,12.939 L20.115,24.010 L19.200,23.077 L29.518,12.665 L-0.006,12.665 L-0.006,11.344 L29.517,11.344 L19.200,0.933 L20.115,-0.001 L31.992,12.005 L31.078,12.939 Z"></path></svg></div></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#services-item-4a" aria-controls="services-item-4a" role="tab" aria-selected="false" data-bs-toggle="tab">
                                            <h4 class="services-7-title">Comprehensive Solutions</h4>
                                           
                                            <div class="services-7-arrow"><div class="owl-next" role="button" tabindex="0"><span class="visually-hidden">Next Slide</span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M31.078,12.939 L31.078,12.939 L20.115,24.010 L19.200,23.077 L29.518,12.665 L-0.006,12.665 L-0.006,11.344 L29.517,11.344 L19.200,0.933 L20.115,-0.001 L31.992,12.005 L31.078,12.939 Z"></path></svg></div></i></div>
                                        </a>
                                    </li>
									 <li>
                                        <a href="#services-item-5a" aria-controls="services-item-5a" role="tab" aria-selected="false" data-bs-toggle="tab">
                                            <h4 class="services-7-title">Proven Results</h4>
                                            
                                              <div class="services-7-arrow"><div class="owl-next" role="button" tabindex="0"><span class="visually-hidden">Next Slide</span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M31.078,12.939 L31.078,12.939 L20.115,24.010 L19.200,23.077 L29.518,12.665 L-0.006,12.665 L-0.006,11.344 L29.517,11.344 L19.200,0.933 L20.115,-0.001 L31.992,12.005 L31.078,12.939 Z"></path></svg></div></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#services-item-6a" aria-controls="services-item-6a" role="tab" aria-selected="false" data-bs-toggle="tab">
                                            <h4 class="services-7-title">Minority and Women Owned</h4>
                                            
                                              <div class="services-7-arrow"><div class="owl-next" role="button" tabindex="0"><span class="visually-hidden">Next Slide</span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px" viewBox="0 0 32 24" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M31.078,12.939 L31.078,12.939 L20.115,24.010 L19.200,23.077 L29.518,12.665 L-0.006,12.665 L-0.006,11.344 L29.517,11.344 L19.200,0.933 L20.115,-0.001 L31.992,12.005 L31.078,12.939 Z"></path></svg></div></i></div>
                                        </a>
                                    </li>
                                </ul> 
                            </div>
                            <!-- End Services Tabs -->
                            
                            <!-- Services Images -->
                            <div class="col-lg-6 offset-xl-1">
                                <div class="tab-content position-sticky">
                                    
                                    <!-- Tab Image -->
                                    <div class="tab-pane show fade active" id="services-item-1a" role="tabpanel">
                                        <div class="services-7-content">
                                            <div class=" text-gray text-center mt-3">
                                                We focus on patient engagement and empowerment,<br/> ensuring active participation in remote care.
                                            </div>
											<br/>
                                             <div class="services-7-image">
                                                <img src="images/CStrides/Patient centered monitoring.jpg" alt="Image Description">
                                            </div>
                                        </div>                                                                                                                     
                                    </div>
                                    <!-- End Tab Image -->
                                    
                                    <!-- Tab Image -->
                                    <div class="tab-pane show fade" id="services-item-2a" role="tabpanel">
                                        <div class="services-7-content">
                                            <div class=" text-gray text-center mt-3">
                                                Our advanced technology enhances patient<br/> care and streamlines health management.
                                            </div>
											<br/>
                                            <div class="services-7-image">
                                               <img src="images/CStrides/Cutting Edge Technology.jpg" alt="Image Description">
                                            </div>
                                            
                                            
                                            
                                        </div>                                          
                                    </div>
                                    <!-- End Tab Image -->
                                    
                                    <!-- Tab Image -->
                                    <div class="tab-pane show fade" id="services-item-3a" role="tabpanel">
                                        <div class="services-7-content">
                                            <div class=" text-gray text-center mt-3">
                                                Our skilled team of healthcare professionals<br/> provides top-notch support and optimal outcomes.
                                            </div>
											<br/>
                                            <div class="services-7-image">
                                               <img src="images/CStrides/Clinical Expertise.jpg" alt="Image Description">
                                            </div>
                                            
                                            
                                        </div>                                          
                                    </div>
                                    <!-- End Tab Image -->
                                    
                                    <!-- Tab Image -->
                                    <div class="tab-pane show fade" id="services-item-4a" role="tabpanel">
                                        <div class="services-7-content">
                                            <div class=" text-gray text-center mt-3">
                                                We offer wide-ranging remote monitoring<br/> solutions for continuous patient care.
                                            </div>
											<br/>
                                            <div class="services-7-image">
                                              <img src="images/CStrides/Comprehensive Solutions.jpg" alt="Image Description">
                                            </div>
                                            
                                            
                                            
                                        </div>                                       
                                    </div>
									<div class="tab-pane show fade" id="services-item-5a" role="tabpanel">
                                        <div class="services-7-content">
                                            <div class=" text-gray text-center mt-3">
                                                Our approach delivers effective health <br/>management and improved outcomes.
                                            </div>
											<br/>
                                            <div class="services-7-image">
                                               <img src="images/CStrides/Proven results.jpeg" alt="Image Description">
                                            </div>
                                            
                                          
                                            
                                        </div>                                       
                                    </div>
									<div class="tab-pane show fade" id="services-item-6a" role="tabpanel">
                                        <div class="services-7-content">
                                            <div class=" text-gray text-center mt-3">
                                                We are proud to champion diversity and<br/> inclusion in healthcare innovation.
                                            </div>
											<br/>
                                            <div class="services-7-image">
                                             <img src="images/mao.jpg" alt="Image Description">
                                            </div>
                                            
                                           
                                            
                                        </div>                                       
                                    </div>
                                    <!-- End Tab Image -->
                                    
                                </div>
                            </div>
                            <!-- End Services Images -->
                            
                        </div>
        
                    </div>  
				
                </section>
			
              <section class="page-section  light-content mob" id="services">                    
                    <div class="container position-relative">
                    
                        <div class="row">                            
                            <div class="col-lg-8 offset-lg-2 text-center">
                                
                                
                                <h3 class="section-title mb-40 mb-sm-30">Why get Carestrides?</h3>
                                
                                <p class="text-gray mb-80 mb-sm-60">                                    
                                    Dedicated to patient well being, we offer innovative health solutions. Our remote monitoring
tech empowers proactive healthcare, putting patients in control. Through continuous
innovation, we streamline processes for efficient care.
                                </p>
                                
                            </div>                            
                        </div>
                        
                      
                       
<button class="accordion" style="background-color:#1f00ff00 !important; color: #fff !important">Patient-Centered</button>
<div class="panel">
  <p>We focus on patient engagement and empowerment,<br/> ensuring active participation in remote care.</p>
</div>

<button class="accordion"  style="background-color:#1f00ff00 !important; color: #fff !important">Cutting-Edge Tech</button>
<div class="panel">
  <p>Our advanced technology enhances patient care and <br/>streamlines health management.</p>
</div>

<button class="accordion"  style="background-color:#1f00ff00 !important; color: #fff !important">Clinical Expertise</button>
<div class="panel">
  <p>Our skilled team of healthcare professionals provides<br/> top-notch support and optimal outcomes.</p>
</div>
		
	
<button class="accordion"  style="background-color:#1f00ff00 !important; color: #fff !important">Comprehensive Solutions</button>
<div class="panel">
  <p>We offer wide-ranging remote monitoring solutions<br/> for continuous patient care.</p>
</div>
	
<button class="accordion"  style="background-color:#1f00ff00 !important; color: #fff !important">Proven Results</button>
<div class="panel">
  <p>Our approach delivers effective health <br/>management and improved outcomes.
</p>
</div>
	
<button class="accordion"  style="background-color:#1f00ff00 !important; color: #fff !important">Minority and Women Owned</button>
<div class="panel">
  <p>We are proud to champion diversity and<br/> inclusion in healthcare innovation.
</p>
</div>
                    </div>  
				
                </section>
			
                  <!-- Divider -->
                
                <!-- End Divider -->
                
                <!-- Testimonials Section -->
                <section class="page-section  light-content">
                    <div class="container">
                        
                        <div class="row wow fadeInUp">
                            <div class="col-lg-11">
                                <div class="testimonials-slider-2 slider-bold">
                                    
                                    <!-- Slide Item -->
                                    <div class="pb-sm-70">
                                        <blockquote class="mb-0">
                                            <div class="blockquote-icon" aria-hidden="true">
                                                <img src="images/demo-bold/blockquote.svg" alt="" />
                                            </div>
                                            <p>
                                                I don't want to switch to a new PCP yet because they do not have this monitoring program.
                                            </p>
                                            <footer class="ts2-author mt-50 mt-xs-30 clearfix">
                                                <div class="ts2-author-img float-start">
                                                    <img class="rounded-circle" width="50" height="50" src="images/personer.svg" alt="Image description is here" />
                                                </div>
                                                <div class="overflow-hidden">
                                                     Linda
                                                     <div class="small">
                                                        Patient
                                                    </div>
                                                </div>                                                
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Slide Item -->
									  <!-- Slide Item -->
                                    <div class="pb-sm-70">
                                        <blockquote class="mb-0">
                                            <div class="blockquote-icon" aria-hidden="true">
                                                <img src="images/demo-bold/blockquote.svg" alt="" />
                                            </div>
                                            <p>
                                                I feel safer because I know Carestride is keeping an eye out for me every day.
                                            </p>
                                            <footer class="ts2-author mt-50 mt-xs-30 clearfix">
                                                <div class="ts2-author-img float-start">
                                                    <img class="rounded-circle" width="50" height="50" src="images/personer.svg" alt="Image description is here" />
                                                </div>
                                                <div class="overflow-hidden">
                                                     Mary
                                                     <div class="small">
                                                        Patient
                                                    </div>
                                                </div>                                                
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Slide Item -->
									  <!-- Slide Item -->
                                    <div class="pb-sm-70">
                                        <blockquote class="mb-0">
                                            <div class="blockquote-icon" aria-hidden="true">
                                                <img src="images/demo-bold/blockquote.svg" alt="" />
                                            </div>
                                            <p>
                                                Carestride has helped me
expedite delays I have had
with prescription refills and
follow up appointments
                                            </p>
                                            <footer class="ts2-author mt-50 mt-xs-30 clearfix">
                                                <div class="ts2-author-img float-start">
                                                    <img class="rounded-circle" width="50" height="50" src="images/personer.svg" alt="Image description is here" />
                                                </div>
                                                <div class="overflow-hidden">
                                                    Margie
                                                    <div class="small">
                                                        Patient
                                                    </div>
                                                </div>                                                
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Slide Item -->
									  <!-- Slide Item -->
                                    <div class="pb-sm-70">
                                        <blockquote class="mb-0">
                                            <div class="blockquote-icon" aria-hidden="true">
                                                <img src="images/demo-bold/blockquote.svg" alt="" />
                                            </div>
                                            <p>
                                                Working with Carestride
has helped our patients
become more engaged in
their self monitoring and
care
                                            </p>
                                            <footer class="ts2-author mt-50 mt-xs-30 clearfix">
                                                <div class="ts2-author-img float-start">
                                                    <img class="rounded-circle" width="50" height="50" src="images/personer.svg" alt="Image description is here" />
                                                </div>
                                                <div class="overflow-hidden">
                                                    Jennifer
                                                    <div class="small">
                                                        Administrator
                                                    </div>
                                                </div>                                                
                                            </footer>
                                        </blockquote>
                                    </div>
                                    <!-- End Slide Item -->
                           
                                </div>
                            </div>
                        </div>                             
                        
                    </div>
                </section>
                <!-- End Testimonials Section -->
               
                <!-- Contact Section -->
                <section class="page-section  light-content" id="contact">                    
                    <div class="container position-relative">
                    
                        <div class="row">                            
                            <div class="col-lg-8 offset-lg-2 text-center">
                                
                               
                                
                                <h3 class="section-title mb-40 mb-sm-30">Contact Us</h3>
                                
                                
                                
                            </div>                            
                        </div>
                        
                        <div class="row wow fadeInUp" style="align-items: center; justify-content: center;">
                            
                            <!-- Left Column -->
                            <div class="col-lg-8 mb-md-50 mb-sm-30 position-relative z-index-1 "  > 
                                  <!-- Contact Form -->
                                    <form class="form contact-form round" id="contact_form" style="background:#4644448f; padding: 20px; border-radius: 30px !important;" onsubmit="index.php">
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <!-- Name -->
                                                <div class="form-group">
                                                    <label for="name">Your Name</label>
                                                    <div class="input-grad-wrap round" style="border-radius: 30px !important;">
                                                        <input type="text" name="name" id="name" class="input-md input-grad round form-control" placeholder="Enter your name" pattern=".{3,100}" required aria-required="true">
                                                    </div>
                                                </div>
                                                <!-- End Name -->
                                                
                                            </div>
                                            <div class="col-md-12">
                                                
                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <div class="input-grad-wrap round"  style="border-radius: 30px !important;">
                                                        <input type="email" name="email" id="email" class="input-md input-grad round form-control" placeholder="Enter your email" pattern=".{5,100}" required aria-required="true">
                                                    </div>
                                                </div>
                                                <!-- End Email -->
                                                
                                            </div>
                                            <div class="col-md-12">
                                                
                                                <!-- Email -->
                                                <div class="form-group">
                                                    <label for="email">Organization</label>
                                                    <div class="input-grad-wrap round"  style="border-radius: 30px !important;">
                                                        <input type="text" name="org" id="org" class="input-md input-grad round form-control" placeholder="Enter your Organization" pattern=".{5,100}" required aria-required="true">
                                                    </div>
                                                </div>
                                                <!-- End Email -->
                                                
                                            </div>
                                        </div>
                                        
                                        <!-- Message -->
                                        <div class="form-group">
                                            <label for="message">Have you worked with other remote patient monitoring companies before?</label>
                                          
                                                <input type="radio" id="Yes" name="work" checked value="Yes" >
													  <label for="Yes">Yes</label>
													  <input type="radio" id="No" name="work" value="No">
													  <label for="No">No</label>
                                           
                                       			 </div>
										<div class="form-group">
                                            <label for="message">How would you like us to reach out to you ?</label>
                                          <br>
													<input type="checkbox" id="Call" name="Call" checked value="Call">
													<label for="Call"> Call</label><br>
													<input type="checkbox" id="Text" name="Text" value="Text">
													<label for="Text"> Text</label><br>
											<input type="checkbox" id="vehicle2" name="Email" value="Email">
													<label for="Email"> Email</label><br>
                                       			 </div>
                                        
                                        <div class="row">
                                            
                                            <div class="col-md-6 col-xl-7 d-flex align-items-center">
                                                
                                                <!-- Inform Tip -->
                                                <div class="form-tip w-100 pt-3">
                                                    <i class="icon-info size-16"></i>
                                                    All the fields are required. By sending the form you agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.
                                                </div>
                                                <!-- End Inform Tip -->
                                                
                                            </div>
                                            
                                            <div class="col-md-6 col-xl-5 mt-sm-20">
                                                
                                                <!-- Send Button -->
                                                <div class="pt-3 text-md-end">
                                                    <button class="submit_btn btn-mod btn-medium btn-grad btn-round" data-btn-animate="y" id="submit_btn" aria-controls="result" type="submit" name="submit">
                                                        Send Message
                                                    </button>
                                                </div>
                                                <!-- End Send Button -->
                                                                                                                                         
                                            </div>
                                            
                                        </div>
                                       
                                       <div id="result" role="region" aria-live="polite" aria-atomic="true"></div>
                                       
                                    </form>
                                    <!-- End Contact Form -->
                                        
                            </div>
                            <!-- End Left Column -->
                            
                            
                            
                        </div>                             
                        
                    </div>                    
                </section>
                <!-- End Contact Section -->
                
           
                
           
                
      
           
            </main>
                       <!-- Footer -->
            <footer class="page-section footer bg-dark-2 light-content overflow-hidden pb-30">
                
                <!-- Background Shape -->
              
                <!-- End Background Shape -->
                
                <div class="container position-relative">
                    
                    <div class="row pb-60 pb-sm-80 pb-xs-50">
                                                
                        <div class="col-lg-4 mb-md-50">
                            
                          
                            
                            <p class="text-gray mb-40">
                              <img src="images/BrandMark_white_logo.png" width="100px">
								
                            </p>
                            
                           
                        </div>
                        
                        <div class="col-lg-7 offset-lg-1">                            
                            <div class="row mt-n30">
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-5 mt-30">
                                    
                                   <h3 class="fw-title">Contact</h3>
                                    <ul class="fw-menu clearlist">

										<li>
                                            <a href="mailto:info@carestrides.com" rel="noopener nofollow" target="_blank">
                                                <i><img src="images/email.png" width="17px"></i>
                                                &nbsp; info@carestrides.com<br/>
                                            </a>
                                        </li>
										<li>
                                            <a href="tel:844914CARE(2273)" rel="noopener nofollow" target="_blank">
                                                <i><img src="images/phone.png" width="17px"></i>
                                                &nbsp;&nbsp;844&nbsp;914&nbsp;CARE&nbsp;(2273)
                                            </a>
                                        </li>
									</ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                      
                                     <h3 class="fw-title">Pages</h3>
                                    <ul class="fw-menu clearlist local-scroll">  
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="patients.html">Patients</a></li>
                                        <li><a href="clinicians.html">Clinicians</a></li>
                                        <li><a href="systems.html">Health Systems</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                       
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-3 mt-30">
                                    
                                   <h3 class="fw-title">Social Media</h3>
                                    
                                    <ul class="fw-menu clearlist">
                                        <li>
                                            <a href="https://www.facebook.com/Carestrides" rel="noopener nofollow" target="_blank">
                                                <i class="fa-facebook"></i>
                                                &nbsp;  Facebook
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="https://www.linkedin.com/company/carestrides-health-services/" rel="noopener nofollow" target="_blank">
                                                <i class="fa-linkedin"></i>
                                                &nbsp;  LinkedIn
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->                                
                                
                            </div>                            
                        </div>
                        
                    </div>
                    
                    <!-- Footer Text -->
                    <div class="row text-gray">
                        
                        <div class="col-md-4 col-lg-3">
                            <b>© Carestrides 2024.</b>
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2 clearfix">
                            
                          
                            <!-- Back to Top Link -->
                            <div class="local-scroll float-end mt-n20 mt-sm-10">
                                <a href="#top" class="link-to-top gradient">                                
                                    <i class="mi-arrow-up size-24"></i>
                                    <span class="visually-hidden">Scroll to top</span>
                                </a>
                            </div>
                            <!-- End Back to Top Link -->
                            
                        </div>
                        
                    </div>
                    <!-- End Footer Text --> 
                    
                 </div>
                                  
            </footer>
            <!-- End Footer -->
        
        </div>
        <!-- End Page Wrap -->      
        
        <!-- JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>             
        <script src="js/contact-form.js"></script>        
        <script src="js/all.js"></script> 
        <!-- End JS -->       
        
<style>
	.active::after{
		opacity: 0;
	}
	 	.mob {
    display: none !important;
  }
			.desk {
    display: block !important;
  }
.accordion {
 
  cursor: pointer;
  padding: 20px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 19px;
  transition: 0.4s;
}


.panel {
	
  padding: 0 58px;
  display: none;
  font-style: italic;
  overflow: hidden;
}
.panel p{
    font-size: 16px;
}


	@media only screen and (max-width: 600px) {
        	
 .accordion:after {
  content: '\002B';
  color: #fff;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

        .accordion.active:after {
        content: "\2212";
        opacity: 1 !important;
}
  .mob {
    display: block !important;
  }
			.desk {
    display: none !important;
  }
	
		.owl-item .active::after {
    opacity: 0 !important;
}
.owl-item .active:after {
    opacity: 0 !important;
}
.pb-sm-70:after{
	opacity: 0 !important;	
}
		
	}
</style>
		
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
    </body>
</html>
